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
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css">
</head>
<body>
<!--Start Nav Bar -->
<?php require_once('includes/header.html');?>
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
    <h2>The Standard Room</h2>
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
                    <button>Family Room Botswana</button>
                </div>
            </div>
            <div class="box">
                <div class="box-image vbox2">
                    <span>Kingsize Bed - $100.00</span>
                    <button>Penthouse Suite Zimbabwe</button>
                </div>
            </div>
            <div class="box">
                <div class="box-image vbox3">
                    <span>Kingsize Bed Ensuite - $70.00</span>
                    <button>Executive Room Nigeria</button>
                </div>
            </div>
            <div class="box">
                <div class="box-image vbox4">
                    <span>Kingsize Bed Ensuite - $80.00</span>
                    <button>Deluxe Room Tunisia</button>
                </div>
            </div>
            <div class="box">
                <div class="box-image vbox5">
                    <span>Double Bed - $60.00</span>
                    <button>Family Room Namibia</button>
                </div>
            </div>
            <div class="box">
                <div class="box-image vbox6">
                    <span>Kingsize Bed - $60.00</span>
                    <button>Executive Room South Africa</button>
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