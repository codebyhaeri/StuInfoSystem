

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/bootstrap.css"> 
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/signup.css">
    <title>Student Registration</title>
</head>
<body>
        <?php
            if(isset($_GET['error'])){
                echo "Error:" . $_GET['error']; 
            }
        ?>

    <!-- Top Border -->
    <div class="top-border"></div>


    <!-- Additional Border/Header -->
    <div class="additional-border">
        <h1> Student Registration Portal</h1>
    

            <!-- Logo Section -->
            <div class="logo-container">
        <img src="img/logo_1.png" alt="Logo" class="logo">
    </div>
</div>

    <!-- Container for Form and Image -->
    <div class="container-form">
        <!-- Form Section -->
        <div class="form-container">
            <div class="box">
                <div class="form-box">
                    <header>Sign Up</header>
                                        <form action="process_register.php" method="post">
                        <div class="field input">
                        <label for="" class="form-label">Email</label>
                                    <input name="r_email" type="text" class="form-control" autocomplete="on" required> 
                                        </div>
                                        <div class="field input">
                                    <label for="" class="form-label">Full Name</label>
                                <input name="r_fullname" type="text" class="form-control" autocomplete="on" required> 
                            </div>
                            <div class="field input">
                                <label for="" class="form-label">Username</label>
                                    <input name="r_username" type="text" class="form-control" autocomplete="on" required> 
                                        </div>
                                        <div class="field input">
                                    <label for="" class="form-label">Contact Number</label>
                                <input name="r_contact_no" type="text" class="form-control" autocomplete="on" required> 
                            </div>
                            <div class="field input">
                                <label for="" class="form-label">Password</label>
                                    <input name="r_password" type="password" class="form-control" autocomplete="off" required>
                                        </div>
                                        <div class="field input">
                                    <label for="" class="form-label">Confirm Password</label>
                                <input name="r_conf_password" type="password" class="form-control" autocomplete="off" required>
                            </div>    
                            <div class="field">    
                                <input type="submit" class="btn" value="Register">
                                    </div>
                                <div class="links">
                                     Already a member? <a href="login.php">Log In</a>
                                        </div>
                </form> <!-- form end -->

                    </form>
                </div>
            </div>
        </div>

        <!-- Image Section -->
    <div class="image-container">
    <img src="img/logo_2.png" class="image" style="max-width:fit-content; align-items: center; ">


    </div>


    </div>

    <!-- Bottom Border -->
    <div class="bottom-border">
    </div>

    <script src="js/bootstrap.js"></script>
</body>
</html>
