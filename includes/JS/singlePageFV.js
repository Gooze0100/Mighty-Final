"use strict"

// Single Page Form Comment Validation ===========================================================
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
            commNameInput.style.border = '1px solid #E91414';
        } else if (commName.length > 26) {
            commNameInputErr.innerHTML = 'Maximum name length must be 26 characters';
            commNameInput.style.border = '1px solid #E91414';
        }   else {
            commNameInputErr.innerHTML = '';
            commNameInput.style.border = '';
        }
    }
    
    // Comment Page Email validation ==========================
    function commEmailValidation() {
        const commEmail = commEmailInput.value;
        if (commEmail.length < 7 && commEmail.length >= 1) {
            commEmailInputErr.innerHTML = 'Minimum name length must be 7 characters';
            commEmailInput.style.border = '1px solid #E91414';
        } else if (commEmail.length > 254) {
            commEmailInputErr.innerHTML = 'Maximum name length must be 254 characters';
            commEmailInput.style.border = '1px solid #E91414';
        }   else {
            commEmailInputErr.innerHTML = '';
            commEmailInput.style.border = '';
        }
    }
    
    // Comment Page Website validation ==========================
    function commWebsiteValidation() {
        const commWebsite = commWebsiteInput.value;
        if (commWebsite.length < 5 && commWebsite.length >= 1) {
            commWebsiteInputErr.innerHTML = 'Minimum name length must be 5 characters';
            commWebsiteInput.style.border = '1px solid #E91414';
        } else if (commWebsite.length > 254) {
            commWebsiteInputErr.innerHTML = 'Maximum name length must be 254 characters';
            commWebsiteInput.style.border = '1px solid #E91414';
        }   else {
            commWebsiteInputErr.innerHTML = '';
            commWebsiteInput.style.border = '';
        }
    }

// Single Page Reply From Validation ===========================================================
    const replyNameInput = document.querySelector('#replyName');
    const replyEmailInput = document.querySelector('#replyEmail');
    const replyNameInputErr = document.querySelector('#replyNameErr');
    const replyEmailInputErr = document.querySelector('#replyEmailErr');
    
    replyNameInput.addEventListener('input', replyNameValidation);
    replyEmailInput.addEventListener('input', replyEmailValidation);
    
    // Comment Page Name validation ==========================
    function replyNameValidation() {
        const commName = replyNameInput.value;
        if (commName.length < 2 && commName.length >= 1) {
            replyNameInputErr.innerHTML = 'Minimum name length must be 2 characters';
            replyNameInput.style.border = '1px solid #E91414';
        } else if (commName.length > 26) {
            replyNameInputErr.innerHTML = 'Maximum name length must be 26 characters';
            replyNameInput.style.border = '1px solid #E91414';
        }   else {
            replyNameInputErr.innerHTML = '';
            replyNameInput.style.border = '';
        }
    }
    
    // Comment Page Email validation ==========================
    function replyEmailValidation() {
        const commEmail = replyEmailInput.value;
        if (commEmail.length < 7 && commEmail.length >= 1) {
            replyEmailInputErr.innerHTML = 'Minimum name length must be 7 characters';
            replyEmailInput.style.border = '1px solid #E91414';
        } else if (commEmail.length > 254) {
            replyEmailInputErr.innerHTML = 'Maximum name length must be 254 characters';
            replyEmailInput.style.border = '1px solid #E91414';
        }   else {
            replyEmailInputErr.innerHTML = '';
            replyEmailInput.style.border = '';
        }
    }