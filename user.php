
<body bgcolor="#708090">

<form>
<style>
  table {
   border-collapse: collapse;
   width: 100%;
   color: #00167a;
   font-family: monospace;
   font-size: 25px;
   text-align: left;
     } 
  th {
   background-color: #00167a;
   color: white;
    }
  tr:nth-child(even) {background-color: #858ac4}
 </style>

 <a href="adminhome.php" > <h2 align="center"> My Home Page</h2></a>
 <a href="../logout.php" > <h2 align="right"> Logout</h2></a>

<fieldset>
    <legend>
        <h2><b>Registered Customer List</b> </h2>
        </legend>
    
<br/>
<table width="100%" cellspacing="0" border="1" cellpadding="3">
    <tr>
        <th align="left">First name</th>
        <th align="left">Last name</th>
        <th align="center">Email </th>
        <th align="center">Phone</th>
       
    </tr>






<?php
error_reporting(0);
session_start();


//require "adminlogo.php";

  if($_SESSION['adminuser']!="valid") 

  {
       header("location: ../user_login.php");
   }

   else
   {


//require "adminhome.php";
$con=mysqli_connect("localhost","root","","test");
 if ($con->connect_error) {
    die("Connection failed: " . $conn->connect_error);
    } 


$type="customers";
$str="SELECT firstname,lastname,email,phone from registrationtable WHERE type='customers'";
$result = $con->query($str);

if ($result -> num_rows > 0) {

 
   

    while($row = $result->fetch_assoc()) {
    echo "<tr><td>" . $row["firstname"]. "</td><td>" . $row["lastname"]. "</td><td>"  . $row["email"] . "</td><td>"
    . $row["phone"]. "</td>  </tr>";
    }
    echo "</table>";
    }




     else { echo "0 results"; }






    $conn->close();



  ?>
  </table>

    
   

</fieldset>
</form>
 </body>

  

  <?php


  } 

   ?>


  

   


