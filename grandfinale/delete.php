<?php

$servername="localhost";
$username="root";
$password="";
$db_name="housedbms";

 $conn = mysqli_connect($servername,$username,$password,$db_name);

if(!$conn)
{
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
error_reporting(0);
$own_name=$_GET['name'];
$query="DELETE FROM owner WHERE own_name='$own_name'";

$data=mysqli_query($conn,$query);

if($data)
{
    echo "<script>alert('The Record of the desired owner has been deleted from ther database')</script>";
   

}
else
{
    echo"Could not perform the deseried operation";
}