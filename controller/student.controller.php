<?php
include("model/student.class.php");

$student= new Student ()

$operacion=$_REQUEST["operacion"];

if($operacion=="add"){
    $student->setDni($_REQUEST["dni"]);
    $student->setSurname($_REQUEST["surname"]);
    $student->setName($_REQUEST["name"]);
    $student->setBirthdate($_REQUEST["birthdate"]);
    $student->setPhone($_REQUEST["phone"]);
    $student->setAddress($_REQUEST["address"]);
    $student->setEmail($_REQUEST["email"]);
    $student->setPassword($_REQUEST["password"]);
    $student->setSchool($_REQUEST["school"]);
    $student->addStudent();

}else if($operacion=="update"){
    $student->setIdStudent($_REQUEST["IdStudent"]);
    $student->setDni($_REQUEST["dni"]);
    $student->setSurname($_REQUEST["surname"]);
    $student->setName($_REQUEST["name"]);
    $student->setBirthdate($_REQUEST["birthdate"]);
    $student->setPhone($_REQUEST["phone"]);
    $student->setAddress($_REQUEST["address"]);
    $student->setEmail($_REQUEST["email"]);
    $student->setPassword($_REQUEST["password"]);
    $student->setSchool($_REQUEST["school"]);
    $student->editStudent();

}else if($operacion=="delete"){
    $student-> setDni($_REQUEST["dni"]);
    $student-> deleteStudent();
    
}
?>