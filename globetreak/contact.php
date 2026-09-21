<?php

include 'db.php';

$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];

$sql = "INSERT INTO inquiries(name,email,message)

VALUES('$name','$email','$message')";

if(mysqli_query($conn,$sql)){

    echo "Inquiry Submitted Successfully";

}
else{

    echo "Error";

}

?>