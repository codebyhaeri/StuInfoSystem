<?php
include '../dbconnect.php';

session_start();

if (isset($_SESSION['student_id'])) {
    $student_id = $_SESSION['student_id'];
}

if ($_SESSION['users_user_type'] != 'A') {
    header("location:index.php");
    exit;
}

if (isset($_GET['logout'])) {
    session_destroy();
    header("location: ../login.php");
    die();
}
include_once "../a_nav_bar.php"; 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Search Page</title>
    <link rel="stylesheet" href="path/to/your/styles.css"> <!-- Link to your CSS file -->
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }
        .container {
            max-width: 1200px;
            margin: auto;
            padding: 20px;
        }
        .search-form {
            text-align: center;
            margin: 40px 0;
        }
        .search-form input[type="search"] {
            padding: 10px;
            width: 70%;
            margin-top: 20px;
            margin-bottom: 18px;
        }
        .box-container {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
        }
        .row {
            margin: 10px;
            border: 1px solid #ccc;
            padding: 10px;
            border-radius: 5px;
            width: 300px; /* Adjust width as needed */
            text-align: center;
        }
        .btn {
            padding: 10px 15px;
            background-color: #007bff;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
        .btn:hover {
            background-color: #0056b3;
        }
        .view-btn {
            margin-top: 10px; /* Adds space between the details and the button */
            padding: 10px 15px;
            background-color: #007bff;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        .view-btn:hover {
            background-color: #0056b3;
        }
    </style>
</head>
        <body>
            <div class="container">
                <section class="search-form">
                    <form action="" method="POST">
                        <input type="search" name="search" placeholder="Search student" required>
                        <input type="submit" name="submit" value="Search" class="btn">
                    </form> 
                </section>
        <div class="box-container" style="align-items: center; text-align: center; display: flex">
            <?php
            if (isset($_POST['submit'])) {
                $search = $_POST['search'];

                //SQL statement for search
                $sql_search = "SELECT * FROM student_info 
                                WHERE (firstname LIKE ? 
                                OR middlename LIKE ? 
                                OR lastname LIKE ? 
                                OR course LIKE ?
                                OR section_year LIKE ?
                                OR gender LIKE ?
                                OR city LIKE ?
                                OR province LIKE ?
                                OR zip_code LIKE ?)
                                AND user_status = 'A'";
                
                // Prepare the statement
                $stmt = mysqli_prepare($conn, $sql_search);
                
                // Create the search pattern
                $searchPattern = '%' . $search . '%';
                
                // Bind parameters
                mysqli_stmt_bind_param($stmt, "sssssssss", $searchPattern, $searchPattern, $searchPattern, 
                                                        $searchPattern, $searchPattern, $searchPattern,
                                                        $searchPattern, $searchPattern, $searchPattern);
                
                // Execute the statement
                mysqli_stmt_execute($stmt);
                
                // Get the result
                $result = mysqli_stmt_get_result($stmt);
                $count_result = mysqli_num_rows($result);
            
                if ($count_result > 0) {
                    while ($row = mysqli_fetch_assoc($result)) {
                        ?>
                        <div class="row">
                            <div class="container">
                                <!-- fetches information for redirection using post method -->
                                <form action="view_info.php?" method="post">
                                    <input type="hidden" name="s_student_id" value="<?= htmlspecialchars($row['student_id']); ?>">
                                    <input type="hidden" name="s_email" value="<?= htmlspecialchars($row['email']); ?>">
                                    <input type="hidden" name="s_firstname" value="<?= htmlspecialchars($row['firstname']); ?>">
                                    <input type="hidden" name="s_middlename" value="<?= htmlspecialchars($row['middlename']); ?>">
                                    <input type="hidden" name="s_lastname" value="<?= htmlspecialchars($row['lastname']); ?>"> 
                                    <input type="hidden" name="s_course" value="<?= htmlspecialchars($row['course']); ?>">
                                    <input type="hidden" name="s_section_year" value="<?= htmlspecialchars($row['section_year']); ?>">
                                    <input type="hidden" name="s_bdate" value="<?= htmlspecialchars($row['birthdate']); ?>">
                                    <input type="hidden" name="s_gender" value="<?= htmlspecialchars($row['gender']); ?>"> 
                                    <input type="hidden" name="s_contact_no" value="<?= htmlspecialchars($row['contact_number']); ?>">
                                    <input type="hidden" name="s_address" value="<?= htmlspecialchars($row['address']); ?>">  
                                    <input type="hidden" name="s_city" value="<?= htmlspecialchars($row['city']); ?>"> 
                                    <input type="hidden" name="s_province" value="<?= htmlspecialchars($row['province']); ?>">
                                    <input type="hidden" name="s_zip_c" value="<?= htmlspecialchars($row['zip_code']); ?>">
                                    <input type="hidden" name="s_student_status" value="<?= htmlspecialchars($row['student_status']); ?>">
                                    
                                    <!-- displays the "like" results -->
                                    <div class="name">
                                        <?= htmlspecialchars($row['firstname']) . ' ' . htmlspecialchars($row['middlename']) . ' ' . htmlspecialchars($row['lastname']); ?>
                                    </div>
                                    <div class="name">
                                        <?= htmlspecialchars($row['course']) . ' - ' . htmlspecialchars($row['section_year']); ?>
                                    </div>
                                    <!-- Adding a margin to the button -->
                                    <button type="submit" name="view" class="view-btn">View</button>
                                </form>
                            </div>
                        </div>
                        <?php
                    }
                } else {
                    echo '<p class="empty">No results found.</p>';
                }
                
                // Close the statement
                mysqli_stmt_close($stmt);
            }
            ?>
        </div>

</body>
<script src="js/script.js"></script>
</html>