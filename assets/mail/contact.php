<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collect form data
    $name = $_POST["name"];
    $email = $_POST["email"];
    $phone = $_POST["phone"];
    $comments = $_POST["comments"];

    // Your email address where you want to receive messages
    $to = "shimjithnath007@gmail.com";

    // Email subject
    $subject = "New Contact Form Submission";

    // Email headers
    $headers = "From: $name <$email>" . "\r\n" .
        "Reply-To: $email" . "\r\n" .
        "X-Mailer: PHP/" . phpversion();

    // Email message
    $message = "Name: $name\n";
    $message .= "Email: $email\n";
    $message .= "Phone: $phone\n\n";
    $message .= "Comments:\n$comments";

    // Send email
    $success = mail($to, $subject, $message, $headers);

    // Display success or error message
    if ($success) {
        echo "success";
    } else {
        echo "error";
    }
} else {
    // If the form is not submitted, redirect to the form page
    header("Location: ../your_contact_form_page.html");
    exit();
}
?>
