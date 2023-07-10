<?php

include "db_connect.php";

if(isset($_GET['id'])){
    $student_id = $_GET['id'];

    $sql = "DELETE FROM `users` WHERE `id` = 'student_id'";
     
    $result = $conn-> query($sql);

if($result== TRUE){
    echo "Record deleted successfully.";

}else{
    echo "Error:" . $sql . "<br>" . $conn->error;
}
}

?>