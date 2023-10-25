<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get form data
    $name = $_POST["name"];
    $email = $_POST["user-email"];
    $packageType = $_POST["package-type"];
    $rentDays = $_POST["rent-days"];
    $carType = $_POST["car-type"];

    // Compose the email message
    $subject = "Car Rental Confirmation";
    $message = "Thank you, $name! You have reserved a $carType under the $packageType for $rentDays days.";

    // Set additional headers
    $headers = "From: webmaster@example.com"; // Replace with your email address

    // Send the confirmation email
    if (mail($email, $subject, $message, $headers)) {
        echo "Email sent successfully!";
    } else {
        echo "Email failed to send.";
    }
} else {
    echo "Invalid request.";
}
?>

