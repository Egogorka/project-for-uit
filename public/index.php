<!DOCTYPE html>
<html lang="en">
<head>
    <title>Notes</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

<?php
require "../scripts/main.php";
echo "<br>index.php<br>";
var_dump($bundle);
?>


<h2>User</h2>

<?php $container[\application\view\AuthView::class]->render($bundle); ?>

<h2>Notes</h2>

<form method='post'>
    <input name='header' type='text'> <br>
    <textarea class="text-field" name="text"></textarea> <br>
    <input type='submit'>
</form>




</body>
</html>