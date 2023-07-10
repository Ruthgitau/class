<?php

include "db_connect.php";

if(isset($_GET['id'])){
    $parent_id = $_GET['id'];

    $sql = "DELETE FROM `parents` WHERE `id` = 'parent_id'";
     
    $result = $conn-> query($sql);

if($result== TRUE){
    echo "Record deleted successfully.";

}else{
    echo "Error:" . $sql . "<br>" . $conn->error;
}
}

?>