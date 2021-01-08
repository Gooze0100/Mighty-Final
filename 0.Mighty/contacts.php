<?php
// <!-- Title ===============================================-->
$title = 'Contacts';
// <!-- Hero-Title ===============================================-->
$heroTitle = 'Contact Us';
// <!-- Head ===============================================-->
require('./includes/head.php');
// <!-- Navigation ===============================================-->
require('./includes/navigation.php');
// <!-- Hero section ===============================================-->
require('./includes/hero.php');
?>
<!-- Contact section - form =============================================== -->
<section class="padding-for-all-section">
    <div class="container">
        <div class="flex-align">
            <div class="contact-first-block padding">
                <form action="./contact_info.php" method="POST">
                    <div class="first-row">
                        <div class="first-name row">
                            <input type="text" placeholder="First Name" id="first-name" class="form-control" name="first-name" />
                        </div>
                        <div class="last-name row">
                            <input type="text" placeholder="Last Name" id="last-name" class="form-control" name="last-name" />
                        </div>
                    </div>
                    <div class="email row">
                        <input type="text" placeholder="Email address" id="email" class="form-control" name="email" />
                    </div>
                    <div class="message row">
                        <textarea name="text" id="" cols="30" rows="10" class="form-message" placeholder="Write your message."></textarea>
                    </div>
                    <div class="btn-send-contacts">
                        <input type="submit" value="Send Message" class="send-message-btn" />
                    </div>
            </div>
            </form>
            <div class="contacts-second-block">
                <h3>Contact Info</h3>
                <ul class="contact-info">
                    <li class="contact-info-block">
                        <span class="contact-titles">Address:</span>
                        <span>34 Street Name, City Name Here, United States</span>
                    </li>
                    <li class="contact-info-block">
                        <span class="contact-titles">Phone:</span>
                        <span><a href="tel:+12424942290">+1 242 4942 290</a></span>
                    </li>
                    <li class="contact-info-block">
                        <span class="contact-titles">Email:</span>
                        <span><a href="mailto:info@yourdomain.com?subject=Regarding Mighty.">info@yourdomain.com</a></span>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</section>
<?php
// <!-- Footer section =============================================== -->
require('./includes/footer.php');
// <!-- Javascript links and End tags =============================================== -->
require('./includes/javascript.php')
?>