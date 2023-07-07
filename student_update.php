<?php

include "db_connect.php";

if (isset($_POST['update'])){

    $studentname= $_POST['name'];
    $registration_number = $_POST['registration'];
    $course = $_POST['course'];
    $email = $_POST['email'];
    $age = $_POST['age'];
    $student_id = $_POST['id'];

    $sql = "UPDATE `students` SET `name`=`$studentname` ,`registration`=`$registration_number`, `course`=`$course`, `email`=`$email`, `age`=`$age` WHERE `id`='$student_id'";

    $result = $conn->query($sql);

    if($result == TRUE){
        echo "Record updated Successfully.";
    }
    else{
        echo "Error:" . $sql. "<br>".$conn->error;
    }
}


if(isset($_GET['id'])){
    $student_id = $_GET['id'];

    $sql = "SELECT * FROM `students` WHERE `id`='$student_id";
    $result = $conn->query($sql);

    if($result->num_rows > 0){
        while ($row = $result-> fetch_assoc()){
            $id = $row['id'];
            $studentname = $row['name'];
            $registration_number = $row['registration'];
            $course = $row['course'];
            $email = $row['email'];
            $age = $row['age'];
            

        }
    ?>
        <h2>Student's Update Form</h2>

        <form action="" method="post">
            <fieldset>
                <legend>Student's Informaton</legend>

                Student's Name:<br>
                <input type="text" name="studentname" value="<?php echo $studentname;?>">
                <input type="hidden" name="student_id" value="<?php echo $id;?>">
                <br>

                Registration Number:<br>
                <input type="text" name="registration" value="<?php echo $registration_number;?>">
                <br>

                Course:<br>
                <input type="text" name="registration" value="<?php echo $course;?>">
                <br>

                Email:<br>
                <input type="email" name="email" value="<?php echo $email;?>">
                <br>

                Age:<br>
                <input type="number" name="age" value="<?php echo $age;?>">
                <br>

            </fieldset>
        </form>

        </body>
        </html>

    <?php

    }else{
        header('Location: student_read.php');
    }
  }
  ?>