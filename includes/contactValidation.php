<?php

$contFirstName = $contLastName = $contEmail = $contMessage = '';
$contFirstNameErr = $contLastNameErr = $contEmailErr = $contMessageErr = '';
$contactUsDone = '';
$inputFieldName = $inputFieldSurname = $inputFieldEmail = $contMessage = '';


$name = false;
$surname = false;
$email = false;

if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST['btnContact'])) {

    // First Name validation ====================================================================================
    if (empty($_POST['first-name'])) {
        $contFirstNameErr = 'First name is required!';
        $inputFieldName = 'input-border';
    } else {
        $contFirstName = clearInput($_POST['first-name']);
        if (!preg_match("/^[a-zA-Z-' ]*$/", $contFirstName)) {
            $contFirstNameErr = 'Only alphabetic symbols are allowed!';
            $inputFieldName = 'input-border';
        } else {
            $name = true;
            $inputFieldName = '';
        }
    }

    // Last Name validation ====================================================================================
    if (empty($_POST['last-name'])) {
        $contLastNameErr = 'Last name is required!';
        $inputFieldSurname = 'input-border';
    } else {
        $contLastName = clearInput($_POST['last-name']);
        if (!preg_match("/^[a-zA-Z-' ]*$/", $contLastName)) {
            $contLastNameErr = 'Only alphabetic symbols are allowed!';
            $inputFieldSurname = 'input-border';
        } else {
            $surname = true;
            $inputFieldSurname = '';
        }
    }

    // Email validation ====================================================================================
    if (empty($_POST['email'])) {
        $contEmailErr = 'Email field is required!';
        $inputFieldEmail = 'input-border';
    } else {
        $contEmail = clearInput($_POST['email']);
        if (!filter_var($contEmail, FILTER_VALIDATE_EMAIL)) {
            $contEmailErr = 'Invalid email address!';
            $inputFieldEmail = 'input-border';
        } else {
            $email = true;
            $inputFieldEmail = '';
        }
    }

    // Message validation ====================================================================================
    if (empty($_POST['messageText'])) {
        $contMessage = '';
    } else {
        $contMessage = clearInput($_POST['messageText']);
    }

    // Flags ====================================================================================
    if (($name != false) && ($surname != false) && ($email != false)) {

        $db->insertToContacts($contFirstName, $contLastName, $contEmail, $contMessage);

        unset($_POST);
        $contactUsDone = 'done-contact';
        $contFirstName = $contLastName = $contEmail = $contMessage = '';
    }
}
