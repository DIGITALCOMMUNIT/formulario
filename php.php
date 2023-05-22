<?php
if(isset($_POST['submit'])) {
    $to = "digitalcommunity3@gmail.com"; // Enter your email address here
    $subject = "Restaurant Survey Response";
    $name = $_POST['name'];
    $email = $_POST['email'];
    $experience = $_POST['experience'];
    $food_quality = $_POST['food-quality'];
    $service = $_POST['service'];
    $atmosphere = $_POST['atmosphere'];
    $recommendation = $_POST['recommendation'];
    $comments = $_POST['comments'];

    $message = "Name: ".$name."\nEmail: ".$email."\nOverall Experience: ".$experience."\nFood Quality: ".$food_quality."\nService: ".$service."\nAtmosphere: ".$atmosphere."\nWould you recommend us to others?: ".$recommendation."\nAdditional Comments: ".$comments;

    mail($to, $subject, $message);
}
?>
