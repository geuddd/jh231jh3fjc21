<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get form data
    $name = $_POST["Name"];
    $email = $_POST["Email"];
    $service = $_POST["Service"];
    $time = $_POST["Time"];

    // Email settings
    $to = "matthewsdogcare@gmail.com";
    $subject = "Booking Request from $name";
    $message = "Name: $name\n";
    $message .= "Email: $email\n";
    $message .= "Service: $service\n";
    $message .= "Time: $time\n";

    // Send email
    mail($to, $subject, $message);

    // Redirect back to the contact page
    header("Location: index.html#contact");
    exit();
}
?>
