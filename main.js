"use strict"

const activateSideMenu = document.querySelector('#siteMenuPop');
const closeSideMenu = document.querySelector('#closeSid');
const sideMenu = document.querySelector('.site-mobile-menu');
const offcanvasMenu = document.querySelector('#offcanvas-menu');

activateSideMenu.addEventListener('click', function() {
    offcanvasMenu.style.width = '100%'
    sideMenu.style.width = '300px';
});

closeSideMenu.addEventListener('click', function() {
    sideMenu.style.width = '0px';
});

// offcanvasMenu.addEventListener('click', function() {
//     offcanvasMenu.style.transform = 'translate(110%)'
//     sideMenu.style.width = '0px';
// })






const footerDate = document.getElementById('footer-date');
const now = new Date();
const year = now.getFullYear();
footerDate.innerHTML = (year);


