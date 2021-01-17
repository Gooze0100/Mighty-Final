<?php
// <!-- Subscription page section ===============================================-->
require('./includes/emailSub.php');
// <!-- Contacts page validation ===============================================-->
require('./includes/contactValidation.php');
// <!-- Single page validation ===============================================-->
require('./includes/commentValidation.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="./styles.css" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous" />
    <link rel="stylesheet" href="./includes/Youtube-Vimeo-Modal-Plugin-jQuery/css/modal-video.min.css" />
    <!-- Adobe fonts Muli -->
    <link rel="stylesheet" href="https://use.typekit.net/ikz6lgf.css" />
    <title><?php echo "$title" ?></title>
</head>

<body>
    <!-- Off-canvas menu======================================================================-->
    <div id="offcanvas-menu" class="offcanvas-menu"></div>
    <!-- The Modal Box for Subscription======================================================================-->
    <div id="modal" class="modal <?php echo $done ?>">
        <div class="modal-content">
            <span class="close-btn" id="closeBtn">&times;</span>
            <h1>Thank you</h1>
            <h2>for your subscription!</h2>
        </div>
    </div>
    <!-- The Modal Box for Contact Us======================================================================-->
    <div id="modalContact" class="modal-contact <?php echo $contactUsDone ?>">
        <div class="modal-content-contact">
            <span class="close-btn-contact" id="closeContactBtn">&times;</span>
            <h1>Thanks you for contacting us!</h1>
            <h2>We will answer shortly!</h2>
            <a href="./index.php"><span><i class="fa fa-arrow-circle-o-left contact-arr" aria-hidden="true"></i></span>Back to main page</a>
        </div>
    </div>