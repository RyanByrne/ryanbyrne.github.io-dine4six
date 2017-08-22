<?php

    $name = $_POST['title'];
    $location = $_POST['location'];
    $tags = $_POST['tags'];
    $coordinates = $_POST['coordinates'];
    $address = $_POST['address'];
    $phone = $_POST['phone'];
    $website = $_POST['website'];
    $email = $_POST['email'];
    $ginsidecode = $_POST['ginsidecode'];
    $streetviewcode = $_POST['streetviewcode'];
    $area1= $_POST['area1'];
    $area2 = $_POST['area2'];
    $wifi = $_POST['wifi'];
    $kids = $_POST['kids'];
    $card = $_POST['card'];
    $parking = $_POST['parking'];
    $music = $_POST['music'];
    $video = $_POST['video'];
    $facebook= $_POST['facebook'];
    $twitter = $_POST['twitter'];
    $google = $_POST['google'];
    $linkdin = $_POST['linkdin'];
    $youtube = $_POST['youtube'];
    $instagram = $_POST['instagram'];

    $formcontent="From: $name \n Message: $email";
    $recipient = "ryan@dine4six.com";
    $subject = "New Venue Request";
    $mailheader = "From: $email \r\n";
    mail($recipient, $subject, $formcontent, $mailheader) or die("Error!");
    echo "Thank You!";

?>