<?php 
include_once "../dbconnect.php"; 

session_start();
    $u_user_id = $_SESSION['l_info_id']; //holds user id parameter for all processing
    if($_SESSION['users_user_type'] != 'A'){
        header("location: index.php");
        exit;
    }
    if(isset($_GET['logout'])){
        session_destroy();
        header("location: ../login.php");
        die();
    }
    if (!isset($_GET['page'])) {
        header("location: index.php?page=home");
        exit;
    }
?>  

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../css/bootstrap.css"> 
    <title>Admin</title>
</head>
<body> 

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<link rel="stylesheet" href="css/bootstrap.css">
<link rel="stylesheet" href="../style/user.css">
<link rel="stylesheet" href="../style/profile_tab.css">
<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">
</head>
        <title>Student's Information</title>
</head>
<body>
        
<!--=========================== ADMIN - HOME============================-->

<?php if(isset($_GET['page'])){
    if($_GET['page'] == 'home'){ 
        
        include_once "../a_nav_bar.php";
        ?>

    
    <main>
        <div class="school-img-container">

                <!-- School Image Section -->
                <div class="img-container">
                    
                    <img src="https://bupcvmgo.weebly.com/uploads/6/5/0/9/65099011/bu-torch-of-wisdom_1_orig.jpg"
                        alt="School img" class="school-img">

                    <h1 class="img-title1">
                    Bicol University Polangui Campus
                    </h1>
                    <h1 class="img-title2">
                    Characterized by productive scholarship, transformative leadership, collaborative service, 
                    and distinctive character for sustainable societies
                    </h1>

                    
                </div>


            <!-- Vision Image Section -->
  
            <div class="about-img-container">
                <div style="display: flex; align-items: center; justify-content: space-between; border: 1px solid #ccc; padding: 10px;">
                        <p style="margin-left: 5vh ;">
                        <div class="aboutbupc">
                            <h3 style="font-size: 20px; padding-top:8vh; margin-bottom: 30px; color: #D16C2D ">

                                <strong>Mission, Vision & Quality Policy</strong></h3>

                            <h4 style="font-size: 30px; line-height: 30px; margin-bottom: 20px; color: #1a73e8; font-family: 'PT Serif'; font-weight: 400; text-transform: none; letter-spacing: 7px; font-style: italic; margin-bottom:15px;">
                                Mission
                            </h4>
                            <p >The Bicol University shall give professional and technical training, 
                                and provide advanced and specialized instruction in literature, philosophy, the sciences and arts, besides providing for the promotion of scientific and technological researches (RA 5521, Sec. 3.0).</p>
                            
                            
                            <h5 style="font-size: 30px; padding-top: 5vh; line-height: 30px; margin-bottom: 20px; color: #1a73e8; font-family: 'PT Serif'; font-weight: 400; text-transform: none; letter-spacing: 7px; font-style: italic;">
                                Vision
                            </h5>
                            <p >A University for Humanity characterized by productive scholarship, transformative leadership, 
                                collaborative service, and distinctive character for sustainable societies.</p>

                            <h6 style="font-size: 30px;padding-top: 5vh; line-height: 20px; margin-bottom: 30px; color: #1a73e8; font-family: 'PT Serif'; font-weight: 400; text-transform: none; letter-spacing: 7px; font-style: italic;">
                            Quality Policy
                            </h6>
                            <p >Bicol University commits to continually strive for excellence in instruction, research, and 
                                extension by meeting the highest level of clientele satisfaction and adhering to quality standards and applicable statutory and regulatory requirements</p>
                        </div>
                        </p>
                        <img src="https://bicol-u.edu.ph/wp-content/themes/yootheme/cache/c9/Catangui-Official-2024-c9628f34.webp"
                            alt="Vision image" alt="Image" style=" height: auto;">
            </div>
                   
        
        

                

                
    <h1 class="uk-margin-small" id="page#4">     Dr. Mary Joy B. Catangui    </h1>
    <h2 class="uk-h3 uk-text-primary uk-margin-small" id="text#5">  Dean, Polangui Campus    </h2>

    <div class="el-item uk-margin-remove-first-child uk-active" id="uk-tab-6" role="tabpanel" aria-labelledby="uk-tab-5">
</div> 
        

<hr>

    

        <section id="about-us-section">
            <div class="about-us-container">
                <h2 class="aboutus-heading">About Us</h2>
                <p>
                    <strong class="subheading"> 
                          BICOL UNIVERSITY 
                      </strong>
                      Bicol University is the premier state university in Bicol region founded on June 21, 1969 through the passage of RA 5521. As an institution promoting Scholarship, Leadership, Character, and Service as its core values, BU has risen to SUC Level IV status.
                      Internal Quality Assurance Office
                    “Ensuring Excellence in Education”

                    The Internal Quality Assurance (IQA) Office is dedicated in developing and implementing a comprehensive quality assurance system aimed at maintaining, monitoring, and enhancing the academic standards of the programs offered by the University.

                    The IQA Office strives to meet the highest levels of client satisfaction while adhering to established quality standards. The commitment of the office to continuous improvement ensures not only upholding but also elevating the educational experience of the students and stakeholders
                </p>

                <h2>


                <img src="../img/logo_1.png" alt="Website Logo" width="100">
                </h2>

            </div>
        </section>

        <section class="our-school-map" id="campus-on-map">
            <h2 class="location-heading">
                  Find Our Location On Map
              </h2>
            <iframe src=
"https://mapcarta.com/Bicol_University_Polangui_Campus_R13027320/Map"
                    width="100%" height="450" 
                    style="border:0;"
                    loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade">
              </iframe>
        </section>

        <section id="contact-form">
            <h2 class="contact-form-heading">
              Contact Us Form
              </h2>
            <div class="container">
                <form id="contactForm">
                    <div class="form-group">
                        <label for="fullName">
                          Full Name
                          </label>
                        <input type="text" id="fullName" 
                               name="fullName" required>
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" id="email"
                               name="email" required>
                    </div>
                    <div class="form-group">
                        <label for="phone">Phone</label>
                        <input type="text" id="phone" 
                               name="phone" required>
                    </div>
                    <div class="form-group">
                        <label for="message">Message</label>
                        <textarea id="message" name="message" 
                                  required>
                          </textarea>
                    </div>
                    <button type="submit">Submit</button>
                </form>
            </div>
        </section>

            <!-- Bottom Border -->
    <div class="bottom-border">
        <p>BUPC Student Registration Portal. All Rights Reserved.</p>
    </div>
    
    </main>

    

    <script src="index.js"></script>
    <script>


</script>
</body>
</html>
 <?php } /*page=home*/

// =========================== HOMEPAGE - PROFILE============================

        else if($_GET['page'] == 'profile'){
            include_once "../a_nav_bar.php";
            ?>

                <?php 
                    if (isset($_GET['insert_status'])) {
                        $alertClass = $_GET['insert_status'] == '1' ? 'alert-success' : 'alert-danger';
                        $alertMessage = $_GET['insert_status'] == '1' 
                            ? "Student Information Added Successfully." 
                            : "There was an error.";
                        echo "<div class='alert $alertClass'>$alertMessage</div>";
                    }

                    if (isset($_GET['error'])) {
                        echo "<div class='alert alert-danger'>" . htmlspecialchars($_GET['error']) . "</div>";
                    }
                ?>

<section>
        <div class="card">
            <div class="top">
                <img class="profile-photo" src="https://cdn0.iconfinder.com/data/icons/small-n-flat/24/678099-profile-filled-128.png" alt="profile-img">
                <h3 class="name">User Profile <span class="status"></span></h3>
            </div>
            <div class="middle">
                <div class="time">12:34 PM local time</div>
            </div>

            <?php 
            // Check if the necessary session variables are set
            if(isset($_SESSION['l_fullname'], $_SESSION['l_password'])) {
                $i_fullname = $_SESSION['l_fullname'];
                $i_password = $_SESSION['l_password'];

                // Retrieve student information based on session variables
                $sql_student_info = "SELECT * FROM user_info WHERE fullname = '$i_fullname' AND password = '$i_password'";
                $student_result = mysqli_query($conn, $sql_student_info);

                if ($student_result) {
                    if (mysqli_num_rows($student_result) > 0) {
                        // Fetch student information
                        $row = mysqli_fetch_assoc($student_result);
                        $i_username = $row['username'];
                        $i_email = $row['email'];
                        $i_contact_no = $row['contact_number'];
                    } else {
                        echo "No information found for the logged-in user.";
                    }
                } else {
                    echo "Error: " . mysqli_error($conn);
                }
            } else {
                echo "Student information not available. Please log in first.";
            }
            ?>

            <?php if(isset($i_fullname, $i_username, $i_email, $i_contact_no)): ?>
            <div class="bottom">              
                <p><span class="profile-action">Username: </span> <?php echo $i_username; ?></p>
                <p><span class="profile-action">Fullname:</span> <?php echo $i_fullname; ?></p>
                <p><span class="profile-action">Email:</span> <?php echo $i_email; ?></p>
                <p><span class="profile-action">Contact Number:</span> <?php echo $i_contact_no; ?></p>
            </div>
            <?php endif; ?>
        </div>
    </section>

    <?php } /*page=profile*/

    
    else if($_GET['page'] == 'manage'){
        include_once "../a_nav_bar.php";
        ?>

        <!--Deactivate Student Status-->
        <div class="row">
            <div class="col-4 bg-info text-light">
                <?php
                    if(isset($_GET['deactivate_student'])){
                        $student_id = $_GET['deactivate_student'];

                        $sql_deactivate_student = "UPDATE `student_info`
                                                    SET `user_status`='I'
                                                WHERE `student_id`='$student_id'";
                        mysqli_query($conn, $sql_deactivate_student);
                    }
                    if(isset($_GET['activate_student'])){
                        $student_id = $_GET['activate_student'];

                        $sql_activate_student = "UPDATE `student_info`
                                                    SET `user_status`='A'
                                                WHERE `student_id`='$student_id'";
                        mysqli_query($conn, $sql_activate_student);
                    }    
                            
      /*Update Student Information*/
                  if(isset($_GET['update_student'])){
                  $student_id = $_GET['update_student'];
                          
                  $sql_get_student_info = "SELECT * 
                                              FROM `student_info`
                                            WHERE student_id = '$student_id'
                                            AND user_type = 'S' ";
                  $result = mysqli_query($conn, $sql_get_student_info);
                  $data_row = mysqli_fetch_assoc($result);
                  
                ?>

                  <h3 class="display-6">Update Student Info</h3>
                    <form action="../admin/update_student_info.php" method="POST">
                          <label for="">Student Id</label>
                          <input value="<?php echo $data_row['student_id'];?>" type="text" name="u_student_id" readonly class="form-control mb-3">
                          
                          <label for="">First Name</label>
                          <input value="<?php echo $data_row['firstname'];?>" type="text" name="u_firstname" class="form-control mb-3">

                          <label for="">Middle Name</label>
                          <input value="<?php echo $data_row['middlename'];?>" type="text" name="u_middlename" class="form-control mb-3">

                          <label for="">Last Name</label>
                          <input value="<?php echo $data_row['lastname'];?>" type="text" name="u_lastname" class="form-control mb-3">

                          <label for="">Course</label>
                          <input value="<?php echo $data_row['course'];?>" type="text" name="u_course" class="form-control mb-3">

                          <label for="">Year and Section</label>
                          <input value="<?php echo $data_row['section_year'];?>" type="text" name="u_sec_year" class="form-control mb-3">

                          <label for="">Birthday (YYYY/MM/DD)</label>
                          <input value="<?php echo $data_row['birthdate'];?>" type="text" name="u_bdate" class="form-control mb-3">

                          <label for="">Gender</label>
                          <input value="<?php echo $data_row['password'];?>" type="text" name="u_gender" class="form-control mb-3">

                          <label for="">Contact Number</label>
                          <input value="<?php echo $data_row['contact_number'];?>" type="text" name="u_contact_no" class="form-control mb-3">

                          <label for="">Full Address</label>
                          <input value="<?php echo $data_row['address'];?>" type="text" name="u_address" class="form-control mb-3">

                          <label for="">City</label>
                          <input value="<?php echo $data_row['city'];?>" type="text" name="u_city" class="form-control mb-3">

                          <label for="">Province</label>
                          <input value="<?php echo $data_row['province'];?>" type="text" name="u_province" class="form-control mb-3">

                          <label for="">Zip Code</label>
                          <input value="<?php echo $data_row['zip_code'];?>" type="text" name="u_zip_c" class="form-control mb-3">

                          <label for="">Email</label>
                          <input value="<?php echo $data_row['email'];?>" type="text" name="u_email" class="form-control mb-3">

                          <label for="">Password</label>
                          <input value="<?php echo $data_row['password'];?>" type="text" name="u_password" class="form-control mb-3">

                          <input type="submit" class="btn btn-primary">
                    </form>
                  <?php
                  }
                  ?>
        <!-- Delete student information -->
                <?php
                    if(isset($_GET['delete_student'])){
                        $student_id = $_GET['delete_student'];

                        $sql_deactivate_student = "DELETE FROM `student_info` 
                                                    WHERE `student_id` = '$student_id'";
                        mysqli_query($conn, $sql_deactivate_student);
                    }  
                ?>

    </div>
    <!--Update, Deactivate Function-->
           <div class="col-8">
               <?php
                    $sql_get_student = "SELECT * FROM `student_info` 
                                        WHERE `user_status`='A' order by student_id DESC";
                    $get_result = mysqli_query($conn, $sql_get_student); 
               ?>
               <table class="table">
                   <?php
                       while ($row = mysqli_fetch_assoc($get_result) ){ ?>
                        <tr>
                            <td><?php echo $row['student_id'];?></td>
                            <td><?php echo $row['firstname'] . ' ' . $row['middlename'] . ' ' . $row['lastname']; ?></td>
                            <td><?php echo $row['course'];?></td>
                            <td><?php echo $row['section_year'];?></td>
                            <td><?php echo $row['city'] . ',' . $row['province'];?></td>
                            <td> <a href="../admin/index.php?page=manage&update_student=<?php echo $row['student_id'];?>" class="btn btn-info">Update</a> </td>
                            <td> <a href="../admin/index.php?page=manage&deactivate_student=<?php echo $row['student_id'];?>" class="btn btn-warning">Deactivate</a></td>
                            <td> <a href="../admin/index.php?page=manage&delete_student=<?php echo $row['student_id'];?>" class="btn btn-danger">Delete</a></td>
                        </tr>
                       <?php 
                       }
                   ?>
               </table>    

    <!--Update, Activate Function-->
           <div class="col-8">
               <?php
                    $sql_get_student2 = "SELECT * FROM `student_info` WHERE `user_status`='I' order by student_id DESC";
                    $get_result2 = mysqli_query($conn, $sql_get_student2); 
               ?>
               <table class="table">
                   <?php
                       while ($row = mysqli_fetch_assoc($get_result2) ){ ?>
                        <tr>
                            
                        <td><?php echo $row['student_id'];?></td>
                            <td><?php echo $row['firstname'] . ' ' . $row['middlename'] . ' ' . $row['lastname']; ?></td>
                            <td> <a href="../admin/index.php?page=manage&update_student=<?php echo $row['student_id'];?>" class="btn btn-info">Update</a> </td>
                            <td> <a href="../admin/index.php?page=manage&activate_student=<?php echo $row['student_id'];?>" class="btn btn-success">Activate</a></td>
                        </tr>
                       <?php 
                       }
                   ?>
               </table> 
           </div>
           
        </div>
        <?php } /*page=manage*/ 

        } //page

        else {

        }
        ?>
    </body>
        <script src="../js/bootstrap.js"></script>
        <script src="index.js"></script>
    </html>



























   