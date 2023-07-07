<?php

include "db_connect.php";

$sql = "SELECT * FROM course";

$result = $conn-> query($sql);
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Read Page</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">

    </head>

    <body>
        <div class="container">
            <h2>Courses</h2>

    <table class="table">
        <thead>

            <tr> 
                <th>Id</th>
                <th>Course Name</th>
                <th>Course Fee</th>
                <th>Course Duration</th>

            </tr>
        </thead>

    <tbody>

        <?php
            if($result->num_rows > 0){
                while ($row = $result->fetch_assoc()){
                    ?>

                    <tr>
                        <td><?php echo $row['id'];?></td>
                        <td><?php echo $row['name'];?></td>
                        <td><?php echo $row['fee'];?></td>
                        <td><?php echo $row['duration'];?></td>
                        

                        <td><a class="btn btn-info" href="update.php?id=<?php echo $row['id'];?>">
                        Edit</a>&nbsp;
                        <a class="btn btn-danger" href="delete.php?id=<?php echo $row['id'];?>">
                    Delete</a></td>
                        
                    </tr>

                    <?php
                }


            }
            ?>
            
    </tbody>
    </table>
        </div>
    </body>
</html>