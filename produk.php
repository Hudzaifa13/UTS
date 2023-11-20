<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Produk</title>
    <link rel="stylesheet" href="produk.css">
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
                    <a href="index.php">Home</a>
                </li>
                <li>
                    <a href="index.php">About</a>
                </li>
                <li>
                    <a href="index.php">Product</a>
                </li>
                <li>
                    <a href="index.php">Contact</a>
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

    <aside class="sidebar">
        <h2>Your Cart</h2>
        <ul class="cart-items"></ul>
    </aside>
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
                        <button class="add-to-cart-btn card__price text--medium"><svg width="24px" height="24px"
                                viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                <g id="SVGRepo_iconCarrier">
                                    <path
                                        d="M6.29977 5H21L19 12H7.37671M20 16H8L6 3H3M9 20C9 20.5523 8.55228 21 8 21C7.44772 21 7 20.5523 7 20C7 19.4477 7.44772 19 8 19C8.55228 19 9 19.4477 9 20ZM20 20C20 20.5523 19.5523 21 19 21C18.4477 21 18 20.5523 18 20C18 19.4477 18.4477 19 19 19C19.5523 19 20 19.4477 20 20Z"
                                        stroke="#ffffff" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round"></path>
                                </g>
                            </svg></button>
                    </div>
                    <div class="card__actions">
                        <span class="quantity">0</span>
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
                        <button class="add-to-cart-btn card__price text--medium"><svg width="24px" height="24px"
                                viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                <g id="SVGRepo_iconCarrier">
                                    <path
                                        d="M6.29977 5H21L19 12H7.37671M20 16H8L6 3H3M9 20C9 20.5523 8.55228 21 8 21C7.44772 21 7 20.5523 7 20C7 19.4477 7.44772 19 8 19C8.55228 19 9 19.4477 9 20ZM20 20C20 20.5523 19.5523 21 19 21C18.4477 21 18 20.5523 18 20C18 19.4477 18.4477 19 19 19C19.5523 19 20 19.4477 20 20Z"
                                        stroke="#ffffff" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round"></path>
                                </g>
                            </svg></button>
                    </div>
                    <div class="card__actions">
                        <span class="quantity">0</span>
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
                        <button class="add-to-cart-btn card__price text--medium"><svg width="24px" height="24px"
                                viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                <g id="SVGRepo_iconCarrier">
                                    <path
                                        d="M6.29977 5H21L19 12H7.37671M20 16H8L6 3H3M9 20C9 20.5523 8.55228 21 8 21C7.44772 21 7 20.5523 7 20C7 19.4477 7.44772 19 8 19C8.55228 19 9 19.4477 9 20ZM20 20C20 20.5523 19.5523 21 19 21C18.4477 21 18 20.5523 18 20C18 19.4477 18.4477 19 19 19C19.5523 19 20 19.4477 20 20Z"
                                        stroke="#ffffff" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round"></path>
                                </g>
                            </svg></button>
                    </div>
                    <div class="card__actions">
                        <span class="quantity">0</span>
                    </div>
                </div>
            </div>

            <div class="card">
                <div class="card__image-container">
                    <img
                        src="https://images.unsplash.com/photo-1600585154340-be6161a56a0c?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" />
                </div>
                <div class="card__content">
                    <p class="card__title text--medium">
                        Here's the Title of an Awesome Course
                    </p>
                    <div class="card__info">
                        <p class="text--medium">4 Kamar tidur | 3 kamar mandi <br>2 dapur | 1 Ruang tamu</p>
                        <button class="add-to-cart-btn card__price text--medium"><svg width="24px" height="24px"
                                viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                <g id="SVGRepo_iconCarrier">
                                    <path
                                        d="M6.29977 5H21L19 12H7.37671M20 16H8L6 3H3M9 20C9 20.5523 8.55228 21 8 21C7.44772 21 7 20.5523 7 20C7 19.4477 7.44772 19 8 19C8.55228 19 9 19.4477 9 20ZM20 20C20 20.5523 19.5523 21 19 21C18.4477 21 18 20.5523 18 20C18 19.4477 18.4477 19 19 19C19.5523 19 20 19.4477 20 20Z"
                                        stroke="#ffffff" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round"></path>
                                </g>
                            </svg></button>
                    </div>
                    <div class="card__actions">
                        <span class="quantity">0</span>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card__image-container">
                    <img
                        src="https://images.unsplash.com/photo-1512917774080-9991f1c4c750?w=500&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1yZWxhdGVkfDJ8fHxlbnwwfHx8fHw%3D" />
                </div>
                <div class="card__content">
                    <p class="card__title text--medium">
                        Here's the Title of an Awesome Course
                    </p>
                    <div class="card__info">
                        <p class="text--medium">4 Kamar tidur | 2 kamar mandi <br>1 dapur | 1 Kolam renang</p>
                        <button class="add-to-cart-btn card__price text--medium"><svg width="24px" height="24px"
                                viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                <g id="SVGRepo_iconCarrier">
                                    <path
                                        d="M6.29977 5H21L19 12H7.37671M20 16H8L6 3H3M9 20C9 20.5523 8.55228 21 8 21C7.44772 21 7 20.5523 7 20C7 19.4477 7.44772 19 8 19C8.55228 19 9 19.4477 9 20ZM20 20C20 20.5523 19.5523 21 19 21C18.4477 21 18 20.5523 18 20C18 19.4477 18.4477 19 19 19C19.5523 19 20 19.4477 20 20Z"
                                        stroke="#ffffff" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round"></path>
                                </g>
                            </svg></button>
                    </div>
                    <div class="card__actions">
                        <span class="quantity">0</span>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card__image-container">
                    <img
                        src="https://images.unsplash.com/photo-1600047509782-20d39509f26d?q=80&w=1901&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" />
                </div>
                <div class="card__content">
                    <p class="card__title text--medium">
                        Here's the Title of an Awesome Course
                    </p>
                    <div class="card__info">
                        <p class="text--medium">4 Kamar tidur | 3 kamar mandi <br>1 dapur | 1 Garasi</p>
                        <button class="add-to-cart-btn card__price text--medium"><svg width="24px" height="24px"
                                viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                <g id="SVGRepo_iconCarrier">
                                    <path
                                        d="M6.29977 5H21L19 12H7.37671M20 16H8L6 3H3M9 20C9 20.5523 8.55228 21 8 21C7.44772 21 7 20.5523 7 20C7 19.4477 7.44772 19 8 19C8.55228 19 9 19.4477 9 20ZM20 20C20 20.5523 19.5523 21 19 21C18.4477 21 18 20.5523 18 20C18 19.4477 18.4477 19 19 19C19.5523 19 20 19.4477 20 20Z"
                                        stroke="#ffffff" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round"></path>
                                </g>
                            </svg></button>
                    </div>
                    <div class="card__actions">
                        <span class="quantity">0</span>
                    </div>
                </div>
            </div>

            </div>

        </section>
    </main>

    <script src="script.js"></script>

</body>

</html>