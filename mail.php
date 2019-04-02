<?php
// Import PHPMailer classes into the global namespace
// These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

// Load Composer's autoloader
require 'vendor/autoload.php';

if ($_POST["sendMail"]) {

// Instantiation and passing `true` enables exceptions
$mail = new PHPMailer(true);
$mail->CharSet = "UTF-8";

$email = $_POST["email"];
$name = $_POST["name"];
$company = $_POST["company"];
$message = $_POST["message"];

try {
    //Server settings
    $mail->SMTPDebug = 0;                                       // Enable verbose debug output
    $mail->isSMTP();                                            // Set mailer to use SMTP
    $mail->Host       = 'smtp01.binero.se';  // Specify main and backup SMTP servers
    $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
    $mail->Username   = 'david@davidyan.se';                     // SMTP username
    $mail->Password   = 'David1337';                               // SMTP password
    $mail->SMTPSecure = 'tls';                                  // Enable TLS encryption, `ssl` also accepted
    $mail->Port       = 587;                                    // TCP port to connect to

    //Recipients
    $mail->setFrom($email, $name);
    $mail->addAddress('daveddd97@hotmail.com');     // Add a recipient
    $mail->addReplyTo($email);
    /* $mail->addCC('cc@example.com');
    $mail->addBCC('bcc@example.com'); */

    // Attachments
 /*    $mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
    $mail->addAttachment('/tmp/image.jpg', 'new.jpg');  */   // Optional name
    $body = "<p><strong>Detta meddelandet är skickat från hemsidan:</strong> <br>$name <br> $company <br> $message</p>";
    // Content
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = 'CV Contact Form';

    $mail->Body    = $body;
    $mail->AltBody = strip_tags($body);

    $mail->send();
    echo '<div class="ui positive message">
    <i class="close icon"></i>
    <div class="header">
      Ditt meddelande har skickats!
    </div>
    <p>Jag återkommer till dig så fort som möjligt /David</p>
    </div>';
    
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}

}
?>