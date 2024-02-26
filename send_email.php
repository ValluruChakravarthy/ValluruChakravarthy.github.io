if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $age = $_POST['age'];
    $consultation = $_POST['type'];
    $location = $_POST['location'];
    $recipients = $_POST['recipients'];
    $situation = $_POST['situation'];

    // Compose the email message
    $to = "your@email.com"; // Enter your email address here
    $subject = "New Medical Appointment Submission";
    $message = "Name: $name\n";
    $message .= "Email: $email\n";
    $message .= "Age: $age\n";
    $message .= "Consultation: $consultation\n";
    $message .= "Location: $location\n";
    $message .= "Additional Recipients: $recipients\n";
    $message .= "Situation: $situation\n";

    // Send the email
    mail($to, $subject, $message);

    // Redirect to thank you page
    header('Location: thanks.html');
    exit;
}
