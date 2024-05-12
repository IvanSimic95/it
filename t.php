<?php
require_once $_SERVER['DOCUMENT_ROOT'].'/sendgrid/sendgrid-php.php';

use SendGrid\Mail\Mail;

$email = new Mail();
$email->setFrom("info@soulmatehealer.com", "Soulmate Healer");
$email->setSubject("Test Subject");
$email->addTo(
    "gabeobm@gmail.com",
    "Gabe",
    [
        "first_name" => "Gabe",
        "last_name" => "Lep",
        "email" => "gabeobm@gmail.com",
        "buy_link" => "https://www.digistore24.com/product/513366?custom=12402&email=gabeobm@gmail.com&first_name=Gabe&last_name=",
        "product" => "Soulmate Drawing"
    ],
    0
);
$email->setTemplateId("d-34c82fc813d14f2aa72f6f69060b68f0");
$sendgrid = new \SendGrid($sg);
try {
    $response = $sendgrid->send($email);
    print $response->statusCode() . "\n";
    print_r($response->headers());
    print $response->body() . "\n";
} catch (Exception $e) {
    echo 'Caught exception: '.  $e->getMessage(). "\n";
}