<?php
include("Model/student.class.php")
$id=$_REQUEST["idStudent"];

$student= new Student(); //Creamos el objeto!!
$student->setStudent($id);
$student->getStudent();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario de Edicion de estudiantes</title>
</head>
<body>
    <form name="editStudent" method="POST" action="controller/student.controler.php">
        <input type="hidden" name="operation" value="edit"/>
        <label>DNI:</label> <input type="text" name="dni" value="<?=$student->getDni();?>" > <br>   
        <label>Nombre:</label> <input type="text" name="name" value="<?=$student->getName();?>" > <br> 
        <label>Apellido:</label> <input type="text" name="surname" value="<?=$student->geSurname();?>" > <br> 
        <label>Tel&eacute;fono:</label> <input type="text" name="phone" value="<?=$student->getPhone();?>"><br>
        <label>Direcci&oacute;n:</label>    <input type="text" name="address" value="<?=$student->getAddress();?>"><br>
        <label>E-mail:</label>  <input type="email" name="email" value="<?=$student->getEmail();?>"><br>
        <label>Fecha nac:</label>   <input type="date" name="birthdate" value="<?=$student->getBirthdate();?>"><br>
        <label>Contrase&ntilde;a:</label>   <input type="password" name="password" value="<?=$student->getPassword();?>"><br>
        <label>Colegio:</label> <input type="text" name="school" value="<?=$student->getSchool();?>"><br>
        
        <button type="submit" name="aceptar">Aceptar</button>
        <button type="reset" name="cancelar">Cancelar</button>
    </form>
</body>
</html>