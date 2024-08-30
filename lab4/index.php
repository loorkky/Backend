<?php
require_once 'D:\WampServer\www\lab4\autoload.php';

use Models\Human;
use Models\Student;
use Models\Programmer;

$student = new Student(180, 75, 25, 'Київський національний університет', 2);
echo $student;
echo "<br>";

$student->cleanRoom();
$student->cleanKitchen();
echo "<br>";

$programmer = new Programmer(175, 70, 30, ['PHP', 'JavaScript'], 5);
echo $programmer;
echo "<br>";

$programmer->cleanRoom();
$programmer->cleanKitchen();
echo "<br>";


