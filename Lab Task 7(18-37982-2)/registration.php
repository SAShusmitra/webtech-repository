<!DOCTYPE html>
<html>
<head>
	<title>Registration</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
   <link rel="stylesheet" type="text/css" href="regstyle.css">
</head>
<body>
     <div >
     	<img class="logoimage" src="picture/logo.png">
       <br>  &nbsp;
     	<label class="logo"> <b>Banglar Hat</b> </label>
     </div>

	<div class="registration">
		<h1>Registration</h1>
		<form action="">
		<label>Username</label>
      <input type="text" name="username" placeholder="Enter username" >
      <label>Password</label>
      <input type="password" name="password" placeholder="Email your password">
      <label>Email</label>
      <input type="email" name="email" placeholder="Enter your Email">
      <label>Phone Number</label>
      <input type="Number" name="phonenumber" placeholder="Enter your phonenumber">
      <label>Dath of Birth</label>
      <input type="text" name="DOB" placeholder="Enter your dath of barth">
      <label>Gender</label>
      <br>
      <select name="gender" >
      	<option selected disabled ></option>
      	<option value="male">Male</option>
      <option value="femail">Female</option>
      <option value="other">Other</option>
      	

      </select>
      <br><br>
      
      <label>Blood Group</label>
      <br>
      <select name="bloodgroup" >
       <option selected disabled></option>
       <option value="A+">A+</option>
       <option value="A-">A-</option>
       <option value="B+">B+</option>
		<option value="B-">B-</option>
		<option value="O+">O+</option>
		<option value="O-">O-</option>
		<option value="AB+">AB+</option>
		<option value="AB-">AB-</option>
		</select>
		<br>
		<br><br>




      <input type="submit" name="sabmit" value="Submit">
	



		</form>

	</div>



</body>
</html>