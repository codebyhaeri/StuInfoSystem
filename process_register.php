<?php
include_once "dbconnect.php";

$fullname = $_POST['r_fullname'];
$username = $_POST['r_username']; 
$email = $_POST['r_email'];
$contact_no = $_POST['r_contact_no'];
$psswrd = $_POST['r_password']; 
$conf_psswrd = $_POST['r_conf_password'];

                //check if the password matches the confirmed password
                    function chk_pass($p1, $p2) {
                        return ($p1 == $p2) ? 1:0;
                    }
                    if(!chk_pass($psswrd, $conf_psswrd)){
                    header("location: register.php?error= Password mismatch");
                    die;
                    }

                //veryfying the uniqueness of the email
                    $verify_query = mysqli_query($conn, "SELECT email FROM user_info WHERE email='$email'");
                    // Checking if there are any rows returned by the query (i.e., if the email already exists)
                    if(mysqli_num_rows($verify_query) != 0) {
                        header("location: register.php?error= Sorry, the email you entered is already registered with an existing acccount. Please try another one.");
                        die;
                    }   
                
                //veryfying the uniqueness of the username
                    $verify_query = mysqli_query($conn, "SELECT username FROM user_info WHERE username='$username'");
                    // Checking if there are any rows returned by the query (i.e., if the username already exists)
                    if(mysqli_num_rows($verify_query) != 0) {
                        header("location: register.php?error= Sorry, the username you entered is already taken. Please try another one.");
                        die;
                    } 
                               
    //This will check if the user's name is already existing
    $sql_chk_user = "SELECT user_id FROM user_info
                     WHERE `fullname` = '$fullname'";
    $sql_result = mysqli_query($conn, $sql_chk_user); //this will execute the SQL above.
    
    if (mysqli_num_rows($sql_result) > 0) {
        // Duplicate found
        header("location: register.php?error=You already have an account! Login to continue.");
        exit();
    }

    if($count_result > 0){
        //if user already exists = error message
        header("location: register.php?error= You already have an account! Login to continue.");
    }
    else {
        //user can register
            $sql_new_user = "INSERT INTO `user_info`
            (`fullname`, `username`, `email`, `password`, `contact_number`)
            VALUES
            ('$fullname', '$username', '$email', '$psswrd', '$contact_no')";
        $execute_query = mysqli_query($conn,$sql_new_user);
        
        if(!$execute_query){
        header("location: register.php?error=Insert_Failed");
        }
        else {
            $success_message = urlencode("Successfully registered! Please login to continue."); 
            header("location: login.php?msg=$success_message"); 
            exit();
        }        
    }
?>