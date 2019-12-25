<?php
include("connMySQL.php");
$Name = $_POST['Name'];
$Password = $_POST['Password'];
$Address = $_POST['Address'];
$Email = $_POST['Email'];

if(($Name!=NULL) && ($Password!=NULL) && ($Address!=NULL) && ($Email!=NULL))
{
   $sql ="insert into account(Name, Password, Address , Email ) values ('$Name', '$Password', '$Address','$Email')";              
   $result = $conn->query($sql);
    echo "<meta http-equiv='refresh' content='0; 
url=cafe.html#log in'>";
    echo 'Registration succeed';
        }
else{  
echo 'No account and password';
echo "<meta http-equiv='refresh' content='0; 
url=cafe.html#register'>";
}
?>
