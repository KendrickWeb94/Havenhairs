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
        <a href="./Checkout.php">
            <button type="button" class="btn-primary w-full" id="Checkout-btn">Buy Now</button>
        </a>
        <div class="cart-empty-message" style="display: none;">Your cart is empty, please add a product.</div>

        <i class="bx bx-x" id="close-cart"></i>
    </div>
    </div>

    <div id="mobile-filter" class="hide">
        <div class="bg-white rounded-md p-5 px-10 shadow-2xl">

            <div class="filter py-5 max-w-[300px]">
                <div class=" font_m text-2xl text-primary flex items-center justify-between w-full">
                    <p>Filter</p> <button>
                        <i id="close-filter" class="bx bx-x text-3xl text-center w-full"></i>
                    </button>
                </div>
                <br>
                <br>
                <!-- Length Filter -->
                <div class="w-full">
                    <h1 class=" text-dark-blue font_sb">Length</h1>
                    <br>
                    <ul class=" list-none space-y-2">
                        <li class="flex items-center gap-3">

                            <input type="checkbox" class="length-filter" value="Long"> Long
                        </li>
                        <li class="flex items-center gap-3">
                            <input type="checkbox" class=" length-filter" value="Short"> Short
                        </li>
                    </ul>
                </div>
                <br>
                <!-- Color Filter -->
                <div class="w-full">
                    <h1 class=" text-dark-blue font_sb">Color</h1>
                    <br>
                    <ul class=" list-none space-y-2">
                        <li class="flex items-center gap-3">
                            <input type="checkbox" class=" color-filter" value="Black"> Black
                        </li>
                    </ul>
                </div>
                <br>
                <!-- Price Filter -->
                <div class="w-[300px]">
                    <h1 class=" text-dark-blue font_sb">Price</h1>
                    <br>
                    <ul class=" list-none space-y-4">
                        <li class="flex items-center gap-3">
                            <input type="number" placeholder="Min" id="min-price"
                                class="w-full text-sm outline-none border-b border-gray-400/25 py-1">
                        </li>
                        <li class="flex items-center gap-3">
                            <input type="number" placeholder="Max" id="max-price"
                                class="w-full text-sm outline-none border-b border-gray-400/25 py-1">
                        </li>
                    </ul>
                    <button onclick="applyFilters()" class="btn-primary mt-4">Apply Filters</button>
                </div>
        </div>
    </div>
    </div>
    <?php
    @include "./components/navbar.php"
        ?>


    <div class="mt-20 py-10 w-full mx-auto bg-primary h-fit">
        <div class="w-full flex items-center justify-center text-center">
            <div class="md:max-w-3xl px-8 py-8">
                <h1 class=" text-white md:leading-[4rem] ds:leading-[3rem] ds:text-4xl md:text-5xl font_m">Our Category
                    and Collections</h1>
                <br>
                <div class="flex items-center text-center justify-center gap-4">
                    <a href="/index.html" class="underline underline-offset-8 text-white">Home</a>
                    <p class="text-base text-white">Our Store</p>
                </div>
            </div>
        </div>
    </div>

    <br>
    <section class="min-h-screen w-full mx-auto py-24 container_custom">
        <div class="w-full flex justify-between gap-6 md:gap-16 md:flex-row ds:flex-col">
            <div class="filter max-w-[280px]">
                <h1 id="open-filter" class="cursor-pointer font_m flex items-center gap-3 text-2xl text-primary">Filter
                    <div class="ds:block md:hidden"><i class="bx bx-filter-alt"></i></div>
                </h1>
                <br><br>
                <div class="ds:hidden md:block">
                    <!-- Length Filter -->
                    <div class="w-full">
                        <h1 class=" text-dark-blue font_sb">Length</h1>
                        <br>
                        <ul class=" list-none space-y-2">
                            <li class="flex items-center gap-3">

                                <input type="checkbox" class="length-filter" value="Long"> Long
                            </li>
                            <li class="flex items-center gap-3">
                                <input type="checkbox" class=" length-filter" value="Short"> Short
                            </li>
                        </ul>
                    </div>
                    <br>
                    <!-- Color Filter -->
                    <div class="w-full">
                        <h1 class=" text-dark-blue font_sb">Color</h1>
                        <br>
                        <ul class=" list-none space-y-2">
                            <li class="flex items-center gap-3">
                                <input type="checkbox" class=" color-filter" value="Black"> Black
                            </li>
                        </ul>
                    </div>
                    <br>
                    <!-- Price Filter -->
                    <div class="w-[300px]">
                        <h1 class=" text-dark-blue font_sb">Price</h1>
                        <br>
                        <ul class=" list-none space-y-4">
                            <li class="flex items-center gap-3">
                                <input type="number" placeholder="Min" id="min-price"
                                    class="w-full text-sm outline-none border-b border-gray-400/25 py-1">
                            </li>
                            <li class="flex items-center gap-3">
                                <input type="number" placeholder="Max" id="max-price"
                                    class="w-full text-sm outline-none border-b border-gray-400/25 py-1">
                            </li>
                        </ul>
                        <button onclick="applyFilters()" class="btn-primary mt-4">Apply Filters</button>
                    </div>
                </div>
            </div>
            <div class="flex-grow">
                <div class="shop-content">
                    <div class="product-box">
                        <img src="./assets/imgs/products/product-1.jpg" alt="" class="product-img">
                        <h2 class="product-title text-sm">Curly Lace Wig</h2>
                        <span class="price text-sm">GH₵350</span>
                        <div class="flex items-center gap-2 text-sm">
                            <div class="w-4 h-4 bg-black rounded-full mr-1"></div>
                            <span>Black</span>
                        </div>
                        <span class="text-xs">Length: Long</span>
                        <i class="bx bx-shopping-bag add-to-cart"></i>
                    </div>

                    <div class="product-box">
                        <img src="./assets/imgs/products/product-2.jpg" alt="" class="product-img">
                        <h2 class="product-title text-sm">Deep Wave Hair</h2>
                        <span class="price text-sm">GH₵420</span>
                        <div class="flex items-center gap-2 text-sm">
                            <div class="w-4 h-4 bg-black rounded-full mr-1"></div>
                            <span>Black</span>
                        </div>
                        <span class="text-xs">Length: Long</span>
                        <i class="bx bx-shopping-bag add-to-cart"></i>
                    </div>

                    <div class="product-box">
                        <img src="./assets/imgs/products/product-3.jpg" alt="" class="product-img">
                        <h2 class="product-title text-sm">Body Wave Wig</h2>
                        <span class="price text-sm">GH₵275</span>
                        <div class="flex items-center gap-2 text-sm">
                            <div class="w-4 h-4 bg-black rounded-full mr-1"></div>
                            <span>Black</span>
                        </div>
                        <span class="text-xs">Length: Short</span>
                        <i class="bx bx-shopping-bag add-to-cart"></i>
                    </div>

                    <div class="product-box">
                        <img src="./assets/imgs/products/product-4.jpg" alt="" class="product-img">
                        <h2 class="product-title text-sm">Straight Human Hair</h2>
                        <span class="price text-sm">GH₵390</span>
                        <div class="flex items-center gap-2 text-sm">
                            <div class="w-4 h-4 bg-black rounded-full mr-1"></div>
                            <span>Black</span>
                        </div>
                        <span class="text-xs">Length: Long</span>
                        <i class="bx bx-shopping-bag add-to-cart"></i>
                    </div>

                    <div class="product-box">
                        <img src="./assets/imgs/products/product-5.jpg" alt="" class="product-img">
                        <h2 class="product-title text-sm">Afro Kinky Wig</h2>
                        <span class="price text-sm">GH₵450</span>
                        <div class="flex items-center gap-2 text-sm">
                            <div class="w-4 h-4 bg-black rounded-full mr-1"></div>
                            <span>Black</span>
                        </div>
                        <span class="text-xs">Length: Short</span>
                        <i class="bx bx-shopping-bag add-to-cart"></i>
                    </div>

                    <div class="product-box">
                        <img src="./assets/imgs/products/product-6.jpg" alt="" class="product-img">
                        <h2 class="product-title text-sm">Water Wave Hair</h2>
                        <span class="price text-sm">GH₵380</span>
                        <div class="flex items-center gap-2 text-sm">
                            <div class="w-4 h-4 bg-black rounded-full mr-1"></div>
                            <span>Black</span>
                        </div>
                        <span class="text-xs">Length: Long</span>
                        <i class="bx bx-shopping-bag add-to-cart"></i>
                    </div>

                    <div class="product-box">
                        <img src="./assets/imgs/products/product-7.jpg" alt="" class="product-img">
                        <h2 class="product-title text-sm">Brazilian Bob Wig</h2>
                        <span class="price text-sm">GH₵310</span>
                        <div class="flex items-center gap-2 text-sm">
                            <div class="w-4 h-4 bg-black rounded-full mr-1"></div>
                            <span>Black</span>
                        </div>
                        <span class="text-xs">Length: Short</span>
                        <i class="bx bx-shopping-bag add-to-cart"></i>
                    </div>

                    <div class="product-box">
                        <img src="./assets/imgs/products/product-8.jpg" alt="" class="product-img">
                        <h2 class="product-title text-sm">Frontal Lace Wig</h2>
                        <span class="price text-sm">GH₵500</span>
                        <div class="flex items-center gap-2 text-sm">
                            <div class="w-4 h-4 bg-black rounded-full mr-1"></div>
                            <span>Black</span>
                        </div>
                        <span class="text-xs">Length: Long</span>
                        <i class="bx bx-shopping-bag add-to-cart"></i>
                    </div>

                    <div class="product-box">
                        <img src="./assets/imgs/products/product-9.jpg" alt="" class="product-img">
                        <h2 class="product-title text-sm">Peruvian Hair Wig</h2>
                        <span class="price text-sm">GH₵425</span>
                        <div class="flex items-center gap-2 text-sm">
                            <div class="w-4 h-4 bg-black rounded-full mr-1"></div>
                            <span>Black</span>
                        </div>
                        <span class="text-xs">Length: Long</span>
                        <i class="bx bx-shopping-bag add-to-cart"></i>
                    </div>

                    <div class="product-box">
                        <img src="./assets/imgs/products/product-10.jpg" alt="" class="product-img">
                        <h2 class="product-title text-sm">Silky Straight Wig</h2>
                        <span class="price text-sm">GH₵290</span>
                        <div class="flex items-center gap-2 text-sm">
                            <div class="w-4 h-4 bg-black rounded-full mr-1"></div>
                            <span>Black</span>
                        </div>
                        <span class="text-xs">Length: Short</span>
                        <i class="bx bx-shopping-bag add-to-cart"></i>
                    </div>

                    <div class="product-box">
                        <img src="./assets/imgs/products/product-11.jpg" alt="" class="product-img">
                        <h2 class="product-title text-sm">Kinky Curly Wig</h2>
                        <span class="price text-sm">GH₵370</span>
                        <div class="flex items-center gap-2 text-sm">
                            <div class="w-4 h-4 bg-black rounded-full mr-1"></div>
                            <span>Black</span>
                        </div>
                        <span class="text-xs">Length: Long</span>
                        <i class="bx bx-shopping-bag add-to-cart"></i>
                    </div>

                    <div class="product-box">
                        <img src="./assets/imgs/products/product-12.jpg" alt="" class="product-img">
                        <h2 class="product-title text-sm">Lace Front Wig</h2>
                        <span class="price text-sm">GH₵480</span>
                        <div class="flex items-center gap-2 text-sm">
                            <div class="w-4 h-4 bg-black rounded-full mr-1"></div>
                            <span>Black</span>
                        </div>
                        <span class="text-xs">Length: Long</span>
                        <i class="bx bx-shopping-bag add-to-cart"></i>
                    </div>

                    <div class="product-box">
                        <img src="./assets/imgs/products/product-13.jpg" alt="" class="product-img">
                        <h2 class="product-title text-sm">Loose Wave Wig</h2>
                        <span class="price text-sm">GH₵320</span>
                        <div class="flex items-center gap-2 text-sm">
                            <div class="w-4 h-4 bg-black rounded-full mr-1"></div>
                            <span>Black</span>
                        </div>
                        <span class="text-xs">Length: Short</span>
                        <i class="bx bx-shopping-bag add-to-cart"></i>
                    </div>

                    <div class="product-box">
                        <img src="./assets/imgs/products/product-14.jpg" alt="" class="product-img">
                        <h2 class="product-title text-sm">Natural Curly Wig</h2>
                        <span class="price text-sm">GH₵405</span>
                        <div class="flex items-center gap-2 text-sm">
                            <div class="w-4 h-4 bg-black rounded-full mr-1"></div>
                            <span>Black</span>
                        </div>
                        <span class="text-xs">Length: Long</span>
                        <i class="bx bx-shopping-bag add-to-cart"></i>
                    </div>

                    <div class="product-box">
                        <img src="./assets/imgs/products/product-15.jpg" alt="" class="product-img">
                        <h2 class="product-title text-sm">Wavy Bob Wig</h2>
                        <span class="price text-sm">GH₵275</span>
                        <div class="flex items-center gap-2 text-sm">
                            <div class="w-4 h-4 bg-black rounded-full mr-1"></div>
                            <span>Black</span>
                        </div>
                        <span class="text-xs">Length: Short</span>
                        <i class="bx bx-shopping-bag add-to-cart"></i>
                    </div>

                    <div class="product-box">
                        <img src="./assets/imgs/products/product-16.jpg" alt="" class="product-img">
                        <h2 class="product-title text-sm">Vintage Wave Wig</h2>
                        <span class="price text-sm">GH₵415</span>
                        <div class="flex items-center gap-2 text-sm">
                            <div class="w-4 h-4 bg-black rounded-full mr-1"></div>
                            <span>Black</span>
                        </div>
                        <span class="text-xs">Length: Long</span>
                        <i class="bx bx-shopping-bag add-to-cart"></i>
                    </div>

                    <div class="product-box">
                        <img src="./assets/imgs/products/product-17.jpg" alt="" class="product-img">
                        <h2 class="product-title text-sm">Short Pixie Cut Wig</h2>
                        <span class="price text-sm">GH₵250</span>
                        <div class="flex items-center gap-2 text-sm">
                            <div class="w-4 h-4 bg-black rounded-full mr-1"></div>
                            <span>Black</span>
                        </div>
                        <span class="text-xs">Length: Short</span>
                        <i class="bx bx-shopping-bag add-to-cart"></i>
                    </div>

                    <div class="product-box">
                        <img src="./assets/imgs/products/product-18.jpg" alt="" class="product-img">
                        <h2 class="product-title text-sm">Layered Cut Wig</h2>
                        <span class="price text-sm">GH₵295</span>
                        <div class="flex items-center gap-2 text-sm">
                            <div class="w-4 h-4 bg-black rounded-full mr-1"></div>
                            <span>Black</span>
                        </div>
                        <span class="text-xs">Length: Short</span>
                        <i class="bx bx-shopping-bag add-to-cart"></i>
                    </div>

                    <div class="product-box">
                        <img src="./assets/imgs/products/product-19.jpg" alt="" class="product-img">
                        <h2 class="product-title text-sm">Classic Bob Wig</h2>
                        <span class="price text-sm">GH₵280</span>
                        <div class="flex items-center gap-2 text-sm">
                            <div class="w-4 h-4 bg-black rounded-full mr-1"></div>
                            <span>Black</span>
                        </div>
                        <span class="text-xs">Length: Short</span>
                        <i class="bx bx-shopping-bag add-to-cart"></i>
                    </div>

                    <div class="product-box">
                        <img src="./assets/imgs/products/product-20.jpg" alt="" class="product-img">
                        <h2 class="product-title text-sm">Classic Wave Wig</h2>
                        <span class="price text-sm">GH₵330</span>
                        <div class="flex items-center gap-2 text-sm">
                            <div class="w-4 h-4 bg-black rounded-full mr-1"></div>
                            <span>Black</span>
                        </div>
                        <span class="text-xs">Length: Long</span>
                        <i class="bx bx-shopping-bag add-to-cart"></i>
                    </div>

                    <div class="product-box">
                        <img src="./assets/imgs/products/product-21.jpg" alt="" class="product-img">
                        <h2 class="product-title text-sm">Stylish Lace Wig</h2>
                        <span class="price text-sm">GH₵460</span>
                        <div class="flex items-center gap-2 text-sm">
                            <div class="w-4 h-4 bg-black rounded-full mr-1"></div>
                            <span>Black</span>
                        </div>
                        <span class="text-xs">Length: Long</span>
                        <i class="bx bx-shopping-bag add-to-cart"></i>
                    </div>


                </div>

    </section>


    </div>
    </div>
    </section>

    <footer class=" rounded-t-3xl w-full bg-primary p-16 min-h-[30vh]">
        <div class="mx-auto w-full container_custom h-auto">
            <div class=" grid-cat-footer bg-primary justify-center w-full">
                <div class="space-y-3 bg-primary">
                    <a href="/index.html">
                        <img src="./assets/imgs/Logo-dark.svg" alt="" class="max-w-56">
                    </a>
                    <p class="text-sm text-white">Haven Hairs is an exotic place where the needs of customers comes
                        first, our greatest joy is seeing a well satisfied customer</p>
                </div>
                <div class="space-y-3 bg-primary">
                    <h1 class="text-white text-xl">Quick Links</h1>
                    <ul class=" list-none flex flex-col text-sm  font_r text-gray-200  gap-4">
                        <li class=" hover:text-white nav-footer-list smooth flex items-center gap-4"> <a
                                href="/index.html">Home</a> <i class="bx bx-chevron-right text-xl"></i></li>
                        <li class=" hover:text-white nav-footer-list smooth flex items-center gap-4"> <a
                                href="./Categories.html">Hairs</a><i class="bx bx-chevron-right text-xl"></i>
                        </li>
                        <!-- <li class=" hover:text-primary smooth "> <a href="#Weavons">Weavons</a></li> -->
                        <li class=" hover:text-white nav-footer-list smooth flex items-center gap-4"> <a
                                href="#Weavon">Wigs</a>
                            <i class="bx bx-chevron-right text-xl"></i>
                        </li>
                        <li class=" hover:text-white nav-footer-list smooth flex items-center gap-4"> <a
                                href="./Contact.html">Contact Us</a><i class="bx bx-chevron-right text-xl"></i>
                        </li>
                    </ul>
                </div>
                <div class="space-y-3 bg-primary">
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



    <!-- npx tailwindcss -i /dist/tailwind/input.css -o /dist/tailwind/output.css --watch -->
    <script>
     
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
    <script src="./dist/js/general.js"></script>
    <script src="./dist/js/boxicons.js"></script>
    <script>
        function applyFilters() {
            const selectedLengths = Array.from(document.querySelectorAll('.length-filter:checked')).map(el => el.value);
            const selectedColors = Array.from(document.querySelectorAll('.color-filter:checked')).map(el => el.value);
            const minPrice = parseFloat(document.getElementById('min-price').value) || 0;
            const maxPrice = parseFloat(document.getElementById('max-price').value) || Infinity;

            document.querySelectorAll('.product-box').forEach(product => {
                const productLength = product.getAttribute('data-length');
                const productColor = product.getAttribute('data-color');
                const productPrice = parseFloat(product.getAttribute('data-price'));

                const lengthMatch = selectedLengths.length === 0 || selectedLengths.includes(productLength);
                const colorMatch = selectedColors.length === 0 || selectedColors.includes(productColor);
                const priceMatch = productPrice >= minPrice && productPrice <= maxPrice;

                if (lengthMatch && colorMatch && priceMatch) {
                    product.style.display = 'block';
                } else {
                    product.style.display = 'none';
                }
            });
        }
    </script>
</body>

</html>