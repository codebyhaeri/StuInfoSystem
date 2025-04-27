<?php
session_start();
include_once "dbconnect.php";

if (isset($_SESSION['users_user_type'])) {
    if ($_SESSION['users_user_type'] == 'A') {
        header("Location: admin/");
        exit;
    }

    if ($_SESSION['users_user_type'] == 'S') {
        header("Location: student/");
        exit;
    }
} 
?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" 
          content="width=device-width, initial-scale=1.0">
    <title>Navigation Bar</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
<link rel="stylesheet" href="style/homepage.css">
</head>
<body>
      <div class="top-border"></div>
    <header class="header">


    <!-----------------Navigation Bar----------------->


    <div id="myNav" class="overlay">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  <div class="overlay-content">

        <a href="register.php">Profile</a>
        <a href="register.php">Add New</a>
        <a href="login.php">Log in</a>
        <a href="register.php">Sign up</a>

  </div>
</div>

<span style="font-size:30px;cursor:pointer; color:aliceblue; margin-right: 5vh;" onclick="openNav()">&#9776; </span>

<script>
  function openNav() {
    document.getElementById("myNav").style.width = "100%";
  }

  function closeNav() {
    document.getElementById("myNav").style.width = "0%";
  }
</script>


    <!-----------------End of Navigation Bar----------------->


        <a href="/">
        <img src="https://bicol-u.edu.ph/wp-content/themes/yootheme/cache/ee/bu-logo-stroke-ee0c8bfd.webp"> 
          </a>

        <nav class="navbar">
            <ul class="navbar-lists" id="myTopnav">
                 <li>
                        <i class="fas fa-search"></i>
                        <a class="navbar-link service-link" href="#search-section">
                         Search
                        </a>
                 </li>

                  <li>
                      <i class="fas fa-home"></i>
                          <a class="navbar-link home-link" href="#">
                              Home</a>
                  </li>

                  
                <li>
                      <i class="fas fa-user"></i>
                          <a class="navbar-link about-link" 
                           href="#about-us-section">
                              About Us
                          </a>
                </li>
                <li>
                      <i class="fas fa-envelope"></i>
                          <a class="navbar-link contact-link" 
                           href="#contact-form">
                          Contact Us
                          </a>
                  </li>


                <li><i class="fas fa-map-marked-alt"></i>
                      <a class="navbar-link contact-link"
                       href="#campus-on-map">
                      Our Campus
                      </a>
                  </li>
            </ul>
            <a href="javascript:void(0);" 
               class="icon" onclick="myFunction()">
                <i class="fa fa-bars"></i>
            </a>
        </nav>
    </header>

    
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

                                <strong>Mission, Vission & Quality Policy</strong></h3>

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


                <img src="img/logo_1.png" alt="Website Logo" width="100">
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