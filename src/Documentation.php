<?php

namespace ThreeSidedCube\LaravelRedoc;

use Illuminate\Contracts\Filesystem\FileNotFoundException;
use Illuminate\Filesystem\Filesystem;

class Documentation
{
    /**
     * Create a new documentation instance.
     *
     * @param  Filesystem  $files
     * @return void
     */
    public function __construct(protected Filesystem $files)
    {
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

        // TODO: replace any variables

        return $this->files->get($path);
    }
}
