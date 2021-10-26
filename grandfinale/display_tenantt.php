<html>
    <head>
        <title>Display records</title>
   </head>    
   <body>
       <h1 align = "center">Tenant Database</h1>
       <table border="1" align="center">
           <tr>
               <th>Owner id</th>
               <th>Name</th>
               <th>Email id</th>
               <th>Phone</th>
               <th>Age</th>
               <th>Status</th>
               
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
$query = "SELECT * FROM tenantt";
$data = mysqli_query($conn,$query);
$total= mysqli_num_rows($data);

//echo "$total";

if ($total !=0)
{
    $resullt=mysqli_fetch_assoc($data);
    while($resullt=mysqli_fetch_assoc($data))
    {
        echo "
        <tr>
        <td>".$resullt['ten_id']."</td>
        <td>".$resullt['ten_name']."</td>
        <td>".$resullt['ten_email']."</td>
        <td>".$resullt['ten_phone']."</td>
        <td>".$resullt['ten_age']."</td>
        <td>".$resullt['ten_status']."</td>
        
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
</body>
</html>
