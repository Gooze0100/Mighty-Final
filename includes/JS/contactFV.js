"use strict"

// Contact Page Form Validation ===========================================================
const firstNameInput = document.querySelector('#firstName');
const lastNameInput = document.querySelector('#lastName');
const emailInput = document.querySelector('#email');
const firstNameInputErr = document.querySelector('#fName');
const lastNameInputErr = document.querySelector('#lName');
const emailInputErr = document.querySelector('#emailForm');

firstNameInput.addEventListener('input', firstNameVal);
lastNameInput.addEventListener('input', lastNameVal);
emailInput.addEventListener('input', emailVal);

// First Name validation ==========================
function firstNameVal() {
    const firstNameVal = firstNameInput.value;
    if (firstNameVal.length < 2 && firstNameVal.length >= 1) {
        firstNameInputErr.innerHTML = 'Minimum name length must be 2 characters';
    } else if (firstNameVal.length > 26) {
        firstNameInputErr.innerHTML = 'Maximum name length must be 26 characters';
    }   else {
        firstNameInputErr.innerHTML = '';
    }
}

// Last Name validation ==========================
function lastNameVal() {
    const lastNameVal = lastNameInput.value;
    if (lastNameVal.length < 2 && lastNameVal.length >= 1) {
        lastNameInputErr.innerHTML = 'Minimum surname length must be 2 characters';
    } else if (lastNameVal.length > 26) {
        lastNameInputErr.innerHTML = 'Maximum surname length must be 26 characters';
    }   else {
        lastNameInputErr.innerHTML = '';
    }
}

// Email validation ==========================
function emailVal() {
    const emailVal = emailInput.value;
    if (emailVal.length < 7 && emailVal.length >= 1) {
        emailInputErr.innerHTML = 'Minimum email length must be 7 characters';
    } else if (emailVal.length > 254) {
        emailInputErr.innerHTML = 'Maximum email length must be 254 characters';
    }   else {
        emailInputErr.innerHTML = '';
    }
}