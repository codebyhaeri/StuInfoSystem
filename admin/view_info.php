<?php 
include_once "../dbconnect.php"; 

session_start();

// Check if the user is an admin
if ($_SESSION['users_user_type'] != 'A') {
    header("location: index.php");
    exit;
}

// Check if the form was submitted
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['view'])) {  
    // var_dump($_POST);
    
    // Retrieve student information from the POST request
    $s_student_id = $_POST['s_student_id'];
    $s_email= $_POST['s_email'];
    $s_firstname = $_POST['s_firstname'];
    $s_middlename = $_POST['s_middlename'];
    $s_lastname = $_POST['s_lastname'];
    $s_course = $_POST['s_course'];
    $s_section_year = $_POST['s_section_year']; 
    $s_bdate = $_POST['s_bdate']; 
    $s_gender = $_POST['s_gender']; 
    $s_contact_no = $_POST['s_contact_no']; 
    $s_address = $_POST['s_address']; 
    $s_city = $_POST['s_city']; 
    $s_province = $_POST['s_province']; 
    $s_zip_c = $_POST['s_zip_c']; 
    $s_student_status = $_POST['s_student_status']; 
    
    //Name columns into a full string
    $s_fullname = $s_firstname . ' ' . $s_middlename . ' ' . $s_lastname;
       
    // Display the student information
    ?>

    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <link rel="stylesheet" href="../css/bootstrap.css">
        <link rel="stylesheet" href="../style/profile_search.css">
        <!-- Include Font Awesome for icon usage -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
        <title>View Student</title>
    </head>
        <body>
        <button class="back-button" onclick="window.location.href='search_bar1.php';">
            <i class="fas fa-arrow-left"></i>
        </button>

        <div class="container d-flex justify-content-center align-items-center" style="height: 50vh;">
            <div class="profile-card">
                <!-- Bio Section -->
                <div class="profile-card__bio">
                    <h1 class="profile-card__bio-name"><?= htmlspecialchars($s_fullname); ?></h1>
                    <h2 class="profile-card__bio-title"><?= htmlspecialchars($s_course); ?> - <?= htmlspecialchars($s_section_year); ?></h2>
                    <?php 
                        // Determine badge color based on student status
                        $status_class = '';
                        $status_text = htmlspecialchars($s_student_status); // To avoid XSS, ensure the status is safe to output

                        if ($status_text == 'Regular') {
                            $status_class = 'bg-success'; // Green for regular
                        } elseif ($status_text == 'Irregular') {
                            $status_class = 'bg-warning'; // Yellow for irregular
                        } elseif ($status_text == 'Shifter') {
                            $status_class = 'bg-primary'; // Blue for shifter
                        } else {
                            $status_class = 'bg-secondary'; // Default color for other statuses
                        }
                    ?>
                    <span class="badge rounded-pill <?= $status_class; ?> float-center"><?= $status_text; ?></span>
                </div>
                   <!-- Links Section -->
                        <div class="profile-card__links">
                            <!-- Email -->
                            <div class="profile-card__links-button" type="button">
                                <strong>Email:</strong> <?= htmlspecialchars($s_email); ?>
                            </div>
                            <!-- Birthday -->
                            <div class="profile-card__links-button" type="button">
                                <strong>Birthday:</strong> <?= (new DateTime($s_bdate))->format('F j, Y'); ?>
                            </div>
                            <!-- Gender -->
                            <div class="profile-card__links-button" type="button">
                                <strong>Gender:</strong> <?= htmlspecialchars($s_gender); ?>
                            </div>
                            <!-- Contact Number -->
                            <div class="profile-card__links-button" type="button">
                                <strong>Contact Number:</strong> <?= htmlspecialchars($s_contact_no); ?>
                            </div>
                            <!-- Full Address and Extended Info (City, Province, Zip Code) -->
                            <div class="profile-card__links-button" type="button">
                                <strong>Full Address:</strong> <?= htmlspecialchars($s_address); ?><br>
                            </div>
                            <!--Edit Link Section-->
                            <div class="hr_before_update">
                                <div class="links-update">
                                    <a href="../admin/index.php?page=manage&update_student=<?=htmlspecialchars($s_student_id);?>">Update</a>
                                </div>
                            </div>
                        </div>
            </div>
        </div>
    </body>
    </html>
    
<?php
} else {
    // If the page is accessed without a POST request, redirect to the search page
    header("location: search_bar1.php");
    exit;
}
?>

