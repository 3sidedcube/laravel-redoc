<?php

namespace ThreeSidedCube\LaravelRedoc\Http\Controllers;

use Illuminate\Contracts\Filesystem\FileNotFoundException;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use ThreeSidedCube\LaravelRedoc\Documentation;

class DefinitionController extends Controller
{
    /**
     * Get the OpenAPI definition.
     *
     * @param  Documentation  $docs
     * @param  string  $version
     * @return Response
     *
     * @throws FileNotFoundException
     */
    public function __invoke(Documentation $docs, string $version = 'openapi'): Response
    {
        $contents = $docs->get($version);

        if (! $contents) {
            abort(404);
        }

        return response($contents)->header('Content-Type', 'application/json');
    }
}
