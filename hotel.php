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
    <link rel="stylesheet" href="css/chk.css">
    <link rel="stylesheet" href="css/box-model.css">
    <link rel="stylesheet" href="css/lightbox.min.css">
    <link rel="stylesheet" href="css/gallary.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css">
</head>
<body>
<!--Start Nav Bar -->
<header>
    <div class="h-logo">
        <img src="images/hotel-logo.png" alt="logo">
    </div>
    <nav>
        <ul>
            <li>
                <a href="index.php" class="active">Home</a>
            </li>
            <li class="sub-menu">
                <a href="#">Accommodation
                    <i class="fas fa-sort-down"></i>
                </a>
                <ul>
                    <li>
                        <a href="lodge.php">Afrilodge</a>
                    </li>
                    <li>
                        <a href="hotel.php">The Standard Hotel</a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="booking.php">Reservation</a>
            </li>
            <li>
                <a href="contact.php">Contact</a>
            </li>
        </ul>
    </nav>
    <div class="menu-toggle">
        <i class="fas fa-bars"></i>
    </div>
</header>
<!--End Nav Bar -->

<div class="lodge-parallax welcome-hotel">
<div>
    <p>The Standard Hotel<br><span>-More homely than home with a professional touch.</span></p>
</div>
</div>

<!--Start Check Availability-->
<section class="section-chk">
<form class="form-inline" action="">
  <label for="chkin">Check In:</label>
  <input type="date" id="mychkindate" name="chkin">
  <label for="chkout">Check Out:</label>
  <input type="date" id="mychkoutdate" name="chkout">
   <label for="rooms">Rooms:</label>
   <select id="rooms" name="rooms">
        <option value="1">1</option>
        <option value="2">2</option>
        <option value="3">3</option>
        <option value="4">4</option>
        <option value="5">5</option>
        <option value="+5">+5</option>
    </select>
  <button type="submit">Check Availability</button>
</form>
</section>
<!--End Check Availability-->

 <!--Start Hotel Room Display-->

 <article class="room-summary">
    <h2>The Standard Hotel</h2>
    <h1>Room Summary</h1>
    <p>Discover the beauty of Africa. Rooms are internal and have a palm lined garden with lush fresh plants. It
is the only hotel in Bulawayo with bidets in each bathroom to enhance personal hygiene. Our rooms are
tiled with ceramic and exotic wood.</p>
</article>


 <section class="view-rooms">
    <div class="box-container">
        <div class="room-wrapper">
            <div class="box">
                <div class="box-image vbox1">
                    <span>Double Bed Ensuite - $80.00</span>
                    <button class="button">Family Room Botswana</button>
                </div>
            </div>
            <div class="box">
                <div class="box-image vbox2">
                    <span>Kingsize Bed - $100.00</span>
                    <button class="button">Penthouse Suite Zimbabwe</button>
                </div>
            </div>
            <div class="box">
                <div class="box-image vbox3">
                    <span>Kingsize Bed Ensuite - $70.00</span>
                    <button class="button">Executive Room Nigeria</button>
                </div>
            </div>
            <div class="box">
                <div class="box-image vbox4">
                    <span>Kingsize Bed Ensuite - $80.00</span>
                    <button class="button">Deluxe Room Tunisia</button>
                </div>
            </div>
            <div class="box">
                <div class="box-image vbox5">
                    <span>Double Bed - $60.00</span>
                    <button class="button">Family Room Namibia</button>
                </div>
            </div>
            <div class="box">
                <div class="box-image vbox6">
                    <span>Kingsize Bed - $60.00</span>
                    <button class="button">Executive Room South Africa</button>
                </div>
            </div>
        </div>
    </div>
</section>
    <!--End Hotel Room Display-->
<!--Service List-->

<div class="service">
    <div class="overlay">
    <div class="service-container">
        <h2 class="center">The Standard Hotel</h2>
        <h1 class="center">Service List<h1>
        <div class="service-wrapper">
            <div class="service-box">
                <div class="border level-1">
                <h3><i class="fas fa-bed"></i>Accommodation</h3>
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
<!--Gallary -->
<section class="gallary">
    <h2>The Standard Hotel</h2>
    <h1>Gallery</h1>
    <div class="mygallary">
    <a href="images/gallary/hotel/pic1.jpg" data-lightbox="mygallary" data-title="The Executive Suite - South Africa"><img src="images/gallary/hotel/pic1-small.jpg" alt="room"></a>
    <a href="images/gallary/hotel/pic2.jpg" data-lightbox="mygallary" data-title="Family Room - Botswana"><img src="images/gallary/hotel/pic2-small.jpg" alt="room"></a>
    <a href="images/gallary/hotel/pic3.jpg" data-lightbox="mygallary" data-title="Penthouse Suite - Zimbabwe"><img src="images/gallary/hotel/pic3-small.jpg" alt="room"></a>
    <a href="images/gallary/hotel/pic7.jpg" data-lightbox="mygallary" data-title="The Executive Suite - Nigeria"><img src="images/gallary/hotel/pic7-small.jpg" alt="room"></a>
    <a href="images/gallary/hotel/pic8.jpg" data-lightbox="mygallary" data-title="The Executive Suite - South Africa"><img src="images/gallary/hotel/pic8-small.jpg" alt="room"></a>
    <a href="images/gallary/hotel/pic9.jpg" data-lightbox="mygallary" data-title="Meeting Room"><img src="images/gallary/hotel/pic9-small.jpg" alt="room"></a>
    <a href="images/gallary/hotel/pic19.jpg" data-lightbox="mygallary" data-title="Conference Room 1"><img src="images/gallary/hotel/pic19-small.jpg" alt="room"></a>
    <a href="images/gallary/hotel/pic11.jpg" data-lightbox="mygallary" data-title="Conference Room 2"><img src="images/gallary/hotel/pic11-small.jpg" alt="room"></a>
    <a href="images/gallary/hotel/pic12.jpg" data-lightbox="mygallary" data-title="Private Garden"><img src="images/gallary/hotel/pic12-small.jpg" alt="room"></a>
    <a href="images/gallary/hotel/pic13.jpg" data-lightbox="mygallary" data-title="Private Garden"><img src="images/gallary/hotel/pic13-small.jpg" alt="garden"></a>
    <a href="images/gallary/hotel/pic15.jpg" data-lightbox="mygallary" data-title="Bar"><img src="images/gallary/hotel/pic15-small.jpg" alt="garden"></a>
    <a href="images/gallary/hotel/pic16.jpg" data-lightbox="mygallary" data-title="Steak & Grill Restaurant"><img src="images/gallary/hotel/pic16-small.jpg" alt="garden"></a>
    <a href="images/gallary/hotel/pic17.jpg" data-lightbox="mygallary" data-title="Steak & Grill Restaurant"><img src="images/gallary/hotel/pic17-small.jpg" alt="garden"></a>
    <a href="images/gallary/hotel/pic18.jpg" data-lightbox="mygallary" data-title="Steak & Grill Restaurant"><img src="images/gallary/hotel/pic18-small.jpg" alt="garden"></a>
    <a href="images/gallary/hotel/pic14.jpg" data-lightbox="mygallary" data-title="Bar lounge"><img src="images/gallary/hotel/pic14-small.jpg" alt="garden"></a>
    </div>
</section>
<!--end Gallary -->
<!--End Services List-->

    <!--Footer -->
    <?php require_once('includes/footer.html');?>
    <!--End Footer -->

    <script src="js/lightbox-plus-jquery.min.js"></script>
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