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
    <link rel="stylesheet" href="css/booking.css">
    <link rel="stylesheet" href="css/lodge-landingpage.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css">
</head>
<body>
<!--Start Nav Bar -->
<?php require_once('includes/header.html');?>
<!--End Nav Bar -->

<div class="lodge-parallax booking">
    <div>
       <p>Book Now<br><span>- and enjoy special comfort prepared to make
you feel at home.</span></p>
    </div>
</div>
<!--booking form-->
<section class="booking-container">
    <div class="booking-wrapper">
        <div class="booking-col-2">
        <form action="">
            <h1>Booking Form</h1>
            <div class="flex-check">
                <div class="check">
                    <div id="checkin">
                        <label for="check-in">Check In</label>
                        <input type="date" id="check-in" name="check-in">
                    </div>
                </div>
                <div class="check">
                    <div id="checkout">
                        <label for="check-out">Check Out</label>
                        <input type="date" id="check-out" name="check-out">
                    </div>
                </div>
           </div>
           <div class="flex-rooms">
           <div class="rooms">
            <div>
            <label for="rooms">Rooms</label>
            <select id="rooms" name="rooms">
              <option value="1">1</option>
              <option value="2">2</option>
              <option value="3">3</option>
              <option value="4">4</option>
              <option value="5">5</option>
              <option value="+5">+5</option>
            </select>
            </div>
           </div>
            <div class="guest">
                <div>
                <label for="guest">Guests</label>
                    <select id="guest" name="guest">
                      <option value="1">1</option>
                      <option value="2">2</option>
                      <option value="3">3</option>
                      <option value="4">4</option>
                      <option value="5">5</option>
                      <option value="+5">+5</option>
                    </select>
                </div>
            </div>
            </div>
            <div class="myhotel">
                <label for="myhotel">Choose Hotel</label>
                <select id="myhotel" name="myhotel">
                  <option value="lodge">Afrilodge</option>
                  <option value="hotel">The Standard Hotel</option>
                </select>
            </div>
            <label for="email">Email</label>
            <input type="email" id="email">
        
            <label for="msg">Write a Note</label>
            <textarea id="msg" name="msg" placeholder="Write something.." style="height:120px"></textarea>
        
            <button>Submit</button>
          </form>
        </div>
        <div class="booking-col-2">
            <div class="col-2-wrap">
                <h2 class="ft-room-xn">Featured Room</h2>
                <div>
                    <img src="images/hotel/full/rm7.jpg" alt="">
                    <h2>Executive Room - <span>Taurus</span></h2>
                    <p >
                        <i class="fas fa-users"></i>&nbsp;2 Guests
                    </p>
                    <p>It has an internal, palm lined garden with lush fresh plants. This room has bidets in the bathroom to enhance personal hygiene. It is tiled with ceramic and exotic wood.</p>
                    <button>Book Now for $100</button>
                </div>
            </div>
        </div>
    </div>
</section>


<!--End Booking Form-->


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