<?php
session_start();
include("connMySQL.php");
$Amount = $_POST['Amount'];
$Product = $_POST['Product'];
$Ship = $_POST['Ship'];
$Email = $_SESSION['Email'];



if(($Amount>0))
{
   $sql ="insert into purchase(Email, Product, Amount, ID, Ship) values ('$Email', '$Product', '$Amount','', '$Ship')";              
   $result = $conn->query($sql);
   echo "<meta http-equiv='refresh' content='0; 
url=cafelogin.html#menu'>";
   }
else
{
echo "<meta http-equiv='refresh' content='0; 
url=comfirm4.php'>";
}
?>
