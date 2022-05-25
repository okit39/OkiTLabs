<?php
$name = $_POST['userName'];
$surname = $_POST['userSurname'];
$salary = $_POST['userSalary'];
$status = $_POST['userStatus'];

array_pop($_POST);
if (!isset($name) || !isset($surname) || !isset($salary) || !isset($status)) {
    echo "error";
    return;
} else {
    $_SESSION = $_POST;
}

foreach ($_SESSION as $key => $value) {
    echo '<ul>' . '<li>' . "your {$key} is {$value}" . '</ul>' . '<br>';
}
