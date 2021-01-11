<?php
function clearInput($input)
{
    $input = htmlspecialchars($input);
    $input = trim($input);
    return $input;
}

$subEmail = '';
$subEmailErr = '';

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // Email validation ====================================================================================
    // pasitikrinti ar reiksme nustatyta ir ar netuscia
    if (empty($_POST['emailSub'])) {
        // tuscia
        $subEmailErr = 'Email field is required!';
        $inputField = 'input-border';
    } else {
        // uzpildyta
        // isvalom reiksme ir issaugom
        $subEmail = clearInput($_POST['emailSub']);
        // patiktinti ar email yra tinkamo formato su sauktuku isverciam reiksme jei email blogas tada patikrinti
        if (!filter_var($subEmail, FILTER_VALIDATE_EMAIL)) {
            $subEmailErr = 'Invalid email address!';
            $inputField = 'input-border';
        }
    }
}
