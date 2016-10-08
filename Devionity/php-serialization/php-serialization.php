<?php
include 'php-serialization.html';

$name = $_POST ['a'];
$email = $_POST ['b'];
$message = $_POST ['c'];

$_POST = array(
    'name' => $name,
    'email' => $email,
    'message' => $message
);

echo '<br>';
echo '<pre>';
echo $_POST = serialize($_POST);
echo '</pre>';

