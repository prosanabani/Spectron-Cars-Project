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
  <div class="backLeft">
  </div>
</div>
     <div class="right">
                  
     <?php 
          session_start();
          
          
          $error = "";
          if($_SERVER["REQUEST_METHOD"] == "POST")
          {
            if(isset($_POST["username-l"]) && isset($_POST["password-l"]))
            {
              require_once("config.php");
              $sql = "SELECT * FROM users";
              if($result = mysqli_query($link,$sql))
              {
                if(mysqli_num_rows($result) > 0)
                {
                  while($row = mysqli_fetch_array($result))
                  {
                    if($_POST["username-l"] == $row["username"] && $_POST["password-l"] == $row["password"])
                    {

                      $_SESSION["logged_in"]= "true";
                      header("Location:index.php");
                      
                    }
                    else 
                    {
                      $_SESSION["logged_in"]= "false";
                      echo "asknclsc";
                      $error = "Wrong username or Password";
                    }
                  }
                }
                else 
                {
                  $error = "No data found";
                }
              }
            }
          }

?>

                  <div class="content">
                    <h2>Login</h2>
                          <form id="form-login" action="login.php" method="post">
                            <div class="form-element form-stack">
                              <label for="username-login" class="form-label">Username</label>
                              <input id="username-login" type="text" name="username-l">
                            </div>
                            <div class="form-element form-stack">
                              <label for="password-login" class="form-label">Password</label>
                              <input id="password-login" type="password" name="password-l">
                            </div>
                            <h1><?php echo $error?></h1>
                            <div class="form-element form-submit">
                              <button id="logIn" class="login" type="submit" name="login">Log In</button> 
                              <a style="text-decoration:none;  font-weight: bold; background-color:#673AB7; padding: 0.7em 1.2em; border-radius:3px; color:white;" href="signup.php">SIGN UP</a>
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
