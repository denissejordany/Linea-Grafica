<?php

class Routes {

    // Cambia aquí si tu proyecto está en una carpeta
    private static $base = '/weblinea/';

    public static function base() {
        return self::$base;
    }

    public static function css($file = '') {
        return self::$base . "public/assets/css/" . $file;
    }

    public static function js($file = '') {
        return self::$base . "public/assets/js/" . $file;
    }

    public static function img($file = '') {
        return self::$base . "public/assets/img/" . $file;
    }

    public static function asset($path = '') {
        return self::$base . "public/assets/" . $path;
    }

    public static function url($route = '') {
        return self::$base . "?route=" . $route;
    }
}
