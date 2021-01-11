<?php
// <!-- Subscription page section ===============================================-->
require('./includes/emailSub.php');
// <!-- Contacts page validation ===============================================-->
require('./includes/contactValidation.php');
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
    <!-- The Modal Box======================================================================-->
    <div class="modal-all" id="modalAll">
        <div id="modalBoxAll" class="modal-box-txt">
            <!-- Modal content======================================================================-->
            <div class="modal-box-content">
                <div class="modal-left">
                    <i class="fa fa-times" id="close-modal-box" aria-hidden="true"></i>
                </div>
                <h1>Thank you</h1>
                <h2>for your subscription!</h2>
                <i class="fa fa-thumbs-o-up" id="bigger-icon" aria-hidden="true"></i>
            </div>
        </div>
    </div>