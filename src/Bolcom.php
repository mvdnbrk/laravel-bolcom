<?php

namespace Mvdnbrk\Laravel\Bolcom\Endpoints;

class Bolcom
{
    protected Authentication $auth;

    public function __construct()
    {
        $this->auth = new Authentication;
    }
}
