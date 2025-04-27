<?php
include_once "dbconnect.php";
session_start();

if(isset($_POST['l_username_or_l_email'])){
    $usrnm_or_email = $_POST['l_username_or_l_email'];
    $psswrd = $_POST['l_password'];

    $sql_check_userstable = "SELECT *
                                FROM `user_info`
                                    WHERE (`username` = '$usrnm_or_email' 
                                        OR `email` = '$usrnm_or_email') 
                                    AND `password` = '$psswrd'";

    $sql_result = mysqli_query($conn,$sql_check_userstable);
    $count_result = mysqli_num_rows($sql_result);

    if($count_result == 1){
        //existing user
        $row = mysqli_fetch_assoc($sql_result);
        
        //create session variables
        $_SESSION['l_info_id'] = $row['user_id'];
        $_SESSION['l_fullname'] = $row['fullname'];
        $_SESSION['l_username'] = $row['username'];
        $_SESSION['l_email'] = $row['email'];
        $_SESSION['l_contact_no'] = $row['contact_number'];
        $_SESSION['l_password'] = $row['password'];
        $_SESSION['users_user_type'] = $row['user_type']; //used for redirection of the page depending on the user type
       
        if($row['user_type'] == 'A'){
            header("location: admin");
            exit();
        }
        else if($row['user_type'] == 'U'){
            header("location: user");
            exit();
        }
        else{
            header("location: index.php?error=user_not_found");
            exit();
        }
    }
    else{
       header("location: login.php?error=Invalid username/email or password. Please try again.");
       exit();
    }
}
?>
</body>


