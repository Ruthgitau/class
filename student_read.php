<?php

include "db_connect.php";

$sql = "SELECT * FROM students";

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
            <h2>Students</h2>

    <table class="table">
        <thead>

            <tr>
                <th>Id</th>
                <th>Student's Name</th>
                <th>Registration Number</th>
                <th>Course</th>
                <th>Email</th>
                <th>Age</th>

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
                        <td><?php echo $row['registration'];?></td>
                        <td><?php echo $row['course'];?></td>
                        <td><?php echo $row['email'];?></td>
                        <td><?php echo $row['age'];?></td>

                        <td><a class="btn btn-info" href="student_update.php?id=<?php echo $row['id'];?>">
                        Edit</a>&nbsp;
                        <a class="btn btn-danger" href="student_delete.php?id=<?php echo $row['id'];?>">
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



