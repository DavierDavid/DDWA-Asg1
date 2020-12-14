<?php

 // 1. Create a database connection
 $dbhost = "127.0.0.1";
 $dbuser = "root";
 $dbpass = "";
 $dbname = "ddwaasg1";
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
    <title>Project | Student</title>
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

    <br><br>

    <div class="table-container2">
        <div class="header">Assigned project</div><br>

        <div>

                <table class="table">
<!--
                    <thead class="table-head">  
                        <tr class="border-0">
                            <th class="border-0">ID</th>
                            <th class="border-0">Project Title</th>
                            <th class="border-0">Company</th>
                            <th class="border-0">Supervisor</th>
                            <th class="border-0">Start Date</th>
                            <th class="border-0">End Date</th>
                            <th class="border-0">Description</th>
                        </tr>
                    </thead>
-->
                    <tbody>

                    <?php
                    $sql = "SELECT project.project_Title, project.company_Name, project.lecturer_Name, project.start_Date, project.end_Date, project.project_desc FROM `project` INNER JOIN `student` ON project.project_ID = student.project_ID WHERE project.project_ID = 0;";
                    if ($result = mysqli_query($con,$sql)){
                        $row = mysqli_fetch_assoc($result);
                        $html = '<table><tr><th class="border-0">' .implode('</th><th class="border-0">', array_keys($row)).'</th></tr>';
                        do{
                            $html .= '<tr><td>'.implode('</td><td>', $row).'</td></tr>';
                        }while($row = mysqli_fetch_assoc($result));
                        $html .='</table>';
                    }
                    echo $html;
                    ?>
                        
                    </tbody>
                </table>
        </div>
        
    </div>


    <script src="js/script.js"></script>

</body>
 
</html>