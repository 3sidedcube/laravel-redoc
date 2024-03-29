<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Path
    |--------------------------------------------------------------------------
    |
    | This path will be used to access and display your OpenAPI definition. By
    | default, it will render the default OpenAPI definition (openapi.json).
    |
    | However, if you would like to support multiple OpenAPI definitions, you
    | can use the {version} parameter. This version should then match the name
    | of the OpenAPI definition i.e. v1.json.
    |
    */

    'path' => 'docs/api',

    /*
    |--------------------------------------------------------------------------
    | Directory
    |--------------------------------------------------------------------------
    |
    | The name of the directory where your OpenAPI definitions are stored.
    |
    */

    'directory' => 'openapi',


    /*
    |--------------------------------------------------------------------------
    | Middleware
    |--------------------------------------------------------------------------
    |
    | Apply these middlewares to your docs.
    |
    */

    'middleware' => [
        // 'auth',
    ],

    /*
    |--------------------------------------------------------------------------
    | Variables
    |--------------------------------------------------------------------------
    |
    | You can automatically replace variables in your OpenAPI definitions by
    | adding a key value pair to the array below. This will replace any
    | instances of :key with the given value.
    |
    */

    'variables' => [],

];
