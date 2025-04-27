<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="../style/user.css">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">
    </head>
<body>
    <div class="top-border"></div>
    <header class="header">

    <!-----------------Navigation Bar----------------->


    <div id="myNav" class="overlay">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  <div class="overlay-content">
        <a href="index.php?page=profile">Profile</a>
        <a href="index.php?page=add_new">Add New</a>
        <a href="../login.php">Logout</a>
</div>

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
                        <a class="navbar-link service-link" href="search_bar2.php">
                         Search
                        </a>
                 </li>


                  <li>
                      <i class="fas fa-home"></i>
                          <a class="navbar-link home-link" href="index.php?page=home">
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
</body>
</html>