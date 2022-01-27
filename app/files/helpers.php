<?php

use Illuminate\Support\HtmlString;

if (!function_exists('swal')) {
    function swal($mensaje){
        return new HtmlString($mensaje);
    }
}
if (!function_exists('active')) {
    function active($routeName){
        return request()->routeIs($routeName) ? 'active' : '';
    }
}