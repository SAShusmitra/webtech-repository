<!DOCTYPE html>
<html>
<head>
	<title>Display Product</title>
</head>
<body>

         <fieldset style="width:400px;height: 300px">
  <legend><h3>DISPLAY</h3></legend> 

  <form>
    <input type="text" name="search" > 
          <input type="submit" name="search" value="search by name">

        <table border="1">
        <thead>
            <th>Name</th>
        
             <th>profit</th>



        </thead>
        


        <?php 

        $link_address1 = 'edit.php';



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








       $sql= "select * from product";

       $result= mysqli_query($conn, $sql);

while ($row=mysqli_fetch_array($result)) {




$profit=$row['sellingprice']-$row['buyingprice'];


    ?>

    <tr>
        <td><?php echo $row['name']; ?></td>
        <td><?php echo $profit ?></td>
        <td><a href="edit.php"  name="Edit"  >Edit</a></td>
        <td><a href="delete.php"  name="Delete"  >Delete</a></td>
    </tr>


   <?php } ?>



</body>
</html>