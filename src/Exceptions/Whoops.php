<?php

namespace Phplite\Exceptions;

class Whoops {
    /**
     * Whoops constructor
     *
     */
    private function __construct() {}

    /**
     * Handle th whhoops error
     *
     * @return void
     */
    public static function handle() {
        $whoops = new \Whoops\Run;
        $whoops->prependHandler(new \Whoops\Handler\PrettyPageHandler);
        $whoops->register();
    }
}