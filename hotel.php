<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Afrilodge</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" type="text/css" media="screen" href="css/header.css" />
    <link rel="stylesheet" href="css/footer.css">
    <link rel="stylesheet" href="css/services.css">
    <link rel="stylesheet" href="css/lodge-landingpage.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css">
</head>
<body>
<!--Start Nav Bar -->
<?php require_once('includes/header.html');?>
<!--End Nav Bar -->

<div class="lodge-parallax welcome-hotel">
    <p>Welcome to The Standard Hotel</p>
</div>
 <!--Start Afrilodge Room Display-->
 <section class="afrilodge-rm-container">
     <div class="afrilodge-rm-wrapper">
         <div class="lg-rm-wrapper">
             <div class="handler">
             <img src="images/hotel/IMG-20180902-WA0057.jpg" alt="room1">
             <h2>Deluxe Room - <span>Zimbabwe</span></h2>
                <h3>Double Bed</h3>
                <p >
                    <i class="fas fa-users"></i>&nbsp;4 Guests
                </p>
                <p>It has an internal, palm lined garden with lush fresh plants. This room has bidets in the bathroom to enhance personal hygiene. It is tiled with ceramic and exotic wood.</p>
                <button>Book Now for $80</button>
             </div>
         </div>
         <div class="lg-rm-wrapper">
             <div class="handler">
             <img src="images/hotel/IMG-20180902-WA0053.jpg" alt="room2">
             <h2>Executive Room - <span>Tunisia</span></h2>
                <h3>Twin Bed</h3>
                <p class="">
                    <i class="fas fa-users"></i>&nbsp;2 Guests
                </p>
                <p>It has an internal, palm lined garden with lush fresh plants. This room has bidets in the bathroom to enhance personal hygiene. It is tiled with ceramic and exotic wood.
                </p>
                <button>Book Now for $80</button>
             </div>
         </div>
         <div class="lg-rm-wrapper">
             <div class="handler">
             <img src="images/hotel/IMG-20180902-WA0052.jpg" alt="room3">
             <h2>Executive Room - <span>Tanzania</span></h2>
                <h3>Double Bed</h3>
                <p class="">
                    <i class="fas fa-users"></i>&nbsp;2 Guests
                </p>
                <p>It has an internal, palm lined garden with lush fresh plants. This room has bidets in the bathroom to enhance personal hygiene. It is tiled with ceramic and exotic wood.
                </p>
                <button>Book Now for $70</button>
             </div>
         </div>
         <div class="lg-rm-wrapper">
             <div class="handler">
             <img src="images/hotel/slider01.jpg" alt="room4">
                <h2>Standard Room - <span>Botswana</span></h2>
                <h3>Twin Bed</h3>
                <p class="">
                    <i class="fas fa-users"></i>&nbsp;2 Guests
                </p>
                <p>It has an internal, palm lined garden with lush fresh plants. This room has bidets in the bathroom to enhance personal hygiene. It is tiled with ceramic and exotic wood.
                </p>
                <button>Book Now for $60</button>
             </div>
         </div>
         <div class="lg-rm-wrapper">
             <div class="handler">
             <img src="images/hotel/IMG-20180902-WA0044.jpg" alt="room5">
             <h2>Standard Room - <span>South Africa</span></h2>
                <h3>Double Bed</h3>
                <p>
                    <i class="fas fa-users"></i>&nbsp;2 Guests
                </p>
                <p class="text-justify">It has an internal, palm lined garden with lush fresh plants. This room has bidets in the bathroom to enhance personal hygiene. It is tiled with ceramic and exotic wood.
                </p>
                <button>Book Now for $60</button>
            </div>
             </div>
         
         <div class="lg-rm-wrapper">
             <div class="handler">
             <img src="images/hotel/IMG-20180902-WA0056.jpg" alt="room6">
             <h2>Standard Room - <span>Malawi</span></h2>
                <h3>Single (Double Bed)</h3>
                <p class="hotel-info">
                    <i class="fas fa-users"></i>&nbsp;2 Guests
                </p>
                <p class="text-justify">It has an internal, palm lined garden with lush fresh plants. This room has bidets in the bathroom to enhance personal hygiene. It is tiled with ceramic and exotic wood.
                </p>
                <button>Book Now for $50</button>
             </div>
         </div>
     </div>
     .
 </section>
    <!--End Afrilodge Room Display-->
<!--Service List-->

<div class="service">
    <div class="overlay">
    <div class="service-container">
        <h2 class="center">The Standard Hotel</h2>
        <h1 class="center">Service List<h1>
        <div class="service-wrapper">
            <div class="service-box">
                <div class="border level-1">
                <h3><i class="fas fa-bed"></i>Accomodation</h3>
                <p class="desc">The Standard Hotel boasts of 42 rooms on three floors, some rooms with 2 beds and family units. <span></span></p>
                </div>
            </div>
            <div class="service-box">
                <div class="border level-1">
                <h3><i class="fas fa-utensils"></i>Steak & Grill Restaurant</h3>
                <p class="desc">We also have a Steak and Grill restaurant which serves sumptuous meals.</p>
                </div>
            </div>
            <div class="service-box">
                <div class="border level-1">
                <h3><i class="fas fa-cocktail"></i>&nbsp;Thirsty Throats Bar</h3>
                <p class="desc">Spend time in our elegant bar overlooking the city</p>
    
                </div>
            </div>
            
        </div>
    </div>
    </div>
</div>

<!--End Services List-->

    <!--Footer -->
    <?php require_once('includes/footer.html');?>
    <!--End Footer -->


    <script src="js/jquery-3.1.1.min.js"></script>
    <script src="js/script.js"></script>
    <script type="text/javascript">
        $(document).ready(function () {
            $('.menu-toggle').click(function () {
                $('nav').toggleClass('active')
            })
            $('ul li').click(function () {
                $(this).siblings().removeClass('active');
                $(this).toggleClass('active');
            })
        })
    </script>
    
</body>
</html>