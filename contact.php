<?php
// Include PHPMailer autoload file
require '/home/archetypefn/HTML/PHPMailer-6.9.1/src/PHPMailer.php';
require '/home/archetypefn/HTML/PHPMailer-6.9.1/src/SMTP.php';
require '/home/archetypefn/HTML/PHPMailer-6.9.1/src/Exception.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

// Create a new PHPMailer instance
$mail = new PHPMailer(true); // Passing true enables exceptions

// Rest of the code remains the same as in the previous example
// Set up SMTP, configure email content, send the email, etc.
?>
