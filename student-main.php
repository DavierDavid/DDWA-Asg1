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
    <title>Home | Student</title>
    <!-- CSS -->
    <link rel="stylesheet" href="css/style.css">
    <script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/ionicons@5.2.3/dist/ionicons.js"></script>

</head>

<body>


    <div class="topnav"><div class="nav-title">Database</div><ion-icon id="logoutBtn" class="icon" name="person-circle"></ion-icon> </div>

    <div class="sidenav">
        <ul class="link-container">
            <a href="student-main.php"><li class="side-link">Student</li></a>
            <a href="student-project.php"><li class="side-link">Projects</li></a>
        </ul>
    </div>


    <div class="account-content">


                <div>
                    <h2 class="user-Name">Joses Kang</h2>
                    <div class="student-ID">Student ID: <a id="stdID">0</a></div>
                </div>

                    

                <div>
                    <div>
                        <span class="user-details" id="userSchool">ICT</span>
                        <span class="user-details" id="userContact">87654321</span>
                        <span class="user-details" id="userYearIn">2019</span>
                        <span class="user-details" id="userYearOut">2022</span>
                    </div>
                </div>

    </div>

    <br><br><br>

    <div class="table-container2">
        <div class="header">Notebook</div><br>

        <div>

                <table class="table">

                    <thead class="table-head">  
                        <tr class="border-0">
                            <th class="border-0">Notebook ID</th>
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
                        
                    </tbody>
                </table>
        </div>
        
    </div>


    <script src="js/script.js"></script>

</body>
 
</html>