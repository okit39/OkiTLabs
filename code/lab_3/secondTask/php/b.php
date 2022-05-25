<?php
$name = $_POST['userName'];
$surname = $_POST['userSurname'];
$age = $_POST['userAge'];
if (isset($name, $surname, $age)) {
    $_SESSION["textName"] = $name;
    $_SESSION["textSurname"] = $surname;
    $_SESSION["textAge"] = $age;
}
echo nl2br("About usr:\n");
echo nl2br("{$_SESSION["textName"]} {$_SESSION["textSurname"]}, {$_SESSION["textAge"]} y.o\n");

