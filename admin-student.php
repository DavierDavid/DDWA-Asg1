<?php

 // 1. Create a database connection
 $dbhost = "127.0.0.1";
 $dbuser = "amphibis_davier";
 $dbpass = "g0n@$#kRAYiD";
 $dbname = "amphibis_davier";
 $con = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
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
        <div class="header">Students</div><br>

        <div>

                <table class="table">
                    <!--
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
-->
                    <tbody>

                    <?php
                    $sql = "SELECT * FROM student";
                    if ($result = mysqli_query($con,$sql)){
                        $row = mysqli_fetch_assoc($result);
                        $html = '<table><tr><th class="border-0">' .implode('</th><th class="border-0">', array_keys($row)).'</th></tr>';
                        do{
                            $html .= '<tr><td>'.implode('</td><td>', $row).'</td></tr>';
                        }
                        while($row = mysqli_fetch_assoc($result));

                        $html .='</table>';
                    }
                    echo $html;
                    ?>
                        
                    </tbody>
                </table>
        </div>
        
    </div>

    <div class="table-container">
        <div class="header">Notebooks</div><br>

        <div>

                <table class="table">
                    <!--
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
                    -->
                    <tbody>

                    <?php
                    $sql = "SELECT * FROM notebook";
                    if ($result = mysqli_query($con,$sql)){
                        $row = mysqli_fetch_assoc($result);
                        $html = '<table><tr><th class="border-0">' .implode('</th><th class="border-0">', array_keys($row)).'</th></tr>';
                        do{
                            $html .= '<tr><td>'.implode('</td><td>', $row).'</td></tr>';
                        }
                        while($row = mysqli_fetch_assoc($result));

                        $html .='</table>';
                    }
                    echo $html;
                    ?>
                        
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