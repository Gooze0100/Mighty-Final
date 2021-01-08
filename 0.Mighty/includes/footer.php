<footer id="footer">
    <div class="container">
        <div class="flex align-items-flex-start">
            <div class="footer-first-block padding">
                <h2 class="footer-titles">About Me</h2>
                <p>
                    Far far away, behind the word mountains, far from the countries
                    Vokalia and Consonantia, there live the blind texts.
                </p>
            </div>
            <div class="footer-blocks padding">
                <h2 class="footer-titles">Quick Links</h2>
                <ul class="footer-list">
                    <li><a href="<?php
                                    if ($title === 'Home' || $title === 'About Us') {
                                        echo '#about-us';
                                    } else {
                                        echo '#';
                                    }

                                    ?>
                 ">About Us</a></li>
                    <li><a href="<?php
                                    if ($title === 'Home' || $title === 'Our Works' || $title === 'Foam Sweet Foam') {
                                        echo '#testimonials';
                                    } else {
                                        echo '#';
                                    } ?>">Testimonials</a></li>
                    <li><a href="#">Terms of Service</a></li>
                    <li><a href="#">Privacy</a></li>
                    <li><a href="./contacts.php">Contact Us</a></li>
                </ul>
            </div>
            <div class="footer-blocks padding">
                <div>
                    <h2 class="footer-titles">Connect</h2>
                    <div class="social-icons">
                        <a href="#" class="soc-icon-back"><i class="fa fa-facebook soc-icon" aria-hidden="true"></i></a>
                        <a href="#" class="soc-icon-back"><i class="fa fa-instagram soc-icon" aria-hidden="true"></i></a>
                        <a href="#" class="soc-icon-back"><i class="fa fa-twitter soc-icon" aria-hidden="true"></i></a>
                    </div>
                </div>
                <div class="newsletter-email">
                    <h2 class="footer-titles">Newsletter</h2>
                    <!-- sukurti nauja forma ir iki jos nuvaziuoti issiunciant duomenis -->
                    <form action="foo" class="newsletter-form">
                        <input type="text" class="subscribe" placeholder="Email" />
                        <button type="submit" class="send-btn">Send</button>
                    </form>
                </div>
            </div>
        </div>
        <div class="copyrights">
            <p>
                Copyright &copy;
            <p id="footer-date"></p> All rights
            reserved | This template is made with
            <i class="fa fa-heart heart" aria-hidden="true"></i> by
            <a href="https://colorlib.com/" target="_blank" class="colorlib-link">Colorlib</a>
            </p>
        </div>
    </div>
</footer>