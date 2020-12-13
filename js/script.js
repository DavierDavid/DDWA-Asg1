$( document ).ready(function() {
    console.log( "ready!" );


    //------------- Admin Login details -----------------------------------------------------------
    var adminID = "admin";
    var adminPW = "123";

    //------------- Students Login details --------------------------------------------------------
    var studentID = "student";
    var studentPW = "123";

    //------------- Lecturers Login details -------------------------------------------------------
    var lecturerID = "lecturer";
    var lecturerPW = "123";

    //------------- function to check which user logged in ----------------------------------------

    //Get button on click
    $("#loginBtn").click(function(){
        checkLogin();
    });

    //Function
    function checkLogin(){

        //Get user input
        var userInput = $("#username").val();
        var passInput = $("#password").val();

        if((userInput == adminID) && (passInput == adminPW)){
            console.log("admin logged!");
            window.location.href = 'admin-project.php';
        }
        else if((userInput == studentID) && (passInput == studentPW)){
            console.log("student logged!");
        }
        else if((userInput == lecturerID) && (passInput == lecturerPW)){
            console.log("lecturer logged!");
        }
        else{
            console.log("wrong pass/user");
            alert("wrong username/password");
        }
    }













});