<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hairs & Wigs</title>
    <link rel="stylesheet" href="./dist/scss/Style.css">
    <link rel="stylesheet" href="./dist/tailwind/output.css">
    <link rel="stylesheet" href="./dist/icons/font-awesome.css">
    <link rel="stylesheet" href="./dist/icons/boxicons.min.css">
    <link rel="stylesheet" href="./dist/swiper/swiper.min.css">
    <link rel="stylesheet" href="./dist/css/cart.css">
</head>

<body class="h-auto relative font_r">
    <section class="checkout html min-h-screen bg-white w-full fixed top-0" style="z-index: 999999999;">
        <a href="./Categories.php">

            <button
                class="flex items-center m-5 text-sm text-primary gap-2 rounded-3xl cursor-pointer border border-primary py-2 px-4">
                <i class="bx bx-chevron-left text-xl"></i>
                <p>Go Back</p>
            </button>
        </a>
       <div class="h-screen flex items-center justify-center w-full">
        <div class="space-y-5 text-center">
            <p class="text-gray-400">For now we accept only Momo as a means of payment</p>
            <div class="flex items-center justify-center gap-3">
                <h3 class="text-gray-600"></h3>054 555 0636</h3>
                <h3 class="text-gray-600"></h3>Haven hair palour</h3>
            </div>
        </div>
       </div>
    </section>

 


    <!-- npx tailwindcss -i ./dist/tailwind/input.css -o ./dist/tailwind/output.css --watch -->
    <script>
        let checkboxBtn = document.querySelectorAll(".checkbox-btn");
        let checkbox = document.querySelectorAll(".checkbox");
        let mobileFilter = document.getElementById("mobile-filter");
        let openFilter = document.getElementById("open-filter");
        let closeFilter = document.getElementById("close-filter");



        openFilter.addEventListener("click", () => {
            mobileFilter.classList.remove("hide");
            mobileFilter.classList.add("show");
        });

        closeFilter.addEventListener("click", () => {
            mobileFilter.classList.remove("show");
            mobileFilter.classList.add("hide");
        });


        checkboxBtn.addEventListener("click", () => {
            if ((checkbox.classList.contains = "bg-transparent")) {
                checkbox.classList.remove("bg-transparent");
                checkbox.classList.add("bg-primary");
            } else {
                checkbox.classList.add("bg-transparent");
                checkbox.classList.remove("bg-primary");
            }
        });

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
    <script src="./dist/js/cart.js"></script>
    <script src="./dist/js/swiper.min.js"></script>
    <script src="./dist/js/swiper-bundle.min.js.map"></script>
    <script src="./dist/js/general.js"></script>
    <script src="./dist/js/boxicons.js"></script>
</body>

</html>