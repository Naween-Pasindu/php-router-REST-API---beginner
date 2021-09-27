<?php

class Autoloader {

protected static $_extension = '.php';
protected static $_dirSeparator = '/';
protected static $_nameSeparator = '_';

public static function init($autoloader = __CLASS__) {
    return spl_autoload_register($autoloader . '::load');
}

public static function load($class) {
    $file = self::generateFileName($class);

    if (file_exists($file)) {
        require_once($file);
    } else {
        throw new Exception('Class ' . $class . ' not exists');
    }
}

protected static function generateFileName($class) {
    $file = str_replace(
        self::$_nameSeparator,
        self::$_dirSeparator,
        $class
    );
    return $file . self::$_extension;
}

}