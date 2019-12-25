<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inconsolata">
    <title>Pages</title>
    <style>
        body{
        background-size: 1000px 740px;
        background-repeat: no-repeat;
        background-position: 50% 0%;
        background-color:PapayaWhip;
        background-image: url('./images/images/coffee7.jpg');
        }   
        b .special{ 
        color:#0000FF; 
        }
        a{
        color:blue;
        }
        table, th, td {
            border: 3px solid black;
            border-collapse: collapse;
            border-color:black;
            border-style:solid;
	font-size: 20px;
        }
        table {
            margin-left:auto; 
            margin-right:auto;
        }
    </style>
</head>
<BODY>

<div class="w3-container" id="BACK" style="padding-bottom:32px;">
<form action="back.php" method="post" >
<p><button class="w3-button w3-black" type="submit">BACK</button></p>
</form>
<div class="w3-container" id="ORDER" style="padding-bottom:32px;">
<div class="w3-content" style="max-width:700px">
    <h5 class="w3-center w3-padding-48"><span class="w3-tag w3-wide">ORDER</span></h5>
</div>
</div>
</div>
<?php session_start();  
?>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php
include 'connMySQL.php';
?>
<?php
        $member = $_SESSION['Email'];
        $sql = "SELECT * FROM purchase WHERE Email = '$member' ORDER BY 'ID'"; 
        $result = mysqli_query($conn, $sql) or die("Error");

        $data_nums = mysqli_num_rows($result); 
        $per = 5; 
        $pages = ceil($data_nums/$per);
        if (!isset($_GET["page"])){ 
            $page=1; 
        } else {
            $page = intval($_GET["page"]); 
        }
        $start = ($page-1)*$per; 
        $result = mysqli_query($conn, $sql.' LIMIT '.$start.', '.$per) or die("Error");
?>

    <table>
            
        <tr>
            <th>Product</th>
            <th>Amount</th>
            <th>ID</th>
            <th>Status</th>
        </tr>

    <?php
        
        while ($row = mysqli_fetch_array ($result))
        {
            $Product = $row['Product'];
            $Amount = $row['Amount'];
	$ID = $row['ID'];
	$Ship = $row['Ship'];
        
            echo '
            <tr>
                <td>'. $Product .'</td>
                <td>'. $Amount .'</td>
	    <td>'. $ID .'</td>
 	    <td>'. $Ship .'</td>
            </tr>';
        }
    ?>
    
    </table>
    <br/>    
    <center>
    <?php
                echo "<br /><a href=?page=1>Main page</a> ";
        
        for( $i=1 ; $i<=$pages ; $i++ ) {
            if ( $page-5 < $i && $i < $page+5 ) {
                echo "<a href=?page=".$i.">".$i."</a> ";
            }
        } 
        echo "<a href=?page=".$pages.">Last page</a>¡A". $page ."page/total". $pages ."page<br/>";

        echo 'total '.$data_nums.' orders';
    ?>
    </center>  
</body>
</html>

