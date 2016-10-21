<?php
print_r($_POST);
require 'functions.php';
$flashMessage = null;

// if form submitted
if (requestIsPost ()) {

    // if data is ok

    if (formIsValid ()) {
        $comment = $_POST;
        $comment['datetime'] = date('Y-m-d H:i:s');
        $comment = serialize($comment);

        // save comment
        file_put_contents('comments.txt', $comment . PHP_EOL, FILE_APPEND);
}

else {
    $flashMessage = 'Fill the fields, please';
}
}
?>

<!doctype html>
<html>
<head>
    <title>Comments</title>
</head>
<body>
<h1>Comments</h1>

<b> <?=$flashMessage?></b>
<form method="post">
    <label for="username"> Username</label>
    <input type="text" name="username" id="username">
    <br>     <br>

    <label for="email"> Email</label>
    <input type="email" name="email" id="email">
    <br>     <br>

    <label for="message"> Message</label>
    <textarea name="message" id="message"> </textarea>
    <br>     <br>


    <button>Go</button>

</form>
<hr>

</body>
</html>