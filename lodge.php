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
    <link rel="stylesheet" href="css/lodge-landingpage.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css">
</head>
<body>
<!--Start Nav Bar -->
<?php require_once('includes/header.html');?>
<!--End Nav Bar -->

<div class="lodge-parallax" id="welcome-lodge">
    <p>Welcome to Afrilodge</p>
</div>
 <!--Start Afrilodge Room Display-->
 <section class="afrilodge-rm-container">
     <div class="afrilodge-rm-wrapper">
         <div class="lg-rm-wrapper">
             <div class="handler">
             <img src="images/afrilodge/rm1.jpg" alt="room1">
             <h2>Executive Room</h2>
            <h3>Taurus</h3>
            <p>
                <i class="fas fa-users"></i>&nbsp;2 Guests
            </p>
            <p>The room is made up of a Kingsized bed, air condition as well as tea making and regrigeration facilities.
                The room is equipped with complimentary high-speed Internet access allowing you to stay in touch with
                the office, or plan your day's activities. LCD TV with Freeview DSTV channels.</p>
            <button>Book Now for $80</button>
             </div>
         </div>
         <div class="lg-rm-wrapper">
             <div class="handler">
             <img src="images/afrilodge/rm2.jpg" alt="room2">
             <h2>Executive Room</h2>
            <h3>Aries</h3>
            <p>
                <i class="fas fa-users"></i>&nbsp;2 Guests
            </p>
            <p>The room is made up of a Kingsized bed, air condition as well as tea making and regrigeration facilities.
                The room is equipped with complimentary high-speed Internet access allowing you to stay in touch with
                the office, or plan your day's activities. LCD TV with Freeview DSTV channels.</p>
            <button>Book Now for $80</button>
             </div>
         </div>
         <div class="lg-rm-wrapper">
             <div class="handler">
             <img src="images/afrilodge/rm3.jpg" alt="room3">
             <h2>Executive Room</h2>
            <h3>Scorpio</h3>
            <p>
                <i class="fas fa-users"></i>&nbsp;2 Guests
            </p>
            <p>The room is made up of a Kingsized bed, air condition as well as tea making and regrigeration facilities.
                The room is equipped with complimentary high-speed Internet access allowing you to stay in touch with
                the office, or plan your day's activities. LCD TV with Freeview DSTV channels.</p>
            <button>Book Now for $80</button>
             </div>
         </div>
         <div class="lg-rm-wrapper">
             <div class="handler">
             <img src="images/afrilodge/rm4.jpg" alt="room4">
             <h2>Executive Room</h2>
            <h3>Sagitarius</h3>
            <p>
                <i class="fas fa-users"></i>&nbsp;2 Guests
            </p>
            <p>The room is made up of a Kingsized bed, air condition as well as tea making and regrigeration facilities.
                The room is equipped with complimentary high-speed Internet access allowing you to stay in touch with
                the office, or plan your day's activities. LCD TV with Freeview DSTV channels.</p>
            <button>Book Now for $80</button>
             </div>
         </div>
         <div class="lg-rm-wrapper">
             <div class="handler">
             <img src="images/afrilodge/rm5.jpg" alt="room5">
             <h2>Executive Room</h2>
            <h3>Libra</h3>
            <p>
                <i class="fas fa-users"></i>&nbsp;2 Guests
            </p>
            <p>The room is made up of a Kingsized bed, air condition as well as tea making and regrigeration facilities.
                The room is equipped with complimentary high-speed Internet access allowing you to stay in touch with
                the office, or plan your day's activities. LCD TV with Freeview DSTV channels.</p>
            <button>Book Now for $80</button>
             </div>
         </div>
         <div class="lg-rm-wrapper">
             <div class="handler">
             <img src="images/afrilodge/rm6.jpg" alt="room6">
             <h2>Executive Room</h2>
            <h3>Leo</h3>
            <p>
                <i class="fas fa-users"></i>&nbsp;2 Guests
            </p>
            <p>The room is made up of a Kingsized bed, air condition as well as tea making and regrigeration facilities.
                The room is equipped with complimentary high-speed Internet access allowing you to stay in touch with
                the office, or plan your day's activities. LCD TV with Freeview DSTV channels.</p>
            <button>Book Now for $80</button>
             </div>
         </div>
     </div>
     .
 </section>
    <!--End Afrilodge Room Display-->


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