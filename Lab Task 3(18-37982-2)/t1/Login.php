<!DOCTYPE html>
<html>
<head>
	<title>Login</title>

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
</style>

</head>
<body>

	<?php

	$flag=TRUE;
	$name=$pass=$errname=$errpass="";

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


<fieldset style="width:400px">
	<legend><h3>LOGIN</h3></legend> 

	<form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?> ">
		<label for="name">User Name :</label> 
		<input type="text" name="fname">
		<span class="error"><?php echo $errname;?></span><br>
		<label for="fpassword">Password :</label> 
		<input type="text" name="fpass">
		<span class="error"><?php echo $errpass;?></span> 
		<hr align=center  size=1>
        <input type="checkbox" name="frem">
		<label for="fremember">Remember me</label> 
		
		<br>
		<br>
		<input type="submit" name="fsubmit" value="Submit">
		<a href="forgetPass.php">Forget password?</a>
	</form>

</fieldset>



<?php

	echo "$name  <br>";

	echo $pass;

?>

</body>
</html>
