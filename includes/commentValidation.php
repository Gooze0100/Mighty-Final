<?php

$commName = $commEmail = $commWebsite = $commMessage = '';
$commNameErr = $commEmailErr = $commWebsiteErr = '';
$inputFieldName = $inputFieldEmail = $inputFieldWebsite = $commentsDone = '';

$commentsName = false;
$commentsEmail = false;
$commentsWebsite = false;


if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST['btnComments'])) {

    // Name validation ====================================================================================
    if (empty($_POST['commFullName'])) {
        $commNameErr = 'Name is required!';
        $inputFieldName = 'input-border';
    } else {
        $commName = clearInput($_POST['commFullName']);
        if (!preg_match("/^[a-zA-Z-' ]*$/", $commName)) {
            $commNameErr = 'Only alphabetic symbols are allowed!';
            $inputFieldName = 'input-border';
        } else {
            $commentsName = true;
        }
    }

    // Email validation ====================================================================================
    if (empty($_POST['commEmail'])) {
        $commEmailErr = 'Email field is required!';
        $inputFieldEmail = 'input-border';
    } else {
        $commEmail = clearInput($_POST['commEmail']);
        if (!filter_var($commEmail, FILTER_VALIDATE_EMAIL)) {
            $commEmailErr = 'Invalid email address!';
            $inputFieldEmail = 'input-border';
        } else {
            $commentsEmail = true;
        }
    }

    // Website validation ====================================================================================
    if (empty($_POST['commWebsite'])) {
        // $commWebsite = '';
        $commentsWebsite = true;
    } else {
        $commWebsite = clearInput($_POST['commWebsite']);
        if (!preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i", $commWebsite)) {
            $commWebsiteErr = 'Invalid website address!';
            $inputFieldWebsite = 'input-border';
        } else {
            $commentsWebsite = true;
        }
    }

    // Message validation ====================================================================================
    if (empty($_POST['commMessage'])) {
        $commMessage = '';
    } else {
        $commMessage = clearInput($_POST['commMessage']);
    }

    // Flags ====================================================================================
    if (($commentsName != false) && ($commentsEmail != false) && ($commentsWebsite != false)) {

        $db->insertToDB($commName, $commEmail, $commWebsite, $commMessage);

        unset($_POST);
        header('Location: single.php#all-comments');
        $commName = $commEmail = $commWebsite = $commMessage = '';
    }
}
