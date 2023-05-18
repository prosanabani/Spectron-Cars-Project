<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>CodePen - Dynamic Single Page Login + Sign Up</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
<link href='https://fonts.googleapis.com/css?family=Roboto:300,400,600' rel='stylesheet' type='text/css'>
<link rel="stylesheet" href="style.css">

</head>
<body>




<!-- partial:index.partial.html -->
<div id="back">
  <canvas id="canvas" class="canvas-back"></canvas>
  <div class="backRight">    
  </div>
</div>


    <div class="left">
            <?php

        $error="";
        $link = mysqli_connect('localhost', 'root', '', 'project');
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            if (isset($_POST["username-s"]) and isset($_POST["email-s"]) and isset($_POST["password-s"])){
                
              
                $sql = "INSERT INTO `users` (`id`, `email`, `username`, `password`) VALUES (NULL,'" . $_POST["email-s"] . "','" . $_POST["username-s"] . "','" . $_POST["password-s"] ."');";
                $connect = mysqli_query($link, $sql);              
                    header("Location:login.php");


        }
        }

        ?>
      <div class="content">
        <h2>Sign Up</h2>
        <form id="form-signup" action="signup.php" method="post" >
          <div class="form-element form-stack">
            <label for="email" class="form-label">Email</label>
            <input id="email" type="email" name="email-s">
          </div>
          <div class="form-element form-stack">
            <label for="username-signup" class="form-label">Username</label>
            <input id="username-signup" type="text" name="username-s">
          </div>
          <div class="form-element form-stack">
            <label for="password-signup" class="form-label">Password</label>
            <input id="password-signup" type="password" name="password-s">
          </div>
          <div class="form-element form-checkbox">
            <input id="confirm-terms" type="checkbox" name="confirm-s" value="1" class="checkbox" required>
            <label for="confirm-terms">I agree to the <a href="#">Terms of Service</a> and <a href="#">Privacy Policy</a></label>
          </div>
        
          <div class="form-element form-submit">
            <button id="signUp" class="signup" type="submit" name="signup">Sign up</button>
            <a style="text-decoration:none;  font-weight: bold; background-color:#673AB7; padding: 0.7em 1.2em; border-radius:3px; color:white;" href="login.php">LOG IN</a>
          </div>
        </form>
      </div>
    </div>
<!-- 

Remixed from "Sliding Login Form" Codepen by
C-Rodg (github.com/C-Rodg)
https://codepen.io/crodg/pen/yNKxej

Remixed from "Paper.js - Animated Shapes Header" Codepen by
Connor Hubeny (@cooper_hu)
https://codepen.io/cooper_hu/pen/ybxoev

Custom Checkbox based on the blog post by
Mik Ted (@inserthtml):
https://www.inserthtml.com/2012/06/custom-form-radio-checkbox/

HTML5 Form Validation based on the blog post by
Thoriq Firdaus (@tfirdaus):
https://webdesign.tutsplus.com/tutorials/
html5-form-validation-with-the-pattern-attribute--cms-25145

-->
<!-- partial -->
  <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/paper.js/0.11.3/paper-full.min.js'></script><script  src="./script.js"></script>

</body>
</html>
