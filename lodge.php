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
    <link rel="stylesheet" href="css/box-model.css">
    <link rel="stylesheet" href="css/services.css">
    <link rel="stylesheet" href="css/chk.css">
    <link rel="stylesheet" href="css/gallary.css">
    <link rel="stylesheet" href="css/lodge-landingpage.css">
    <link rel="stylesheet" href="css/lightbox.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css">
</head>
<body>
<!--Start Nav Bar -->
<?php require_once('includes/header.html');?>
<!--End Nav Bar -->

<div class="lodge-parallax" id="welcome-lodge">
    <div>
       <p>Afrilodge<br><span>- A place that feels like home.</span></p>
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

<article class="room-summary">
    <h2>Afrilodge</h2>
    <h1>Room Summary</h1>
    <p>The rooms are made up of a king sized bed as well as tea making and refrigeration facilities. The room is
equipped with air conditioning and complimentary high-speed internet access allowing you to stay in
touch with the office or plan your day's activities. Also available is an LCD TVs with Freeview DSTV channels.</p>
</article>

<section class="view-rooms">
    <div class="box-container">
        <div class="room-wrapper">
            <div class="box">
                <div class="box-image box1">
                    <span>Taurus - $80.00</span>
                    <button>Book Now</button>
                </div>
            </div>
            <div class="box">
                <div class="box-image box2">
                    <span>Sagittarius - $80.00</span>
                    <button>Book Now</button>
                </div>
            </div>
            <div class="box">
                <div class="box-image box3">
                    <span>Aries - $80.00</span>
                    <button>Book Now</button>
                </div>
            </div>
            <div class="box">
                <div class="box-image box4">
                    <span>Scorpio - $80.00</span>
                    <button>Book Now</button>
                </div>
            </div>
            <div class="box">
                <div class="box-image box5">
                    <span>Libra - $80.00</span>
                    <button>Book Now</button>
                </div>
            </div>
            <div class="box">
                <div class="box-image box6">
                    <span>Leo - $80.00</span>
                    <button>Book Now</button>
                </div>
            </div>
        </div>
    </div>
</section>

<!--End Afrilodge Room Display-->


<!--Start Service Section-->

<div class="service">
    <div class="overlay">
    <div class="service-container">
        <h2 class="center">Afrilodge</h2>
        <h1 class="center">Service List<h1>
        <div class="service-wrapper">
            <div class="service-box">
                <div class="border level-1">
                <h3><i class="fas fa-bed"></i>Bed and Breakfast</h3>
                <p class="desc">Special comfort prepared to make you feel at home. <br><span> $80 (Double)</span></p>
                </div>
            </div>
            <div class="service-box">
                <div class="border level-1">
                <h3><i class="fas fa-torii-gate"></i>Garden Conference</h3>
                <p class="desc">Learn and grow with peers in an open and relaxing environment.<br> <span> $200</span></p>
                </div>
            </div>
            <div class="service-box">
                <div class="border level-1">
                <h3><i class="fas fa-cocktail"></i>&nbsp;Cocktail Parties</h3>
                <p class="desc">When it's time to loosen up we do it with style and class.<br> <span>$300 (Venue)</span></p>
    
                </div>
            </div>
            <div class="service-box">
                <div class="border level-2">
                <h3><i class="fas fa-gift"></i>&nbsp;Birthday Parties</h3>
                <p class="desc">For the special moments, we are ideal for all ages.<br> <span>$300 (Venue)</span></p>
                </div>
            </div>
            <div class="service-box">
                <div class="border level-2">
                <h3><i class="fas fa-dove"></i>&nbsp;Weddings</h3>
                <p class="desc">Special moments need the perfect environment.<br> <span>$600 Venue (Tent for hire $150) up to 60 people</span></p>
                </div>
            </div>
            <div class="service-box">
                <div class="border level-2">
                <h3><i class="fas fa-utensils"></i>&nbsp;Weekend Braii</h3>
                <p class="desc">Feast with family, friends or more intimate moments on a weekend.<br> <span> $10 (Per Braai Pack)</span></p>
                </div>
            </div>
        </div>
       
        <p class="meal-desc">Meals are $10 per serving. We offer breakfast, lunch or supper meals. We serve chicken, t-bone, pork chops and fillet along
            with light vegetable/salad based dishes or heavy starch filing i.e. rice, potatoes and pasta etc.
        </p>
        <p class="meal-desc">Visit us and place an order for meals (only) in our soothing environment anytime between 7:00am and 8:00am</p>
    </div>
    </div>
