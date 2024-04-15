<html lang="en" class="fontawesome-i2svg-active fontawesome-i2svg-complete">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Tea Wheeler</title>
	
	<link href="https://fonts.googleapis.com/css2?family=Lato:wght@400;700;900&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@500&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,400..900;1,400..900&display=swap" rel="stylesheet">
	
    <link rel="stylesheet" type="text/css" href="css/banner-styles.css">
    <link rel="stylesheet" type="text/css" href="css/iconochive.css?v=qtvMKcIJ">
    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
    <link href="css/mystyle.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css">
</head>
<body class="abt-bg">
    <!--menu-->
    <nav class="navbar navbar-lg navbar-expand-lg navbar-transparant navbar-dark navbar-absolute w-100 bg-white">
        <div class="container">
        <!--<a class="navbar-brand" href="index.html">Robust.</a>-->
        <a class="navbar-brand d-lg-none log-clr" href="">
        <img src="img/logo.png" alt="logo" width="60"
            class="img-fluid"> Tea Wheeler
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse"
            aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
            <!--<span class="navbar-toggler-icon"></span>-->
            <svg class="svg-inline--fa fa-bars fa-w-14" aria-hidden="true" data-prefix="fa" data-icon="bars"
                role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" data-fa-i2svg="">
                <path fill="currentColor"
                    d="M16 132h416c8.837 0 16-7.163 16-16V76c0-8.837-7.163-16-16-16H16C7.163 60 0 67.163 0 76v40c0 8.837 7.163 16 16 16zm0 160h416c8.837 0 16-7.163 16-16v-40c0-8.837-7.163-16-16-16H16c-8.837 0-16 7.163-16 16v40c0 8.837 7.163 16 16 16zm0 160h416c8.837 0 16-7.163 16-16v-40c0-8.837-7.163-16-16-16H16c-8.837 0-16 7.163-16 16v40c0 8.837 7.163 16 16 16z">
                </path>
            </svg>
            <!-- <i class="fa fa-bars"></i> -->
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <!-- Navbar nav -->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link active" href="index.php">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link " href="for-events.php">Events</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link " href="msme.php">MSME</a>
                </li>
            </ul>
            <!-- Navbar brand -->
            <a class="navbar-brand d-none d-lg-flex mx-lg-auto" href="">
            <img src="https://web.archive.org/web/20230223130810im_/http://www.teawheeler.co.in/img/logo.png" alt="logo" width="100"
                class="img-fluid">
            </a>
            <!-- Navbar nav -->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link " href="order-online.php">Order Online</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link " href="on-the-go.php">On The Go</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link " href="contact.php">Contact</a>
                </li>
            </ul>
            <!-- Navbar brand -->
        </div>
        </div>
    </nav>
    
    <!-- <div id="demo" class="carousel slide pointer-event" data-ride="carousel">
        <div id="carouselExampleInterval" class="carousel slide pointer-event" data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active" data-interval="36000">
                
            </div>
        </div>
        </div> 
    </div> -->
    <!--=============================== VIDEO AREA START =======================-->
    <section class="position-relative" id="video-section">
    <!-- <iframe class="loadframeLazy" width="100%" height="550" src="https://www.youtube.com/embed/2SdEYP04XOE?muted=1" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; autostop; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen data-loadframe="pause"></iframe> -->
    <video src="https://web.archive.org/web/20230223130810im_/http://www.teawheeler.co.in/img/TW Website animate with UI LATEST.mp4" type="video/mp4" style="width: 100%; height: 100vh; object-fit: cover;" id="video" autoplay muted loop></video>
</section>
<!-- <script>
// Get the video element
const video = document.getElementById('video');
let isVideoInViewport = false;

// Function to play the video
function playVideo() {
if (video.play) {
video.play();
}
}

// Function to pause the video
function pauseVideo() {
if (!video.paused) {
video.pause();
}
}

// Create an Intersection Observer
const observer = new IntersectionObserver(entries => {
entries.forEach(entry => {
if (entry.isIntersecting) {
    // The section is in the viewport
    if (!isVideoInViewport) {
        // Play the video only when it initially scrolls in
        playVideo();
        isVideoInViewport = true;
    }
} else {
    // The section is out of the viewport
    if (isVideoInViewport) {
        // Pause the video only when it initially scrolls out
        pauseVideo();
        isVideoInViewport = false;
    }
}
});
});

// Observe the video section
observer.observe(document.getElementById('video-section'));

