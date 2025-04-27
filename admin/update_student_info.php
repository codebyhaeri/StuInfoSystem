<?php
    include_once "../dbconnect.php";

    if(isset($_POST['u_firstname'], $_POST['u_middlename'], $_POST['u_lastname'])) {

    $student_id = $_POST['u_student_id'];
    $student_email = $_POST['u_email'];
    $student_firstname = $_POST['u_firstname'];
    $student_middlename = $_POST['u_middlename'];
    $student_lastname = $_POST['u_lastname'];
    $student_course = $_POST['u_course'];
    $student_sec_year = $_POST['u_sec_year'];
    $student_bdate = $_POST['u_bdate'];
    $student_gender = $_POST['u_gender'];
    $student_contact_no = $_POST['u_contact_no'];
    $student_address = $_POST['u_address'];
    $student_city = $_POST['u_city'];
    $student_province = $_POST['u_province'];
    $student_zip_c = $_POST['u_zip_c'];
    
    // Concatenate firstname, middlename, and lastname to form fullname
    $student_fullname = $student_firstname . ' ' . $student_middlename . ' ' . $student_lastname;
    
    // Update query
    $sql_update_student_info = "UPDATE `student_info`
                                SET 
                                    `firstname`='$student_firstname',
                                    `middlename`='$student_middlename',
                                    `lastname`='$student_lastname',
                                    `email`='$student_email',
                                    `section_year`='$student_sec_year',
                                    `firstname`='$student_firstname',
                                    `lastname`='$student_lastname',
                                    `course`='$student_course',
                                    `birthdate`='$student_bdate',
                                    `gender`='$student_gender',
                                    `contact_number`='$student_contact_no',
                                    `address`='$student_address',
                                    `city`='$student_city',
                                    `province`='$student_province',
                                    `zip_code`='$student_zip_c'
                                WHERE student_id ='$student_id'";

    if (mysqli_query($conn, $sql_update_student_info)) {
        header("Location: ../admin/index.php?page=manage&update_status=1");
    }

}
?>

