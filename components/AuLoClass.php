<?php
function __autoload($class_name)
{
    $array_paths = array(
        '/models/',
        '/components/',
        '/controllers/',
    );

    foreach ($array_paths as $ways) {
        $ways = ROOT . $ways .$class_name.'.php';
        if (is_file($ways)) {
            include_once $ways;
        }
    }

}
