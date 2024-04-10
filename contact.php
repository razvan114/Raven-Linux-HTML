<?php
// Include PHPMailer autoload file
require '/home/archetypefn/HTML/PHPMailer-6.9.1/src/PHPMailer.php';

// Create a new PHPMailer instance
$mail = new PHPMailer;

// Enable SMTP debugging (optional)
$mail->SMTPDebug = 0; // Set to 2 for detailed debugging information

// Set up SMTP
$mail->isSMTP();
$mail->Host = 'smtp.gmail.com'; // SMTP server address
$mail->Port = 587; // SMTP port (TLS encryption)
$mail->SMTPAuth = true; // Enable SMTP authentication
$mail->Username = 'your-email@gmail.com'; // SMTP username (your Gmail address)
$mail->Password = 'your-password'; // SMTP password (your Gmail password)
$mail->SMTPSecure = 'tls'; // Enable TLS encryption

// Set up email content
$mail->setFrom('your-email@gmail.com', 'Your Name'); // Sender's email address and name
$mail->addAddress('recipient@example.com', 'Recipient Name'); // Recipient's email address and name
$mail->Subject = 'Test Email via PHPMailer'; // Email subject
$mail->Body = 'This is a test email sent via PHPMailer using Gmail SMTP.'; // Email body

// Send the email
if ($mail->send()) {
    echo 'Email has been sent successfully!';
} else {
    echo 'Email could not be sent. Error: ' . $mail->ErrorInfo;
}
?>
