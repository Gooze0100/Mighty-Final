<?php

function clearInput($input)
{
    $input = htmlspecialchars($input);
    $input = trim($input);
    return $input;
}

$inputFieldSub = '';

$subEmail = '';
$subEmailErr = '';
$done = '';

if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST['btnSub'])) {
    // Email validation for subscription form ====================================================================================
    if (empty($_POST['emailSub'])) {
        $subEmailErr = 'Email field is required!';
        $inputFieldSub = 'input-border';
    } else {
        $subEmail = clearInput($_POST['emailSub']);
        if (!filter_var($subEmail, FILTER_VALIDATE_EMAIL)) {
            $subEmailErr = 'Invalid email address!';
            $inputFieldSub = 'input-border';
        } else {
            $subEmail = '';
            $inputFieldSub = '';
            $done = 'done';
        }
    }
}
