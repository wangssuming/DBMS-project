<?php
            session_start();
	include ("connMySQL.php");
	$Email = $_POST["Email"];
	$Password = $_POST["Password"];
	if($Email!=NULL&&$Password!=NULL)
{ 		
		$sql ="SELECT Email,Password FROM account WHERE Email='$Email'"; 		
		$result = $conn->query($sql);	
        if($result->num_rows > 0){
            while($row = $result->fetch_assoc()){
				if($row["Email"] == $Email && $row["Password"] == $Password)
				{
                                                           
                                                            $_SESSION["Email"] = $Email;
					$_SESSION["Password"] = $Password;
					echo "<meta http-equiv='refresh' content='0; 
url=cafelogin.html'>";					
					

									}
				else{
		
                                                            echo "<meta http-equiv='refresh' content='0; 
url=cafe.html#log in'>";
									}
			}
		}
		else{
			echo 'Database connection failure';
                                    echo "<meta http-equiv='refresh' content='0; 
url=cafe.html#log in'>";
			
		}
	}
	else{
		echo 'No Email and Password';
                        echo "<meta http-equiv='refresh' content='0; 
url=cafe.html#log in'>";
		
	}
?>