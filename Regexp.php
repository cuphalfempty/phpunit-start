<?php
class Regexp {

    public static function parseUrl($url) {
        $pattern = '/^(https?:\/\/)?(www\.)?([^\/]*)(\/?)$/i';
        $replace = '$3';
        return preg_replace($pattern, $replace, $url);
    }

}

