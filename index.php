<?php

 // 1. Create a database connection
 $dbhost = "127.0.0.1:3306";
 $dbuser = "amphibis_davier";
 $dbpass = "g0n@$#kRAYiD";
 $dbname = "amphibis_davier";
 $con = mysqli_connect($dbhost, $dbuser, $dbpass , $dbname);
//$mysqli = new sqli("127.0.0.1:8080","root",""<"ddwaasg1");
 
 // Test if connection occurred.
 if(mysqli_connect_errno()) {
   die("Database connection failed: " . 
        mysqli_connect_error() . 
        " (" . mysqli_connect_errno() . ")"
   );
 }
 else{
 }
?>


<html lang="en">
 
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Sign In</title>
    <!-- CSS -->
    <link rel="stylesheet" href="css/style.css">
    <script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>

</head>

<body>

    <!-- ============================================================== -->
    <!-- login page  -->
    <!-- ============================================================== -->

    <div class="login-container">
        <div class="card ">
            <div class="card-header text-center">
                <a href="index.php" class="title">Database</a><br><br>
                <span class="title-desc">Please enter your user information.</span>
            </div>

            <div class="card-body">
                <form>
                    <div class="form-group">
                        <input class="login-input" id="username" type="text" placeholder="Username" autocomplete="off">
                    </div>
                    <div class="form-group">
                        <input class="login-input" id="password" type="password" placeholder="Password">
                    </div><br>
                    <button type="button" class="login-button" id="loginBtn">Sign in</button>
                </form>
            </div>
        </div>
    </div>
  
    <!-- ============================================================== -->
    <!-- end login page  -->
    <!-- ============================================================== -->

    <script src="js/script.js"></script>

</body>
 
</html>