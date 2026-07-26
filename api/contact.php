<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $name = $_POST["name"] ?? "";
    $email = $_POST["email"] ?? "";
    $message = $_POST["message"] ?? "";

    // Example: send email (requires external SMTP service)
    mail("yoha-work@outlook.com", "New Contact Form Submission",
        "Name: $name\nEmail: $email\nMessage:\n$message");

    echo json_encode(["status" => "success", "message" => "Form submitted"]);
} else {
    echo json_encode(["status" => "error", "message" => "Invalid request"]);
}