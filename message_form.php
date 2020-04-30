<?php
if (isset($_POST['sendemail'])) { // <-- variable name changed

    $to = "elizabethchu18@gmail.com";
    $subject = "Message from Portfolio Site";

    // data the visitor provided
    $name_field = filter_var($_POST['name'], FILTER_SANITIZE_STRING);
    $email_field = filter_var($_POST['email'], FILTER_VALIDATE_EMAIL);
    $comment = filter_var($_POST['message'], FILTER_SANITIZE_STRING);

    //constructing the message
    $body = " From: $name_field\n\n E-Mail: $email_field\n\n Message:\n\n $comment";
    $headers = "From: " . $email_field; // <-- Code added
    mail($to, $subject, $body, $headers); // <-- Code added

    // redirect to confirmation
    // header('Location: confirmation.html');
    header('Thank you for your email! I will be in touch with you very soon.');
    exit;
} else {
    echo "Failure";
}
?>

