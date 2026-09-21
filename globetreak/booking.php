<?php

include 'db.php';

$customer_name = $_POST['customer_name'];
$email = $_POST['email'];
$package_name = $_POST['package_name'];
$travel_date = $_POST['travel_date'];
$travelers = $_POST['travelers'];

$sql = "INSERT INTO bookings(customer_name,email,package_name,travel_date,travelers)

VALUES('$customer_name','$email','$package_name','$travel_date','$travelers')";

if(mysqli_query($conn,$sql)){

    echo "Booking Successful";

}
else{

    echo "Error";

}

?>