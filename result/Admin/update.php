<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Update Record</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Lato&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="update.css">
    <style>
    .wrapper {
        width: 600px;
        margin: 0 auto;
    }
    </style>
</head>
            <?php
            require_once("config.php");
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                if (isset($_POST["name"]) and isset($_POST["password"]) and isset($_POST["designation"])) {
                    $sql = "UPDATE `team` SET `name` = '" . $_POST["name"] . "',  `image` =  '" . $_FILES["image"]['name'] . "',`designation` = '" . $_POST["designation"] . "', `password` = '" . $_POST["password"] . "', `isadmin` = '" . $_POST["isadmin"] . "' WHERE `team`.`id` = '" . $_GET["id"] . "'; ";
                    $temp=$_FILES["image"]["tmp_name"]; 
                    $dis="../../img/".$_FILES["image"]["name"]; 
                    $connect=move_uploaded_file($temp,$dis); 
        
                    if (mysqli_query($link, $sql)) {
                        header("Location:index.php");
                    } else {
            ?>
            <div class="alert alert-danger"><em>Error occured.</em></div>
            <?php
                    }
                }
            }
            ?>

<body>
    <div class="wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <h2 class="mt-5">Update Record</h2>
                    <p>Please edit the input values and submit to update the employee record.</p>
                    <form class="formc" action="<?php echo htmlspecialchars(basename($_SERVER['REQUEST_URI'])); ?>"
                        method="post" enctype="multipart/form-data" >
                        <?php
                        require_once("config.php");
                        if (isset($_GET["id"])) {
                            $sql = "select * from team where id LIKE '" . $_GET["id"] . "'";
                            if ($result = mysqli_query($link, $sql)) {

                                while ($row = mysqli_fetch_assoc($result)) {
                        ?>
                        <div class="form-group">
                            <label>Name</label>
                            <input type="text" name="name" class="form-control" value="<?php echo $row["name"] ?>">
                            <span class="invalid-feedback"></span>
                        </div>
                        <div class="form-group">
                            <label>password</label>
                            <input type="password" name="password" class="form-control" value="<?php echo $row["password"] ?>">
                            <span class="invalid-feedback"></span>
                        </div>
                        <div class="form-group">
                            <label>Designation</label>
                            <input type="text" name="designation" class="form-control" value="<?php echo $row["designation"] ?>">
                            <span class="invalid-feedback"></span>
                        </div>
                        <div class="form-group">
                            <input type="checkbox" name="isadmin" value="1"
                                <?php if ($row["isadmin"] == "1") echo "checked" ?>>
                            <label for="isadmin"> Is Admin</label>
                        </div>
                        <div class="form-group">
                            <label><span class="ter" id="last_span">image</span></label>
                            <input type="file" name="image" class="form-control" value="">
                            <span class="invalid-feedback"></span>
                        </div>
                        <button type="submit" class="custom-btn btn-11">Submit<div class="dot"></div></button>
                        <!-- <input type="submit" class="btn btn-primary" value="Submit"> -->
                        <a href="index.php" class="btn btn-primary ml-2">Cancel</a>

                        <?php
                                }
                            }
                        }

                        ?>


                    </form>
                </div>
            </div>
        </div>
    </div>
</body>

</html>