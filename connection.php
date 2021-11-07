<?php



$ThingsToDo = $_POST['thingstodo'];
$TasksBy = $_POST['tasksby'];
$Participants = $_POST['participants'];
$Observer = $_POST['observer'];
$Deadline = $_POST['deadnline'];


$servername="localhost";
$username="root";
$password="";
$dbname="rishi";

$conn = mysqli_connect($servername,$username, $password, $dbname );
if($conn)
{
   // echo"Connection OK";
}
else
{
        echo"connection failed";   
}

$query=mysqli_query($conn,"INSERT INTO `add` (`thingstodo`, `tasksby`, `participants`, `observer`, `deadnline`) VALUES ('$ThingsToDo', '$TasksBy', '$Participants', '$Observer', '$Deadline');");

if($query)
{
  echo"Task Added Successfully ";
}
else
{
  echo"failed to insert";
} 
?>