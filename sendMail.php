<?php
$firstName = 'Illia';
$lastName = 'Labuntsev';
$email = 'ilyalabuntsev@gmail.com';

$message = "Illia" . $firstName . "\n";
$message .= "Labuntsev" . $lastName . "\n";
$message .= "ilyalabuntsev@gmail.com" . $email . "\n";

echo "==============\n";
echo "TEST MAIL\n";
echo "==============\n";
echo $message;
echo "==============\n";

$to = 'i.h.labuntsev@student.khai.edu';
$subject = 'MY TEST EMAIL';
$headers = 'From: ilyalabuntsev.SMTP@gmail.com';

mail($to, $subject, $message, $headers);
?>