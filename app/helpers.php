<?php

/**
 * Write code on Method
 *
 * @return response()
 */

if (! function_exists('enUrl')) { // Encode by replacing whitespaces with it's encoding character
    function enUrl($url)
    {
        return str_replace(" ","%20",$url);
    }
}