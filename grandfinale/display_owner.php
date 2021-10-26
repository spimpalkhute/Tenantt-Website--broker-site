<!DOCTYPE html>
<html style="font-size: 16px;">
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <meta name="keywords" content="Broker Control Page">
    <meta name="description" content="">
    <meta name="page_type" content="np-template-header-footer-from-plugin">
    <title>Broker Control Page</title>
    <link rel="stylesheet" href="nicepage.css" media="screen">
<link rel="stylesheet" href="Sign-up-as-Owner.css" media="screen">
    <script class="u-script" type="text/javascript" src="jquery.js" defer=""></script>
    <script class="u-script" type="text/javascript" src="nicepage.js" defer=""></script>
    <link id="u-theme-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i|Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i">
    
    
    <script type="application/ld+json">{
		"@context": "http://schema.org",
		"@type": "Organization",
		"name": "Site1",
		"logo": "images/LOGO.png"
}</script>
    <meta name="theme-color" content="#478ac9">
    <meta property="og:title" content="Broker Control Page">
    <meta property="og:description" content="">
    <meta property="og:type" content="website">
  </head>
  <body class="u-body"><header class="u-clearfix u-header u-header" id="sec-1ea1"><div class="u-clearfix u-sheet u-sheet-1">
   
        <a href="Home.html" data-page-id="45674916" class="u-image u-logo u-image-1" data-image-width="541" data-image-height="343" title="Home">
          <img src="images/LOGO.png" class="u-logo-image u-logo-image-1">
        </a>
       <h1 align = "center">Owner Database</h1>
       <table border="1" align="center">
           <tr>
               <th>Owner id</th>
               <th>Name</th>
               <th>Email id</th>
               <th>Phone</th>
               <th>Age</th>
               <th>Status</th>
               <th>Address</th>
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
$query = "SELECT * FROM owner";
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
        <td>".$resullt['own_id']."</td>
        <td>".$resullt['own_name']."</td>
        <td>".$resullt['own_email']."</td>
        <td>".$resullt['own_phone']."</td>
        <td>".$resullt['own_age']."</td>
        <td>".$resullt['own_status']."</td>
        <td>".$resullt['Address']."</td>
       ";
       
    }
   // echo "Table has  records";
}
else
{
    echo"Table has no records";
}

?>

</table>
</body>
</html>




