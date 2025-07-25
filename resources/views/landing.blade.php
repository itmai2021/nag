<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link
        href="https://cdn.jsdelivr.net/npm/remixicon@4.3.0/fonts/remixicon.css"
        rel="stylesheet" />
    <link
        rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <link
        href="https://cdn.jsdelivr.net/npm/remixicon@3.5.0/fonts/remixicon.css"
        rel="stylesheet" />

    <link rel="stylesheet" href="{{asset('/assets/css/app.css')}}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/remixicon/fonts/remixicon.css" rel="stylesheet">
    <title>New Armada Group</title>
</head>

<body>
    <nav>
        <div class="nav__header">
            <div class="nav__logo">
                <a href="#" class="logo"><img src="{{asset('/assets/images/NAG.png')}}" style="width: 50vh;" alt=""></a>
            </div>
            <div class="nav__menu__btn" id="menu-btn">
                <i class="ri-menu-line"></i>
            </div>
        </div>
        <ul class="nav__links" id="nav-links">
            <li><a href="#home">HOME</a></li>
            <li><a href="#pilar">PILAR</a></li>
            <li><a href="#news">NEWS</a></li>
            <li><a href="#location">LOCATION</a></li>
            <li><a href="#"></a></li>
        </ul>
        <div class="nav__btns">
            <!-- <button class="btn">BOOK TRIP</button> -->
        </div>
    </nav>

    <section class="section__container destination__container p-2" id="Home">
        <div id="carouselHeader" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">

                <!-- Slide 1 -->
                <div class="carousel-item active">
                    <img src="https://picsum.photos/1200/500?random=1" class="d-block w-100" alt="Slide 1">
                    <div class="carousel-caption d-none d-md-block text-white">
                        <p class="fw-bold text-uppercase">Bus Your Travel Journey</p>
                        <h1 class="display-5 fw-bold">Where Every Bus Ride Feels Magical!</h1>
                    </div>
                </div>

                <!-- Slide 2 -->
                <div class="carousel-item">
                    <img src="https://picsum.photos/1200/500?random=2" class="d-block w-100" alt="Slide 2">
                    <div class="carousel-caption d-none d-md-block text-white">
                        <p class="fw-bold text-uppercase">Adventure Awaits</p>
                        <h1 class="display-5 fw-semibold">Explore Comfort and Style</h1>
                    </div>
                </div>

                <!-- Slide 3 -->
                <div class="carousel-item">
                    <img src="https://picsum.photos/1200/500?random=3" class="d-block w-100" alt="Slide 3">
                    <div class="carousel-caption d-none d-md-block text-white">
                        <p class="fw-bold text-uppercase">Safe & Affordable</p>
                        <h1 class="display-5 fw-semibold">Start Your Magical Ride Today</h1>
                    </div>
                </div>

            </div>

            <!-- Carousel Controls -->
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselHeader" data-bs-slide="prev">
                <span class="carousel-control-prev-icon"></span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselHeader" data-bs-slide="next">
                <span class="carousel-control-next-icon"></span>
            </button>
        </div>
    </section>

    <!-- <section class="section__container destination__container" id="about">
        <h2 class="section__header">NEWS</h2>
        <p class="section__description">
            Lorem, ipsum dolor sit amet consectetur adipisicing elit. Aspernatur, ipsa.
        </p>

        <div class="position-relative d-flex align-items-center">

            <button
                id="scrollLeftBtn"
                class="scroll-arrow btn btn-light rounded-circle shadow position-absolute start-0"
                style="z-index: 10; left: -25px;">
                &#8592;
            </button>

            <div id="scrollContainer" class="destination__scroll-wrapper">
                <div class="destination__grid scrollable-cards">
                    @for ($i = 0; $i < 2; $i++)
                        <div class="destination__card">
                        <img src="{{ asset('/assets/images/card.jpg') }}" alt="destination" />
                        <div class="destination__card__details">
                            <div>
                                <h4>Sacred Calm at Badrinath Temple.</h4>
                                <p>Badrinath, Uttarakhand, India</p>
                            </div>
                        </div>
                </div>
                <div class="destination__card">
                    <img src="{{ asset('/assets/images/card2.jpg') }}" alt="destination" />
                    <div class="destination__card__details">
                        <div>
                            <h4>Divine Majesty at Jagannath Temple.</h4>
                            <p>Puri, Odisha, India</p>
                        </div>
                    </div>
                </div>
                <div class="destination__card">
                    <img src="{{ asset('/assets/images/card3.webp') }}" alt="destination" />
                    <div class="destination__card__details">
                        <div>
                            <h4>Spiritual Serenity at Neem Karoli Temple.</h4>
                            <p>Dehradun, India</p>
                        </div>
                    </div>
                </div>
                @endfor
            </div>
        </div>

        <button
            id="scrollRightBtn"
            class="scroll-arrow btn btn-light rounded-circle shadow position-absolute end-0"
            style="z-index: 10; right: -25px;">
            &#8594;
        </button>
        </div>
    </section> -->

    <section class="section__container destination__container" id="pilar">
        <h2 class="section__header">PILAR</h2>
        <p class="section__description">
            Lorem, ipsum dolor sit amet consectetur adipisicing elit.
        </p>

        <div class="header-banner position-relative rounded overflow-hidden" style="border-radius: 20px;">
            <img src="https://picsum.photos/1200/500?random=1" class="d-block w-100" alt="Banner" style="border-radius: 20px; object-fit: cover;">
            <div class="carousel-caption d-none d-md-block text-white position-absolute top-50 start-50 translate-middle text-center">
                <p class="fw-bold text-uppercase">Bus Your Travel Journey</p>
                <h1 class="display-5 fw-bold">Where Every Bus Ride Feels Magical!</h1>
            </div>
        </div>

    </section>


    <section class="section__container destination__container" id="news">
        <h2 class="section__header">NEWS</h2>
        <p class="section__description">
            Lorem, ipsum dolor sit amet consectetur adipisicing elit.
        </p>
        <div class="destination__grid">
            <div class="destination__card">
                <img src="{{ asset('/assets/images/card.jpg') }}" alt="destination" />
                <div class="destination__card__details">
                    <div>
                        <h4>Sacred Calm at Badrinath Temple.</h4>
                        <p>Badrinath, Uttarakhand, India</p>
                    </div>
                </div>
            </div>
            <div class="destination__card">
                <img src="{{ asset('/assets/images/card2.jpg') }}" alt="destination" />
                <div class="destination__card__details">
                    <div>
                        <h4>Divine Majesty at Jagannath Temple.</h4>
                        <p>Puri, Odisha, India</p>
                    </div>
                </div>
            </div>
            <div class="destination__card">
                <img src="{{ asset('/assets/images/card3.webp') }}" alt="destination" />
                <div class="destination__card__details">
                    <div>
                        <h4>Spiritual Serenity at Neem Karoli Temple.</h4>
                        <p>Dehradun, India</p>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="section__container journey__container" id="tour">
        <h2 class="section__header">Bus Travel, the Easy Way!</h2>
        <p class="section__description">
            Effortless planning for Your Next Adventure
        </p>
        <div class="journey__grid">
            <div class="journey__card">
                <div class="journey__card__bg">
                    <span><i class="ri-bookmark-3-line"></i></span>
                    <h4>Seamless Booking Process</h4>
                </div>
                <div class="journey__card__content">
                    <span><i class="ri-bookmark-3-line"></i></span>
                    <h4>Seat Booking, one Click Away</h4>
                    <p>
                        From booking tickets to tracking your bus in real-time, everything
                        is just a click away. No more long queues or last-minute confusion
                        — plan, book, and board with complete ease. Your journey,
                        simplified.
                    </p>
                </div>
            </div>

            <div class="journey__card">
                <div class="journey__card__bg">
                    <span><i class="ri-landscape-fill"></i></span>
                    <h4>Tailored Itineraries</h4>
                </div>
                <div class="journey__card__content">
                    <span><i class="ri-landscape-fill"></i></span>
                    <h4>Customized Plans Just for You</h4>
                    <p>
                        Everyone travels differently — that’s why we create plans just for
                        you. From preferred timings to budget-friendly options and seat
                        choices, enjoy a trip designed around your lifestyle.
                    </p>
                </div>
            </div>

            <div class="journey__card">
                <div class="journey__card__bg">
                    <span><i class="ri-map-2-line"></i></span>
                    <h4>Expert Local Insights</h4>
                </div>
                <div class="journey__card__content">
                    <span><i class="ri-map-2-line"></i></span>
                    <h4>Insider Tips and Recommendations</h4>
                    <p>
                        From the best boarding points to local travel hacks, our insights
                        are powered by real people who know the roads. It’s local
                        knowledge, delivered straight to your screen.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <section class="section__container showcase__container" id="package">
        <div class="showcase__image">
            <img src="{{asset('/assets/images/showcase.webp')}}" alt="showcase" />
        </div>
        <div class="showcase__content">
            <h4>Ignite Your Wanderlust with Every Bus Ride</h4>
            <p>
                Traveling by bus offers comfort and stunning views on your way to
                amazing destinations. With spacious seats and air conditioning, you
                can relax and enjoy the ride, whether you're heading to a vibrant city
                or a peaceful getaway. It’s the perfect way to travel affordably and
                conveniently while experiencing the beauty of the journey.
            </p>
            <p>
                Explore the World by Bus with Ease Hop on a bus and experience the joy
                of travel at your own pace. From comfortable seating to scenic routes,
                our buses offer the perfect way to explore cities, nature, and
                everything in between. Whether it's a quick trip or a long adventure,
                sit back, relax, and enjoy the ride.
            </p>
            <div class="showcase__btn">
                <button class="btn">
                    BOOK A Bus Now
                    <span><i class="ri-arrow-right-line"></i></span>
                </button>
            </div>
        </div>
    </section>

    <section class="section__container banner__container">
        <div class="banner__card">
            <h4>10+</h4>
            <p>Years Experience</p>
        </div>
        <div class="banner__card">
            <h4>12k</h4>
            <p>Happy Clients</p>
        </div>
        <div class="banner__card">
            <h4>4.8</h4>
            <p>Overrall Ratings</p>
        </div>
    </section>

    <section class="section__container discover__container">
        <h2 class="section__header">
            Discover Peace, Culture, and Devotion with Our Temple Bus Travels
        </h2>
        <p class="section__description">
            Witness Stunning Landscapes from the Comfort of Your Bus Seat"
        </p>
        <div class="discover__grid">
            <div class="discover__card">
                <span><i class="ri-camera-lens-line"></i></span>
                <h4>Your Road, Your Story</h4>
                <p>
                    Experience the freedom of travel with our comfortable and reliable
                    bus trips. Enjoy stunning views along the way while relaxing in
                    spacious seats. Whether it's a short trip or a long journey, our
                    buses ensure a smooth and enjoyable ride.
                </p>
            </div>
            <div class="discover__card">
                <span><i class="ri-ship-line"></i></span>
                <h4>Coastal Wonders</h4>
                <p>
                    Embark on a journey through the mesmerizing coastal wonders. Enjoy
                    the serene beauty of pristine beaches, stunning cliffs, and
                    breathtaking ocean views, all from the comfort of our bus. Let the
                    coastal breeze guide you to unforgettable destinations.
                </p>
            </div>
            <div class="discover__card">
                <span><i class="ri-landscape-line"></i></span>
                <h4>Historic Landmarks</h4>
                <p>
                    Explore the charm of historic landmarks on our specially curated bus
                    tours. Our comfortable buses will take you through iconic sites,
                    offering insights into their fascinating stories. Sit back, relax,
                    and immerse yourself in the rich history that each destination
                    holds.
                </p>
            </div>
        </div>
    </section>

    <footer id="contact">
        <div class="section__container footer__container">
            <div class="footer__col">
                <div class="footer__logo">
                    <a href="#" class="logo">BusTraveller</a>
                </div>
                <p>
                    Explore the world with ease and excitement through our all-in-one
                    bus travel platform. Your journey begins here — where smooth
                    planning meets unforgettable road experiences.
                </p>
                <ul class="footer__socials">
                    <li>
                        <a href="#!"><i class="ri-facebook-fill"></i></a>
                    </li>
                    <li>
                        <a href="#!"><i class="ri-instagram-line"></i></a>
                    </li>
                    <li>
                        <a href="#!"><i class="ri-youtube-line"></i></a>
                    </li>
                </ul>
            </div>
            <div class="footer__col">
                <h4>Quick Links</h4>
                <ul class="footer__links">
                    <li><a href="#">Home</a></li>
                    <li><a href="#">Bus</a></li>
                    <li><a href="#">Hotels</a></li>
                    <li><a href="#">Cruise</a></li>
                </ul>
            </div>
            <div class="footer__col">
                <h4>Contact Us</h4>
                <ul class="footer__links">
                    <li>
                        <a href="#">
                            <span><i class="ri-phone-fill"></i></span>+91 12345 67890
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <span><i class="ri-record-mail-line"></i></span>
                            info@BusTraveller
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <span><i class="ri-map-pin-2-fill"></i></span> Agra, India
                        </a>
                    </li>
                </ul>
            </div>
            <div class="footer__col">
                <h4>Subscribe</h4>
                <form action="#!">
                    <input type="text" placeholder="Enter your email" />
                    <button class="btn">Subscribe</button>
                </form>
            </div>
        </div>
        <div class="footer__bar">
            Copyright © 2025 Code Prashtt. All rights reserved.
            <p>
                Distributed by
                <a
                    class="text-white"
                    href="https://www.themewagon.com"
                    target="_blank">ThemeWagon</a>
            </p>
        </div>
    </footer>

    <script src="https://unpkg.com/scrollreveal"></script>
    <script src="main.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

    <script>
        const scrollContainer = document.getElementById("scrollContainer");
        const scrollLeftBtn = document.getElementById("scrollLeftBtn");
        const scrollRightBtn = document.getElementById("scrollRightBtn");

        scrollLeftBtn.addEventListener("click", () => {
            scrollContainer.scrollBy({
                left: -320,
                behavior: 'smooth'
            });
        });

        scrollRightBtn.addEventListener("click", () => {
            scrollContainer.scrollBy({
                left: 320,
                behavior: 'smooth'
            });
        });
    </script>


</body>

</html>