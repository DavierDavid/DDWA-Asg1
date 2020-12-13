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
    <title>Students | Admin</title>
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
        <div class="header">Students without Notebooks</div><br>

        <div>

                <table class="table">

                    <thead class="table-head">  
                        <tr class="border-0">
                            <th class="border-0">ID</th>
                            <th class="border-0">Student Name</th>
                            <th class="border-0">School</th>
                            <th class="border-0">Contact</th>
                            <th class="border-0">Project ID</th>
                            <th class="border-0">Year in</th>
                            <th class="border-0">Yeaer out</th>
                        </tr>
                    </thead>

                    <tbody>

                        <tr>
                            <td>0</td>
                            <td>Joses Kang</td>
                            <td>ICT</td>
                            <td>87654321</td>
                            <td>1</td>
                            <td>2019</td>
                            <td>2022</td>
                        </tr>
                        <tr>
                            <td>1</td>
                            <td>Davier Toh</td>
                            <td>ICT</td>
                            <td>12345678</td>
                            <td>0</td>
                            <td>2018</td>
                            <td>2021</td>
                        </tr>
                        
                    </tbody>
                </table>
        </div>
        
    </div>

    <div class="table-container">
        <div class="header">Students with Notebooks</div><br>

        <div>

                <table class="table">

                    <thead class="table-head">  
                        <tr class="border-0">
                            <th class="border-0">ID</th>
                            <th class="border-0">Student Name</th>
                            <th class="border-0">School</th>
                            <th class="border-0">Contact</th>
                            <th class="border-0">Project ID</th>
                            <th class="border-0">Year in</th>
                            <th class="border-0">Year out</th>
                            <th class="border-0">Notebook ID</th>

                        </tr>
                    </thead>

                    <tbody>

                        <tr>
                            <td>2</td>
                            <td>Irfan Shah</td>
                            <td>FMS</td>
                            <td>87654321</td>
                            <td>1</td>
                            <td>2019</td>
                            <td>2022</td>
                            <td>0</td>
                        </tr>
                        <tr>
                            <td>3</td>
                            <td>Bing Heng</td>
                            <td>BA</td>
                            <td>12345678</td>
                            <td>2</td>
                            <td>2018</td>
                            <td>2021</td>
                            <td>1</td>
                        </tr>
                        
                    </tbody>
                </table>
        </div>
        
    </div>

    <div class="table-container">
        <div class="header">Notebooks</div><br>

        <div>

                <table class="table">

                    <thead class="table-head">  
                        <tr class="border-0">
                            <th class="border-0">Notebook ID</th>
                            <th class="border-0">Student ID</th>
                            <th class="border-0">Student Name</th>
                            <th class="border-0">Software ID</th>
                            <th class="border-0">Software Name</th>
                            <th class="border-0">Serial No.</th>
                            <th class="border-0">Make</th>
                            <th class="border-0">Model</th>
                            <th class="border-0">OS</th>
                            <th class="border-0">RAM</th>
                            <th class="border-0">Disk Space</th>
                            <th class="border-0">Processor</th>
                        </tr>
                    </thead>

                    <tbody>

                        <tr>
                            <td>0</td>
                            <td>2</td>
                            <td>Irfan Shah</td>
                            <td>0</td>
                            <td>Photoshop</td>
                            <td>123456</td>
                            <td>HP</td>
                            <td>Pavilion</td>
                            <td>Windows</td>
                            <td>16GB</td>
                            <td>2TB</td>
                            <td>Intel</td>
                        </tr>
                        <tr>
                            <td>1</td>
                            <td>3</td>
                            <td>Bing Heng</td>
                            <td>3</td>
                            <td>After Effects</td>
                            <td>654321</td>
                            <td>Apple</td>
                            <td>Apple</td>
                            <td>Mac OS</td>
                            <td>8GB</td>
                            <td>1TB</td>
                            <td>Silicon</td>
                        </tr>
                        
                    </tbody>
                </table>
        </div>
        
    </div>

    </div>

    <br><br><br>
  
    <!-- ============================================================== -->
    <!-- end admin, project page  -->
    <!-- ============================================================== -->

    <script src="js/script.js"></script>

</body>
 
</html>