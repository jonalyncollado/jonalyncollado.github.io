<!DOCTYPE html>
<html lang="en">
    <head>
        <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewpoint" content="witd=device-width, initial-scale=1.0" />
        <link rel="stylesheet" href="styles.css" />
        <title>Registration</title>

        <!--box icons-->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
    </head>
    <body>
        <!-- navbar -->
        <header>
            <div class="nav container">
                <!-- logo -->
                <a href="index.html" class="logo"><i class='bx bx-home'></i>PrimeVista Realty</a>

                <a href="registration.html" class="btn">Register Now</a>
            </div>
        </header>

        <<div class="main-container">
            <div class="main">
                <?php
                    if ($_SERVER["REQUEST_METHOD"] == "POST") {
                        // Retrieve form data
                        $name = $_POST['name'];
                        $email = $_POST['email'];
                        $number = $_POST['number'];
                        $password = $_POST['password'];
                        $dob = $_POST['dob'];
                        $gender = $_POST['gender'];
            
                        // Display submitted data
                        echo "<h2>Registration Details</h2>";
                        echo "<p><strong>Name:</strong> $name</p>";
                        echo "<p><strong>Email:</strong> $email</p>";
                        echo "<p><strong>Phone Number:</strong> $number</p>";
                        echo "<p><strong>Password:</strong> $password</p>";
                        echo "<p><strong>Date of Birth:</strong> $dob</p>";
                        echo "<p><strong>Gender:</strong> $gender</p>";
                    }
                ?>
            </div>
        </div> 
    </body>
</html>


