<?php

$contFirstName = $contLastName = $contEmail = $contMessage = '';
$contFirstNameErr = $contLastNameErr = $contEmailErr = $contMessageErr = '';

// pasirasyti if su tuo kad jei tam tikras button pas pastaustas tada tik kviecia sita forma :)
if ($_SERVER["REQUEST_METHOD"] === "POST") {

    // First Name validation ====================================================================================
    if (empty($_POST['first-name'])) {
        $contFirstNameErr = 'First name is required!';
        $inputField = 'input-border';
    } else {
        $contFirstName = clearInput($_POST['first-name']);
        if (!preg_match("/^[a-zA-Z-' ]*$/", $contFirstName)) {
            $contFirstNameErr = 'Only alphabetic symbols are allowed!';
            $inputField = 'input-border';
        };
    }

    // Last Name validation ====================================================================================
    if (empty($_POST['last-name'])) {
        $contLastNameErr = 'Last name is required!';
        $inputField = 'input-border';
    } else {
        $contLastName = clearInput($_POST['last-name']);
        if (!preg_match("/^[a-zA-Z-' ]*$/", $contLastName)) {
            $contLastNameErr = 'Only alphabetic symbols are allowed!';
            $inputField = 'input-border';
        };
    }

    // Email validation ====================================================================================
    if (empty($_POST['email'])) {
        $contEmailErr = 'Email field is required!';
        $inputField = 'input-border';
    } else {
        $contEmail = clearInput($_POST['email']);
        if (!filter_var($contEmail, FILTER_VALIDATE_EMAIL)) {
            $contEmailErr = 'Invalid email address!';
            $inputField = 'input-border';
        }
    }

    // Message validation ====================================================================================
    if (empty($_POST['messageText'])) {
        // ji nera privaloma tai paliekame ir tuscia
        // min symbols 3
        $contMessage = '';
    } else {
        $contMessage = clearInput($_POST['messageText']);
    }
}
