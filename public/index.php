<!DOCTYPE html>
<html lang="en">
<head>
    <title>Notes</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

<?php
require "../scripts/main.php";

var_dump($_POST);

$logged = false;
?>

<h2>User</h2>

<?php if(!$logged){
    echo "
    <b>Register form</b>
    <form method='post'>
        Enter your login and password <br>
        <input name='login' type='text'>
        <input name='pass' type='password'>
        <input type='submit'>
    </form>
    ";
} else
    echo "
    <p>You are logged</p>
    "
    ?>

<h2>Notes</h2>



</body>
</html>