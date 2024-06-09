<?php
$insert = false;
if (isset($_POST['name'])) {

$server = "localhost";
$username = "root";
$password = "";

$con = mysqli_connect($server,$username,$password);
if (!$con) {
    die("connection to this database failed due to".mysqli_connect_error());
}
//echo "Success connecting to the database";
$name = $_POST['name'];
$age = $_POST['age'];
$gender = $_POST['gender'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$other = $_POST['comment'];
$sql = "INSERT INTO `vrindavan-trip`.`trip` ( `name`, `age`, `gender`, `email`, `phone`, `other`, `dt`) VALUES 
( '$name', '$age', '$gender', '$email', '$phone', '$other', CURRENT_DATE());";
//echo $sql;

if ($con->query($sql)== true) {
   // echo "Successfully Inserted";
   $insert = true;
}
else{
    echo "ERROR: $sql <br> $con->error";
}
$con->close();
}
?>

