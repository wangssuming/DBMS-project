<!DOCTYPE html>
<html>
<?php
session_start();
include('connMySQL.php');
$member = $_SESSION['Email'];
$ID = $_POST['ID'];
$Email = $_POST['Email'];


if($member == $Email && $ID != NULL)
{
    $sql = "SELECT * FROM purchase WHERE Email = '$member' and ID = '$ID'"; 
    $result = mysqli_query($conn, $sql) or die("Error");
    $row = mysqli_fetch_array ($result);
    echo $row['Ship'];
	if ($row['Ship'] != NULL)
	{
        if ($row['Ship'] == 'not shipped')
        {
            $sql = "DELETE FROM purchase WHERE ID = '$ID'";
            if(mysqli_query($conn,$sql))
            {
                echo "<meta http-equiv='refresh' content='0; 
url=delete.php'>";
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


