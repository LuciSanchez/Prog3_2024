<?php
include("database.class.php");

class Student{
    private $idStudent;
    private $dni=null;
    private $surname=null;
    private $name=null;
    private $birthdate=null;
    private $phone=null;
    private $address=null;
    private $email=null;
    private $password=null;
    private $school=null;
    private $conexion=null;
    //geter y seter

    //public function __construct($dni, $surname, $name, $birthdate, $phone, $address, $email, $password, $school, ){
        //$this->dni=$dni;
        //$this->surname=$surname;
        //$this->name=$name;
        //$this->birthdate=$birthdate;
        //$this->phone=$phone;
        //$this->address=$address;
        //$this->email=$email;
       // $this->password=$password;
        //$this->school=$school;
    //}

    public function addStudent(){
    //crear la consulta
    $sql="INSERT INTO students (dni, surname, name, birthdate, phone, address, email, password, school) VALUES 
    (".$this->dni.",'".$this->surname."', '".$this->name."', '".$this->birthdate."', '".$this->phone."', '".$this->address."', '".$this->email."', '".$this->password."', '".$this->school."',)";

    $this->conexion=new Database();
    $result= $this->conexion->query($sql);
    $this->conexion->close();
    return $result;
    }

    public function editStudent(){
        $sql="UPDATE students SET dni=".$this->dni.", surname='".$this->surname."', name='".$this->name."', birthdate='".$this->birthdate."', phone='".$this->phone."', address='".$this->address."', email='".$this->email."', password='".$this->password."', school='".$this->school."' WHERE idStudent=".$this->idStudents;
       
    
        $this->conexion=new Database();
        $result= $this->conexion->query($sql);
        $this->conexion->close();
        return $result;
        }

    public function deleteStudent(){
         $sql="DELETE FROM students WHERE idStudent=".$this->idStudent;
    
         $this->conexion=new Database();
         $result= $this->conexion->query($sql);
         $this->conexion->close();
    }

    public function getStudent(){
         $sql="SELECT * FROM students WHERE idStudent=".$this->idStudent;
    
         $this->conexion=new Database();
         $result= $this->conexion->query($sql);
         $this->conexion->close();
         if($result){
            if($row=$result->fetch_assoc()){
                $this->dni=$row["dni"];
                $this->surname=$row["surname"];
                $this->name=$row["name"];
                $this->birthdate=$row["birthdate"];
                $this->phone=$row["phone"];
                $this->address=$row["address"];
                $this->email=$row["email"];
                $this->password=$row["password"];
                $this->school=$row["school"];
                return true;
            }  
         }
         return false;
    }

    public function getAllStudent(){
       $sql="SELECT*FROM students";
       $this->conexion=new Database();
       $result= $this->conexion->query($sql);
       $allStudents=null;
       if ($result){
          while ($row=$result->fetch_asooc()){
            $allStudent[]=$row;
         }
        }
        
        return $allStudent;
    }

    public function getIdStudent(){
        return $this->idStudent;
    }
    public function setIdStudent (){
        $this->idStudent=$idStudent;
    }
    public function getdni(){
        return $this->dni;
        
    }

    public function setdni($dni){
        $this->dni=$dni;
    }

    public function getsurname(){
        return $this->surname;
        
    }

    public function setsurname($surname){
        $this->surname=$surname;
    }

    public function getname(){
        return $this->name;
        
    }

    public function setname($name){
        $this->name=$name;
    }

    public function getbirthdate(){
        return $this->birthdate;
        
    }

    public function setbirthdate($birthdate){
        $this->birthdate=$birthdate;
    }

    public function getphone(){
        return $this->phone;
        
    }

    public function setphone($phone){
        $this->phone=$phone;
    }

    public function getaddress(){
        return $this->address;
        
    }

    public function setaddress($address){
        $this->address=$address;
    }

    public function getemail(){
        return $this->email;
        
    }

    public function setemail($email){
        $this->email=$email;
    }

    public function getpassword(){
        return $this->password;
        
    }

    public function setpassword($password){
        $this->password=$password;
    }

    public function getschool(){
        return $this->school;
        
    }

    public function setschool($school){
        $this->school=$school;
    }
}
?>