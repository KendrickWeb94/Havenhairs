<?php
session_start();
$loggedIn = isset($_SESSION['user_name']);
$isAdmin = isset($_SESSION['user_role']) && $_SESSION['user_role'] === 'admin'; // Check if the user is an admin
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="../dist/css/cart.css">
    <script src="../dist/js/cart.js"></script>
</head>

<body>


    <section id="responsive_nav" class="responsive-nav smooth inactive">

        <div class="p-6 bg-white shadow-2xl justify-between flex flex-col h-screen w-[280px]">
            <a href="./index.php">
                <img src="./assets/imgs/Logo.svg" alt="" class="max-w-56">
            </a>

            <ul class="list-none flex flex-col text-sm font_m text-gray-500 gap-6">
                <li class="hover:text-primary smooth"><a href="./index.php">Home</a></li>
                <li class="hover:text-primary smooth"><a href="./Categories.php">Hairs</a></li>
                <li class="hover:text-primary smooth"><a href="./About.php">About Us</a></li>
                <li class="hover:text-primary smooth"><a href="./Contact.php">Contact Us</a></li>
                <li class="hover:text-primary smooth">
                    <a href="<?php echo $isAdmin ? './Dashboard.php' : './Admin-signup.php'; ?>">Admin Only</a>
                </li>
            </ul <div class="flex flex-col gap-6">
            <?php if ($loggedIn): ?>
                <!-- Avatar with the first letter of the user's name -->
                <div class="relative">
                    <button id="dropdownAvatar" class="flex items-center gap-2">
                        <?php $firstLetter = strtoupper($_SESSION['user_name'][0]); ?>
                        <div class="w-8 h-8 bg-primary text-white rounded-full flex items-center justify-center">
                            <?php echo $firstLetter; ?>
                        </div>
                    </button>

                    <!-- Dropdown Menu -->
                    <div id="dropdownMenu" class="absolute right-0 z-10 hidden bg-white shadow-lg rounded-md mt-2">
                        <div class="py-2">
                            <p class="px-4 py-2 text-gray-700"><?php echo $_SESSION['user_name']; ?></p>
                            <p class="px-4 py-2 text-gray-500"><?php echo $_SESSION['user_email']; ?></p>
                            <a href="logout.php" class="block px-4 py-2 text-red-600 hover:bg-red-100">Logout</a>
                        </div>
                    </div>
                </div>
            <?php else: ?>

                <!-- Login button when not logged in -->
                <a href="./Login.php" class="btn-primary w-full">Login</a>
            <?php endif; ?>
        </div>
        </div>
    </section>

    <nav id="navbar" class="w-full shadow-lg z-xl fixed top-0 smooth h-auto mx-auto bg-white fill">
        <div class="mx-auto py-6 container_custom w-full flex items-center justify-between">
            <div class="flex items-center gap-12">
                <a href="./index.php">
                    <img src="./assets/imgs/Logo.svg" alt="" class="max-w-56">
                </a>

                <ul class="list-none text-sm ds:hidden lg:flex font_m text-gray-500 items-center justify-center gap-6">
                    <li class="hover:text-primary smooth"><a href="./index.php">Home</a></li>
                    <li class="hover:text-primary smooth"><a href="./Categories.php">Hairs</a></li>
                    <!-- <li class="hover:text-primary smooth"><a href="./About.php">About Us</a></li> -->
                    <li class="hover:text-primary smooth"><a href="./Contact.php">Contact Us</a></li>
                    <li class="hover:text-primary smooth">
                        <a href="<?php echo $isAdmin ? './Dashboard.php' : './Admin-login.php'; ?>">Admin Only</a>
                    </li>
                </ul>
            </div>

            <div class="flex items-center gap-6">
                <?php if ($loggedIn): ?>
                    <div class="relative items-center gap-3">
                        <button id="navbarDropdown" class="flex items-center gap-2">
                            <div class="w-8 h-8 bg-primary text-white rounded-full flex items-center justify-center">
                                <?php echo $firstLetter; ?>
                            </div>
                        </button>

                        <div id="dropdownMenuNavbar"
                            class="absolute right-0 w-fit p-2 z-10 hidden bg-white shadow-xl rounded-md mt-2">
                            <div class="py-2">
                                <p class="px-4 py-2 text-nowrap text-gray-700"><?php echo $_SESSION['user_name']; ?></p>
                                <!-- <p class=" text-gray-500"><?php echo $_SESSION['user_email']; ?></p> -->
                                <a href="logout.php" class="block px-4 py-2 text-red-600 hover:bg-red-100">Logout</a>
                            </div>
                        </div>
                    </div>
                <?php else: ?>
                    <a href="./Login.php" class="btn-primary md:flex ds:hidden">Login</a>
                <?php endif; ?>
                <div class="cart-icon w-fit relative">
                    <i class="bx bx-cart-alt text-primary text-2xl logo-2 id" id="cart-icon"></i>
                    <span
                        class="absolute top-0 right-0 bg-white transform translate-x-1/2 -translate-y-1/2 bg-white-500 p-3 rounded-full w-4 h-4 text-dark-blue flex items-center justify-center"
                        id="cart-count">0</span>
                </div>

                <div id="toggle-btn"
                    class="cursor-pointer ds:flex md:hidden text-sm text-gray-600 flex items-center gap-4">
                    <i class="bx bx-menu hidden-btn text-3xl" id="menu-btn"></i>
                </div>
            </div>
        </div>
    </nav>

    <!-- Logout logic (separate logout.php file) -->
    <?php
    if (isset($_GET['logout'])) {
        session_destroy(); // Destroy session
        header("Location: ./Login.php"); // Redirect to login page
        exit();
    }
    ?>

    <script>
        // Toggle dropdown visibility
        document.getElementById('dropdownAvatar').addEventListener('click', function () {
            document.getElementById('dropdownMenu').classList.toggle('hidden');
        });

        document.getElementById('navbarDropdown').addEventListener('click', function () {
            document.getElementById('dropdownMenuNavbar').classList.toggle('hidden');
        });
    </script>
</body>

</html>