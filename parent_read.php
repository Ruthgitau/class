<?php

include "db_connect.php";

$sql = "SELECT * FROM parents";

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
            <h2>Parents</h2>

    <table class="table">
        <thead>

            <tr>
                <th>Id</th>
                <th>Parent's Name</th>
                <th>Parent's Number</th>
                <th>Residence</th>

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
                        <td><?php echo $row['number'];?></td>
                        <td><?php echo $row['residence'];?></td>
                        

                        <td><a class="btn btn-info" href="parent_update.php?id=<?php echo $row['id'];?>">
                        Edit</a>&nbsp;
                        <a class="btn btn-danger" href="parent_delete.php?id=<?php echo $row['id'];?>">
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