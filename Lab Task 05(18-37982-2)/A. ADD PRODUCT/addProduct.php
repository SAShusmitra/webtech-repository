<!DOCTYPE html>
<html>
<head>
	<title>Add product</title>
</head>
<body>


   <table>
   	     
   	       <fieldset style="width:400px;height: 300px">
  <legend><h3>ADD PRODUCT</h3></legend> 

  <form>

  
   	       <b> Name</b>	 <br>
            <input type="text" name="name">
            <br>
            <b>Buying Price</b>	 <br>
            <input type="text" name="buyingprice">
   	       <br>
   	       <b>Selling Price</b>	 <br>
            <input type="text" name="sellingprice">

            <hr>

            <input type="checkbox" name="" value="Display"> Display

            <hr>
            <input type="submit" name="save"  value="Save">



</form>

</fieldset>

   </table>

  



	<?php 


        $name=$buyingprice=$sellingprice="";

           if(isset($_REQUEST['save']))
           {
             $name=$_REQUEST['name'];
              $buyingprice=$_REQUEST['buyingprice'];
               $sellingprice=$_REQUEST['sellingprice'];



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


          $sql = "INSERT INTO `product` (`name`, `buyingprice`, `sellingprice`) VALUES ('$name', '$buyingprice', '$sellingprice')";

          if ($conn->query($sql)== 1){
       echo "Data insert successfully";
       }
        else{
         echo "error while inserted".$conn->error;
       }
     $conn->close();

               
               }

	 ?>


<?php 



 ?>




</body>
</html>