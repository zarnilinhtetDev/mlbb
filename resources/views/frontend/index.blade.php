<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>M2nGameShop</title>
    <link rel="icon" type="image/x-icon" href="{{ asset('frontend/photo/images (1).jpg') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="">
    <link rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.4.2/css/fontawesome.min.css"
        integrity="sha384-BY+fdrpOd3gfeRvTSMT+VUZmA728cfF9Z2G42xpaRkUGu2i3DyzpTURDo5A6CaLK" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link rel="icon" type="image/x-icon" href="{{ asset('frontend/photo/m2nseven.png') }}">
</head>
<style>
    body {
        background: #13234d;
        /* Fallback color if gradients are not supported */
        background: linear-gradient(295deg, #13234d 0%, #0851aa 80%);
        background: -webkit-linear-gradient(295deg, #13234d 0%, #0851aa 80%);
        /* For Safari and Chrome */
        background: -moz-linear-gradient(295deg, #13234d 0%, #0851aa 80%);
        /* For Firefox */
        font-family: "Times New Roman", Times, serif;
    }

    img {
        border-radius: 10px;
        /* Adjust the value as needed */
    }

    @keyframes slideInFromRight {
        0% {
            transform: translateX(100%);
            opacity: 0;
        }

        100% {
            transform: translateX(0);
            opacity: 1;
        }
    }

    .carousel-inner .carousel-item {
        animation: slideInFromRight 1s ease-in-out;
    }

    .custom-btn {
        position: relative;
        overflow: hidden;
        border: none;
        padding: 10px;
        font-size: 15px;
        cursor: pointer;
        background: linear-gradient(45deg, #162858, #0069D9);
        color: #fff;
        text-transform: uppercase;
        letter-spacing: 2px;
        font-weight: bold;
        border-radius: 5px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.5);
        transition: box-shadow 0.1s ease;
    }

    .custom-btn:hover {
        box-shadow: 0 0 20px rgba(14, 221, 248, 0.8);
    }
</style>

<body>
    <!-- Nav start -->
    <nav class="navbar navbar-expand-lg navbar-dark" style="background-color: #103a5a">
        <div class="container-fluid">
            <a class="navbar-brand custom-font"><i class="fa-solid fa-gamepad"> M2NSEVEN</i></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown"
                aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active custom-font" aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link custom-font" href="#">Service</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link custom-font" href="#">Buy</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link custom-font" href="#">Reseller</a>
                    </li>
                </ul>
                {{-- <form class="d-flex">
                    <input class="form-control me-2 custom-font" type="search" placeholder="Search"
                        aria-label="Search" />
                    <button class="btn btn-outline-primary custom-font" type="submit">
                        Search
                    </button>
                </form> --}}


                <a class="nav-link text-white btn btn-primary mx-3" href="{{ url('login') }}">Login</a>


            </div>
        </div>
    </nav>

    <!-- Nav End -->

    <!-- slide -->
    <div class="container mt-5">
        <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
            <ol class="carousel-indicators">
                <li data-bs-target="#carouselExampleControls" data-bs-slide-to="0" class="active"></li>
                <li data-bs-target="#carouselExampleControls" data-bs-slide-to="1"></li>
                <li data-bs-target="#carouselExampleControls" data-bs-slide-to="2"></li>
            </ol>


            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="https://staticg.sportskeeda.com/editor/2023/07/fde0c-16888913542123-1920.jpg"
                        class="d-block w-100 rounded-images" alt="..." style="height: 300px;">
                </div>
                <div class="carousel-item">
                    <img src="https://news.codashop.com/mm/wp-content/uploads/sites/8/2020/09/How-to-Top-Up-Mobile-Legends.png"
                        class="d-block w-100 rounded-images" alt="..." style="height: 300px;">
                </div>
                <div class="carousel-item">
                    <img src="https://cdn.oneesports.gg/cdn-data/2023/06/MLBB_Logo_LoadingScreen.jpg"
                        class="d-block w-100 rounded-images" alt="..." style="height: 300px;">
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls"
                data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>


    <!-- slide End -->

    <!--Trand Card -->



    <div class="container mt-5 ">
        <h1 class="text-warning"> Popular Games</h1>
        <h4 class="text-warning"> Now Tranding</h1>

            <div class="row justify-content-center">
                <div class="col-md-3 text-center">
                    <div class="card">
                        <img src="https://images.cointelegraph.com/cdn-cgi/image/format=auto,onerror=redirect,quality=90,width=1434/https://s3.cointelegraph.com/storage/uploads/view/df41afd67c5a671b82db643477a44c79.JPG"
                            class="card-img-top" alt="...">
                        <div class="card-body text-center">
                            <h5 class="card-title">Mobile Legend Bang Bang</h5>

                            <a href="{{ url('login') }}"
                                class="btn btn-outline-warning d-flex justify-content-center mt-5 custom-btn"
                                style="font-weight: 900;"> Buy</a>
                        </div>
                    </div>

                </div>
                {{-- <div class="col-md-3">
                    <div class="card">
                        <img src="{{ asset('frontend/photo/trand.jpg') }}" class="card-img-top" alt="...">
                        <div class="card-body text-center">
                            <h5 class="card-title">Mobile Legend Bang Bang</h5>
                            <!-- <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p> -->
                            <a href="#" class="btn btn-outline-warning d-flex justify-content-center mt-5 "
                                style="font-weight: 900;"> Buy</a>
                        </div>
                    </div>

                </div>
                <div class="col-md-3">
                    <div class="card">
                        <img src="{{ asset('frontend/photo/trand.jpg') }}" class="card-img-top" alt="...">
                        <div class="card-body text-center">
                            <h5 class="card-title">Mobile Legend Bang Bang</h5>
                            <!-- <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p> -->
                            <a href="#" class="btn btn-outline-warning d-flex justify-content-center mt-5 "
                                style="font-weight: 900;"> Buy</a>
                        </div>
                    </div>

                </div>
                <div class="col-md-3">
                    <div class="card">
                        <img src="{{ asset('frontend/photo/trand.jpg') }}" class="card-img-top" alt="...">
                        <div class="card-body text-center">
                            <h5 class="card-title">Mobile Legend Bang Bang</h5>
                            <!-- <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p> -->
                            <a href="#" class="btn btn-outline-warning d-flex justify-content-center mt-5 "
                                style="font-weight: 900;"> Buy</a>
                        </div>
                    </div> --}}

            </div>

    </div>

    <!-- Trand Card End-->
    <!-- Footer -->
    <!-- Remove the container if you want to extend the Footer to full width. -->
    <div class="container-fluid mt-5">

        <!-- Footer -->
        <footer class="text-center text-lg-start text-dark" style="background-color: #1c2331">
            <!-- Section: Social media -->
            {{-- <section class="d-flex justify-content-between p-4" style="background-color: #F8930D">
                <!-- Left -->
                <div class="me-5">
                    <span>Get connected with us on social networks:</span>
                </div>
                <!-- Left -->

                <!-- Right -->
                <div>
                    <a href="" class="text-white me-4">
                        <i class="fab fa-facebook-f"></i>
                    </a>
                    <a href="" class="text-white me-4">
                        <i class="fab fa-twitter"></i>
                    </a>
                    <a href="" class="text-white me-4">
                        <i class="fab fa-google"></i>
                    </a>
                    <a href="" class="text-white me-4">
                        <i class="fab fa-instagram"></i>
                    </a>
                    <a href="" class="text-white me-4">
                        <i class="fab fa-linkedin"></i>
                    </a>
                    <a href="" class="text-white me-4">
                        <i class="fab fa-github"></i>
                    </a>
                </div>
                <!-- Right -->
            </section> --}}
            <!-- Section: Social media -->

            <!-- Section: Links  -->
            <section class="">
                <div class="container text-center text-md-start mt-5">
                    <!-- Grid row -->
                    <div class="row mt-3">
                        <!-- Grid column -->
                        {{-- <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
                            <!-- Content -->
                            <h6 class="text-uppercase fw-bold">Company name</h6>
                            <hr class="mb-4 mt-0 d-inline-block mx-auto"
                                style="width: 60px; background-color: #7c4dff; height: 2px" />
                            <p>

                            </p>
                        </div> --}}
                        <!-- Grid column -->

                        <!-- Grid column -->
                        {{-- <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
                            <!-- Links -->
                            <h6 class="text-uppercase fw-bold">Products</h6>
                            <hr class="mb-4 mt-0 d-inline-block mx-auto"
                                style="width: 60px; background-color: #7c4dff; height: 2px" />
                            <p>
                                <a href="#!" class="text-white">MDBootstrap</a>
                            </p>
                            <p>
                                <a href="#!" class="text-white">MDWordPress</a>
                            </p>
                            <p>
                                <a href="#!" class="text-white">BrandFlow</a>
                            </p>
                            <p>
                                <a href="#!" class="text-white">Bootstrap Angular</a>
                            </p>
                        </div> --}}
                        <!-- Grid column -->

                        <!-- Grid column -->
                        {{-- <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
                            <!-- Links -->
                            <h6 class="text-uppercase fw-bold">Useful links</h6>
                            <hr class="mb-4 mt-0 d-inline-block mx-auto"
                                style="width: 60px; background-color: #7c4dff; height: 2px" />
                            <p>
                                <a href="#!" class="text-white">Your Account</a>
                            </p>
                            <p>
                                <a href="#!" class="text-white">Become an Affiliate</a>
                            </p>
                            <p>
                                <a href="#!" class="text-white">Shipping Rates</a>
                            </p>
                            <p>
                                <a href="#!" class="text-white">Help</a>
                            </p>
                        </div> --}}
                        <!-- Grid column -->

                        <!-- Grid column -->
                        {{-- <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
                            <!-- Links -->
                            <h6 class="text-uppercase fw-bold">Contact</h6>
                            <hr class="mb-4 mt-0 d-inline-block mx-auto"
                                style="width: 60px; background-color: #7c4dff; height: 2px" />
                            <p><i class="fas fa-home mr-3"></i> New York, NY 10012, US</p>
                            <p><i class="fas fa-envelope mr-3"></i> info@example.com</p>
                            <p><i class="fas fa-phone mr-3"></i> + 01 234 567 88</p>
                            <p><i class="fas fa-print mr-3"></i> + 01 234 567 89</p>
                        </div> --}}
                        <!-- Grid column -->
                    </div>
                    <!-- Grid row -->
                </div>
            </section>
            <!-- Section: Links  -->

            <!-- Copyright -->
            <div class="text-center p-3" style="background-color: #F8930D">
                © 2020 Copyright:
                <a class="text-dark" href="https://mdbootstrap.com/">MLBB</a>
            </div>
            <!-- Copyright -->
        </footer>
        <!-- Footer -->

    </div>
    <!-- End of .container -->

    <script defer src="https://use.fontawesome.com/releases/v5.15.4/js/all.js"
        integrity="sha384-rOA1PnstxnOBLzCLMcre8ybwbTmemjzdNlILg8O7z1lUkLXozs4DHonlDtnE7fpc" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
        integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>

</body>

</html>
