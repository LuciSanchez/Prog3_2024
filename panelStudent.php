<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Panel Student</title>
    <link rel="stylesheet" href="css/alertify.css" />
    <link rel="stylesheet" href="css/themes/default.css" />
</head>
<body>
    <h1>Panel de estudiantes</h1>
    <table>
        <thead>
            <tr> 
                <th>Id Estudiante</th>
                <th>Apellido</th>
                <th>Nombre</th>
                <th>DNI</th>
                <th>Fecha de nac.</th>
                <th>Tel&eacute;fono</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            <?php
            include("model/student.class.php");
            $student=new Student ();
            $allStudents= $student->getAllStudent();
            if($allStudent){
              foreach($allStudent as $data){
              print "<tr>";
              print "<td>". $data["idStudent"]."</td>";
              print "<td>". $data["surname"]."</td>";
              print "<td>". $data["name"]."</td>";
              print "<td>". $data["dni"]."</td>";
              print "<td>". $data["birthdate"]."</td>";
              print "<td>". $data["phone"]."</td>";
              print "<td> <input type='button' name='editar' vlaue='Editar' onclick=\"'location.href('formEditStudent.php?idStudent=". $data["idStudent"]."');\"/>";
              print "<input type='button' name='eliminar' vlaue='Eliminar' onclick='askDeleteStudent(".$data["idStudent"].");'/></td>";
              print "</tr>" ;
              }
            } else(){
                print"No existen estudiantes cargados";
            }
            ?>
        </tbody>
    </table>
</body>
<script src="js/jquery.js"></script>
<script src="js/alertify.js"></script>
<scirpt src="js/funciones.js"></script>
</html>