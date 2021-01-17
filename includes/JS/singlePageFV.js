"use strict"

// Single Page Form Validation ===========================================================
    const commNameInput = document.querySelector('#commName');
    const commEmailInput = document.querySelector('#commEmail');
    const commWebsiteInput = document.querySelector('#commWebsite');
    const commNameInputErr = document.querySelector('#commNameErr');
    const commEmailInputErr = document.querySelector('#commEmailErr');
    const commWebsiteInputErr = document.querySelector('#commWebsiteErr');
    
    commNameInput.addEventListener('input', commNameValidation);
    commEmailInput.addEventListener('input', commEmailValidation);
    commWebsiteInput.addEventListener('input', commWebsiteValidation);
    
    // Comment Page Name validation ==========================
    function commNameValidation() {
        const commName = commNameInput.value;
        if (commName.length < 2 && commName.length >= 1) {
            commNameInputErr.innerHTML = 'Minimum name length must be 2 characters';
        } else if (commName.length > 26) {
            commNameInputErr.innerHTML = 'Maximum name length must be 26 characters';
        }   else {
            commNameInputErr.innerHTML = '';
        }
    }
    
    // Comment Page Email validation ==========================
    function commEmailValidation() {
        const commEmail = commEmailInput.value;
        if (commEmail.length < 7 && commEmail.length >= 1) {
            commEmailInputErr.innerHTML = 'Minimum name length must be 7 characters';
        } else if (commEmail.length > 254) {
            commEmailInputErr.innerHTML = 'Maximum name length must be 254 characters';
        }   else {
            commEmailInputErr.innerHTML = '';
        }
    }
    
    // Comment Page Website validation ==========================
    function commWebsiteValidation() {
        const commWebsite = commWebsiteInput.value;
        if (commWebsite.length < 5 && commWebsite.length >= 1) {
            commWebsiteInputErr.innerHTML = 'Minimum name length must be 5 characters';
        } else if (commWebsite.length > 254) {
            commWebsiteInputErr.innerHTML = 'Maximum name length must be 254 characters';
        }   else {
            commWebsiteInputErr.innerHTML = '';
        }
    }