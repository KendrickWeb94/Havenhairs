<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="./dist/scss/Style.css">
    <link rel="stylesheet" href="./dist/tailwind/output.css">
    <link rel="stylesheet" href="./dist/icons/font-awesome.css">
    <link rel="stylesheet" href="./dist/css/cart.css">
    <script src="./dist/js/cart.js"></script>
    <link rel="stylesheet" href="./dist/icons/boxicons.min.css">
    <link rel="stylesheet" href="./dist/swiper/swiper.min.css">
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

    <section class=" min-h-[70vh] mt-20 z-lg h-auto flex items-center justify-center  w-full "
        style="background: url(./assets/imgs/hero1.svg); background-position: center;background-repeat: no-repeat;background-size:cover;">
        <div class="container_custom mx-auto w-full h-full">
            <div class="space-y-6 py-10">
                <h1
                    class=" ds:text-4xl text-balance ds:max-w-md md:text-6xl text-white md:max-w-xl leading-[5rem] font_sb">
                    Classy and Luxury Hairs for all</h1>
                <p class="ds:text-sm leading-10 sm:text-base text-balance text-gray-50 max-w-2xl">we have the best hairs
                    that will satisy your taste ,every color, and also affordable luxury hairs , local and
                    international, so dive in make your pick, </p>
                <div class="flex items-center gap-4 flex-wrap">
                    <a href="./pages/Categories.php" class="btn-primary">
                        <p>Go to store</p><i class="bx bx-chevron-right"></i>
                    </a>
                    <a href="./pages/About.php" class="btn-transparent text-white">
                        <p>More info</p><i class="bx bx-right-arrow-circle"></i>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <section class="min-h-auto  w-full mx-auto md:container_custom">
        <div class="w-full md:flex-row-reverse ds:flex-col-reverse flex items-center">
            <div
                class="w-full h-[450px] p-5 px-8 space-y-7 bg-primary/65 ds:-translate-y-6 md:-translate-y-0 z-lg  text-white">
                <p class="uppercase font_sb ">no extra cost on delivery</p>
                <h1 class=" text-5xl max-w-sm text-balance font_b">Its All about style</h1>
                <p class="text-sm max-w-md leading-8">you can get your hair delivered to you with no extra cost on
                    shipping , so that means no more added charges on delivery, isnt that great?</p>
                <p class="bg-white  p-1 rounded-3xl w-fit text-xs px-3 text-primary text-pretty">Promo Codes Coming Soon
                </p>
                <br>
                <a href="./pages/Categories.php">
                    <button class=" btn-outline-white">GET SHOPPING</button>
                </a>
            </div>
            <div class="w-full h-[450px] bg-primary/10  object-cover  overflow-hidden"
                style="background: url(./assets/imgs/hairs/product-3.jpg);  background-position: center;background-repeat: no-repeat;background-size:cover;">
                <!-- <img src="./assets/imgs/hairs/product-7.jpg" class="w-[50%]  h-[50%] object-cover" alt=""> -->
            </div>
        </div>
    </section>


    <section class="w-full mx-auto min-h-[60vh] py-16 container_custom ">
        <div class="w-full">
            <h1 class="text-primary font_sb text-center text-5xl ">Our magazine</h1>
        </div>
        <div class="w-full overflow-x-auto n gap-4 lg:flex-nowrap ds:flex-wrap flex items-center justify-center">
            <div class="magazine ds:w-full xs:w-[240px]  overflow-hidden">
                <img src="./assets/imgs/hairs/product-5.jpg" class="" alt="">
                <div class="floating smooth absolute bottom-0 gap-4 flex items-center justify-center">
                    <div class="p-2 px-5 bg-primary text-white z-lg text-xs font_m">Multi colored</div>
                    <div class="p-2 px-3 flex items-center justify-center bg-primary text-white z-lg text-xl"><i
                            class="bx bx-chevron-right"></i></div>

                </div>
            </div>
            <div class="magazine  ds:w-full xs:w-[240px] overflow-hidden">
                <img src="./assets/imgs/hairs/product-6.jpg" class="" alt="">
                <div class="floating smooth absolute bottom-0 gap-4 flex items-center justify-center">
                    <div class="p-2 px-5 bg-primary text-white z-lg text-xs font_m">long braiding</div>
                    <div class="p-2 px-3 flex items-center justify-center bg-primary text-white z-lg text-xl"><i
                            class="bx bx-chevron-right"></i></div>

                </div>
            </div>
            <div class="magazine  ds:w-full xs:w-[240px] overflow-hidden">
                <img src="./assets/imgs/hairs/product-7.jpg" class="" alt="">
                <div class="floating smooth absolute bottom-0 gap-4 flex items-center justify-center">
                    <div class="p-2 px-5 bg-primary text-white z-lg text-xs font_m">Curly waves</div>
                    <div class="p-2 px-3 flex items-center justify-center bg-primary text-white z-lg text-xl"><i
                            class="bx bx-chevron-right"></i></div>

                </div>
            </div>
            <div class="magazine  ds:w-full xs:w-[240px] overflow-hidden">
                <img src="./assets/imgs/hairs/product-9.jpg" class="" alt="">
                <div class="floating smooth absolute bottom-0 gap-4 flex items-center justify-center">
                    <div class="p-2 px-5 bg-primary text-white z-lg text-xs font_m">Onion Packed</div>
                    <div class="p-2 px-3 flex items-center justify-center bg-primary text-white z-lg text-xl"><i
                            class="bx bx-chevron-right"></i></div>

                </div>
            </div>
            <div class="magazine ds:w-full xs:w-[240px]  overflow-hidden">
                <img src="./assets/imgs/hairs/product-8.jpg" class="" alt="">
                <div class="floating smooth absolute bottom-0 gap-4 flex items-center justify-center">
                    <div class="p-2 px-5 bg-primary text-white z-lg text-xs font_m">Shiny Curls</div>
                    <div class="p-2 px-3 flex items-center justify-center bg-primary text-white z-lg text-xl"><i
                            class="bx bx-chevron-right"></i></div>

                </div>
            </div>
        </div>
    </section>

    <div class=" bg-primary/10">
        <section class=" w-full mx-auto min-h-[10vh] container_custom">
            <div class="w-full h-full py-16">
                <div class="space-y-4">
                    <h1 class="text-2xl font_m">You want it, we have it</h1>
                    <p class=" max-w-lg text-gray-500 text-sm">we've created a easier way to give customers what they
                        always want by listening to what they to say and doing our best to deliver, you can easily talk
                        to us through our contact forum</p>
                    <br>
                    <a href="./pages/Contact.php" class=" underline underline-offset-8 uppercase font_m">Try Our
                        forum</a>
                </div>
            </div>
        </section>
    </div>
    <section class="w-full mx-auto py-24 relative min-h-[60vh] container_custom">
        <div class="w-full flex items-center ds:flex-wrap md:flex-nowrap justify-between gap-7">
            <div class="max-w-md min-w-[300px] h-auto shadow-md p-6 rounded-md">
                <div class="space-y-5">
                    <h1 class="text-xl ">Based On recent Requests</h1>
                    <p class="text-sm text-gray-500">These are Hairs that were requested by previous customers and we
                        surely didnt dissapoint</p>

                    <a href="./pages/Categories.php" class="btn-primary">Request Yours now</a>
                </div>
            </div>

            <div class="swiper mySwiper ">
                <div class="swiper-wrapper py-14">
                    <div class="swiper-slide">
                        <div class="shadow-md product-wrapper overflow-hidden">
                            <div class="like">
                                <div class="text-gray-600">
                                    <i class="bx bx-heart like-btn"></i>
                                    <p class="like-populate" id="like-populate">0</p>

                                </div>
                            </div>

                            <img src="./assets/imgs/products/product-1.jpg" alt="">
                            <div class="space-y-1 p-3">
                                <h1 class=" font_sb text-gray-600">Curly Waves Wig </h1>
                                <p class=" text-sm text-gray-400">Size 5</p>
                                <strong class=" text-sm">Negotiatable Price</strong>
                                <p class=" text-red-500 text-sm">No cost on each delivery</p>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="shadow-md product-wrapper overflow-hidden">
                            <div class="like">
                                <div class="text-gray-600">
                                    <i class="bx bx-heart like-btn"></i>
                                    <p class="like-populate" id="like-populate">0</p>

                                </div>
                            </div>
                            <img src="./assets/imgs/products/product-2.jpg" alt="">
                            <div class="space-y-1 p-3">
                                <h1 class=" font_sb text-gray-600">Curly Waves Wig </h1>
                                <p class=" text-sm text-gray-400">Size 5</p>
                                <strong class=" text-sm">Negotiatable Price</strong>
                                <p class=" text-red-500 text-sm">No cost on each delivery</p>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="shadow-md product-wrapper overflow-hidden">
                            <div class="like">
                                <div class="text-gray-600">
                                    <i class="bx bx-heart like-btn"></i>
                                    <p class="like-populate" id="like-populate">0</p>

                                </div>
                            </div>
                            <img src="./assets/imgs/products/product-3.jpg" alt="">
                            <div class="space-y-1 p-3">
                                <h1 class=" font_sb text-gray-600">Curly Waves Wig </h1>
                                <p class=" text-sm text-gray-400">Size 5</p>
                                <strong class=" text-sm">Negotiatable Price</strong>
                                <p class=" text-red-500 text-sm">No cost on each delivery</p>
                            </div>
                        </div>
                    </div>

                    <div class="swiper-slide">
                        <div class="shadow-md product-wrapper overflow-hidden">
                            <div class="like">
                                <div class="text-gray-600">
                                    <i class="bx bx-heart like-btn"></i>
                                    <p class="like-populate" id="like-populate">0</p>

                                </div>
                            </div>
                            <img src="./assets/imgs/products/product-4.jpg" alt="">

                            <div class="space-y-1 p-3">
                                <h1 class=" font_sb text-gray-600">Curly Waves Wig </h1>
                                <p class=" text-sm text-gray-400">Size 5</p>
                                <strong class=" text-sm">Negotiatable Price</strong>
                                <p class=" text-red-500 text-sm">No cost on each delivery</p>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="swiper-pagination"></div>
            </div>
        </div>
    </section>
    <main class="bg-gray-400/5">

        <section class="mx-auto w-full py-8 min-h-[60vh] container_custom">
            <div class="w-full space-y-6 ">
                <div class="flex items-center justify-between gap-4 flex-wrap">
                    <h1 class="text-2xl font_m">Most favorited</h1>
                    <div class="flex items-center gap-4">
                        <a href="./pages/Categories.php">
                            <button class="btn-outline-dark font_m">SHOP ALL</button>
                        </a>
                    </div>
                </div>
                <div class="swiper mySwiper-2 ">
                    <div class="swiper-wrapper px-4 py-14">
                        <div class="swiper-slide">
                            <div class="shadow-md product-wrapper overflow-hidden">
                                <div class="like">
                                    <div class="text-gray-600">
                                        <i class="bx bx-heart like-btn"></i>
                                        <p class="like-populate" id="like-populate">0</p>

                                    </div>
                                </div>

                                <img src="./assets/imgs/products/product-1.jpg" alt="">
                                <div class="space-y-1 p-3">
                                    <h1 class=" font_sb text-gray-600">Curly Waves Wig </h1>
                                    <p class=" text-sm text-gray-400">Size 5</p>
                                    <strong class=" text-sm">Negotiatable Price</strong>
                                    <p class=" text-red-500 text-sm">No cost on each delivery</p>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="shadow-md product-wrapper overflow-hidden">
                                <div class="like">
                                    <div class="text-gray-600">
                                        <i class="bx bx-heart like-btn"></i>
                                        <p class="like-populate" id="like-populate">0</p>

                                    </div>
                                </div>

                                <img src="./assets/imgs/products/product-16.jpg" alt="">
                                <div class="space-y-1 p-3">
                                    <h1 class=" font_sb text-gray-600">Curly Waves Wig </h1>
                                    <p class=" text-sm text-gray-400">Size 5</p>
                                    <strong class=" text-sm">Negotiatable Price</strong>
                                    <p class=" text-red-500 text-sm">No cost on each delivery</p>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="shadow-md product-wrapper overflow-hidden">
                                <div class="like">
                                    <div class="text-gray-600">
                                        <i class="bx bx-heart like-btn"></i>
                                        <p class="like-populate" id="like-populate">0</p>

                                    </div>
                                </div>

                                <img src="./assets/imgs/products/product-7.jpg" alt="">
                                <div class="space-y-1 p-3">
                                    <h1 class=" font_sb text-gray-600">Curly Waves Wig </h1>
                                    <p class=" text-sm text-gray-400">Size 5</p>
                                    <strong class=" text-sm">Negotiatable Price</strong>
                                    <p class=" text-red-500 text-sm">No cost on each delivery</p>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="shadow-md product-wrapper overflow-hidden">
                                <div class="like">
                                    <div class="text-gray-600">
                                        <i class="bx bx-heart like-btn"></i>
                                        <p class="like-populate" id="like-populate">0</p>

                                    </div>
                                </div>

                                <img src="./assets/imgs/products/product-9.jpg" alt="">
                                <div class="space-y-1 p-3">
                                    <h1 class=" font_sb text-gray-600">Curly Waves Wig </h1>
                                    <p class=" text-sm text-gray-400">Size 5</p>
                                    <strong class=" text-sm">Negotiatable Price</strong>
                                    <p class=" text-red-500 text-sm">No cost on each delivery</p>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="shadow-md product-wrapper overflow-hidden">
                                <div class="like">
                                    <div class="text-gray-600">
                                        <i class="bx bx-heart like-btn"></i>
                                        <p class="like-populate" id="like-populate">0</p>

                                    </div>
                                </div>
                                <img src="./assets/imgs/products/product-2.jpg" alt="">
                                <div class="space-y-1 p-3">
                                    <h1 class=" font_sb text-gray-600">Curly Waves Wig </h1>
                                    <p class=" text-sm text-gray-400">Size 5</p>
                                    <strong class=" text-sm">Negotiatable Price</strong>
                                    <p class=" text-red-500 text-sm">No cost on each delivery</p>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="shadow-md product-wrapper overflow-hidden">
                                <div class="like">
                                    <div class="text-gray-600">
                                        <i class="bx bx-heart like-btn"></i>
                                        <p class="like-populate" id="like-populate">0</p>

                                    </div>
                                </div>
                                <img src="./assets/imgs/products/product-3.jpg" alt="">
                                <div class="space-y-1 p-3">
                                    <h1 class=" font_sb text-gray-600">Curly Waves Wig </h1>
                                    <p class=" text-sm text-gray-400">Size 5</p>
                                    <strong class=" text-sm">Negotiatable Price</strong>
                                    <p class=" text-red-500 text-sm">No cost on each delivery</p>
                                </div>
                            </div>
                        </div>

                        <div class="swiper-slide">
                            <div class="shadow-md product-wrapper overflow-hidden">
                                <div class="like">
                                    <div class="text-gray-600">
                                        <i class="bx bx-heart like-btn"></i>
                                        <p class="like-populate" id="like-populate">0</p>

                                    </div>
                                </div>
                                <img src="./assets/imgs/products/product-4.jpg" alt="">

                                <div class="space-y-1 p-3">
                                    <h1 class=" font_sb text-gray-600">Curly Waves Wig </h1>
                                    <p class=" text-sm text-gray-400">Size 5</p>
                                    <strong class=" text-sm">Negotiatable Price</strong>
                                    <p class=" text-red-500 text-sm">No cost on each delivery</p>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="swiper-pagination"></div>
                </div>
            </div>
        </section>
    </main>

    <section class="mx-auto testimonial w-full py-8 min-h-[60vh] container_custom">
        <div class="w-full space-y-6">
            <div class="flex items-center justify-between gap-4 flex-wrap">
                <h1 class="text-2xl font_m">Customer's Feedback</h1>
            </div>
            <div class="swiper mySwiper-3 ">
                <div class="swiper-wrapper min-h-[20vh] py-14">
                    <div class="swiper-slide">
                        <div class="rounded-md shadow-xl  h-auto w-auto">
                            <div class="w-full p-1 bg-primary"></div>
                            <p class=" text-gray-400 p-5 text-sm">The hairs are just so nice , i really enjoyed the new
                                feel the hairs gave me, it was just a wonderful feeling and this is now my one stop
                                shopping place</p>
                            <div class=" flex items-center p-5 justify-between w-full">
                                <p class="text-gray-800 font_m ">Angela Kwesi</p>
                                <i class="bx bxs-quote-right text-xl text-primary"></i>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="rounded-md shadow-xl  h-auto w-auto">
                            <div class="w-full p-1 bg-primary"></div>
                            <p class=" text-gray-400 p-5 text-sm">ehh Charlie , the hair dey be for me , like it was so
                                nice pa pa, and its also affordable , omg i love this , i would recommend this to every
                                lady out there, you need to try it</p>
                            <div class=" flex items-center p-5 justify-between w-full">
                                <p class="text-gray-800 font_m ">Agyei Sikapa</p>
                                <i class="bx bxs-quote-right text-xl text-primary"></i>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="rounded-md shadow-xl  h-auto w-auto">
                            <div class="w-full p-1 bg-primary"></div>
                            <p class=" text-gray-400 p-5 text-sm">I seriously dont regret ever purchasing hairs from you
                                guys kraaaa, because the hairs are just too nice , am even planning to visit their
                                physical store</p>
                            <div class=" flex items-center p-5 justify-between w-full">
                                <p class="text-gray-800 font_m ">Nana Kwame</p>
                                <i class="bx bxs-quote-right text-xl text-primary"></i>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="rounded-md shadow-xl  h-auto w-auto">
                            <div class="w-full p-1 bg-primary"></div>
                            <p class=" text-gray-400 p-5 text-sm">I believe that i've found one of the best hair place
                                in accra, and i can stand by it and surely they wont disapoint , thank you guys so much
                            </p>
                            <div class=" flex items-center p-5 justify-between w-full">
                                <p class="text-gray-800 font_m ">Erica Kofi</p>
                                <i class="bx bxs-quote-right text-xl text-primary"></i>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="rounded-md shadow-xl  h-auto w-auto">
                            <div class="w-full p-1 bg-primary"></div>
                            <p class=" text-gray-400 p-5 text-sm">so much love to you guys , and a high five too, you
                                guys really made me happy, especially when the delivery was free, only taking away that
                                cost just made me happy</p>
                            <div class=" flex items-center p-5 justify-between w-full">
                                <p class="text-gray-800 font_m ">Porsha mohammed Mina</p>
                                <i class="bx bxs-quote-right text-xl text-primary"></i>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-pagination"></div>
            </div>
        </div>
    </section>
    <section class="mx-auto faq w-full py-8 min-h-[60vh] container_custom">
        <div class="w-full">

            <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" rel="stylesheet" />

            <div class=" w-full">
                <!-- <div class=" max-w-sm">
                    <img src="./assets/imgs/faq.svg" alt="">
                </div> -->
                <div class="min-h-screen w-full grid place-items-center">
                    <div class="w-full mx-auto rounded border">
                        <div class="bg-white p-6 shadow-sm">
                            <h3 class="text-2xl font-medium text-gray-800">Some of our customers have asked questions
                            </h3>
                            <p class="text-sm font-light text-gray-600 my-3">
                                and thi was our reply to their questions ,
                            </p>

                            <div class="h-1 w-full mx-auto border-b my-5"></div>

                            <!-- What is term -->
                            <div class="transition hover:bg-primary/15">
                                <!-- header -->
                                <div
                                    class="accordion-header cursor-pointer transition flex space-x-5 px-5 items-center h-16">
                                    <i class="fas fa-plus"></i>
                                    <h3>What services do you offer??</h3>
                                </div>
                                <!-- Content -->
                                <div class="accordion-content px-5 pt-0 overflow-hidden max-h-0">
                                    <p class="leading-6  font-light pl-9 text-justify py-5">
                                        Our salon offers a wide range of services, including hairs, styling, coloring,
                                        extensions, and treatments.
                                    </p>

                                </div>
                            </div>

                            <!-- When to use Accordion Components -->
                            <div class="transition hover:bg-primary/15">
                                <!-- header -->
                                <div
                                    class="accordion-header cursor-pointer transition flex space-x-5 px-5 items-center h-16">
                                    <i class="fas fa-plus"></i>
                                    <h3>Do you accept appointments or do you offer walk-ins?</h3>
                                </div>
                                <!-- Content -->
                                <div class="accordion-content px-5 pt-0 overflow-hidden max-h-0">
                                    <p class="leading-6 font-light pl-9 text-justify py-5">
                                        We accept both appointments and walk-ins. However, we recommend making an
                                        appointment to ensure availability, especially for popular services or during
                                        peak times.
                                    </p>

                                </div>
                            </div>

                            <!-- Accordion Wrapper -->
                            <div class="transition hover:bg-primary/15">
                                <!-- header -->
                                <div
                                    class="accordion-header cursor-pointer transition flex space-x-5 px-5 items-center h-16">
                                    <i class="fas fa-plus"></i>
                                    <h3> Do you offer hair extensions?</h3>
                                </div>
                                <!-- Content -->
                                <div class="accordion-content px-5 pt-0 overflow-hidden max-h-0">
                                    <p class="leading-6 font-light pl-9 text-justify py-5">
                                        Yes, we offer a variety of hair extension options, including tape-ins, clip-ins,
                                        and microbeads. Our stylists can help you choose the right type of extensions to
                                        suit your hair goals.
                                    </p>

                                </div>
                            </div>

                            <!-- Accordion Wrapper -->
                            <div class="transition hover:bg-primary/15">
                                <!-- header -->
                                <div
                                    class="accordion-header cursor-pointer transition flex space-x-5 px-5 items-center h-16">
                                    <i class="fas fa-plus"></i>
                                    <h3> What products do you use?</h3>
                                </div>
                                <!-- Content -->
                                <div class="accordion-content px-5 pt-0 overflow-hidden max-h-0">
                                    <p class="leading-6 font-light pl-9 text-justify py-5">
                                        We use high-quality, professional hair products from Lush and other hair
                                        products are designed to nourish and protect your hair while achieving your
                                        desired results.
                                    </p>

                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>


        </div>
    </section>
    <iframe width="100%" height="400" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" id="gmap_canvas"
        src="https://maps.google.com/maps?width=520&amp;height=400&amp;hl=en&amp;q=Nmai%20Dzorn%20Adjiringano%20Accra+(Haven%20Hair%20palour)&amp;t=p&amp;z=15&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"></iframe>
    <a href='https://dissertationschreibenlassen.com/'>dissertationschreibenlassen.com</a>
    <script type='text/javascript'
        src='https://embedmaps.com/google-maps-authorization/script.js?id=d90fa9f8c27a6273c95cb5dea84b295ec9608673'></script>
    <section class="min-h-screen w-full pb-8 container_custom mx-auto">
        <section class="py-24">
            <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
                <div class="md:flex gap-x-24 clear-left md:mb-16 mb-10">
                    <div class=" md:mb-0 mb-4">
                        <h2
                            class="text-black font-manrope text-4xl font-semibold leading-10 mb-5 md:text-left text-center">
                            Get In Touch</h2>
                        <p class="text-gray-600 text-lg font-normal leading-7 mb-7 md:text-left text-center">Whether you
                            have a concern or simply want to say hello, We are here to facilitate communication with
                            you.</p>
                        <div class="flex md:items-center md:justify-start justify-center">
                            <a href="./pages/Contact.php">
                                <button
                                    class="w-36 h-12 rounded-full bg-primary transition-all duration-700 hover:bg-primary/75 shadow text-white text-center text-base font-semibold leading-6">Contact
                                    Us</button>
                            </a>
                        </div>
                    </div>
                    <div class="border-l-2 md:border-indigo-600 border-white px-10 py-6">
                        <div class="mb-8">
                            <h6 class="text-gray-500 text-sm font-medium leading-5 pb-3 md:text-start text-center">Email
                                Address</h6>
                            <h3 class="text-black text-xl font-semibold leading-8 md:text-start text-center">
                                blessagyare03@gmail.com</h3>
                        </div>
                        <div>
                            <h6 class="text-gray-500 text-sm font-medium leading-5 pb-3 md:text-start text-center">Phone
                                Number</h6>
                            <h3 class="text-black text-xl font-semibold leading-8 md:text-start text-center">054 555
                                0636</h3>
                        </div>
                    </div>
                </div>

            </div>
            </div>
        </section>


    </section>


    <footer class=" rounded-t-3xl w-full bg-primary p-16 min-h-[30vh]">
        <div class="mx-auto w-full container_custom h-auto">
            <div class=" grid-cat-footer justify-center w-full">
                <div class="space-y-3">
                    <a href="./index.php">
                        <img src="./assets/imgs/Logo-dark.svg" alt="" class="max-w-56">
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
                                href="./pages/Categories.php">Hairs</a><i class="bx bx-chevron-right text-xl"></i></li>
                        <!-- <li class=" hover:text-primary smooth "> <a href="#Weavons">Weavons</a></li> -->
                        <li class=" hover:text-white nav-footer-list smooth flex items-center gap-4"> <a
                                href="#Weavon">Wigs</a>
                            <i class="bx bx-chevron-right text-xl"></i>
                        </li>
                        <li class=" hover:text-white nav-footer-list smooth flex items-center gap-4"> <a
                                href="./pages/Contact.php">Contact Us</a><i class="bx bx-chevron-right text-xl"></i>
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
    <style>
        .accordion-content {
            transition: max-height 0.3s ease-out, padding 0.3s ease;
        }
    </style>
    <script>
        const accordionHeader = document.querySelectorAll(".accordion-header");
        accordionHeader.forEach((header) => {
            header.addEventListener("click", function () {
                const accordionContent = header.parentElement.querySelector(".accordion-content");
                let accordionMaxHeight = accordionContent.style.maxHeight;

                // Condition handling
                if (accordionMaxHeight == "0px" || accordionMaxHeight.length == 0) {
                    accordionContent.style.maxHeight = `${accordionContent.scrollHeight + 32}px`;
                    header.querySelector(".fas").classList.remove("fa-plus");
                    header.querySelector(".fas").classList.add("fa-minus");
                    header.parentElement.classList.add("bg-primary/15");
                } else {
                    accordionContent.style.maxHeight = `0px`;
                    header.querySelector(".fas").classList.add("fa-plus");
                    header.querySelector(".fas").classList.remove("fa-minus");
                    header.parentElement.classList.remove("bg-primary/15");
                }
            });
        });
    </script>
    <script src="./dist/js/Jquery.js"></script>
    <script src="./dist/js/swiper.min.js"></script>
    <script src="./dist/js/swiper-bundle.min.js.map"></script>
    <script src="./dist/js/script.js"></script>
    <script src="./dist/js/boxicons.js"></script>
    <script>

    </script>
</body>

</html>