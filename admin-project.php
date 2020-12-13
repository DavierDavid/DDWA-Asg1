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
        <div class="header">Projects</div><br>

        <div>

                <table class="table">

                    <thead class="table-head">  
                        <tr class="border-0">
                            <th class="border-0">ID</th>
                            <th class="border-0">Project Title</th>
                            <th class="border-0">Company</th>
                            <th class="border-0">Supervisor</th>
                            <th class="border-0">Budget</th>
                            <th class="border-0">Software</th>
                            <th class="border-0">Start Date</th>
                            <th class="border-0">End Date</th>
                            <th class="border-0">Description</th>
                        </tr>
                    </thead>

                    <tbody>

                        <tr>
                            <td>0</td>
                            <td>Assignment 1</td>
                            <td>Ngee Ann Poly</td>
                            <td>Mr Malcolm</td>
                            <td>$20.00</td>
                            <td>After Effects</td>
                            <td>12/12/2020 </td>
                            <td>14/12/2020</td>
                            <td>Nid to do assignment</td>
                        </tr>
                        <tr>
                            <td>1</td>
                            <td>Assignment 2 </td>
                            <td>Ngee Ann Poly</td>
                            <td>Mr Elyas</td>
                            <td>$288.00</td>
                            <td>Photoshop</td>
                            <td>30/2/2020</td>
                            <td>31/2/2020</td>
                            <td>Nid to do assignment</td>
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