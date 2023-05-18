<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>View Record</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="read.css">
</head>

<body>
    <div class="wrapper">
        <div class="container-fluid">
            <div class="row">
                <div id="sosi" class="col-md-12">
                    <h1 class="mt-5 mb-3">View Record</h1>
                    <?php
                    require_once("config.php");
                    if (isset($_GET["id"])) {
                        $sql = "select * from team where id LIKE '" . $_GET["id"] . "'";
                        if ($result = mysqli_query($link, $sql)) {

                            while ($row = mysqli_fetch_assoc($result)) {
                    ?>
                    <div class="form-group">
                        <label>Your Name</label>
                        <p><b><?php echo $row["name"] ?></b></p>
                    </div>
                    <div class="form-group">
                        <label>Your password</label>
                        <p><b><?php echo $row["password"] ?></b></p>
                    </div>
                    <div class="form-group">
                        <label>Your desgination</label>
                        <p><b><?php echo $row["designation"] ?></b></p>
                    </div>
                    <div class="form-group">
                    <label>IS Admin</label><br>
                        <?php
                                    if ($row["isadmin"] == 1) {
                                        
                                        echo " YES you are Admin";
                                    } else {
                                        echo "Not Admin";
                                    }
                                    ?>

                    </div>
                    <?php
                            }
                        }
                    }
                    ?>


                    <div class="frame"> <button type="submit" class="custom-btn btn-3"><span>Read More</span></button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>