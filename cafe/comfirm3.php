<html lang="en">
<head>
<meta charset="utf-8" />
<link rel="stylesheet" href="http://code.jquery.com/ui/1.10.3/themes/smoothness/jquery-ui.css" />
<script src="http://code.jquery.com/jquery-1.9.1.js"></script>
<script src="http://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>
<link rel="stylesheet" href="/resources/demos/style.css" />
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inconsolata">
<style>
        body{background-color:PapayaWhip;}   
</style>

<script>
$(function() {
$( "#dialog" ).dialog({
modal: true,
buttons: {
Ok: function() {
$( this ).dialog( "close" );
}
}
});
});
</script>
</head>
<body>
<form action="back.php" method="post" >
<p><button class="w3-button w3-black" type="submit">GO BACK TO MAIN PAGE</button></p>
</form>
<div id="dialog" title="Failed">
<p>Connection failed! 
</p>
</div>
</body>
</html>