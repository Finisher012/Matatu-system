<?php

$name=$_POST['name'];
$phone=$_POST['phone'];
$email=$_POST['email'];
$route=$_POST['route'];
$seats=$_POST['seats'];
$date=$_POST['date'];

switch($route){

    case "Nairobi-Nyeri":
        $fare=700;
        break;

    case "Mombasa-Nanyuk":
        $fare=1500;
        break;

    case "Nakuru-Embu":
        $fare=900;
        break;

    case "Kisumu-Nairobi":
        $fare=1700;
        break;

    default:
        $fare=0;
}

$total=$fare*$seats;

echo "<h2>Ticket Booked Successfully</h2>";

echo "<p><strong>Passenger:</strong> $name</p>";
echo "<p><strong>Phone:</strong> $phone</p>";
echo "<p><strong>Email:</strong> $email</p>";
echo "<p><strong>Route:</strong> $route</p>";
echo "<p><strong>Seats:</strong> $seats</p>";
echo "<p><strong>Travel Date:</strong> $date</p>";
echo "<p><strong>Total Fare:</strong> Ksh $total</p>";

echo "<h3>Thank you for travelling with SafariLink!</h3>";

?>