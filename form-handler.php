<? php
$name = $_POST['name'];
$visitor_email = $_POST['email'];
$visitor_subject = $_POST['subject'];
$message = $_POST['message'];


$email_from ='onyeka716@gmail.com';

$email_subject = 'New Form Submission';

$email_body = "User Name: $name.\n".
               "User Email: $Visitor_email.\n".
               "subkect: $subject.\n".
               "User Messsage: $message.\n.";

$to = 'onyekachiqueen716@gmail.com';
$headers = "From $email_from \r\n";

$headers .= "Reply-To: $visitor_email \r\n";

mail($to,$email_subject,$email_body, $headers);
header("Location: contact.html");
?>