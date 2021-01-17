"use strict"

// Menu ===========================================================
const activateSideMenu = document.querySelector('#siteMenuPop');
const closeSideMenu = document.querySelector('#closeSid');
const sideMenu = document.querySelector('.site-mobile-menu');
const offcanvasMenu = document.querySelector('#offcanvas-menu');

activateSideMenu.addEventListener('click', function() {
    sideMenu.classList.add('sticky');
    offcanvasMenu.style.width = '100%';
});

closeSideMenu.addEventListener('click', function() {
    sideMenu.classList.remove('sticky');
    offcanvasMenu.style.width = '0%';
});

offcanvasMenu.addEventListener('click', function() {
    sideMenu.classList.remove('sticky');
    offcanvasMenu.style.width = '0%';
});

// Footer Subscription / Modal box ===========================================================
// const footerBtn = document.querySelector('#btnModalBox');
const modal = document.querySelector('#modal');
const closeM = document.querySelector('#closeBtn');

closeM.addEventListener('click', closeModal);
window.document.addEventListener('click', outsideModal);

function closeModal() {
    modal.style.display = 'none';
}

function outsideModal(e) {
    if (e.target == modal) {
        modal.style.display = 'none';
    }
}

if (modal.classList.contains('done')) {
    setTimeout(closeModal, 3000)
}

// Contact Us / Modal box ===========================================================
const modalContactUs = document.querySelector('#modalContact');
const modalCloseContactUs = document.querySelector('#closeContactBtn');

modalCloseContactUs.addEventListener('click', closeContactUs);
window.addEventListener('click', closeContactOutside)

function closeContactUs() {
    modalContactUs.style.display = 'none';
}

function closeContactOutside(e) {
    if (e.target == modalContact) {
        modalContactUs.style.display = 'none';
    }
}

if (modalContactUs.classList.contains('done-contact')) {
    setTimeout(closeContactUs, 4000)
}

// Subscription validation ===========================================================
const subEmailInput = document.querySelector('#subEmailInput');
const subEmailInputErr = document.querySelector('#subEmailErr');

subEmailInput.addEventListener('input', subEmailVal);

function subEmailVal() {
    const subEmail = subEmailInput.value;
    if (subEmail.length < 7) {
        subEmailInputErr.innerHTML = 'Minimum email length must be 7 characters';
    }   else if (subEmail.length > 254) {
        subEmailInputErr.innerHTML = 'Maximum email length must be 254 characters';
    }   else {
        subEmailInputErr.innerHTML = '';
    }
}

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
    if (firstNameVal.length < 2) {
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
    if (lastNameVal.length < 2) {
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
    if (emailVal.length < 7) {
        emailInputErr.innerHTML = 'Minimum email length must be 7 characters';
    } else if (emailVal.length > 254) {
        emailInputErr.innerHTML = 'Maximum email length must be 254 characters';
    }   else {
        emailInputErr.innerHTML = '';
    }
}

// Single Page Form Validation ===========================================================
// padaryti atsikiruose psl viso php kad nekrautu sita tipo if title yra toks tada tik ji uzkrauti :(
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
    if (commName.length < 2) {
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
    if (commEmail.length < 2) {
        commEmailInputErr.innerHTML = 'Minimum name length must be 7 characters';
    } else if (commEmail.length > 26) {
        commEmailInputErr.innerHTML = 'Maximum name length must be 254 characters';
    }   else {
        commEmailInputErr.innerHTML = '';
    }
}

// Comment Page Website validation ==========================
function commWebsiteValidation() {
    const commWebsite = commWebsiteInput.value;
    if (commWebsite.length < 2) {
        commWebsiteInputErr.innerHTML = 'Minimum name length must be 5 characters';
    } else if (commWebsite.length > 26) {
        commWebsiteInputErr.innerHTML = 'Maximum name length must be 254 characters';
    }   else {
        commWebsiteInputErr.innerHTML = '';
    }
}





// Footer Date ===========================================================
const footerDate = document.getElementById('footer-date');
const now = new Date();
const year = now.getFullYear();
footerDate.innerHTML = (year);


