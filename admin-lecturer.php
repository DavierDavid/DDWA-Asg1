<?php
/*
 // 1. Create a database connection
 $dbhost = "127.0.0.1:8080";
 $dbuser = "root";
 $dbpass = "";
 $dbname = "ddwaasg1";
 $connection = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
//$mysqli = new sqli("127.0.0.1:8080","root",""<"ddwaasg1");
 
 // Test if connection occurred.
 if(mysqli_connect_errno()) {
   die("Database connection failed: " . 
        mysqli_connect_error() . 
        " (" . mysqli_connect_errno() . ")"
   );
 }
 else{ //continued within body tag
    echo("failed");
 }*/
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
    <script src="https://unpkg.com/ionicons@5.2.3/dist/ionicons.js"></script>

</head>

<body>

    <!-- ============================================================== -->
    <!-- admin, project page  -->
    <!-- ============================================================== -->

    <div class="topnav"><div class="nav-title">Database</div><ion-icon class="icon" name="person-circle"></ion-icon> </div>

    <div class="sidenav">
        <ul class="link-container">
            <a href="admin-project.php"><li class="side-link">Project</li></a>
            <a href="admin-student.php"><li class="side-link">Students</li></a>
            <a href="admin-lecturer.php"><li class="side-link">Lecturers</li></a>
            <a href="admin-software.php"><li class="side-link">Softwares</li></a>
        </ul>
    </div>

    <div class="main-content">

    <div class="table-container">
        <div class="header">Lecturers</div><br>

        <div>

                <table class="table">

                    <thead class="table-head">  
                        <tr class="border-0">
                            <th class="border-0">ID</th>
                            <th class="border-0">Lecturer Name</th>
                            <th class="border-0">Project ID</th>
                            <th class="border-0">Project Hours</th>
                            <th class="border-0">Contact</th>
                            <th class="border-0">Office</th>
                            <th class="border-0">Date Joined</th>
                        </tr>
                    </thead>

                    <tbody>

                        <tr>
                            <td>0</td>
                            <td>Mr Malcolm</td>
                            <td>1</td>
                            <td>17 Hours</td>
                            <td>87654321</td>
                            <td>Blk 31, #07-01</td>
                            <td>12/12/2005</td>
                        </tr>
                        <tr>
                            <td>1</td>
                            <td>Mr Elyas</td>
                            <td>0</td>
                            <td>8 Hours</td>
                            <td>12345678</td>
                            <td>Blk 27, #04-21</td>
                            <td>30/2/2017</td>
                        </tr>
                        
                    </tbody>
                </table>
        </div>
        
    </div>

    </div>
  
    <!-- ============================================================== -->
    <!-- end admin, project page  -->
    <!-- ============================================================== -->

    <script src="js/script.js"></script>

</body>
 
</html>