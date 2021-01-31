<?php

$commNameReply = $commEmailReply = $commMessageReply = '';
$commNameErrReply = $commEmailErrReply = '';
$inputNameReply = $inputEmailReply = $commentsDoneReply = '';

$replyName = false;
$replyEmail = false;

if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST['replyBtn'])) {
    $commentsDoneReply = 'done-comments-reply';
}

if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST['btnCommentsReply'])) {
    $commentsDoneReply = 'done-comments-reply';
    // Name validation ====================================================================================
    if (empty($_POST['replyFullName'])) {
        $commNameErrReply = 'Name is required!';
        $inputNameReply = 'input-border';
    } else {
        $commNameReply = clearInput($_POST['replyFullName']);
        if (!preg_match("/^[a-zA-Z-' ]*$/", $commNameReply)) {
            $commNameErrReply = 'Only alphabetic symbols are allowed!';
            $inputNameReply = 'input-border';
        } else {
            $replyName = true;
        }
    }

    // Email validation ====================================================================================
    if (empty($_POST['replyEmail'])) {
        $commEmailErrReply = 'Email field is required!';
        $inputEmailReply = 'input-border';
    } else {
        $commEmailReply = clearInput($_POST['replyEmail']);
        if (!filter_var($commEmailReply, FILTER_VALIDATE_EMAIL)) {
            $commEmailErrReply = 'Invalid email address!';
            $inputEmailReply = 'input-border';
        } else {
            $replyEmail = true;
        }
    }

    // Message validation ====================================================================================
    if (empty($_POST['replyMessage'])) {
        $commMessageReply = '';
    } else {
        $commMessageReply = clearInput($_POST['replyMessage']);
    }

    // Flags ====================================================================================
    if (($replyName != false) && ($replyEmail != false)) {

        $db->insertReplyToDB($commNameReply, $_GET['id'], $_GET['replyId'], $commEmailReply, $commMessageReply);

        unset($_POST);
        $commNameReply = $commEmailReply = $commMessageReply = $commentsDoneReply = '';
        header('Location: single.php#all-comments');
    }
}
