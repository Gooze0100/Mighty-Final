<header class="site-mobile-menu">
    <div class="site-mobile-header">
        <div class="site-mobile-close">
            <i class="fa fa-times" aria-hidden="true" id="closeSid"></i>
        </div>
    </div>
    <nav class="nav-menu">
        <ul class="site-nav-wrap">
            <li><a class="nav-link <?php if ($title === 'Home') echo 'activate' ?>" href="./index.php">Home</a></li>
            <li><a class="nav-link <?php if ($title === 'About Us') echo 'activate' ?>" href="./about.php">About</a></li>
            <li><a class="nav-link <?php if ($title === 'Our Works' || $title === 'Foam Sweet Foam') echo 'activate' ?>" href="./works.php">Work</a></li>
            <li><a class="nav-link <?php if ($title === 'Journal' || $title === 'Single Blog') echo 'activate' ?>" href="./journal.php">Journal</a></li>
            <li><a class="nav-link <?php if ($title === 'Contacts' || $title === 'Success!') echo 'activate' ?>" href="./contacts.php">Contact</a></li>
        </ul>
    </nav>
</header>
<section>
    <div class="container">
        <div class="fixed">
            <div class="start flex">
                <a href="./index.php">Mighty.</a>
                <i id="siteMenuPop" class="fa fa-bars" aria-hidden="true"></i>
            </div>
        </div>
    </div>
</section>