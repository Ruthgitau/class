<?php 
include "db_connect.php";

  if (isset($_POST['submit'])) {

    $name = $_POST['name'];
    $fee = $_POST['fee'];     
    $duration = $_POST['duration'];
  

    $sql ="INSERT INTO `course`( `name`, `fee`, `duration`)
    VALUES ('$name','$fee','$duration')";

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

<h2> Course Signup Form</h2>

<form action="" method="POST">

  <fieldset>

    <legend>Courses:</legend>

    Course name:<br>

    <input type="text" name="name">

    <br>

    Courses' Fees:<br>

    <input type="text" name="fee">

    <br>

    Course Duration:<br>

    <input type="text" name="duration">

    <br><br>


    <input type="submit" name="submit" value="submit">

  </fieldset>

</form>

</body>

</html>