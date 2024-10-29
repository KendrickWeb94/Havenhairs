<?php
include 'connection.php'; // Include your database connection file
session_start();

if (isset($_POST['submit'])) { // Change to match the button name in the form
    $admin_name = $_POST['admin_name'];
    $admin_email = $_POST['admin_email'];
    $admin_password = $_POST['admin_password'];
    $admin_cpassword = $_POST['admin_cpassword'];

    // Check if passwords match
    if ($admin_password !== $admin_cpassword) {
        $error = "Passwords do not match!";
    } else {
        // Check if admin already exists
        $checkAdmin = "SELECT * FROM admin WHERE admin_email='$admin_email'";
        $result = $conn->query($checkAdmin);

        if ($result->num_rows > 0) {
            $error = "Admin already exists with this email!";
        } else {
            // Hash the password
         

            // Insert admin details into the database
            $insertAdmin = "INSERT INTO admin (admin_name, admin_password, admin_email) VALUES ('$admin_name', '$admin_Password', '$admin_email')";

            if ($conn->query($insertAdmin) === TRUE) {
                $_SESSION['admin_name'] = $admin_name;
                $_SESSION['admin_email'] = $admin_email;
                $_SESSION['admin_password'] = $admin_password;
                header('Location: Dashboard.php'); // Redirect to Dashboard
                exit();
            } else {
                $error = "Error: " . $conn->error;
            }
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Signup</title>
    <link rel="stylesheet" href="./dist/scss/Style.css">
    <link rel="stylesheet" href="./dist/tailwind/output.css">
    <link rel="stylesheet" href="./dist/icons/font-awesome.css">
    <link rel="stylesheet" href="./dist/icons/boxicons.min.css">
    <link rel="stylesheet" href="./dist/swiper/swiper.min.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <style>
        main {
            width: 100%;
            margin: 0px;
            text-align: center;
            padding: 0.4rem 1rem;
            background: #fee2e2;
            color: #ef4444;
            font-size: 14px;
            font-weight: 600;
        }
    </style>
</head>

<body class="h-[80vh] relative font_r">
    <?php if (isset($error)): ?>
        <main><?php echo $error; ?></main>
    <?php endif; ?>
    <?php @include "./components/back-crumbs.php"; ?>
    <section class="w-full h-full items-center justify-center">
        <div class="w-full flex items-center flex-col justify-center h-full">
            <img src="./assets/imgs/Logo.svg" alt="">
            <br>
            <div id="signup" class="signup block">
                <div class="rounded-md max-w-md p-5 h-auto">
                    <form action="Admin-signup.php" method="post">
                        <div class="form_components">
                            <input type="text" name="admin_name"
                                class="w-[300px] outline-none focus:border-primary/90 smooth focus:text-primary border border-gray-400/20 rounded-md p-2 text-sm text-gray-400"
                                id="name" placeholder="Enter your name" required>
                        </div>
                        <br>
                        <div class="form_components">
                            <input type="password" name="admin_password"
                                class="w-full outline-none focus:border-primary/90 smooth focus:text-primary border border-gray-400/20 rounded-md p-2 text-sm text-gray-400"
                                id="password" placeholder="Create a strong Password" required>
                        </div>
                        <br>
                        <div class="form_components">
                            <input type="password" name="admin_cpassword"
                                class="w-full outline-none focus:border-primary/90 smooth focus:text-primary border border-gray-400/20 rounded-md p-2 text-sm text-gray-400"
                                id="cpassword" placeholder="Repeat your Password" required>
                        </div>
                        <br>
                        <div class="form_components">
                            <input type="email" name="admin_email"
                                class="w-full outline-none focus:border-primary/90 smooth focus:text-primary border border-gray-400/20 rounded-md p-2 text-sm text-gray-400"
                                id="email" placeholder="Enter your email" required>
                        </div>
                        <br>
                        <div class="form_components">
                            <button type="submit" name="submit" class="btn-primary w-full">Signup</button> <!-- Match button name -->
                        </div>
                    </form>
                </div>
                <button class="flex w-full items-center gap-2 text-primary text-center">
                    <p>Already have an account? </p><a href="Admin-login.php" class="underline underline-offset-8">Login here</a>
                </button>
            </div>
        </div>
    </section>
    <script src="./dist/js/Jquery.js"></script>
    <script src="./dist/js/swiper.min.js"></script>
    <script src="./dist/js/swiper-bundle.min.js.map"></script>
    <script src="./dist/js/authentication.js"></script>
    <script src="./dist/js/boxicons.js"></script>
</body>
</html>
