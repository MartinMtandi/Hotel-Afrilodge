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
       <p>Contact Us<br><span>-and speak to our friendly staff.</span></p>
    </div>
</div>
<!--booking form-->
<section class="booking-container">
    <div class="booking-wrapper">
        <div class="booking-col-2">
        <form action="">
            <h1>Fill Details Below:</h1>
            <label for="name">Name</label>
            <input type="text" id="name">
            <label for="phone">Phone No.</label>
            <input type="text" id="phone">
            <div class="myhotel">
                <label for="myhotel">Which hotel are you contacting?</label>
                <select id="myhotel" name="myhotel">
                  <option value="lodge">Afrilodge</option>
                  <option value="hotel">The Standard Hotel</option>
                </select>
            </div>
            <label for="email">Email</label>
            <input type="email" id="email">
        
            <label for="msg">Write a Message</label>
            <textarea id="msg" name="msg" placeholder="Write something.." style="height:120px"></textarea>
        
            <button>Send</button>
          </form>
        </div>
        <div class="booking-col-2">
            <div class="col-2-wrap">
                <h2>Featured Room</h2>
                <div>
                    <img src="images/afrilodge/full/rm7.jpg" alt="featured-room">
                    <h2>Deluxe Room - <span>Tunisia</span></h2>
                    <h3>Kingsize Bed</h3>
                    <p >
                        <i class="fas fa-users"></i>&nbsp;2 Guests
                    </p>
                    <p>It has an internal, palm lined garden with lush fresh plants. This room has bidets in the bathroom to enhance personal hygiene. It is tiled with ceramic and exotic wood.</p>
                    <button>Book Now for $80</button>
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