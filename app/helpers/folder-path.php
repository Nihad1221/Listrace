<?php

// pages.subscribe
function view($path)
{
    $path = str_replace('.', '/', $path);

    return DOMAIN . '/views/' . $path . '.php';
}



function _include($path)
{
    $path = str_replace('.', '/', $path);

    return $path . '.php';
}
