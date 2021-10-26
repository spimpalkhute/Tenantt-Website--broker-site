<html>
    <head>
        <title>Delete records</title>
   </head>    
   <body>
       <h1 >Owner deletion portal </h1>
       <table border="1" cellspacing ="6">
           <tr>
               <th>Owner id</th>
               <th>Name</th>
               <th>Email id</th>
               <th>Phone</th>
               <th>Age</th>
               <th>Status</th>
               <th>Address</th>
               <th colspan="2" align = "center">Operation</th>
          </tr>






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
$query = "SELECT * FROM owner";
$data = mysqli_query($conn,$query);
$total= mysqli_num_rows($data);
$resullt=mysqli_fetch_assoc($data);

//echo "$total";

if ($total !=0)
{
    $resullt=mysqli_fetch_assoc($data);
    while($resullt=mysqli_fetch_assoc($data))
    {
        echo "
        <tr>
        <td>".$resullt['own_id']."</td>
        <td>".$resullt['own_name']."</td>
        <td>".$resullt['own_email']."</td>
        <td>".$resullt['own_phone']."</td>
        <td>".$resullt['own_age']."</td>
        <td>".$resullt['own_status']."</td>
        <td>".$resullt['Address']."</td>
        
       
        <td> <a href='delete.php?name=$resullt[own_name] '> Delete </td>
        
       ";
       
       
    }
   // echo "Table has 8 records";
}
else
{
    echo"Table has no records";
}

?>

</table>


<script>
    function checkdelete()
    {
       return Confirm ('Are you sure you want to dlete this selection");
    }

    
</body>
</html>
