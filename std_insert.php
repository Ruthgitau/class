<?php 
include "db_connect.php";

  if (isset($_POST['submit'])) {

    $student_name = $_POST['name'];
    $reg_no = $_POST['registration'];     
    $course = $_POST['course'];
    $email = $_POST['email'];
    $age = $_POST['age'];

    $sql = "INSERT INTO `students`(`name`, `registration`, `course`, `email`, `age`) 
    VALUES ('$student_name','$reg_no','$course','$email','$age')";

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

<h2>Signup Form</h2>

<form action="" method="POST">

  <fieldset>

    <legend>Personal information:</legend>

    Student name:<br>

    <input type="text" name="name">

    <br>

    Registration Number:<br>

    <input type="text" name="registration">

    <br>

    Course:<br>

    <input type="text" name="course">

    <br>

    Email:<br>

    <input type="email" name="email">

    <br>

    Age:<br>
    <input type="number" name="age">
    <br><br>

    <input type="submit" name="submit" value="submit">

  </fieldset>

</form>

</body>

</html>