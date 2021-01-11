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

// Footer Subscription ===========================================================

const footerBtn = document.querySelector('#btnModalBox');
const modalBox = document.querySelector('#modalAll');
const closeModalBox = document.querySelector('#close-modal-box');
// const closeModalBoxBack = document.querySelector()

footerBtn.addEventListener('click', function() {
    modalBox.style.display = 'block';
});

closeModalBox.addEventListener('click', function() {
    modalBox.style.display = 'none';
})

modalBox.addEventListener('click', function() {
    modalBox.style.display = 'none';
})


//  ===========================================================




// Footer Date ===========================================================
const footerDate = document.getElementById('footer-date');
const now = new Date();
const year = now.getFullYear();
footerDate.innerHTML = (year);


