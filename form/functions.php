<?php

/**
 * @return bool
 */
function requestIsPost()
{
    return strtolower($_SERVER['REQUEST_METHOD']) == 'post';
}
//??
/**
 * @return bool
 */
function post ($key)
{
    return isset ($_POST[$key])?$_GET[$key]: null;
}

function get ($key)
{
    // ?? in PHP 7
    return isset($_GET[$key]) ? $_GET[$key] : null;
}


function formIsValid()
{
    return post('username') != ''
    && post('email') != ''
    && post('message') != '';
}
