<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Create Record</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="create-car.css">
    <style>

    </style>
</head>

<body>
    <?php
    require_once("config.php");
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (isset($_POST["name"])) {

                
            $sql = "INSERT INTO `cars` (`id`, `name`, `model`, `milage`, `transmission`, `image`, `price`) VALUES (NULL, '" . $_POST["name"] . "', '" . $_POST["model"] . "', '" . $_POST["milage"] . "', '" . $_POST["transmission"] . "', '" . $_FILES["image"]['name'] . "', '" . $_POST["price"] . "');";
            $temp=$_FILES["image"]["tmp_name"]; 
            $dis="../../img/".$_FILES["image"]["name"]; 
            $connect=move_uploaded_file($temp,$dis); 
            if (mysqli_query($link, $sql)) {
                header("Location:../../index.php");
            } else {
            }
        }
    }


    ?>
    <div class="wrapper">
        <div class="container-fluid">
            <div id="hello" class="row">
                <div class="col-md-12">
                    <h2 class="mt-5">Create car</h2>
                    <p>Please fill this form and submit to add team membere record to the database.</p>
                    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post" enctype="multipart/form-data">
                        <div class="form-group">
                            <label><span class="ter">Name</span></label>
                            <input type="text" name="name" class="form-control" value="" placeholder="enter the name">
                            
                        </div>
                        <div class="form-group">
                            <label><span class="ter">Model</span></label>
                            <input type="text" name="model" class="form-control" value="" placeholder="enter the model">
                        </div>
                        <div class="form-group">
                            <label><span class="ter" id="last_span">Milage</span></label>
                            <input type="text" name="milage" class="form-control" value="" placeholder="enter the milage">
                        </div>
                        <div class="form-group">
                            <label><span class="ter" id="last_span">Transmission</span></label>
                            <!-- <input type="text" name="transmission" class="form-control" value="" placeholder="enter transsion "> -->
                            <select id="transmission" class="custom-select px-4" style="height: 40px;" name="transmission">
                                        <option id="transmission" value=""selected>Select the Transmission Type</option>
                                        <option id="transmission" value="Auto">Auto</option>
                                        <option id="transmission" value="Semi-Auto">Semi-Auto</option>
                                        <option id="transmission" value="Manual">Manual</option>
                                    </select>
                        </div>
                        <div class="form-group">
                            <label><span class="ter" id="last_span">image</span></label>
                            <input type="file" name="image" class="form-control" value="">
                        </div>
                        <div class="form-group">
                            <label><span class="ter" id="last_span">Price</span></label>
                            <input type="text" name="price" class="form-control" value="" placeholder="enter the price">
                        </div>
                        <div class="frame">
                            <button class="custom-btn btn-5" type="submit"><span>Add car</span></button>
                            <a href="index.php" class="btn btn-secondary ml-2">Cancel</a>
                        </div>


                    </form>
                </div>
            </div>
        </div>
    </div>
</body>

</html>