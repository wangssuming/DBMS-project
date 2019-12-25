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
        background-color:OldLace;
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
<div class="w3-container" id="Update" style="padding-bottom:32px;">
  <div class="w3-content" style="max-width:700px">
    <h5 class="w3-center w3-padding-48"><span class="w3-tag w3-wide">UPDATE</span></h5>   
    <p><strong>update amount of your order:</strong> </p>
    <form action="update1.php" method="post" >
      <p><input class="w3-input w3-padding-16 w3-border" type="text" placeholder="ID" required name="ID"></p>
      <p><input class="w3-input w3-padding-16 w3-border" type="text" placeholder="Email" required name="Email"></p>
      <p><input class="w3-input w3-padding-16 w3-border" type="text" placeholder="Amount" required name="Amount"></p>
      <p><button class="w3-button w3-black" type="submit">confirm</button></p>
    </form>
  </div>
</div>
    <br/>    
</body>
</html>

