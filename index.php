<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="width=device-width, initial-scale=1.0">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- css -->
    <link rel="stylesheet" href="style.css">

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet" />
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css?family=Open+Sans&display=swap" rel="stylesheet" />
    <!-- MDB -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.4.1/mdb.min.css" rel="stylesheet" />

    <!-- AOS -->
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />

    <title>Real Estate</title>
</head>

<body>

    <!-- awal nav -->
    <header class="head-nav">
        <div class="brand">
            <h1 class="porto"><strong style="color: rgb(221, 160, 47);">Find</strong> Home</h1>
        </div>
        <input type="checkbox" id="nav_check" hidden>
        <nav>
            <ul>
                <li>
                    <a href="#">Home</a>
                </li>
                <li>
                    <a href="#about">About</a>
                </li>
                <li>
                    <a href="#projek">Product</a>
                </li>
                <li>
                    <a href="#contact">Contact</a>
                </li>
                <li>
                    <a href="reglog.php" class="login">LOGIN</a>
                </li>
            </ul>
        </nav>
        <label for="nav_check" class="hamburger">
            <div></div>
            <div></div>
            <div></div>
        </label>
    </header>
    <!-- akhir nav -->

    <!-- Awal Jumbotron -->
    <header class="jumbotron">
        <div class=" text-center bg-image">
            <div class="">
                <div class="maintext">
                    <div class="text-white">
                        <h2>Welcome</h2>
                        <h1 class="dev">Real Estate company</h1>
                    </div>
                    <div class="sosmed">
                        <ul class="d-flex justify-content-between">
                            <li><a href="https://www.instagram.com/hudzaifaa_"><i
                                        class="fab fa-instagram-square"></i></a></li>
                            <li><a href=""><i class="fab fa-github-square"></i></a></li>
                            <li><a href=""><i class="fab fa-facebook-square"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- Akhir Jumbotron -->

    <!-- Awal Content about -->
    <div class="content" id="about">
        <div class="foto" data-aos="fade-right">
            <img src="https://images.unsplash.com/photo-1496851473196-e26508c21494?q=80&w=1935&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                alt="">
        </div>
        <div class="profile">
            <div class="pengenalan">
                <h1 data-aos="fade-left">Selamat Datang di <strong style="color: rgb(221, 160, 47);">Find</strong> Home
                </h1>
                <p data-aos="fade-left">Kami adalah perusahaan real estate yang berkomitmen untuk memberikan solusi
                    properti terbaik bagi kebutuhan Anda. Dengan pengalaman yang solid dan tim profesional yang
                    berdedikasi,
                    <br data-aos="fade-left"> kami siap membantu Anda dalam perjalanan mencari, menjual, atau menyewa
                    properti.
                </p>
            </div>
        </div>
    </div>
    <!-- Akhir Content about -->

    <!-- Awal Keunggulan -->
    <div class="keunggulan">
        <div class="hdr">
            <h1>Keunggulan yang</h1>
            <h1><strong style="color: rgb(221, 160, 47);">Find</strong> Home miliki</h1>

            <p>Kami memiliki beberapa keunggulan yang membedakan kami dengan yang lain</p>
        </div>
        <div class="row1-container">
            <div class="box box-down cyan">
                <h2>Strategis</h2>
                <p>Rumah yang kami jual memiliki tempat yang strategis</p>
                <img src="https://assets.codepen.io/2301174/icon-supervisor.svg" alt="">
            </div>

            <div class="box red">
                <h2>Rumah berkualitas</h2>
                <p>kami menjual rumah yang memiliki kualitas terjamin</p>
                <img src="https://assets.codepen.io/2301174/icon-team-builder.svg" alt="">
            </div>

            <div class="box box-down blue">
                <h2>Harga terjangkau</h2>
                <p>kami menjual rumah dengan harga yang terjangkau</p>
                <img src="https://assets.codepen.io/2301174/icon-calculator.svg" alt="">
            </div>
        </div>
        <div class="row2-container">
            <div class="box orange">
                <h2>Modern House</h2>
                <p>Kami menjual rumah yang memiliki desain menarik dan yang pastinya modern dan indah</p>
                <img src="https://assets.codepen.io/2301174/icon-karma.svg" alt="">
            </div>
        </div>
    </div>
    <!-- Akhir Keunggulan -->

    <!-- Awal Project -->
    <h1 class="pr" id="projek" data-aos="zoom-in">House</h1>
    <main>
        <section class="cards">
            <div class="card">
                <div class="card__image-container">
                    <img
                        src="https://images.unsplash.com/photo-1613490493576-7fde63acd811?q=80&w=2071&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" />
                </div>
                <div class="card__content">
                    <p class="card__title text--medium">
                        Here's the Title of an Awesome Course
                    </p>
                    <div class="card__info">
                        <p class="text--medium">2 Kamar tidur | 3 kamar mandi <br>1 dapur | 1 Kolam renang</p>
                        <p class="card__price text--medium"><svg width="24px" height="24px" viewBox="0 0 24 24"
                                fill="none" xmlns="http://www.w3.org/2000/svg">
                                <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                <g id="SVGRepo_iconCarrier">
                                    <path
                                        d="M6.29977 5H21L19 12H7.37671M20 16H8L6 3H3M9 20C9 20.5523 8.55228 21 8 21C7.44772 21 7 20.5523 7 20C7 19.4477 7.44772 19 8 19C8.55228 19 9 19.4477 9 20ZM20 20C20 20.5523 19.5523 21 19 21C18.4477 21 18 20.5523 18 20C18 19.4477 18.4477 19 19 19C19.5523 19 20 19.4477 20 20Z"
                                        stroke="#ffffff" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round"></path>
                                </g>
                            </svg></p>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card__image-container">
                    <img
                        src="https://images.unsplash.com/photo-1600047509807-ba8f99d2cdde?q=80&w=1892&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" />
                </div>
                <div class="card__content">
                    <p class="card__title text--medium">
                        Here's the Title of an Awesome Course
                    </p>
                    <div class="card__info">
                        <p class="text--medium">3 Kamar tidur | 5 kamar mandi <br>1 dapur | 1 Garasi</p>
                        <p class="card__price text--medium"><svg width="24px" height="24px" viewBox="0 0 24 24"
                                fill="none" xmlns="http://www.w3.org/2000/svg">
                                <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                <g id="SVGRepo_iconCarrier">
                                    <path
                                        d="M6.29977 5H21L19 12H7.37671M20 16H8L6 3H3M9 20C9 20.5523 8.55228 21 8 21C7.44772 21 7 20.5523 7 20C7 19.4477 7.44772 19 8 19C8.55228 19 9 19.4477 9 20ZM20 20C20 20.5523 19.5523 21 19 21C18.4477 21 18 20.5523 18 20C18 19.4477 18.4477 19 19 19C19.5523 19 20 19.4477 20 20Z"
                                        stroke="#ffffff" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round"></path>
                                </g>
                            </svg></p>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card__image-container">
                    <img
                        src="https://images.unsplash.com/photo-1580587771525-78b9dba3b914?q=80&w=1974&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" />
                </div>
                <div class="card__content">
                    <p class="card__title text--medium">
                        Here's the Title of an Awesome Course
                    </p>
                    <div class="card__info">
                        <p class="text--medium">2 Kamar tidur | 2 kamar mandi <br>1 dapur | 1 Kolam renang</p>
                        <p class="card__price text--medium"><svg width="24px" height="24px" viewBox="0 0 24 24"
                                fill="none" xmlns="http://www.w3.org/2000/svg">
                                <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                <g id="SVGRepo_iconCarrier">
                                    <path
                                        d="M6.29977 5H21L19 12H7.37671M20 16H8L6 3H3M9 20C9 20.5523 8.55228 21 8 21C7.44772 21 7 20.5523 7 20C7 19.4477 7.44772 19 8 19C8.55228 19 9 19.4477 9 20ZM20 20C20 20.5523 19.5523 21 19 21C18.4477 21 18 20.5523 18 20C18 19.4477 18.4477 19 19 19C19.5523 19 20 19.4477 20 20Z"
                                        stroke="#ffffff" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round"></path>
                                </g>
                            </svg></p>
                    </div>
                </div>
            </div>

            </div>

        </section>
    </main>

    <div class="lainnya">
        <a href="produk.php">Rumah Lainnya >></a>
    </div>
    <!-- Akhir Project -->

    <div>
        <section id="contact">
            <div class="contact-box" data-aos="zoom-out-up">
                <div class="contact-links">
                    <h2>CONTACT</h2>
                    <div class="links">
                        <div class="link">
                            <a href="https://id.linkedin.com/?original_referer=https%3A%2F%2Fwww.google.com%2F"><img
                                    src="https://i.postimg.cc/m2mg2Hjm/linkedin.png" alt="linkedin"></a>
                        </div>
                        <div class="link">
                            <a href="https://github.com/Hudzaifa13"><img src="https://i.postimg.cc/YCV2QBJg/github.png"
                                    alt="github"></a>
                        </div>
                        <div class="link">
                            <a><img src="https://i.postimg.cc/W4Znvrry/codepen.png" alt="codepen"></a>
                        </div>
                        <div class="link">
                            <a
                                href="https://mail.google.com/mail/u/0/#inbox?compose=DmwnWsttGMNzTPNDMdGbDfcvHTKvmCGLTQnscxhlQFprDFlKhWsFpmZrtdrqGlHFkXSsFmHclgXV"><img
                                    src="https://i.postimg.cc/NjLfyjPB/email.png" alt="email"></a>
                        </div>
                    </div>
                </div>
                <div class="contact-form-wrapper">
                    <form>
                        <div class="form-item">
                            <input type="text" name="sender" required>
                            <label class="isi">Name:</label>
                        </div>
                        <div class="form-item">
                            <input type="text" name="email" required>
                            <label class="isi">Email:</label>
                        </div>
                        <div class="form-item">
                            <textarea class="" name="message" required></textarea>
                            <label class="isi">Message:</label>
                        </div>
                        <button class="submit-btn">Send</button>
                    </form>
                </div>
            </div>
        </section>
    </div>

    <!-- Grid container -->
    <div class="container p-4" id="maps">
        <!-- Awal Maps -->
        <div class="maps">
            <div class="mapouter">
                <div class="gmap_canvas">
                    <iframe class="gmap_iframe" width="100%" frameborder="0" scrolling="no" marginheight="0"
                        marginwidth="0"
                        src="https://maps.google.com/maps?width=690&amp;height=400&amp;hl=en&amp;q=quadrant boarding school&amp;t=&amp;z=15&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"></iframe>
                    <a href="https://gachanymph.com/">Gacha Nymph APK</a>
                </div>
                <style>
                .mapouter {
                    position: relative;
                    text-align: right;
                    width: 100%;
                    height: 400px;
                }

                .gmap_canvas {
                    overflow: hidden;
                    background: none !important;
                    width: 100%;
                    height: 400px;
                }

                .gmap_iframe {
                    height: 400px !important;
                }
                </style>
            </div>
        </div>
        <!-- Akhir Maps -->
    </div>
    <!-- Grid container -->

    <!-- Awal Footer -->
    <footer class="text-center text-white" style="background-color:antiquewhite;">
        <!-- Grid container -->
        <div class="container p-4 pb-0">
            <!-- Section: Social media -->
            <section class="mb-4">
                <!-- Facebook -->
                <a class="btn text-white btn-floating m-1" style="background-color: #3b5998;" href="#!" role="button"><i
                        class="fab fa-facebook-f"></i></a>

                <!-- Twitter -->
                <a class="btn text-white btn-floating m-1" style="background-color: #55acee;" href="#!" role="button"><i
                        class="fab fa-twitter"></i></a>

                <!-- Google -->
                <a class="btn text-white btn-floating m-1" style="background-color: #dd4b39;" href="#!" role="button"><i
                        class="fab fa-google"></i></a>

                <!-- Instagram -->
                <a class="btn text-white btn-floating m-1" style="background-color: #ac2bac;" href="#!" role="button"><i
                        class="fab fa-instagram"></i></a>

                <!-- Linkedin -->
                <a class="btn text-white btn-floating m-1" style="background-color: #0082ca;" href="#!" role="button"><i
                        class="fab fa-linkedin-in"></i></a>
                <!-- Github -->
                <a class="btn text-white btn-floating m-1" style="background-color: #333333;" href="#!" role="button"><i
                        class="fab fa-github"></i></a>
            </section>
            <!-- Section: Social media -->

            <!-- Grid container -->

            <!-- Copyright -->
            <div class="text-center text-black p-3" style="background-color:antiquewhite;">
                © 2023 Copyright:
                <a class="text-black" href="https://mdbootstrap.com/">Hudzaifa Ahmad AlFaiz</a>
            </div>
            <!-- Copyright -->
    </footer>
    <!-- Akhir Footer -->




    <script>
    !(function() {
        var analytics = (window.analytics = window.analytics || []);
        if (!analytics.initialize)
            if (analytics.invoked)
                window.console &&
                console.error &&
                console.error("Segment snippet included twice.");
            else {
                analytics.invoked = !0;
                analytics.methods = [
                    "trackSubmit",
                    "trackClick",
                    "trackLink",
                    "trackForm",
                    "pageview",
                    "identify",
                    "reset",
                    "group",
                    "track",
                    "ready",
                    "alias",
                    "debug",
                    "page",
                    "once",
                    "off",
                    "on"
                ];
                analytics.factory = function(t) {
                    return function() {
                        var e = Array.prototype.slice.call(arguments);
                        e.unshift(t);
                        analytics.push(e);
                        return analytics;
                    };
                };
                for (var t = 0; t < analytics.methods.length; t++) {
                    var e = analytics.methods[t];
                    analytics[e] = analytics.factory(e);
                }
                analytics.load = function(t, e) {
                    var n = document.createElement("script");
                    n.type = "text/javascript";
                    n.async = !0;
                    n.src =
                        "https://cdn.segment.com/analytics.js/v1/" +
                        t +
                        "/analytics.min.js";
                    var a = document.getElementsByTagName("script")[0];
                    a.parentNode.insertBefore(n, a);
                    analytics._loadOptions = e;
                };
                analytics.SNIPPET_VERSION = "4.1.0";
                analytics.load("FQ5NJmRc6LrFKVAC6ofHlSU7WIwGAdj5");
                analytics.page();
            }
    })();
    </script>
    <!-- MDB JS-->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.4.1/mdb.min.js"></script>

    <!-- parallax JS-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script src="parallax.js-1.5.0/parallax.js"></script>

    <!-- AOS JS -->
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
    AOS.init();
    </script>


</body>

</html>