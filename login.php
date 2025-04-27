<!DOCTYPE html>
<html lang="en">
<head>

<meta charset="UTF-8">
    <link rel="stylesheet" href="css/bootstrap.css"> 
    <link rel="stylesheet" href="style/login.css">
    <title></title>
</head>
<body>
        <?php
        $message = isset($_GET['msg']) ? htmlspecialchars($_GET['msg']) : null;

        if(isset($_GET['error'])){
            echo "Error:" . $_GET['error']; // Displaying the error message if it exists
        }
        ?>
        
        <div class="container-fluid">
            <div class="row">
                <div class="top-border"></div>
    
                <div class="additional-border">
                    <span style="font-size: 35px;">Bicol University</span><br>
                    <span style="font-weight: bold; font-size: 15px;">Polangui Campus</span>
                </div>
    
                  
                    <div class="container-form">
                <div class="form-container">

            <div class="box form-box">
            <?php
        ?>
        
        <form action="process_login.php" method="post">
            <header style= "color: rgb(18, 70, 18); text-align: center;">Log In</header>
                <div class="field input">
                    <label for="" class="form-label">Username/Email</label>
                        <input name="l_username_or_l_email" type="text" class="form-control" autocomplete="on" required> 
                            </div>
                            <div class="field input">
                        <label for="" class="form-label">Password</label>
                    <input name="l_password" type="password" class="form-control" autocomplete="off" required>
                </div>  
                    <div class="field">  <!--<input type="submit" class="btn btn-success"> -->                               
                        <input type="submit" class="btn" value="Submit">
                        </div>
                    <div class="links">
                Don't have an account? <a href="register.php">Register</a>
            </div> 

            </div> 
            </div>
            <div class="image-container">
                <img class="image" src="https://i.pinimg.com/736x/d1/08/c7/d108c73e823f7f39c7b4dfbed1ca7035.jpg" alt="login-picture">

                    </div>
                </div>
            <div class="bottom-border"></div>
        </div>
    </div>

        </form>   

<script src="js/bootstrap.js"></script>
</body>
</html>




