<?php

namespace ThreeSidedCube\LaravelRedoc\Http\Controllers;

use Illuminate\Contracts\Filesystem\FileNotFoundException;
use Illuminate\Contracts\View\View;
use Illuminate\Routing\Controller;
use ThreeSidedCube\LaravelRedoc\Documentation;

class DocumentationController extends Controller
{
    /**
     * Show the documentation using Redoc.
     *
     * @param  Documentation  $docs
     * @param  string  $version
     * @return View
     *
     * @throws FileNotFoundException
     */
    public function __invoke(Documentation $docs, string $version = 'openapi'): View
    {
        if (! $docs->get($version)) {
            abort(404);
        }

        return view('redoc::docs', [
            'url' => route('redoc.definition', [$version]),
        ]);
    }
}
