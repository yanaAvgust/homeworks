

<?php
include 'php-predefined-variables.html';

$name = $_POST ['a'];
$email = $_POST ['b'];
$phone = $_POST ['c'];

$_POST = array(
    'name' => $name,
    'email' => $email,
    'phone' => $phone
);

echo '<br>';
echo '<pre>';
print_r($_POST);
echo '</pre>';


