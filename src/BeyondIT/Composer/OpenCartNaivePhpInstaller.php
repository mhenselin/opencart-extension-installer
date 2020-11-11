<?php

namespace BeyondIT\Composer;

class OpenCartNaivePhpInstaller
{
    public static $registry;

    public function __get($name)
    {
        return self::$registry->get($name);
    }

    public function __set($name, $value)
    {
        return self::$registry->set($name, $value);
    }

    public function __isset($name)
    {
        return !empty(self::$registry->get($name));
    }

    public function install($file) {
        include($file);
    }
}