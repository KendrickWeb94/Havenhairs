<?php
session_start();
include 'connection.php'; // Include your database connection

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);

    // Query the database for the user with the provided email
    $sql = "SELECT * FROM users WHERE email='$email'"; // Changed user_email to email
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // Fetch the user data
        $user = $result->fetch_assoc();

        // Verify the password (Assuming the password is hashed in the DB)
        if (password_verify($password, $user['password'])) {
            // Set session variables
            $_SESSION['user_id'] = $user['id'];
            $_SESSION['user_name'] = $user['name'];

            // Redirect to the dashboard or homepage
            header("Location: index.php");
            exit();
        } else {
            $error = "Invalid password. Please try again.";
        }
    } else {
        $error = "No user found with this email.";
    }
}
?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Authentication</title>
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
            padding: 0.4rem 1rem 0.4rem 1rem;
            background: #fee2e2;
            color: #ef4444;
            font-size: 14px;
            font-weight: 600;
        }

        li {
            width: 100%;
            list-style: none;
            margin: 0px;
            text-align: center;
            padding: 0.4rem 1rem 0.4rem 1rem;
            background: #dcfce7;
            color: #22c55e;
            font-size: 14px;
            font-weight: 600;
        }
    </style>
</head>

<body class="h-[80vh] relative font_r">
    <?php if (isset($error)): ?>
        <main><?php echo $error; ?></main>
    <?php endif; ?>
    <?php include "./components/back-crumbs.php"; ?>

    <section class="w-full h-full items-center justify-center">
        <div class="w-full flex items-center flex-col justify-center h-full">
            <p class="text-gray-400 lg:max-w-lg text-center block text-balance">
                Welcome back, please login to continue to your account
            </p>

            <br>
            <div>
                <div id="login" class="login block">
                    <div class="rounded-md max-w-md p-5 h-auto">
                        <form action="login.php" method="post">
                            <div class="form_components">
                                <input type="email" name="email"
                                    class="input-field w-full outline-none focus:border-primary/90 smooth focus:text-primary border border-gray-400/20 rounded-md p-2 text-sm text-gray-400"
                                    placeholder="Enter your email" required>
                            </div>
                            <br>
                            <div class="form_components">
                                <input type="password" name="password"
                                    class="input-field w-full outline-none focus:border-primary/90 smooth focus:text-primary border border-gray-400/20 rounded-md p-2 text-sm text-gray-400"
                                    placeholder="Enter your password" required>
                            </div>
                            <br>
                            <div class="form_components">
                                <button type="submit" name="submit" class="btn-primary w-full">Login</button>
                            </div>
                        </form>
                    </div>
                </div>

                <button class="flex w-full items-center gap-2 text-primary text-center">
                    <p id="" class="">Already have an account? </p>
                    <a href="signup.php" class="underline underline-offset-8">Click here</a>
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
