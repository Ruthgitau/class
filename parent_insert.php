<?php 
include "db_connect.php";

  if (isset($_POST['submit'])) {

    $parent_name = $_POST['name'];
    $phone_number = $_POST['number'];     
    $residence = $_POST['residence'];
  

    $sql = "INSERT INTO `parents`(`name`, `number`, `residence`) 
    VALUES ('$parent_name','$phone_number','$residence')";

    $result = $conn->query($sql);

    if ($result == TRUE) {

      echo "New record created successfully.";

    }else{

      echo "Error:". $sql . "<br>". $conn->error;

    } 

    $conn->close(); 

  }

?>

<!DOCTYPE html>

<html>

<body>

<h2> Parent's Signup Form</h2>

<form action="" method="POST">

  <fieldset>

    <legend>Parent's information:</legend>

    Parent name:<br>

    <input type="text" name="name">

    <br>

    Phone Number:<br>

    <input type="tel" name="number">

    <br>

    Residence:<br>

    <input type="text" name="residence">

    <br><br>


    <input type="submit" name="submit" value="submit">

  </fieldset>

</form>

</body>

</html>