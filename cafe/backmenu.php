<?php
session_start();
include('connMySQL.php');
$Email = $_SESSION['Email'];
if($Email!=NULL)
{
echo 'check';
echo "<meta http-equiv='refresh' content='0; 
url=cafelogin.html#menu'>";
}
?>