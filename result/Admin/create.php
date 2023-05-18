<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Create Record</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="create.css">
    <style>

    </style>
</head>

<body>
    <?php
    require_once("config.php");
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (isset($_POST["name"]) and isset($_POST["password"]) ) {



            $sql = "INSERT INTO `team` (`id`, `name`, `password`, `image`, `designation`,`isadmin`) VALUES (NULL, '" . $_POST["name"] . "', '" . $_POST["password"] . "', '" . $_FILES["image"]['name'] . "','" . $_POST["designation"] . "', '" . $_POST["isadmin"] . "');";
            $temp=$_FILES["image"]["tmp_name"]; 
            $dis="../../img/".$_FILES["image"]["name"]; 
            $connect=move_uploaded_file($temp,$dis); 

            if (mysqli_query($link, $sql)) {
                header("Location:index.php");
            } else {
            }
        }
    }


    ?>
    <div class="wrapper">
        <div class="container-fluid">
            <div id="hello" class="row">
                <div class="col-md-12">
                    <h2 class="mt-5">Create Team member</h2>
                    <p>Please fill this form and submit to add team membere record to the database.</p>
                    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post" enctype="multipart/form-data">
                        <div class="form-group">
                            <label><span class="ter">Name</span></label>
                            <input type="text" name="name" class="form-control" value="" placeholder="enter the name">
                            <span class="invalid-feedback"><?php echo $name_err; ?></span>
                        </div>
                        <div class="form-group">
                            <label><span class="ter">password</span></label>
                            <input type="password" name="password" class="form-control" value="" placeholder="enter the password">
                            <span class="invalid-feedback"><?php echo $password_err; ?></span>
                        </div>
                        <div class="form-group">
                            <label><span class="ter" id="last_span">email</span></label>
                            <input type="text" name="email" class="form-control" value="@gmail.com" placeholder="enter the email">
                            <span class="invalid-feedback"></span>
                        </div>
                        <div class="form-group">
                            <label><span class="ter" id="last_span">Designation</span></label>
                            <input type="text" name="designation" class="form-control" value="" placeholder="enter his work">
                            <span class="invalid-feedback"></span>
                        </div>
                        <div class="form-group">
                            <label><span class="ter" id="last_span">image</span></label>
                            <input type="file" name="image" class="form-control" value="">
                            <span class="invalid-feedback"></span>
                        </div>
                        <div class="form-group">
                            <input type="checkbox" name="isadmin" value="1">
                            <label for="isadmin"> Is Admin</label>
                        </div>
                        <div class="frame"><button class="custom-btn btn-5" type="submit"><span>Read More</span></button>
                            <a href="index.php" class="btn btn-secondary ml-2">Cancel</a>
                        </div>


                    </form>
                </div>
            </div>
        </div>
    </div>
</body>

</html>