</script> -->
<!--=============================== VIDEO AREA END ======================-->
    <!-- <section>
    <video style="width:100%; background:#000;" autoplay="" muted="" loop="" controls="" preload="auto"
            class="">
            <source
            src="https://web.archive.org/web/20230223130810im_/http://www.teawheeler.co.in/img/TW Website animate with UI LATEST.mp4"
            class="w-100" type="video/mp4">
            Sorry, your browser doesn't support embedded videos.
        </video>
    </section> -->
    <section style="position:relative; bottom:0px;">
        <div class="container-fluid">
        <div class="row">
            <div class="col-md-8">
                <img src="https://web.archive.org/web/20230223130810im_/http://www.teawheeler.co.in/img/light-house.png"
                    class="img-fluid img-cover tlight" alt="Tea">
            </div>
            <div class="col-md-4" >
                <div class="row nch-home" >
                    <div class="col-md-8 col-sm-8 col-8 ptb-40 ptb-0">
						<a href="order-online.php"><img
                        src="https://web.archive.org/web/20230223130810im_/http://www.teawheeler.co.in/img/button.jpg"
                        class="img-fluid w250" style="margin-left:30px;"></a>
                    </div>
                    <div class="col-md-4 col-sm-4 col-4 pr-0">
                    <p class="fmenu fmenu-1 lh-30 mt-2 text-right">
                        <a
                            href="https:https://www.instagram.com/tea_wheeler/">
                            <svg
                                class="svg-inline--fa fa-instagram fa-w-14 fa-lg sicon mr-10" aria-hidden="true"
                                data-prefix="fab" data-icon="instagram" role="img"
                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" data-fa-i2svg="">
                                <path fill="currentColor"
                                d="M224.1 141c-63.6 0-114.9 51.3-114.9 114.9s51.3 114.9 114.9 114.9S339 319.5 339 255.9 287.7 141 224.1 141zm0 189.6c-41.1 0-74.7-33.5-74.7-74.7s33.5-74.7 74.7-74.7 74.7 33.5 74.7 74.7-33.6 74.7-74.7 74.7zm146.4-194.3c0 14.9-12 26.8-26.8 26.8-14.9 0-26.8-12-26.8-26.8s12-26.8 26.8-26.8 26.8 12 26.8 26.8zm76.1 27.2c-1.7-35.9-9.9-67.7-36.2-93.9-26.2-26.2-58-34.4-93.9-36.2-37-2.1-147.9-2.1-184.9 0-35.8 1.7-67.6 9.9-93.9 36.1s-34.4 58-36.2 93.9c-2.1 37-2.1 147.9 0 184.9 1.7 35.9 9.9 67.7 36.2 93.9s58 34.4 93.9 36.2c37 2.1 147.9 2.1 184.9 0 35.9-1.7 67.7-9.9 93.9-36.2 26.2-26.2 34.4-58 36.2-93.9 2.1-37 2.1-147.8 0-184.8zM398.8 388c-7.8 19.6-22.9 34.7-42.6 42.6-29.5 11.7-99.5 9-132.1 9s-102.7 2.6-132.1-9c-19.6-7.8-34.7-22.9-42.6-42.6-11.7-29.5-9-99.5-9-132.1s-2.6-102.7 9-132.1c7.8-19.6 22.9-34.7 42.6-42.6 29.5-11.7 99.5-9 132.1-9s102.7-2.6 132.1 9c19.6 7.8 34.7 22.9 42.6 42.6 11.7 29.5 9 99.5 9 132.1s2.7 102.7-9 132.1z">
                                </path>
                            </svg>
                            <!-- <i class="fab fa-instagram fa-lg sicon mr-10"></i> -->
                        </a>
                        <br>
                        <a
                            href="https:https://twitter.com/teawheeler_offl">
                            <svg
                                class="svg-inline--fa fa-twitter fa-w-16 fa-lg sicon mr-10" aria-hidden="true"
                                data-prefix="fab" data-icon="twitter" role="img"
                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg="">
                                <path fill="currentColor"
                                d="M459.37 151.716c.325 4.548.325 9.097.325 13.645 0 138.72-105.583 298.558-298.558 298.558-59.452 0-114.68-17.219-161.137-47.106 8.447.974 16.568 1.299 25.34 1.299 49.055 0 94.213-16.568 130.274-44.832-46.132-.975-84.792-31.188-98.112-72.772 6.498.974 12.995 1.624 19.818 1.624 9.421 0 18.843-1.3 27.614-3.573-48.081-9.747-84.143-51.98-84.143-102.985v-1.299c13.969 7.797 30.214 12.67 47.431 13.319-28.264-18.843-46.781-51.005-46.781-87.391 0-19.492 5.197-37.36 14.294-52.954 51.655 63.675 129.3 105.258 216.365 109.807-1.624-7.797-2.599-15.918-2.599-24.04 0-57.828 46.782-104.934 104.934-104.934 30.213 0 57.502 12.67 76.67 33.137 23.715-4.548 46.456-13.32 66.599-25.34-7.798 24.366-24.366 44.833-46.132 57.827 21.117-2.273 41.584-8.122 60.426-16.243-14.292 20.791-32.161 39.308-52.628 54.253z">
                                </path>
                            </svg>
                            <!-- <i class="fab fa-twitter fa-lg sicon mr-10"></i> -->
                        </a>
                        <br>
                        <a
                            href="https:https://www.facebook.com/profile.php?id=100080041909248">
                            <svg
                                class="svg-inline--fa fa-facebook fa-w-14 fa-lg sicon mr-10" aria-hidden="true"
                                data-prefix="fab" data-icon="facebook" role="img"
                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" data-fa-i2svg="">
                                <path fill="currentColor"
                                d="M448 56.7v398.5c0 13.7-11.1 24.7-24.7 24.7H309.1V306.5h58.2l8.7-67.6h-67v-43.2c0-19.6 5.4-32.9 33.5-32.9h35.8v-60.5c-6.2-.8-27.4-2.7-52.2-2.7-51.6 0-87 31.5-87 89.4v49.9h-58.4v67.6h58.4V480H24.7C11.1 480 0 468.9 0 455.3V56.7C0 43.1 11.1 32 24.7 32h398.5c13.7 0 24.8 11.1 24.8 24.7z">
                                </path>
                            </svg>
                            <!-- <i class="fab fa-facebook fa-lg sicon mr-10"></i> -->
                        </a>
                        <br>
                        <a href="">
                            <svg class="svg-inline--fa fa-youtube fa-w-18 fa-lg sicon mr-10"
                                aria-hidden="true" data-prefix="fab" data-icon="youtube" role="img"
                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" data-fa-i2svg="">
                                <path fill="currentColor"
                                d="M549.655 124.083c-6.281-23.65-24.787-42.276-48.284-48.597C458.781 64 288 64 288 64S117.22 64 74.629 75.486c-23.497 6.322-42.003 24.947-48.284 48.597-11.412 42.867-11.412 132.305-11.412 132.305s0 89.438 11.412 132.305c6.281 23.65 24.787 41.5 48.284 47.821C117.22 448 288 448 288 448s170.78 0 213.371-11.486c23.497-6.321 42.003-24.171 48.284-47.821 11.412-42.867 11.412-132.305 11.412-132.305s0-89.438-11.412-132.305zm-317.51 213.508V175.185l142.739 81.205-142.739 81.201z">
                                </path>
                            </svg>
                            <!-- <i class="fab fa-youtube fa-lg sicon mr-10"></i> -->
                        </a>
                        <br>
                        <a
                            href="https:https://www.linkedin.com/in/tea-wheeler-21308a237/">
                            <svg
                                class="svg-inline--fa fa-linkedin fa-w-14 fa-lg sicon mr-10" aria-hidden="true"
                                data-prefix="fab" data-icon="linkedin" role="img"
                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" data-fa-i2svg="">
                                <path fill="currentColor"
                                d="M416 32H31.9C14.3 32 0 46.5 0 64.3v383.4C0 465.5 14.3 480 31.9 480H416c17.6 0 32-14.5 32-32.3V64.3c0-17.8-14.4-32.3-32-32.3zM135.4 416H69V202.2h66.5V416zm-33.2-243c-21.3 0-38.5-17.3-38.5-38.5S80.9 96 102.2 96c21.2 0 38.5 17.3 38.5 38.5 0 21.3-17.2 38.5-38.5 38.5zm282.1 243h-66.4V312c0-24.8-.5-56.7-34.5-56.7-34.6 0-39.9 27-39.9 54.9V416h-66.4V202.2h63.7v29.2h.9c8.9-16.8 30.6-34.5 62.9-34.5 67.2 0 79.7 44.3 79.7 101.9V416z">
                                </path>
                            </svg>
                            <!-- <i class="fab fa-linkedin fa-lg sicon mr-10"></i> -->
                        </a>
                        <br>
                        <span class="mr-10 ind-brd "></span>
                    </p>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </section>
    <section>
        <div class="">
        <!--row-->
        <div class="row" style="width:95%">
            <div class="col-md-8 col-xs-12 right-bradius">
                <p class="ml-120 chp-home" >Drinking filter coffee &amp; tea is an emotional experience in
                    India.
                </p>
                <p class="chp-home" >It is deeply connected to the feeling of ‘home’. No matter how we feel
                    or what we are going through, a good cup of filter coffee will brighten your day!
                </p>
                <p class="chp-home" >the mission of Tea Wheeler is to give you that feeling of ‘home’ at any
                    time of the day, no matter where you are in the city!
                </p>
            </div>
            <div class="col-md-4 col-xs-12"><img
                src="https://web.archive.org/web/20230223130810im_/http://www.teawheeler.co.in/img/flask-tea.png" alt="1"
                class="img-fluid mlt200"></div>
        </div>
        </div>
        
    </section>
    <!--center part-->
    <section class="center-bg cbg">        
    <h1 class="col-md-12 mb-0 mt-0 mh-ft text-center text-uppercase font-weight-bold clr-lbrn_1 clr-blwt pt-100 mpt-80 pb-2">
        Services
    </h1>
    <div class=" ">
        <div class="container ">
        <!--ind-fl-->
        <div class="row">
            <div class="col-md-5 col-xs-12 pt-100 pt-50 pr-50">
                <h2 class="text-right font-weight-bold lh-50 mb-3 ind-h2 clr-wht">Events<br>
                    <span class="mh-ft font-weight-normal clr-wht"><i>Order For Occassion</i></span>
                </h2>
                <p class="text-justify plh-30 mh-190">Tea Wheeler has proudly served thousands of patrons for their
                    special occasions such as Weddings, Birthday Parties, Family Gatherings, Corporate Retreats
                    &amp; Meetings etc., Our Satisfaction lies in the smiles we spread across the faces of our loyal
                    clients. We will be happy to do the same for your special event!
                </p>
                <p class="text-center bt-rt brd-30 p-2 w-50 clr-wht fl-rt">
                    <a href="for-events.php" class="clr-wht">
                    <svg class="svg-inline--fa fa-arrow-left fa-w-14"
                        aria-hidden="true" data-prefix="fa" data-icon="arrow-left" role="img"
                        xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" data-fa-i2svg="">
                        <path fill="currentColor"
                            d="M257.5 445.1l-22.2 22.2c-9.4 9.4-24.6 9.4-33.9 0L7 273c-9.4-9.4-9.4-24.6 0-33.9L201.4 44.7c9.4-9.4 24.6-9.4 33.9 0l22.2 22.2c9.5 9.5 9.3 25-.4 34.3L136.6 216H424c13.3 0 24 10.7 24 24v32c0 13.3-10.7 24-24 24H136.6l120.5 114.8c9.8 9.3 10 24.8.4 34.3z">
                        </path>
                    </svg>
                    <!-- <i class="fa fa-arrow-left"></i> -->&nbsp;&nbsp; Learn More ! 
                    </a>
                </p>
            </div>
            <div class="col-md-2 col-xs-12 d-none d-md-block my-auto">
				<div class="text-center">
					<img src="img/char.png" alt="char" class="img-fluid mx-auto d-block" width="200" />
				</div>
            </div>
            <div class="col-md-5 col-xs-12 pt-100 pt-50 pl-50" >
                <!--ml-150-->
                <h2 class="text-left font-weight-bold mb-4 lh-50 ind-h2 clr-wht">Your Chai Stop<br>
                    <span class="mh-ft font-weight-normal mt-5 clr-wht"><i>Find Your Chai Stop</i></span>
                </h2>
                <p class="text-justify plh-30 mh-190">Our Specially Trained Delivery Staff are always on the ground
                    and on the move at almost every Key Location In The City. So feel free to venture and stumble
                    onto a ‘Tea Wheeler’ Delivery Person Who Will Be Happy To Serve You! You Can Also Order From Us
                    At Swiggy And Zomato!
                </p>
                <p class="text-center bt-lt brd-30 p-2 w-50 clr-wht">
                    <a href="on-the-go.php" class="clr-wht">
                    Learn More !&nbsp;&nbsp;
                    <svg
                        class="svg-inline--fa fa-arrow-right fa-w-14" aria-hidden="true" data-prefix="fa"
                        data-icon="arrow-right" role="img" xmlns="http://www.w3.org/2000/svg"
                        viewBox="0 0 448 512" data-fa-i2svg="">
                        <path fill="currentColor"
                            d="M190.5 66.9l22.2-22.2c9.4-9.4 24.6-9.4 33.9 0L441 239c9.4 9.4 9.4 24.6 0 33.9L246.6 467.3c-9.4 9.4-24.6 9.4-33.9 0l-22.2-22.2c-9.5-9.5-9.3-25 .4-34.3L311.4 296H24c-13.3 0-24-10.7-24-24v-32c0-13.3 10.7-24 24-24h287.4L190.9 101.2c-9.8-9.3-10-24.8-.4-34.3z">
                        </path>
                    </svg>
                    <!-- <i class="fa fa-arrow-right"></i> -->
                    </a>
                </p>
            </div>
        </div>
        </div>
    </div>
    </section>
    <!--center part end-->
    <!--product section--->
    <section class="prod-bg" style="padding-bottom:50px;">
        <div class="container">
        <div class="row">
            <h2 class="col-md-12 mb-5 mt-5 mh-ft text-uppercase font-weight-bold clr-brn text-center">Our Range
                Of Products
            </h2>
            <div class="container">
                <div class="slick-slider">
                    <div class="slide "><img src="img/1.jpg" class="img-fluid"><br><p>Any Beverage Flask 300ml + Bhujia</p></div>
					  <div class="slide"><img src="img/2.jpg" class="img-fluid"><br><p>Any Beverage Flask 300ml + Cashew</p></div>
					  <div class="slide"><img src="img/3.jpg" class="img-fluid"><br><p>Any Beverage Flask 300ml + Cheese magi</p></div>
					  <div class="slide"><img src="img/4.jpg" class="img-fluid"><br><p>Any Beverage Flask 300ml + Dry Samosa</p></div>
					  <div class="slide"><img src="img/5.jpg" class="img-fluid"><br><p>Any Beverage Flask 300ml + Podi Idli</p></div>
					  <div class="slide"><img src="img/6.jpg" class="img-fluid"><br><p>Any Beverage Flask 300ml + Rava Upma</p></div>
					  <div class="slide"><img src="img/7.jpg" class="img-fluid"><br><p>Any Beverage Flask 500ml + Kuzhi Paniyaram-6</p></div>
					  <div class="slide"><img src="img/8.jpg" class="img-fluid"><br><p>Any Beverage Flask 500ml + Masala Peanuts</p></div> 
					  <div class="slide"><img src="img/9.jpg" class="img-fluid"><br><p>Cardamom Tea</p></div>
					  <div class="slide"><img src="img/10.jpg" class="img-fluid"><br><p>Filter Coffee</p></div>     
                </div>
                <!-- <section class="customer-logos slider slick-initialized slick-slider" style="display:none">
                    <div aria-live="polite" class="slick-list draggable">
                    <div class="slick-track" role="listbox" >
                        <div style="display:none" class="slide slick-slide slick-cloned" data-slick-index="-3" aria-hidden="true"
                            tabindex="-1" style="width: 370px;">
                            <img
                                src="https://web.archive.org/web/20230223130810im_/http://www.teawheeler.co.in/img/8.jpg"><br>
                            <p>Any Beverage Flask 500ml + Masala Peanuts</p>
                        </div>
                        <div style="display:none" class="slide slick-slide slick-cloned" data-slick-index="-2" aria-hidden="true"
                            tabindex="-1" style="width: 370px;">
                            <img
                                src="https://web.archive.org/web/20230223130810im_/http://www.teawheeler.co.in/img/9.jpg"><br>
                            <p>Cardamom Tea</p>
                        </div>
                        <div style="display:none" class="slide slick-slide slick-cloned" data-slick-index="-1" aria-hidden="true"
                            tabindex="-1" style="width: 370px;">
                            <img
                                src="https://web.archive.org/web/20230223130810im_/http://www.teawheeler.co.in/img/10.jpg"><br>
                            <p>Filter Coffee</p>
                        </div>
                        <div style="display:none" class="slide slick-slide" data-slick-index="0" aria-hidden="true" tabindex="-1"
                            role="option" aria-describedby="slick-slide00" style="width: 370px;">
                            <img
                                src="https://web.archive.org/web/20230223130810im_/http://www.teawheeler.co.in/img/1.jpg"><br>
                            <p>Any Beverage Flask 300ml + Bhujia</p>
                        </div>
                        <div style="display:none" class="slide slick-slide" data-slick-index="1" aria-hidden="true" tabindex="-1"
                            role="option" aria-describedby="slick-slide01" style="width: 370px;">
                            <img
                                src="https://web.archive.org/web/20230223130810im_/http://www.teawheeler.co.in/img/2.jpg"><br>
                            <p>Any Beverage Flask 300ml + Cashew</p>
                        </div>
                        <div style="display:none" class="slide slick-slide" data-slick-index="2" aria-hidden="true" tabindex="-1"
                            role="option" aria-describedby="slick-slide02" style="width: 370px;">
                            <img
                                src="https://web.archive.org/web/20230223130810im_/http://www.teawheeler.co.in/img/3.jpg"><br>
                            <p>Any Beverage Flask 300ml + Cheese magi</p>
                        </div>
                        <div style="display:none" class="slide slick-slide" data-slick-index="3" aria-hidden="true" tabindex="-1"
                            role="option" aria-describedby="slick-slide03" style="width: 370px;">
                            <img
                                src="https://web.archive.org/web/20230223130810im_/http://www.teawheeler.co.in/img/4.jpg"><br>
                            <p>Any Beverage Flask 300ml + Dry Samosa</p>
                        </div>
                        <div style="display:none" class="slide slick-slide" data-slick-index="4" aria-hidden="true" tabindex="-1"
                            role="option" aria-describedby="slick-slide04" style="width: 370px;">
                            <img
                                src="https://web.archive.org/web/20230223130810im_/http://www.teawheeler.co.in/img/5.jpg"><br>
                            <p>Any Beverage Flask 300ml + Podi Idli</p>
                        </div>
                        <div style="display:none" class="slide slick-slide slick-current slick-active" data-slick-index="5"
                            aria-hidden="false" tabindex="-1" role="option" aria-describedby="slick-slide05"
                            style="width: 370px;">
                            <img
                                src="https://web.archive.org/web/20230223130810im_/http://www.teawheeler.co.in/img/6.jpg"><br>
                            <p>Any Beverage Flask 300ml + Rava Upma</p>
                        </div>
                        <div style="display:none" class="slide slick-slide slick-active" data-slick-index="6" aria-hidden="false"
                            tabindex="-1" role="option" aria-describedby="slick-slide06" style="width: 370px;">
                            <img src="https://web.archive.org/web/20230223130810im_/http://www.teawheeler.co.in/img/7.jpg"><br>
                            <p>Any Beverage Flask 500ml + Kuzhi Paniyaram-6</p>
                        </div>
                        <div style="display:none" class="slide slick-slide slick-active" data-slick-index="7" aria-hidden="false"
                            tabindex="-1" role="option" aria-describedby="slick-slide07" style="width: 370px;">
                            <img src="https://web.archive.org/web/20230223130810im_/http://www.teawheeler.co.in/img/8.jpg"><br>
                            <p>Any Beverage Flask 500ml + Masala Peanuts</p>
                        </div>
                        <div style="display:none" class="slide slick-slide" data-slick-index="8" aria-hidden="true" tabindex="-1"
                            role="option" aria-describedby="slick-slide08" style="width: 370px;">
                            <img
                                src="https://web.archive.org/web/20230223130810im_/http://www.teawheeler.co.in/img/9.jpg"><br>
                            <p>Cardamom Tea</p>
                        </div>
                        <div style="display:none" class="slide slick-slide" data-slick-index="9" aria-hidden="true" tabindex="-1"
                            role="option" aria-describedby="slick-slide09" style="width: 370px;">
                            <img
                                src="https://web.archive.org/web/20230223130810im_/http://www.teawheeler.co.in/img/10.jpg"><br>
                            <p>Filter Coffee</p>
                        </div>
                        <div style="display:none" class="slide slick-slide slick-cloned" data-slick-index="10" aria-hidden="true"
                            tabindex="-1" style="width: 370px;">
                            <img
                                src="https://web.archive.org/web/20230223130810im_/http://www.teawheeler.co.in/img/1.jpg"><br>
                            <p>Any Beverage Flask 300ml + Bhujia</p>
                        </div>
                        <div style="display:none" class="slide slick-slide slick-cloned" data-slick-index="11" aria-hidden="true"
                            tabindex="-1" style="width: 370px;">
                            <img
                                src="https://web.archive.org/web/20230223130810im_/http://www.teawheeler.co.in/img/2.jpg"><br>
                            <p>Any Beverage Flask 300ml + Cashew</p>
                        </div>
                        <div style="display:none" class="slide slick-slide slick-cloned" data-slick-index="12" aria-hidden="true"
                            tabindex="-1" style="width: 370px;">
                            <img
                                src="https://web.archive.org/web/20230223130810im_/http://www.teawheeler.co.in/img/3.jpg"><br>
                            <p>Any Beverage Flask 300ml + Cheese magi</p>
                        </div>
                    </div>
                    </div>
                </section> -->
            </div>
        </div>
        </div>
    </section>
    <!--product section end--->
	
    <!--footer part-->
    <section>
        <!--<div class="ftop" >
        <img src="img/footer-top.jpg" alt="1" class="img-fluid"/>
        
        </div>-->
        <div class="footer ptb-30">
        <div class="container">
            <div class="row">
                <div class="col-md-4"></div>
                <div class="col-md-4 col-xs-12" >
                    <h4 class="bs fot-top-cnt brd-10"><a href="order-online.php" class="clr-wht">Order Online Now
                    !</a>
                    </h4>
                </div>
                <div class="col-md-4"></div>
            </div>
            <div class="row">
                <div class="col-md-4 col-xs-12 mb-1 ft-tc">
                    <img src="https://web.archive.org/web/20230223130810im_/http://www.teawheeler.co.in/img/logo.png" width="100"
                    class="img-fluid"><br>
                    <img src="https://web.archive.org/web/20230223130810im_/http://www.teawheeler.co.in/img/txt-logo.png" width="100"
                    class="img-fluid">
                </div>
                <div class="col-md-4 col-xs-12 mb-1 pt-3 ft-tc">
                    <div class="row">
                    <div class="col-md-6">
                        <ul class="ord-ul fmenu">
                            <li><a href="index.php">Home</a></li>
                            <li><a href="for-events.php">Events</a></li>
                            <li><a href="msme.php">MSME</a></li>
                        </ul>
                    </div>
                    <div class="col-md-6">
                        <ul class="ord-ul fmenu">
                            <li><a href="order-online.php">Order Online</a></li>
                            <li><a href="on-the-go.php">On The Go</a></li>
                            <li><a href="contact.php">Contact</a></li>
                        </ul>
                    </div>
                    </div>
                </div>
                <div class="col-md-4 col-xs-12 ft-tc">
                    <ul class="ord-ul lh-30  pt-0 fcnt">
                    <!--pl-5-->
                    <li>
                        <svg class="svg-inline--fa fa-envelope fa-w-16 fa-lg sicon mr-2" aria-hidden="true"
                            data-prefix="fa" data-icon="envelope" role="img" xmlns="http://www.w3.org/2000/svg"
                            viewBox="0 0 512 512" data-fa-i2svg="">
                            <path fill="currentColor"
                                d="M502.3 190.8c3.9-3.1 9.7-.2 9.7 4.7V400c0 26.5-21.5 48-48 48H48c-26.5 0-48-21.5-48-48V195.6c0-5 5.7-7.8 9.7-4.7 22.4 17.4 52.1 39.5 154.1 113.6 21.1 15.4 56.7 47.8 92.2 47.6 35.7.3 72-32.8 92.3-47.6 102-74.1 131.6-96.3 154-113.7zM256 320c23.2.4 56.6-29.2 73.4-41.4 132.7-96.3 142.8-104.7 173.4-128.7 5.8-4.5 9.2-11.5 9.2-18.9v-19c0-26.5-21.5-48-48-48H48C21.5 64 0 85.5 0 112v19c0 7.4 3.4 14.3 9.2 18.9 30.6 23.9 40.7 32.4 173.4 128.7 16.8 12.2 50.2 41.8 73.4 41.4z">
                            </path>
                        </svg>
                        <!-- <i class="fa fa-envelope fa-lg sicon mr-2"></i> --> <a
                            href="">Connect@Teawheeler.co.in</a>
                    </li>
                    <li>
                        <svg class="svg-inline--fa fa-phone-square fa-w-14 fa-lg sicon mr-2" aria-hidden="true"
                            data-prefix="fa" data-icon="phone-square" role="img"
                            xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" data-fa-i2svg="">
                            <path fill="currentColor"
                                d="M400 32H48C21.49 32 0 53.49 0 80v352c0 26.51 21.49 48 48 48h352c26.51 0 48-21.49 48-48V80c0-26.51-21.49-48-48-48zM94 416c-7.033 0-13.057-4.873-14.616-11.627l-14.998-65a15 15 0 0 1 8.707-17.16l69.998-29.999a15 15 0 0 1 17.518 4.289l30.997 37.885c48.944-22.963 88.297-62.858 110.781-110.78l-37.886-30.997a15.001 15.001 0 0 1-4.289-17.518l30-69.998a15 15 0 0 1 17.16-8.707l65 14.998A14.997 14.997 0 0 1 384 126c0 160.292-129.945 290-290 290z">
                            </path>
                        </svg>
                        <!-- <i class="fa fa-phone-square fa-lg sicon mr-2"></i> --> <a href="">+91 91769
                        69999</a>
                    </li>
                    </ul>
                    <p class="fmenu lh-30 mt-2">
                    <a href="https:https://www.instagram.com/tea_wheeler/">
                        <svg
                            class="svg-inline--fa fa-instagram fa-w-14 fa-lg sicon mr-10" aria-hidden="true"
                            data-prefix="fab" data-icon="instagram" role="img"
                            xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" data-fa-i2svg="">
                            <path fill="currentColor"
                                d="M224.1 141c-63.6 0-114.9 51.3-114.9 114.9s51.3 114.9 114.9 114.9S339 319.5 339 255.9 287.7 141 224.1 141zm0 189.6c-41.1 0-74.7-33.5-74.7-74.7s33.5-74.7 74.7-74.7 74.7 33.5 74.7 74.7-33.6 74.7-74.7 74.7zm146.4-194.3c0 14.9-12 26.8-26.8 26.8-14.9 0-26.8-12-26.8-26.8s12-26.8 26.8-26.8 26.8 12 26.8 26.8zm76.1 27.2c-1.7-35.9-9.9-67.7-36.2-93.9-26.2-26.2-58-34.4-93.9-36.2-37-2.1-147.9-2.1-184.9 0-35.8 1.7-67.6 9.9-93.9 36.1s-34.4 58-36.2 93.9c-2.1 37-2.1 147.9 0 184.9 1.7 35.9 9.9 67.7 36.2 93.9s58 34.4 93.9 36.2c37 2.1 147.9 2.1 184.9 0 35.9-1.7 67.7-9.9 93.9-36.2 26.2-26.2 34.4-58 36.2-93.9 2.1-37 2.1-147.8 0-184.8zM398.8 388c-7.8 19.6-22.9 34.7-42.6 42.6-29.5 11.7-99.5 9-132.1 9s-102.7 2.6-132.1-9c-19.6-7.8-34.7-22.9-42.6-42.6-11.7-29.5-9-99.5-9-132.1s-2.6-102.7 9-132.1c7.8-19.6 22.9-34.7 42.6-42.6 29.5-11.7 99.5-9 132.1-9s102.7-2.6 132.1 9c19.6 7.8 34.7 22.9 42.6 42.6 11.7 29.5 9 99.5 9 132.1s2.7 102.7-9 132.1z">
                            </path>
                        </svg>
                        <!-- <i class="fab fa-instagram fa-lg sicon mr-10"></i> -->
                    </a>
                    <a href="https:https://twitter.com/teawheeler_offl">
                        <svg
                            class="svg-inline--fa fa-twitter fa-w-16 fa-lg sicon mr-10" aria-hidden="true"
                            data-prefix="fab" data-icon="twitter" role="img" xmlns="http://www.w3.org/2000/svg"
                            viewBox="0 0 512 512" data-fa-i2svg="">
                            <path fill="currentColor"
                                d="M459.37 151.716c.325 4.548.325 9.097.325 13.645 0 138.72-105.583 298.558-298.558 298.558-59.452 0-114.68-17.219-161.137-47.106 8.447.974 16.568 1.299 25.34 1.299 49.055 0 94.213-16.568 130.274-44.832-46.132-.975-84.792-31.188-98.112-72.772 6.498.974 12.995 1.624 19.818 1.624 9.421 0 18.843-1.3 27.614-3.573-48.081-9.747-84.143-51.98-84.143-102.985v-1.299c13.969 7.797 30.214 12.67 47.431 13.319-28.264-18.843-46.781-51.005-46.781-87.391 0-19.492 5.197-37.36 14.294-52.954 51.655 63.675 129.3 105.258 216.365 109.807-1.624-7.797-2.599-15.918-2.599-24.04 0-57.828 46.782-104.934 104.934-104.934 30.213 0 57.502 12.67 76.67 33.137 23.715-4.548 46.456-13.32 66.599-25.34-7.798 24.366-24.366 44.833-46.132 57.827 21.117-2.273 41.584-8.122 60.426-16.243-14.292 20.791-32.161 39.308-52.628 54.253z">
                            </path>
                        </svg>
                        <!-- <i class="fab fa-twitter fa-lg sicon mr-10"></i> -->
                    </a>
                    <a
                        href="https:https://www.facebook.com/profile.php?id=100080041909248">
                        <svg
                            class="svg-inline--fa fa-facebook fa-w-14 fa-lg sicon mr-10" aria-hidden="true"
                            data-prefix="fab" data-icon="facebook" role="img" xmlns="http://www.w3.org/2000/svg"
                            viewBox="0 0 448 512" data-fa-i2svg="">
                            <path fill="currentColor"
                                d="M448 56.7v398.5c0 13.7-11.1 24.7-24.7 24.7H309.1V306.5h58.2l8.7-67.6h-67v-43.2c0-19.6 5.4-32.9 33.5-32.9h35.8v-60.5c-6.2-.8-27.4-2.7-52.2-2.7-51.6 0-87 31.5-87 89.4v49.9h-58.4v67.6h58.4V480H24.7C11.1 480 0 468.9 0 455.3V56.7C0 43.1 11.1 32 24.7 32h398.5c13.7 0 24.8 11.1 24.8 24.7z">
                            </path>
                        </svg>
                        <!-- <i class="fab fa-facebook fa-lg sicon mr-10"></i> -->
                    </a>
                    <a href="">
                        <svg class="svg-inline--fa fa-youtube fa-w-18 fa-lg sicon mr-10"
                            aria-hidden="true" data-prefix="fab" data-icon="youtube" role="img"
                            xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" data-fa-i2svg="">
                            <path fill="currentColor"
                                d="M549.655 124.083c-6.281-23.65-24.787-42.276-48.284-48.597C458.781 64 288 64 288 64S117.22 64 74.629 75.486c-23.497 6.322-42.003 24.947-48.284 48.597-11.412 42.867-11.412 132.305-11.412 132.305s0 89.438 11.412 132.305c6.281 23.65 24.787 41.5 48.284 47.821C117.22 448 288 448 288 448s170.78 0 213.371-11.486c23.497-6.321 42.003-24.171 48.284-47.821 11.412-42.867 11.412-132.305 11.412-132.305s0-89.438-11.412-132.305zm-317.51 213.508V175.185l142.739 81.205-142.739 81.201z">
                            </path>
                        </svg>
                        <!-- <i class="fab fa-youtube fa-lg sicon mr-10"></i> -->
                    </a>
                    <a
                        href="https:https://www.linkedin.com/in/tea-wheeler-21308a237/">
                        <svg
                            class="svg-inline--fa fa-linkedin fa-w-14 fa-lg sicon" aria-hidden="true"
                            data-prefix="fab" data-icon="linkedin" role="img" xmlns="http://www.w3.org/2000/svg"
                            viewBox="0 0 448 512" data-fa-i2svg="">
                            <path fill="currentColor"
                                d="M416 32H31.9C14.3 32 0 46.5 0 64.3v383.4C0 465.5 14.3 480 31.9 480H416c17.6 0 32-14.5 32-32.3V64.3c0-17.8-14.4-32.3-32-32.3zM135.4 416H69V202.2h66.5V416zm-33.2-243c-21.3 0-38.5-17.3-38.5-38.5S80.9 96 102.2 96c21.2 0 38.5 17.3 38.5 38.5 0 21.3-17.2 38.5-38.5 38.5zm282.1 243h-66.4V312c0-24.8-.5-56.7-34.5-56.7-34.6 0-39.9 27-39.9 54.9V416h-66.4V202.2h63.7v29.2h.9c8.9-16.8 30.6-34.5 62.9-34.5 67.2 0 79.7 44.3 79.7 101.9V416z">
                            </path>
                        </svg>
                        <!-- <i class="fab fa-linkedin fa-lg sicon"></i> -->
                    </a>
                    <span class="fbord dhide"></span>
                    </p>
                </div>
            </div>
        </div>
        </div>
    </section>
    <!--footer part end-->
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/jquery.slick/1.4.1/slick.min.js"></script>
    <script src="js/jquery-3.3.1.slim.min.js" ></script>
    <script defer="" src="js/all.js"></script>
    <script type="text/javascript">
        var aq = $.noConflict();
        /* aq(document).ready(function () {
        
            aq('.customer-logos').slick({
                slidesToShow: 3,
                slidesToScroll: 1,
                autoplay: true,
                autoplaySpeed: 1500,
                arrows: false,
                dots: false,
                pauseOnHover: false,
                responsive: [{
                    breakpoint: 768,
                    settings: {
                        slidesToShow: 4
                    }
                }, {
                    breakpoint: 520,
                    settings: {
                        slidesToShow: 3
                    }
                }]
            }); 
			
		});	*/
        
        
        $(".slick-slider").slick({
        slidesToShow: 3,
        infinite:false,
        slidesToScroll: 1, 
        autoplay: true,
        autoplaySpeed: 2000,
        dots: false,
        arrows: false,
        responsive: [{
            breakpoint: 768,
            settings: {
                slidesToShow: 2
            }
        }, {
            breakpoint: 520,
            settings: {
                slidesToShow: 1
            }
        }]
        });
		
		
        
        
        // Image Slider Demo:
        // https://codepen.io/vone8/pen/gOajmOo
    </script>
    <script src="js/jquery.slim.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
</body>
</html>
