<?php

function requestIsPost ()
{
    return (bool) $_POST;
}
function formIsValid ()
{
    return post('username') != ''
        && post ('email') != ''
        && post('message') != '';
}
function post ($key)
{
    return isset ($_POST[$key])?$_GET[$key]: null;
}
function redirect ($to) {
    header('Location: '. $to);
    die;
}
function save (array $comment){

}


    if (formIsValid()){
    $comment = $_POST;
    $comment['datetime'] = date('Y-m-d H:i:s');
    $comment = serialize($comment);

    file_put_contents('comments.txt', $comment . PHP_EOL, FILE_APPEND);
        $flashMessage = 'Ok';
        redirect ('/form?flashMessage=' . $flashMessage);

    }
    $flashMessage= 'Fill the fields, please';


?>


<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css" type="text/css"/>

    <title>Contact form</title>
</head>

<body>
 <h1>Comments</h1>
 <b> <?=$flashMessage?></b>
 <form method="post">
     <label for="username">Username</label>
     <input type="text" value="<?= post('username') ?>" name="Username" id="username">
     <br>     <br>
     <label for="email">Email</label>
     <input type="email" value="<?= post('email') ?>" name="Email" id="email">
     <br>      <br>
     <label for="text">Message</label>
     <input type="text" value="<?= post('message') ?>" name="message" id="message">
     <br>      <br>
     <button>Go</button>

<hr>

 </form>

 </body>
</html>

