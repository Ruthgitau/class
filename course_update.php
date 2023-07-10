<?php

include "db_connect.php";

if (isset($_POST['update'])){

    $name= $_POST['name'];
    $fee = $_POST['fee'];
    $duration = $_POST['duration'];
    $course_id = $_POST['id'];

    $sql = "UPDATE `course` SET `name`=`$name` ,`fee`=`$fee`, `duration`=`$duration`, WHERE `id`='$course_id'";

    $result = $conn->query($sql);

    if($result == TRUE){
        echo "Record updated Successfully.";
    }
    else{
        echo "Error:" . $sql. "<br>".$conn->error;
    }
}


if(isset($_GET['id'])){
    $course_id = $_GET['id'];

    $sql = "SELECT * FROM `course` WHERE `id`='$course_id";
    $result = $conn->query($sql);

    if($result->num_rows>0){
        while ($row = $result->fetch_assoc()){
            $course_id = $row['id'];
            $name = $row['name'];
            $fee= $row['fee'];
            $duration = $row['duration'];
           

        }
    ?>
        <h2>Course Update Form</h2>

        <form action="" method="post">
            <fieldset>
                <legend>Course Informaton</legend>

                Course Name:<br>
                <input type="text" name="name" value="<?php echo $name;?>">
                <input type="hidden" name="course_id" value="<?php echo $course_id;?>">
                <br>

                
                Course Fee:<br>
                <input type="text" name="fee" value="<?php echo $fee;?>">
                <br>

                Residence:<br>
                <input type="text" name="duration" value="<?php echo $duration;?>">
                <br>

                

            </fieldset>
        </form>

        </body>
        </html>

    <?php

    }else{
        header('Location: course_read.php');
    }
  }
  ?>