<?php

include "db_connect.php";

if (isset($_POST['update'])){

    $name= $_POST['name'];
    $number = $_POST['number'];
    $residence = $_POST['residence'];
    $parent_id = $_POST['id'];

    $sql = "UPDATE `parents` SET `name`=`$name` ,`number`=`$number`, `residence`=`$residence`, WHERE `id`='$parent_id'";

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

    $sql = "SELECT * FROM `parents` WHERE `id`='$parent_id";
    $result = $conn->query($sql);

    if($result->num_rows>0){
        while ($row = $result->fetch_assoc()){
            $parent_id = $row['id'];
            $name = $row['name'];
            $number = $row['number'];
            $residence = $row['residence'];
           

        }
    ?>
        <h2>Parent's Update Form</h2>

        <form action="" method="post">
            <fieldset>
                <legend>Parent's Informaton</legend>

                Parent's Name:<br>
                <input type="text" name="parentname" value="<?php echo $name;?>">
                <input type="hidden" name="parent_id" value="<?php echo $parent_id;?>">
                <br>

                
                Phone Number:<br>
                <input type="tel" name="number" value="<?php echo $number;?>">
                <br>

                Residence:<br>
                <input type="text" name="registration" value="<?php echo $course;?>">
                <br>

                

            </fieldset>
        </form>

        </body>
        </html>

    <?php

    }else{
        header('Location: parent_read.php');
    }
  }
  ?>