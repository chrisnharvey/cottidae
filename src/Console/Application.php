<?php

namespace GhSculpin\Console;

use Symfony\Component\Console\Application as BaseApplication;

class Application extends BaseApplication
{
    public function __construct()
    {
        parent::__construct('GH-Sculpin', 0.1);
    }
}