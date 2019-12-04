<?php

function route_class()
{
    return str_replace('.', '-', Route::currentRouteName());
}

function testex()
{
    var_dump(extension_loaded('redis'));
}