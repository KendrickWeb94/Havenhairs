<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us</title>
    <link rel="stylesheet" href="./dist/scss/Style.css">
    <link rel="stylesheet" href="./dist/tailwind/output.css">
    <link rel="stylesheet" href="./dist/icons/font-awesome.css">
    <link rel="stylesheet" href="./dist/icons/boxicons.min.css">
    <link rel="stylesheet" href="./dist/swiper/swiper.min.css">
    <link rel="stylesheet" href="./dist/css/cart.css">
    <script src="./dist/js/cart.js"></script>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>

<body class="h-auto relative font_r">

    <?php
    @include "./components/navbar.php"
        ?>

    <div class="mt-20 py-10 w-full mx-auto bg-primary h-fit">
        <div class="w-full flex items-center justify-center text-center">
            <div class="md:max-w-3xl px-8 py-8">
                <h1 class=" text-white md:leading-[4rem] ds:leading-[3rem] ds:text-4xl md:text-5xl font_m">More
                    information About Us </h1>
                <br>
                <div class="flex items-center text-center justify-center gap-4">
                    <a href="/index.html" class="underline underline-offset-8 text-white">Home</a>
                    <p class="text-base text-white">About Us</p>
                </div>
            </div>
        </div>
    </div>


    <br><br>
    <footer class=" rounded-t-3xl w-full bg-primary p-16 min-h-[30vh]">
        <div class="mx-auto w-full container_custom h-auto">
            <div class=" grid-cat-footer justify-center w-full">
                <div class="space-y-3">
                    <a href="/index.html">
                        <img src="/assets/imgs/Logo-dark.svg" alt="" class="max-w-56">
                    </a>
                    <p class="text-sm text-white">Haven Hairs is an exotic place where the needs of customers comes
                        first, our greatest joy is seeing a well satisfied customer</p>
                </div>
                <div class="space-y-3">
                    <h1 class="text-white text-xl">Quick Links</h1>
                    <ul class=" list-none flex flex-col text-sm  font_r text-gray-200  gap-4">
                        <li class=" hover:text-white nav-footer-list smooth flex items-center gap-4"> <a
                                href="/index.html">Home</a> <i class="bx bx-chevron-right text-xl"></i></li>
                        <li class=" hover:text-white nav-footer-list smooth flex items-center gap-4"> <a
                                href="/pages/Categories.html">Hairs</a><i class="bx bx-chevron-right text-xl"></i></li>
                        <!-- <li class=" hover:text-primary smooth "> <a href="#Weavons">Weavons</a></li> -->
                        <li class=" hover:text-white nav-footer-list smooth flex items-center gap-4"> <a
                                href="#Weavon">Wigs</a>
                            <i class="bx bx-chevron-right text-xl"></i>
                        </li>
                        <li class=" hover:text-white nav-footer-list smooth flex items-center gap-4"> <a
                                href="/pages/Contact.html">Contact Us</a><i class="bx bx-chevron-right text-xl"></i>
                        </li>
                    </ul>
                </div>
                <div class="space-y-3">
                    <h1 class="text-white text-xl">Contact Us</h1>
                    <div class="flex items-center text-white gap-4">
                        <h3 class=" font_m text-sm "> Whatsapp:</h3>
                        <p class=" text-sm ">054 555 0636
                        </p>
                    </div>
                    <div class="flex items-center text-white gap-4">
                        <h3 class=" font_m text-sm ">Email:</h3>
                        <p class=" text-sm "> blessagyare03@gmail.com
                        </p>
                    </div>
                    <div class="flex items-center text-white gap-4">
                        <h3 class=" font_m text-sm ">Location:</h3>
                        <p class=" text-sm ">Nmai Dzorn Adjiringano
                        </p>
                    </div>
                </div>
            </div>

        </div>
    </footer>
    <!-- npx tailwindcss -i ./dist/tailwind/input.css -o ./dist/tailwind/output.css --watch -->

    <script>
        let navbar = document.getElementById("navbar");
        let responsivenav = document.getElementById("responsive_nav");
        let menuBtn = document.getElementById("menu-btn");
        let toggleBtn = document.getElementById("toggle-btn");

        menuBtn.addEventListener("click", () => {
            if (responsivenav.classList.contains("inactive")) {
                responsivenav.classList.remove("inactive");
                responsivenav.classList.add("active");
                console.log("mobile navbar opened");
            } else {
                responsivenav.classList.remove("active");
                responsivenav.classList.add("inactive");
            }
        });
    </script>
    <script src="./dist/js/Jquery.js"></script>
    <script src="./dist/js/swiper.min.js"></script>
    <script src="./dist/js/swiper-bundle.min.js.map"></script>
    <script src="./dist/js/general.js"></script>
    <script src="./dist/js/boxicons.js"></script>
</body>

</html>