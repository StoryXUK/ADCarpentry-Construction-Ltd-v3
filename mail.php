<?php
$name = $_POST["name"];
$email = $_POST["email"];
$phone = $_POST["phone"];
$company = $_POST["company"];
$message = $_POST["message"];

$EmailTo = "adawe43@gmail.com";
$Subject = "New Message Received";

// Prepare email body text
$Fields = "Name: " . $name . "\n";
$Fields .= "Email: " . $email . "\n";
$Fields .= "Phone: " . $phone . "\n";
$Fields .= "Company: " . $company . "\n";
$Fields .= "Message: " . $message . "\n";

// Additional headers
$headers = "From: info@ad-carpentry.com\r\n";
$headers .= "Reply-To: " . $email . "\r\n";
$headers .= "MIME-Version: 1.0\r\n";
$headers .= "Content-Type: text/plain; charset=UTF-8\r\n";

// Send email
$success = mail($EmailTo, $Subject, $Fields, $headers);

// Check if mail was sent successfully
if ($success) {
    echo "Your message has been sent successfully.";
} else {
    echo "An error occurred while sending your message.";
}
?>
