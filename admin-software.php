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
    <title>Softwares | Admin</title>
    <!-- CSS -->
    <link rel="stylesheet" href="css/style.css">
    <script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/ionicons@5.2.3/dist/ionicons.js"></script>

</head>

<body>

    <!-- ============================================================== -->
    <!-- admin, project page  -->
    <!-- ============================================================== -->

    <div class="topnav"><div class="nav-title">Database</div><ion-icon id="logoutBtn" class="icon" name="person-circle"></ion-icon> </div>

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
        <div class="header">Softwares</div><br>

        <div>

                <table class="table">

                    <thead class="table-head">  
                        <tr class="border-0">
                            <th class="border-0">ID</th>
                            <th class="border-0">Software Title</th>
                            <th class="border-0">Category ID</th>
                            <th class="border-0">Category</th>
                            <th class="border-0">Publisher</th>
                            <th class="border-0">Price per copy</th>
                            <th class="border-0">License</th>
                            <th class="border-0">Date purchased</th>
                        </tr>
                    </thead>

                    <tbody>

                        <tr>
                            <td>0</td>
                            <td>Photoshop</td>
                            <td>0</td>
                            <td>Editing</td>
                            <td>Adobe</td>
                            <td>$2</td>
                            <td>Student</td>
                            <td>14/12/2020</td>
                        </tr>
                        <tr>
                            <td>1</td>
                            <td>After Effects</td>
                            <td>0</td>
                            <td>Editing</td>
                            <td>Adobe</td>
                            <td>$50</td>
                            <td>Student</td>
                            <td>31/2/2020</td>
                        </tr>
                        
                    </tbody>
                </table>
        </div>
        
    </div>

    <div class="table-container">
        <div class="header">Category</div><br>

        <div>

                <table class="table">

                    <thead class="table-head">  
                        <tr class="border-0">
                            <th class="border-0">ID</th>
                            <th class="border-0">Category Name</th>
                            <th class="border-0">Software ID</th>
                        </tr>
                    </thead>

                    <tbody>

                        <tr>
                            <td>0</td>
                            <td>Editing</td>
                            <td>0</td>
                        </tr>
                        <tr>
                            <td>1</td>
                            <td>Web Browser</td>
                            <td>2</td>
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