<!DOCTYPE html>
<html>
<?php
session_start();
include('connMySQL.php');
$member = $_SESSION['Email'];
$Password = $_SESSION['Password'];
$oldPassword = $_POST['oldPassword'];
$newPassword = $_POST['newPassword'];
$Email = $_POST['Email'];
$Name = $_POST['Name'];
$Address = $_POST['Address'];


if($member == $Email && $Password == $oldPassword && $newPassword != NULL && $Name != NULL && $Address != NULL)
{
            $sql = "UPDATE account SET Password = '$newPassword', Name = '$Name', Address = '$Address' WHERE Email = '$member'";
            echo "$sql";
            if(mysqli_query($conn,$sql))
            {
                $_SESSION['Password'] = $newPassword;
                echo "<meta http-equiv='refresh' content='0; 
url=cafelogin.html#orders'>";
            }
            else
            {
                echo "<meta http-equiv='refresh' content='0; 
url=comfirm3.php'>";
            }       
}
else
{
    echo "<meta http-equiv='refresh' content='0; 
url=comfirm5.php'>";
}
?>

<html>


