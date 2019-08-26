<?php

session_start();
$host = "localhost";
$user = "root";
$password = "";
$db = "ocr";

$con = new mysqli($host ,$user, $password, $db);

if ($con->connect_error) {
    die("Connection failed: ".$con->connect_error);
}



if(empty($_SESSION['id']))
    {
        header("Location: lgn.php");
        die("Redirecting to Login");
    }


?>


<!DOCTYPE html>
<html>
<style> 
input, select {
	font-size: 15px;
    width: 14%;
	padding: 8px 20px;
    margin: 2px 0;
    border: 3px solid gray;
	border-radius: 12px;
	border-bottom: 2px solid blue;
	background-color: #3CBC8D;
    color: black;
	-webkit-transition: width 0.4s ease-in-out;
    transition: width 0.4s ease-in-out;
}

select:focus {
	width: 25%;
    border: 3px solid #555;
	background-color: MediumAquaMarine;
}
input[type=submit]{ 
	font-size: 20px;
	font-family: franklin gothic;
	padding: 5px 5px;
	border: 3px solid gray;
	border-radius: 12px;
	width: 8%;
	background-color: blue;
	-webkit-transition: width 0.4s ease-in-out;
    transition: width 0.4s ease-in-out;
	cursor: pointer;
} 
input:focus[type=submit]{
	width: 16%;
    border: 3px solid #555;
	background-color: LightSeaGreen;
}
img {
    display: block;
    margin-left: auto;
    margin-right: auto;
    width: 10%;
}


</style>
</head>
<body style="background-color:darkred;">
	<img src="CUET_logo.png" alt="cuet logo" width="104" height="142"> 
	<h1 style="
				text-align:center; 
				border:5px solid black; 
				border-radius: 8px;
				padding: 12px; 
				margin: 50px;
				font-size:40px; 
				font-family:impact;
				color:lightblue; 
	">Add New Student Data</h1>
	<br> <br>

	<form
		style="text-align:center; color: Chartreuse;"
		action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>"
		target="_self" 
		method="POST"
		>
		ID:<br>
		<input type="number" name="sid"><br>
		Password:<br>
		<input type="text" name="sps"><br>
		Name:<br>
		<input type="text" name="snm"><br>
		E-Mail:<br>
		<input type="text" name="sml"><br>
		Mobile No.:<br>
		<input type="number" name="smbl"><br>
		Father:<br>
		<input type="text" name="fnm"><br>
		Mobile No.:<br>
		<input type="number" name="fmbl"><br>
		Mother:<br>
		<input type="text" name="mnm"><br>
		Address:<br>
		<input type="text" name="adr"><br>
		Hall:<br>
		<input type="text" name="hl"><br>
		Seat:<br>
		<input type="text" name="htp"><br>
		Grade:<br>
		<input type="text" name="grd"><br>
		Advisor ID:<br>
		<input type="number" name="avid"><br>
		Admin ID:<br>
		<input type="number" name="amid"><br>
		Approval:<br>
		<input type="number" name="aprv"><br>
		
		<input type="submit" name="sub" value="Add">
		
	</form>

	<?php
	
	
	if (isset($_POST['sub']))
	{
		$sql= "insert into student values ('".$_POST['sid']."', '".$_POST['sps']."', '".$_POST['snm']."', '".$_POST['sml']."', '".$_POST['smbl']."', '".$_POST['fnm']."', '".$_POST['fmbl']."', '".$_POST['mnm']."', '".$_POST['adr']."', '".$_POST['hl']."', '".$_POST['htp']."', '".$_POST['grd']."', '".$_POST['avid']."', '".$_POST['amid']."', '".$_POST['aprv']."')";

		$rslt = $con->query($sql);
		header('location: admin.php');
	}


	?>
	

</body>
</html>