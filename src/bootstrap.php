<?php

namespace HeroProject\Functions;

if (!function_exists(' HeroProject\Functions\echoIt')) {
    /**
     * @param $it
     */
    function echoThis($it)
    {
        echo $it;
        echo PHP_EOL;
    }
}
