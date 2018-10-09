<?php
    $msg = "";
    use PHPMailer\PHPMailer\PHPMailer;
    include_once "PHPMailer/PHPMailer.php";
    include_once "PHPMailer/Exception.php";
    include_once "PHPMailer/SMTP.php";

    if (isset($_POST['submit'])){
        $subject = $_POST['subject'];
        $email = $_POST['email'];
        $message = $_POST['message'];
        
        $mail = new PHPMailer();
        //Sending via SMTP
        $mail->Host = "smtp.gmail.com";
        //$mail->isSMTP();
        $mail->SMTPAuth = true;
        $mail->Username = "mtandimartin@gmail.com";
        $mail->Password = "poshmark13"; //put your email password
        $mail->SMTPSecure = "ssl";
        $mail->Port = 465;

        $mail->addAddress('2014080021@solusi.ac.zw');
        $mail->setFrom($email);
        $mail->Subject = $subject;
        $mail->isHTML(true);
        $mail->Body = $message;

        if ($mail->send()) {
            # code...
            $msg = "Your email has been sent, thank you!!";
        }else{
            $msg = "Please try again!";
        }
    }
?>

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

<div class="lodge-parallax contact">
    <div>
       <p>Contact Us<br><span>-and speak to our friendly staff.</span></p>
    </div>
</div>
<!--booking form-->
<section class="booking-container">
    <div class="booking-wrapper">
        <div class="booking-col-2">
        <?php
            if($msg != ""){
                echo "$msg<br>";
            }
        ?>
        <form action="contact.php" method="post">
            <h1>Fill Details Below:</h1>
            <label for="name">Name</label>
            <input type="text" id="name" name="name" placeholder="Enter name">
            <div class="myhotel">
                <label for="myhotel">Which hotel are you contacting?</label>
                <select id="myhotel" name="myhotel">
                  <option value="lodge">Afrilodge</option>
                  <option value="hotel">The Standard Hotel</option>
                </select>
            </div>
            <label for="email">Email</label>
            <input type="email" id="email" name="email" placeholder="Enter personal email">
            <label for="phone">Subject</label>
            <input type="text" id="subject" name="subject" placeholder="Enter title/ref">
            <label for="msg">Write a Message</label>
            <textarea id="msg" name="message" placeholder="Write something.." style="height:120px"></textarea>
        
            <button type="submit" class="btn-contact">Send</button>
          </form>
        </div>
        <div class="booking-col-2">
            <div class="col-2-wrap">
                <h2 class="ft-room-xn">Featured Room</h2>
                <div>
                    <img src="images/afrilodge/full/rm1.jpg" alt="featured-room">
                    <h2>Deluxe Room - <span>Tunisia</span></h2>
                    <p >
                        <i class="fas fa-users"></i>&nbsp;2 Guests
                    </p>
                    <p>It has an internal, palm lined garden with lush fresh plants. This room has bidets in the bathroom to enhance personal hygiene. It is tiled with ceramic and exotic wood.</p>
                    <button class="button">Book Now for $80</button>
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