<?php

include_once "db_connect.php";

$check_in = $_POST['check-in'];
$check_out = $_POST['check-out'];
$rooms = $_POST['rooms'];
$guest = $_POST['guest'];
$hotel = $_POST['myhotel'];
$email = $_POST['email'];
$message = $_POST['msg'];

$query = "INSERT INTO 'reservation' ('checkin', 'checkout', 'rooms', 'guests', 'hotel', 'email', 'message') VALUES ('$check_in', '$check_out', '$rooms', '$hotel', '$email', '$message')";

$results = mysqli_query($connect, $query);

if ($results) {
    # code...
    echo "Data Inserted";
}else{
    echo "Data not inserted";
}

mysqli_free_result($results);
mysqli_close($connect);

