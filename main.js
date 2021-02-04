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
// Single Page / Reply / Modal box ===========================================================

const modalCommentsReply = document.querySelector('#modalCommentsReply');
const modalCloseCommentsReply = document.querySelector('#closeCommentsBtnReply');

modalCloseCommentsReply.addEventListener('click', closeReply);
// window.addEventListener('click', closeReplyOutside)

function closeReply() {
    modalCommentsReply.style.display = 'none';
}

// Function to close reply modal box if clicked outside
// function closeReplyOutside(e) {
//     if (e.target == modalCommentsReply) {
//         modalCommentsReply.style.display = 'none';
//     }
// }

// Subscription validation ===========================================================
const subEmailInput = document.querySelector('#subEmailInput');
const subEmailInputErr = document.querySelector('#subEmailErr');

subEmailInput.addEventListener('input', subEmailVal);

function subEmailVal() {
    const subEmail = subEmailInput.value;
    if (subEmail.length < 7 && subEmail.length >= 1) {
        subEmailInputErr.innerHTML = 'Minimum email length must be 7 characters';
        subEmailInput.style.border = '1px solid #E91414';
    }   else if (subEmail.length > 254) {
        subEmailInputErr.innerHTML = 'Maximum email length must be 254 characters';
        subEmailInput.style.border = '1px solid #E91414';
    }   else {
        subEmailInputErr.innerHTML = '';
        subEmailInput.style.border = '';
    }
}

// Footer Date ===========================================================
const footerDate = document.getElementById('footer-date');
const now = new Date();
const year = now.getFullYear();
footerDate.innerHTML = (year);


