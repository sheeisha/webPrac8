<?php

$host="localhost";
$user="root";
$password="";
$database="syit31db";
$con = mysqli_connect($host,$user,$password,$database);

if($con)
{
echo "Connection Successful"; 
}
else
{
die("Connection failed: ".mysqli_connect_error());
}

$id=$_POST['empid'];
$name=$_POST['empname'];
$dept=$_POST['empdept'];
$pos=$_POST['emppos'];


$sql="INSERT INTO emp (emp_id, emp_name, emp_dept, emp_position) VALUES ('$id','$name','$dept','$pos')";

if(mysqli_query($con,$sql))
{
    echo "data inserted";
    header("Location:retrieve.php");
    exit;

}
mysqli_close($con);
?>