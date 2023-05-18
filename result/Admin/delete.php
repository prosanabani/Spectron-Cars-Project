<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Delete Record</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="delete.css">
</head>
<body>
    <?php

        require_once("config.php");
                $sql = "DELETE FROM `team` WHERE id ='" . $_GET["id"] . "'";
                $result = mysqli_query($link, $sql);
                header("Location: index.php");
                ?>
</body>
</html>
