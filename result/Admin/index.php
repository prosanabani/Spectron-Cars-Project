<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Dashboard</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="index.css">
    <link rel="stylesheet" href="fontawesome-6.2.0/css/all.css">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <script>
    $(document).ready(function() {
        $('[data-toggle="tooltip"]').tooltip();
    });
    </script>
</head>

<body>

    <?php
    


    ?>



    <div  class="wrapper">
        <div  class="container-fluid">
            <div  class="row">
                <div  class="col-md-12">
                    <div  class="mt-5 mb-3 clearfix">
                        <h2  id="hiho" class="pull-left">Team Details</h2>
                        <a   id="hiho" href="create.php" class="btn btn-success pull-right"
                            style="background-color:  rgb(251, 118, 24);color:white; border: none;"><i
                                class="fa fa-address-card" aria-hidden="true"></i> Add New Team Member</a>
                        
                    </div>
                    <?php
                    require_once("config.php");
                    $sql = "select * from team";
                    $query = mysqli_query($link, $sql);
                    if (mysqli_num_rows($query) > 0) {

                    ?>
                    <table id="siso" class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Name</th>
                                <th>Image</th>
                                <th>Designation</th>
                                <th>Password</th>
                                <th>Admin</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                                while ($row = mysqli_fetch_assoc($query)) { 
                                    ?>
                            <tr>
                                <td><?php echo $row["id"] ?></td>
                                <td><?php echo $row["name"] ?></td>
                                <td><?php echo $row["image"] ?></td>
                                <td><?php echo $row["designation"] ?></td>
                                <td><?php echo $row["password"] ?></td>
                                <td><?php
                                            if ($row["isadmin"] == 1) {
                                                echo "Admin";
                                            } else {
                                                echo "Not Admin";
                                            }
                                            ?></td>

                                <td>
                                    <a href="read.php?id=<?php echo $row["id"] ?>" class="mr-3" title="View Record"
                                        data-toggle="tooltip"><i class="fa fa-info-circle" aria-hidden="true"></i>
                                        <a href="update.php?id=<?php echo $row["id"] ?>" class="mr-3"
                                            title="Update Record" data-toggle="tooltip"><i class="fa fa-pencil-square-o"
                                                aria-hidden="true"></i>
                                            <a href="delete.php?id=<?php echo   $row["id"] ?>" title="Delete Record" data-toggle="tooltip">
                                                <i class="fa fa-trash-o" aria-hidden="true"></i>

                                </td>
                            </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                    <?php

                    } else {
                    ?>
                    <div class="alert alert-danger"><em>No records were found.</em></div>
                    <?php
                    }

                    ?>


                    <a  id="hiho" href="../../index.php" class="btn btn-success pull-right"
                           style="background-color:gray;color:white; border: none;"><i
                             aria-hidden="true"></i>Return to main menu</a>


                    <a   id="hiho" href="create-car.php" class="btn btn-success pull-right"
                style="background-color:  rgb(251, 118, 24);color:white; border: none; margin-right:20px;"><i
                    class="fas fa-car" aria-hidden="true"></i> Add New car</a> 

                </div>
            </div>
        </div>
    </div>

</body>

</html>