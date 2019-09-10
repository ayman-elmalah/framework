<?php

namespace Phplite\Bootstrap;

use Phplite\Exceptions\Whoops;
use Phplite\File\File;
use Phplite\Http\Request;
use Phplite\Http\Response;
use Phplite\Router\Route;
use Phplite\Session\Session;

class App {
    /**
     * App constructor
     *
     * @return void
     */
    private function __construct() {}

    /**
     * Run the application
     *
     * @return void
     */
    public static function run() {
        // Register whoops
        Whoops::handle();

        // Start session
        Session::start();

        // Handle the request
        Request::handle();

        // Require all routes directory
        File::require_directory('routes');

        // Handle the route
        $data = Route::handle();

        // Output the response
        Response::output($data);
    }
}