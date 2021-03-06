<?php

namespace Maximaster\Tools\Twig;


/**
 * Class BitrixExtension. Расширение, которое добавляет глобалки php в шаблоны
 *
 * @package Maximaster\Twig
 */
class PhpGlobalsExtension extends \Twig_Extension
{
    public function getName()
    {
        return 'php_globals_extension';
    }

    public function getGlobals()
    {
        return array(
            '_SERVER'       => $_SERVER,
            '_REQUEST'      => $_REQUEST,
            '_GET'          => $_GET,
            '_POST'         => $_POST,
            '_FILES'        => $_FILES,
            '_SESSION'      => $_SESSION,
            '_COOKIE'       => $_COOKIE,
            '_GLOBALS'      => $GLOBALS,
        );
    }
}