<?php
declare(strict_type = 1);
include 'autoloader.php';

$operator = $_POST['operator'];
$num1 = (int) $_POST['num1'];
$num2 = (int) $_POST['num2'];

$calc = new Calc($operator, $num1, $num2);

try {
    echo $calc->calculator();
} catch (Exception $e) {
    echo 'Error! :' . $e->getMessage();
}

?>