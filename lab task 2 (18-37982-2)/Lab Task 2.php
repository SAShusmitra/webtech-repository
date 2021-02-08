<!DOCTYPE HTML>  
<html>
<head>
<style>
.error {color: #FF0000;}
</style>
</head>
<body>  

<?php

$nameErr = $emailErr = $dateErr = $genderErr = $degreeErr = $bloodErr = "";
$name = $email = $date = $gender = $degree = $blood = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["name"])) {
    $nameErr = "Cannot be empty";
  } else {
    $name = test_input($_POST["name"]);
     if(!preg_match("/^[a-zA-Z-' ]*$/",$name))
	{
	  $nameErr = "Can contain a-z, A-Z, period, dash only";
	}
  }
  
  if (empty($_POST["email"])) {
    $emailErr = "Cannot be empty";
  } else {
    $email = test_input($_POST["email"]);
      if (!filter_var($email, FILTER_VALIDATE_EMAIL)) 
	{
          $emailErr = "Invalid email format..Must be 'anything@example.Com'";
	}
  }
    
  if (empty($_POST["date"])) {
    $dateErr = "Cannot be empty";
  } else {
    $date = test_input($_POST["date"]);
  }

  if (empty($_POST["gender"])) {
    $genderErr = "At least one of them must be selected";
  } else {
    $gender = test_input($_POST["gender"]);
  }

  if (empty($_POST["degree"])) 
  {
    $degreeErr = "Cannot be empty";
  } 
else if(sizeof($_POST["degree"])>1)
   {
    $degree = $_POST["degree"];

   }
       else 
	{$degreeErr = "At least two of them must be selected";}
	

  if (empty($_POST["blood"])) {
    $bloodErr = "Must be selected";
  } else {
    $blood = test_input($_POST["blood"]);
  }
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>


<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
  <br>
  <b>Name:</b> <input type="text" name="name">
  <span class="error">* <?php echo $nameErr;?></span>
  <br><br>

  <b>E-mail:</b> <input type="text" name="email">
  <span class="error">* <?php echo $emailErr;?></span>
  <br><br>

  <b>Date of Birth:</b> <input type="date" name="date">
  <span class="error">* <?php echo $dateErr;?></span>
  <br><br>


  <b>Gender:</b>
  <input type="radio" name="gender" value="female">Female
  <input type="radio" name="gender" value="male">Male
  <input type="radio" name="gender" value="other">Other
  <span class="error">* <?php echo $genderErr;?></span>
  <br><br>


<b>Degree:</b>
  <input type="checkbox" id="degree1" name="degree[]" value="SSC">
  <label for="degree1"> SSC</label>
  <input type="checkbox" id="degree2" name="degree[]" value="HSC">
  <label for="degree2"> HSC</label>
  <input type="checkbox" id="degree3" name="degree[]" value="BSc">
  <label for="degree3"> BSc</label>
  <input type="checkbox" id="degree4" name="degree[]" value="MSc">
  <label for="degree4"> MSc</label>
  <span class="error">* <?php echo $degreeErr;?></span><br><br>

<b>Blood Group :</b>

<select name="blood">
<option value=""></option>
<option value="A+">A+</option>
<option value="A-">A-</option>
<option value="B+">B+</option>
<option value="B-">B-</option>
<option value="AB+">AB+</option>
<option value="AB-">AB-</option>
<option value="O+">O+</option>
<option value="O-">O-</option>
</select>
<span class="error">* <?php echo $bloodErr;?></span>
<br><br>

  <input type="submit" name="submit" value="Submit">  
</form>

<?php
echo "<h2>Your Input:</h2>";
echo $name;
echo "<br>";
echo $email;
echo "<br>";
echo $date;
echo "<br>";
echo $gender;
echo "<br>";

for($i=0;$i<count($degree);$i=$i+1)
{
echo $degree[$i]." "; 
}
echo "<br>";
echo $blood;
?>

</body>
</html>
