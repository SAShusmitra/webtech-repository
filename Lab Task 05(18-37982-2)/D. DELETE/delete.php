<!DOCTYPE html>
<html>
<head>
	<title>Delete</title>
</head>
<body>


	<table>


		  <fieldset style="width:400px;height: 300px">
  <legend><h3>DELETE</h3></legend> 

<form>
		
        <b>SEARCH</b> <br>
       <input type="Text" name="name" value="">
      <br>
      <input  type="submit" name="search"  value="search">
      <br><br>
      <input type="submit" name="delete"  value="Delete">


</form>
</table>



<?php  



  $servername = "localhost";
         $username = "username";
        $password = "password";
         $dbname = "task5";

           // Create connection
        $conn = new mysqli($servername, $username, $password, $dbname);
       // Check connection
         if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
          }
           
         $name="";




          if(isset($_REQUEST['search']))
           {

           	 $name=$_REQUEST['name'];


        

       $sql= "SELECT * FROM product WHERE name='$name'";
        $result= mysqli_query($conn, $sql);


      while ($row=mysqli_fetch_array($result)) {

        echo "data found";

    }
               
               
}

if(isset($_REQUEST['delete']))
{      

	 $name=$_REQUEST['name'];


 $sql2= "DELETE FROM product WHERE name='$name'";



 if ($conn->query($sql2) == 1){
       echo "Data delete  successfully";
       }
        else{
         echo "error while deleting".$conn->error;
       }
     $conn->close();
}


?>

</body>
</html>