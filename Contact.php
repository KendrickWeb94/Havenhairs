<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact</title>
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
<div class="cart">
        <h2 class="cart-title">
            Your Cart
        </h2>
        <div class="cart-content">


        </div>
        <div class="total">
            <div class="total-title">Total</div>
            <div class="total-price">$0</div>
        </div>
        <br>
        <button type="button" class="btn-primary w-full" id="Checkout-btn">Buy Now</button>
        <div class="cart-empty-message" style="display: none;">Your cart is empty, please add a product.</div>

        <i class="bx bx-x" id="close-cart"></i>
    </div>
    </div>
   
<?php
        @include "./components/navbar.php"
    ?>


    <div class="mt-20 py-10 w-full mx-auto bg-primary h-fit">
        <div class="w-full flex items-center justify-center text-center">
            <div class="md:max-w-3xl px-8 py-8">
                <h1 class=" text-white md:leading-[4rem] ds:leading-[3rem] ds:text-4xl md:text-5xl font_m">Our Contact /
                    Outreach forum</h1>
                <br>
                <div class="flex items-center text-center justify-center gap-4">
                    <a href="/index.html" class="underline underline-offset-8 text-white">Home</a>
                    <p class="text-base text-white">Contact</p>
                </div>
            </div>
        </div>
    </div>

    <section class="w-full mx-auto container_custom h-auto py-16">
        <div class="w-full grid-cat-4">
            <div class="rounded-sm bg-primary/15 flex items-center justify-center p-5 contact_items">
                <div class="space-y-3 text-center">
                    <h1 class="text-lg font_m">
                        Opening Hours
                    </h1>
                    <p class=" text-gray-500">8:00AM - 7:00PM</p>
                </div>
            </div>
            <div class="rounded-sm bg-primary/15 flex items-center justify-center p-5 contact_items">
                <div class="space-y-3 text-center">
                    <h1 class="text-lg font_m">Phone Number</h1>
                    <p class=" text-gray-500">054 555 0636</p>
                </div>
            </div>
            <div class="rounded-sm bg-primary/15 flex items-center justify-center p-5 contact_items">
                <div class="space-y-3 text-center">
                    <h1 class="text-lg font_m">Email</h1>
                    <p class=" text-gray-500">
                        blessagyare03@gmail.com</p>
                </div>
            </div>
            <div class="rounded-sm bg-primary/15 flex items-center justify-center p-5 contact_items">
                <div class="space-y-3 text-center">
                    <h1 class="text-lg font_m">Address</h1>
                    <address class=" text-gray-500">
                        Nmai Dzorn Adjiringano</address>
                </div>
            </div>
        </div>
    </section>
    <section class="w-full mx-auto container_custom h-auto py-16">
        <div class="w-full grid-cat-6">
            <div class="">
                <img src="./assets/imgs/Illustration.svg" alt="">
            </div>
            <div class="px-10">
                <form action="" method="post">
                    <div class="form_components">
                        <input type="text" name="name"
                            class="w-full outline-none  focus:border-primary/90 smooth focus:text-primary border border-gray-400/20 rounded-md p-2 text-sm text-gray-400"
                            id="name" placeholder="Enter your full name">
                    </div>
                    <br>
                    <div class="form_components">
                        <input type="email" name="email"
                            class="w-full outline-none focus:border-primary/90 smooth focus:text-primary border border-gray-400/20 rounded-md p-2 text-sm text-gray-400"
                            id="email" placeholder="Enter your email">
                    </div>
                    <br>
                    <div class="form_components">
                        <textarea name="textarea"
                            class="w-full outline-none focus:border-primary/90 smooth focus:text-primary border border-gray-400/20 rounded-md py-5 text-sm text-gray-400"
                            id="textarea" minlength="400" placeholder="type your message">
                        </textarea>
                    </div>
                    <br>
                    <div class="form_components">
                        <button type="submit" class="btn-primary w-full">Send your message</button>
                    </div>
                </form>
            </div>
        </div>
    </section>

    <br><br>
    <iframe width="100%" height="400" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" id="gmap_canvas"
        src="https://maps.google.com/maps?width=520&amp;height=400&amp;hl=en&amp;q=Nmai%20Dzorn%20Adjiringano%20Accra+(Haven%20Hair%20palour)&amp;t=p&amp;z=15&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"></iframe>
    <a href='https://dissertationschreibenlassen.com/'>dissertationschreibenlassen.com</a>
    <script type='text/javascript'
        src='https://embedmaps.com/google-maps-authorization/script.js?id=d90fa9f8c27a6273c95cb5dea84b295ec9608673'></script>
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