</div>

<!--End Service Section-->
<!--Gallary -->
<section class="gallary">
    <h2>Afrilodge</h2>
    <h1>Gallary</h1>
    <div class="mygallary">
    <a href="images/gallary/lodge/pic1.jpg" data-lightbox="mygallary" data-title="The Executive Suite - Taurus"><img src="images/gallary/lodge/pic1-small.jpg" alt="room"></a>
    <a href="images/gallary/lodge/pic2.jpg" data-lightbox="mygallary" data-title="The Executive Suite - Sagittarius"><img src="images/gallary/lodge/pic2-small.jpg" alt="room"></a>
    <a href="images/gallary/lodge/pic3.jpg" data-lightbox="mygallary" data-title="The Executive Suite - Aries"><img src="images/gallary/lodge/pic3-small.jpg" alt="room"></a>
    <a href="images/gallary/lodge/pic4.jpg" data-lightbox="mygallary" data-title="The Executive Suite - Scorpio"><img src="images/gallary/lodge/pic4-small.jpg" alt="room"></a>
    <a href="images/gallary/lodge/pic6.jpg" data-lightbox="mygallary" data-title="The Executive Suite - Libra"><img src="images/gallary/lodge/pic6-small.jpg" alt="room"></a>
    <a href="images/gallary/lodge/pic7.jpg" data-lightbox="mygallary" data-title="The Executive Suite - Taurus"><img src="images/gallary/lodge/pic7-small.jpg" alt="room"></a>
    <a href="images/gallary/lodge/pic8.jpg" data-lightbox="mygallary" data-title="The Executive Suite - Aries"><img src="images/gallary/lodge/pic8-small.jpg" alt="room"></a>
    <a href="images/gallary/lodge/pic9.jpg" data-lightbox="mygallary" data-title="The Executive Suite - Aries"><img src="images/gallary/lodge/pic9-small.jpg" alt="room"></a>
    <a href="images/gallary/lodge/pic10.jpg" data-lightbox="mygallary" data-title="The Executive Suite - Leo"><img src="images/gallary/lodge/pic10-small.jpg" alt="room"></a>
    <a href="images/gallary/lodge/pic11.jpg" data-lightbox="mygallary" data-title="The Executive Suite - Sagittarius"><img src="images/gallary/lodge/pic11-small.jpg" alt="room"></a>
    <a href="images/gallary/lodge/pic12.jpg" data-lightbox="mygallary" data-title="Afrilodge - Outdoor garden"><img src="images/gallary/lodge/pic12-small.jpg" alt="room"></a>
    <a href="images/gallary/lodge/pic13.jpg" data-lightbox="mygallary" data-title="Afrilodge - Thatched Roof"><img src="images/gallary/lodge/pic13-small.jpg" alt="garden"></a>
    <a href="images/gallary/lodge/pic15.jpg" data-lightbox="mygallary" data-title="Afrilodge - Outdoor garden"><img src="images/gallary/lodge/pic15-small.jpg" alt="garden"></a>
    <a href="images/gallary/lodge/pic16.jpg" data-lightbox="mygallary" data-title="Afrilodge - Entrance"><img src="images/gallary/lodge/pic16-small.jpg" alt="garden"></a>
    <a href="images/gallary/lodge/pic17.jpg" data-lightbox="mygallary" data-title="Afrilodge - Gate view"><img src="images/gallary/lodge/pic17-small.jpg" alt="garden"></a>
    </div>
</section>
<!--end Gallary -->
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