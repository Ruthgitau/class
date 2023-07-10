<?php

include "db_connect.php";

if(isset($_GET['id'])){
    $course_id = $_GET['id'];

    $sql = "DELETE FROM `course` WHERE `id` = 'course_id'";
     
    $result = $conn-> query($sql);

if($result== TRUE){
    echo "Record deleted successfully.";

}else{
    echo "Error:" . $sql . "<br>" . $conn->error;
}
}

?>