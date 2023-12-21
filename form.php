<?php 
$name = $_POST['name'];
$visitor_email =  $_POST['email'];
$message = $_POST['mensagem'];

$email_from = 'educreativecosuporte@gmail.com';
$email_subject = 'Nova mensagem';
$email_body = "Nome:$name.\n".
"Email:$visitor_email.\n".
"Mensagem:$message.\n";

$to = 'educreativecosuporte@gmail.com';

$headers = "De: $email_from \r\n";

$headers .= "Para: $visitor_email\r\n"; 

mail($to,$email_subject,$email_body);

header("Location: contactos.html");



?>