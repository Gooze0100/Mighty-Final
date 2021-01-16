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

const footerBtn = document.querySelector('#btnModalBox');
const modal = document.querySelector('#modal');
const closeM = document.querySelector('#closeBtn');

// footerBtn.addEventListener('click', openModal);
closeM.addEventListener('click', closeModal);
window.document.addEventListener('click', outsideModal);

function openModal() {
    modal.style.display = 'block';
}

function closeModal() {
    modal.style.display = 'none';
}

function outsideModal(e) {
    if (e.target == modal) {
        modal.style.display = 'none';
    }
}

// Subscription validation ===========================================================
const subEmailInput = document.querySelector('#subEmailInput');
const subEmailInputErr = document.querySelector('#subEmailErr');

subEmailInput.addEventListener('input', subEmailVal);

function subEmailVal () {
    const subEmail = subEmailInput.value;
    if (subEmail.length < 7) {
        subEmailInputErr.innerHTML = 'Minimum email length must be 7 characters';
    }   else if (subEmail.length > 254) {
        subEmailInputErr.innerHTML = 'Maximum email length must be 254 characters';
    }   else {
        subEmailInputErr.innerHTML = '';
    }
}

// Contact Form Validation ===========================================================

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
function firstNameVal () {
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
function lastNameVal () {
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
function emailVal () {
    const emailVal = emailInput.value;
    if (emailVal.length < 7) {
        emailInputErr.innerHTML = 'Minimum email length must be 7 characters';
    } else if (emailVal.length > 254) {
        emailInputErr.innerHTML = 'Maximum email length must be 254 characters';
    }   else {
        emailInputErr.innerHTML = '';
    }
}


// Footer Date ===========================================================
const footerDate = document.getElementById('footer-date');
const now = new Date();
const year = now.getFullYear();
footerDate.innerHTML = (year);


