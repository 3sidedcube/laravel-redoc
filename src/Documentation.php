<?php

namespace ThreeSidedCube\LaravelRedoc;

use Illuminate\Contracts\Filesystem\FileNotFoundException;
use Illuminate\Filesystem\Filesystem;
use Illuminate\Support\Str;

class Documentation
{
    /**
     * The instance of the Filesystem.
     *
     * @var Filesystem
     */
    protected Filesystem $files;

    /**
     * Create a new documentation instance.
     *
     * @param  Filesystem  $files
     * @return void
     */
    public function __construct(Filesystem $files)
    {
        $this->files = $files;
    }

    /**
     * Get the OpenAPI documentation.
     *
     * @param  string  $filename
     * @return string|null
     *
     * @throws FileNotFoundException
     */
    public function get(string $filename): ?string
    {
        $path = base_path(config('redoc.directory') . '/' . $filename . '.json');

        if (! $this->files->exists($path)) {
            return null;
        }

        $contents = $this->files->get($path);

        foreach (config('redoc.variables') as $key => $value) {
            $contents = str_replace(':' . Str::slug($key, '_'), $value, $contents);
        }

        return $contents;
    }
}
