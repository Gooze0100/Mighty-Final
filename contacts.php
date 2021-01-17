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
// <!-- Contacts page validation ===============================================-->
require('./includes/contactValidation.php');
?>
<!-- Contact section - form =============================================== -->
<section class="padding-for-all-section" id="succ-sections">
    <div class="container">
        <div class="flex-align">
            <div class="contact-first-block padding">
                <form action="#succ-sections" method="POST">
                    <div class="first-row">
                        <div class="first-name row">
                            <input type="text" placeholder="First Name" id="firstName" class="form-control <?php echo $inputFieldName ?>" name="first-name" value="<?php echo $contFirstName ?>" />
                            <div class="input-error-cont" id="fName"><?php echo $contFirstNameErr ?></div>
                        </div>
                        <div class="last-name row">
                            <input type="text" placeholder="Last Name" id="lastName" class="form-control <?php echo $inputFieldSurname ?>" name="last-name" value="<?php echo $contLastName ?>" />
                            <div class="input-error-cont" id="lName"><?php echo $contLastNameErr ?></div>
                        </div>
                    </div>
                    <div class="email row">
                        <input type="text" placeholder="Email address" id="email" class="form-control <?php echo $inputFieldEmail ?>" name="email" value="<?php echo $contEmail ?>" />
                        <div class="input-error-cont" id="emailForm"><?php echo $contEmailErr ?></div>
                    </div>
                    <div class="message row">
                        <textarea name="messageText" id="" cols="30" rows="10" class="form-message" placeholder="Write your message."><?php echo $contMessage ?></textarea>
                    </div>
                    <div class="btn-send-contacts">
                        <input type="submit" value="Send Message" name="btnContact" class="send-message-btn" />
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