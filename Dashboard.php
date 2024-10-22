<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <link rel="stylesheet" href="./dist/tailwind/output.css">
    <link rel="stylesheet" href="./dist/scss/Style.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>

<body class="bg-primary/15 font_r">

    <!-- Sidebar -->
    <div class="flex">
        <aside class="w-64 bg-primary shadow-md h-screen">
            <div class="p-4">
                <img src="./assets/imgs/Logo-dark.svg" alt="">
                <ul class="mt-6 space-y-2">
                    <li>
                        <a href="./index.php"
                            class="block p-2 text-white hover:bg-white hover:text-primary smooth rounded">Home</a>
                    </li>
                    <li>
                        <button onclick="logout()"
                            class="block p-2 text-white hover:bg-white hover:text-primary smooth rounded">Logout</button>
                    </li>
                    <li>
                        <div class="relative">
                            <button id="adminProfile"
                                class="block p-2 text-white hover:bg-white hover:text-primary smooth rounded">Admin
                                Profile</button>
                            <div id="adminDropdown"
                                class="absolute right-0 mt-2 w-48 bg-white rounded-md shadow-lg hidden">
                                <a href="#"
                                    class="block px-4 py-2 text-gray-700 hover:bg-white hover:text-primary smooth">Settings</a>
                                <a href="#"
                                    class="block px-4 py-2 text-gray-700 hover:bg-white hover:text-primary smooth">Profile</a>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </aside>

        <!-- Main Content -->
        <main class="flex-1 p-6">
            <h1 class="text-2xl font_sb mb-4">Dashboard Overview</h1>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
                <div class="bg-white shadow-lg h-fit p-3 rounded-lg">
                   <div class="flex w-full items-center justify-between ">
                    <div class="">
                    <h2 class="text-sm text-gray-600 font_m">Items Bought</h2>
                    <p id="itemsBought" class="text-base font_sb text-gray-400">0</p>
                    </div>
                        <div class="p-3 rounded-md bg-primary/20 text-primary w-12 h-12 flex items-center justify-center">
                            <i class="bx bxs-shopping-bag text-lg"></i>
                        </div>
                   </div>
                   
                </div>
                <div class="bg-white shadow-lg h-fit p-3 rounded-lg">
                   <div class="flex w-full items-center justify-between ">
                    <div class="">
                    <h2 class="text-sm text-gray-600 font_m">Total Users</h2>
                    <p id="itemsBought" class="text-base font_sb text-gray-400">
                    <?php
                        include 'connection.php'; // Include your database connection
                        $result = $conn->query("SELECT COUNT(*) as total FROM users");
                        $data = $result->fetch_assoc();
                        echo $data['total'];
                        ?>
                    </p>
                    </div>
                        <div class="p-3 rounded-md bg-primary/20 text-primary w-12 h-12 flex items-center justify-center">
                            <i class="bx bxs-user text-lg"></i>
                        </div>
                   </div>
                   
                </div>
                
            </div>
            <br><br>

            <h2 cl="text-xl font_m text-gray-500 mt-8">User List</h2>
            <div class="overflow-x-auto mt-4">
                <table class="w-full">
                    <thead>
                        <tr
                            class=" font_m text-sm tracking-wide text-left text-gray-900 bg-gray-100 capitalize border-b border-gray-600">
                            <th class="px-4  py-3">Avatar</th>
                            <th class="px-4  py-3">Name</th>
                            <th class="px-4  py-3">Email</th>
                            <th class="px-4  py-3">password</th>
                        </tr>
                    </thead>
                    <tbody class="bg-white">
                  
                        <?php
                        // Fetch users from the database
                        $sql = "SELECT name, email, password FROM users";
                        $result = $conn->query($sql);

                        if ($result->num_rows > 0) {
                            while ($user = $result->fetch_assoc()) {
                                echo "<tr class='text-gray-700'>";
                                echo "<td class='px-4 py-3 border'>
                <div class='flex items-center text-sm'>
                    <div class='relative w-8 h-8 mr-3 rounded-full bg-primary flex items-center justify-center'>
                    
                        <span class='text-white font-bold'>
                                <i class='bx bxs-user'></i>
                        </span>
                    </div>
                </div>
            </td>";
                                echo "<td class='px-4 text-sm py-3 border'>{$user['name']}</td>";
                                echo "<td class='px-4 text-sm py-3 border'>{$user['email']}</td>";
                                echo "<td class='px-4 text-sm py-3 border'>{$user['password']}</td>";
                                echo "</tr>";
                            }
                        } else {
                            echo "<tr><td colspan='3' class='py-3 px-6 text-center'>No users found</td></tr>";
                        }
                        ?>

                    </tbody>
                </table>

            </div>
        </main>
    </div>

    <script>
        // Admin profile dropdown toggle
        document.getElementById('adminProfile').addEventListener('click', function () {
            const dropdown = document.getElementById('adminDropdown');
            dropdown.classList.toggle('hidden');
        });

        // Logout function
        function logout() {
            // Logic for logging out, e.g., redirecting to a logout PHP page
            window.location.href = './logout.php'; // Update with your logout URL
        }
    </script>
</body>

</html>