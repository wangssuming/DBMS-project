<!DOCTYPE html>
<html>
<?php
session_start();
include('connMySQL.php');
$member = $_SESSION['Email'];
$ID = $_POST['ID'];
$Email = $_POST['Email'];
$Amount = $_POST['Amount'];


if($member == $Email && ($Amount>0) && $ID != NULL)
{
    $sql = "SELECT * FROM purchase WHERE Email = '$member' and ID = '$ID'"; 
    $result = mysqli_query($conn, $sql) or die("Error");
    $row = mysqli_fetch_array ($result);
    echo $row['Ship'];
    if ($row['Ship'] != NULL)
    {
        if ($row['Ship'] == 'not shipped')
        {
            $sql = "UPDATE purchase SET Amount = '$Amount' WHERE Email = '$member' AND ID = '$ID'";
            echo "$sql";
            if(mysqli_query($conn,$sql))
            {
                echo "<meta http-equiv='refresh' content='0; 
url=update.php'>";
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
url=comfirm.php'>";
        }
    }
    else
    {
        echo "<meta http-equiv='refresh' content='0; 
url=comfirm2.php'>";
    }
}
else
{
    echo "<meta http-equiv='refresh' content='0; 
url=comfirm2.php'>";
}
?>

<html>


