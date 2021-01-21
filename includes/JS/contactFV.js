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
        firstNameInput.style.border = '1px solid #E91414';
    } else if (firstNameVal.length > 26) {
        firstNameInputErr.innerHTML = 'Maximum name length must be 26 characters';
        firstNameInput.style.border = '1px solid #E91414';
    }   else {
        firstNameInputErr.innerHTML = '';
        firstNameInput.style.border = '';
    }
}

// Last Name validation ==========================
function lastNameVal() {
    const lastNameVal = lastNameInput.value;
    if (lastNameVal.length < 2 && lastNameVal.length >= 1) {
        lastNameInputErr.innerHTML = 'Minimum surname length must be 2 characters';
        lastNameInput.style.border = '1px solid #E91414';
    } else if (lastNameVal.length > 26) {
        lastNameInputErr.innerHTML = 'Maximum surname length must be 26 characters';
        lastNameInput.style.border = '1px solid #E91414';
    }   else {
        lastNameInputErr.innerHTML = '';
        lastNameInput.style.border = '';
    }
}

// Email validation ==========================
function emailVal() {
    const emailVal = emailInput.value;
    if (emailVal.length < 7 && emailVal.length >= 1) {
        emailInputErr.innerHTML = 'Minimum email length must be 7 characters';
        emailInput.style.border = '1px solid #E91414';
    } else if (emailVal.length > 254) {
        emailInputErr.innerHTML = 'Maximum email length must be 254 characters';
        emailInput.style.border = '1px solid #E91414';
    }   else {
        emailInputErr.innerHTML = '';
        emailInput.style.border = '';
    }
}