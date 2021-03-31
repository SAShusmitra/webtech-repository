<!DOCTYPE html>
<html>
<head>
	

	<style type="text/css">
    label
    {
    	width: 100px;
    	display: inline-block;
    	text-align: left;
    	
    }
	.error
	{
		color: red;
	}

	#page {
  position: static;
  top: 50%;
  left: 50%;
	}

</style>

</head>
<body>


	<?php


	$flag=TRUE;
	$name=$pass=$errname=$errpass="";


	//$nSize=strlen($_POST["fname"]);
	//$pSize=strlen($_POST["fpass"]);

	//$namePatt1= '/^(?=.*[A-Z])$/';




	if($_SERVER["REQUEST_METHOD"]=="POST")
	{
	$checkName=$_POST["fname"];
	$checkPass=$_POST["fpass"];

	$namePatt2='/^.{2,}$/';
	$passPatt1='/^.{8,}$/';
	$passPatt2='/^(?=.*[@#$%]).{8,}$/';

		if(!empty($checkName))
		{
			if(!preg_match("/^[a-zA-Z1-9-._ ]*$/",$checkName))
			{
				$errname="* User Name can contain alpha numeric characters, period,dash or underscore only";
				$flag=false;
			}
			else if(!preg_match($namePatt2,$checkName))
			{
				$errname="* User Name must contain at least two (2) characters";
				$flag=false;
			}
			else
			{
				$name=test_input($checkName);
				$flag=true;
			}
			
		}

		if(!empty($checkPass))
		{
			if(!preg_match($passPatt1,$checkPass))
			{
				$errpass="Password must not be less than eight (8) characters";
			}
			else if(!preg_match($passPatt2,$checkPass))
			{
				$errpass="Password must contain at least one of the special characters (@, #, $,%)";
			}
			else
			{
				$pass=test_input($checkPass);
			}


		}




	}



	function test_input($data) {
	$data = trim($data);
	$data = stripslashes($data);
	$data = htmlspecialchars($data);
	return $data;
}


?>

<div id="page">
	

</div>

<fieldset style="width:400px">
	<legend><h3>LOGIN as Customer</h3></legend> 

	<form method="POST" action="welcome.php">
		<label for="name">User Name :</label> 
		<input type="text" name="uname">
		<span class="error"><?php echo $errname;?></span><br>
		<label for="fpassword">Password :</label> 
		<input type="text" name="pass">
		<span class="error"><?php echo $errpass;?></span> 
		<hr align=center  size=1>

		<label for="fremember">Remember me</label> 
		<input type="checkbox" name="frem">
		<br>
		<br>
		<input type="submit" name="fsubmit" value="Submit">
		<a href="forgetPass.php">Forget password?</a>
	</form>

</fieldset>



<?php
session_start();
$_SESSION["fname"] = $name;

if($flag)
{
	 echo "<script> location.href='C:\xampp\htdocs\Web Tech Lab\Lab Task 6(18-37982-2)\D.LOGGED IN DASHBOARD\loggedInDashboard.php'; </script>";
     exit;
}


?>

</body>
</html>


