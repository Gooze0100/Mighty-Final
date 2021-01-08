<?php
// <!-- Title ===============================================-->
$title = 'Home';
// <!-- Hero-Title ===============================================-->
$heroTitle = 'Mighty Web Design Agency';
// <!-- Head ===============================================-->
require('./includes/head.php');
// <!-- Navigation ===============================================-->
require('./includes/navigation.php');
// <!-- Hero section ===============================================-->
require('./includes/hero.php');
?>
<!-- About us and expertize/skills section ===============================================-->
<section class="padding-for-all-section" id="about-us">
    <div class="container">
        <div class="flex">
            <div class="padding flex-33 about-us-block">
                <h2 class="about-skills-title">About Us</h2>
                <p class="about-us-par">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Beatae
                    voluptatem mollitia obcaecati quod maxime. Soluta libero eligendi
                    voluptatum, natus debitis.
                </p>
                <p class="about-us-par">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rerum,
                    quasi!
                </p>
                <p class="about-us-btn">
                    <a href="#our-works">Our works</a>
                </p>
            </div>
            <div class="padding flex-33">
                <img src="./images/about_1.jpg" alt="Oops no image found!" />
            </div>
            <div class="expertize-block padding">
                <h2 class="about-skills-title">Our expertise and skills</h2>
                <div class="skills-part">
                    <div class="skills-part-flex">
                        <div>Writing</div>
                        <div>55%</div>
                    </div>
                    <div class="progress-bar">
                        <div class="progress1">
                        </div>
                    </div>
                </div>
                <div class="skills-part">
                    <div class="skills-part-flex">
                        <div>WordPress</div>
                        <div>85%</div>
                    </div>
                    <div class="progress-bar">
                        <div class="progress2">
                        </div>
                    </div>
                </div>
                <div class="skills-part">
                    <div class="skills-part-flex">
                        <div>Bootstrap</div>
                        <div>93%</div>
                    </div>
                    <div class="progress-bar">
                        <div class="progress3">
                        </div>
                    </div>
                </div>
                <div class="skills-part">
                    <div class="skills-part-flex">
                        <div>jQuery</div>
                        <div>83%</div>
                    </div>
                    <div class="progress-bar">
                        <div class="progress4">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Our services section ===============================================-->
<section class="our-services padding-for-all-section">
    <div class="container">
        <div>
            <h2 class="block-titles">Our Services</h2>
        </div>
        <div class="flex margin-from-title">
            <div class="our-services-block">
                <div class="our-services-block-icon">
                    <i class="fa fa-desktop" aria-hidden="true"></i>
                </div>
                <h3 class="our-services-block-title">Web Design</h3>
                <p class="our-services-block-par">
                    Lorem ipsum dolor sit amet. Consectetur adipisicing elit Eaque
                    commodi.
                </p>
            </div>
            <div class="our-services-block">
                <div class="our-services-block-icon">
                    <i class="fa fa-desktop" aria-hidden="true"></i>
                </div>
                <h3 class="our-services-block-title">Graphic Design</h3>
                <p class="our-services-block-par">
                    Lorem ipsum dolor sit amet. Consectetur adipisicing elit Eaque
                    commodi.
                </p>
            </div>
            <div class="our-services-block">
                <div class="our-services-block-icon">
                    <i class="fa fa-desktop" aria-hidden="true"></i>
                </div>
                <h3 class="our-services-block-title">Web Apps</h3>
                <p class="our-services-block-par">
                    Lorem ipsum dolor sit amet. Consectetur adipisicing elit Eaque
                    commodi.
                </p>
            </div>
            <div class="our-services-block">
                <div class="our-services-block-icon">
                    <i class="fa fa-desktop" aria-hidden="true"></i>
                </div>
                <h3 class="our-services-block-title">Ecommerce</h3>
                <p class="our-services-block-par">
                    Lorem ipsum dolor sit amet. Consectetur adipisicing elit Eaque
                    commodi.
                </p>
            </div>
        </div>
    </div>
</section>
<!-- Our works section ===============================================-->
<section class="our-works" id="our-works">
    <div class="container">
        <div class="padding-for-all-section">
            <div>
                <h2 class="block-titles">Our Works</h2>
            </div>
            <div class="flex">
                <div class="our-work-image">
                    <a href="./foam.php">
                        <span class="plus-icon"><i class="fa fa-plus" aria-hidden="true"></i></span>
                        <img src="./images/img_1.jpg" alt="Oops something went wrong!" class="our-works-img" />
                    </a>
                </div>
                <div class="our-work-image">
                    <a href="./foam.php">
                        <span class="plus-icon"><i class="fa fa-plus" aria-hidden="true"></i></span>
                        <img src="./images/img_2.jpg" alt="Oops something went wrong!" class="our-works-img" />
                    </a>
                </div>
                <div class="our-work-image">
                    <a href="./foam.php">
                        <span class="plus-icon"><i class="fa fa-plus" aria-hidden="true"></i></span>
                        <img src="./images/img_3.jpg" alt="Oops something went wrong!" class="our-works-img" />
                    </a>
                </div>
                <div class="our-work-image">
                    <a href="./foam.php">
                        <span class="plus-icon"><i class="fa fa-plus" aria-hidden="true"></i></span>
                        <img src="./images/img_4.jpg" alt="Oops something went wrong!" class="our-works-img" />
                    </a>
                </div>
                <div class="our-work-image">
                    <a href="./foam.php">
                        <span class="plus-icon"><i class="fa fa-plus" aria-hidden="true"></i></span>
                        <img src="./images/img_5.jpg" alt="Oops something went wrong!" class="our-works-img" />
                    </a>
                </div>
                <div class="our-work-image">
                    <a href="./foam.php">
                        <span class="plus-icon"><i class="fa fa-plus" aria-hidden="true"></i></span>
                        <img src="./images/img_6.jpg" alt="Oops something went wrong!" class="our-works-img" />
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Information about services and happy clients section ===============================================-->
<section class="information-about-services padding-for-all-section">
    <div class="container">
        <div class="flex">
            <div class="information-about-services-block">
                <div class="first-icons">
                    <i class="fa fa-smile-o" aria-hidden="true"></i>
                </div>
                <div class="text">
                    <div class="information-text">83</div>
                    <div class="information-text">Happy Clients</div>
                </div>
            </div>
            <div class="information-about-services-block">
                <div class="first-icons">
                    <i class="fa fa-coffee" aria-hidden="true"></i>
                </div>
                <div class="text">
                    <div class="information-text">3892</div>
                    <div class="information-text">Cup of Coffee</div>
                </div>
            </div>
            <div class="information-about-services-block">
                <div class="first-icons">
                    <i class="fa fa-code" aria-hidden="true"></i>
                </div>
                <div class="text">
                    <div class="information-text">3,923,892</div>
                    <div class="information-text">Line of Codes</div>
                </div>
            </div>
            <div class="information-about-services-block">
                <div class="first-icons">
                    <i class="fa fa-desktop" aria-hidden="true"></i>
                </div>
                <div class="text">
                    <div class="information-text">3892</div>
                    <div class="information-text">Project Finish</div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- See our studio section ===============================================-->
<section class="padding-for-all-section">
    <div class="container">
        <div>
            <h2 class="block-titles">See Our Studio</h2>
        </div>
        <div class="flex video-block margin-from-title">
            <div class="video-back">
                <a class="js-video-button video-link" data-video-id="191947042" data-channel="vimeo">
                    <div>
                        <div class="video-icon">
                            <i class="fa fa-play" aria-hidden="true"></i>
                        </div>
                        <img src="./images/img_1.jpg" alt="Oops no image found!" />
                    </div>
                </a>
            </div>
        </div>
    </div>
</section>
<!-- Testimonials section ===============================================-->
<section class="testimonials padding-for-all-section" id="testimonials">
    <div class="container">
        <div>
            <h2 class="block-titles">Testimonials</h2>
        </div>
        <div class="flex testimonial-blocks margin-from-title">
            <div class="testimonial-block">
                <div>
                    <img src="./images/person_1.jpg" alt="Persons photo not found!" class="author-img" />
                </div>
                <blockquote>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                        Voluptas excepturi accusantium non aut perspiciatis nisi magni
                        libero, molestias.
                    </p>
                </blockquote>
                <p class="author">— Chris Smith</p>
            </div>
            <div class="testimonial-block">
                <div>
                    <img src="./images/person_2.jpg" alt="Persons photo not found!" class="author-img" />
                </div>
                <blockquote>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                        Voluptas excepturi accusantium non aut perspiciatis nisi magni
                        libero, molestias.
                    </p>
                </blockquote>
                <p class="author">— Chris Smith</p>
            </div>
            <div class="testimonial-block">
                <div>
                    <img src="./images/person_3.jpg" alt="Persons photo not found!" class="author-img" />
                </div>
                <blockquote>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                        Voluptas excepturi accusantium non aut perspiciatis nisi magni
                        libero, molestias.
                    </p>
                </blockquote>
                <p class="author">— Chris Smith</p>
            </div>
        </div>
    </div>
</section>
<!-- Blog section ===============================================-->
<section class="padding-for-all-section">
    <div class="container">
        <div>
            <h2 class="block-titles">Blog</h2>
        </div>
        <div class="flex margin-from-title">
            <div class="blog-block padding">
                <a href="./single.php">
                    <img src="./images/img_1.jpg" alt="Oops image not found!" class="blog-img" />
                </a>
                <div class="text-under-image">
                    <h2>
                        <a href="./single.php" class="text-black">Lorem ipsum dolor sit amet</a>
                    </h2>
                    <div class="uploaded">
                        <div>July 17, 2019</div>
                        <div class="by-who">by</div>
                        <a href="#">Admin</a>
                    </div>
                    <p class="blog-txt">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                        Dolores eos soluta, dolore harum molestias consectetur.
                    </p>
                </div>
            </div>
            <div class="blog-block padding">
                <a href="./single.php">
                    <img src="./images/img_2.jpg" alt="Oops image not found!" class="blog-img" />
                </a>
                <div class="text-under-image">
                    <h2>
                        <a href="./single.php" class="text-black">Lorem ipsum dolor sit amet</a>
                    </h2>
                    <div class="uploaded">
                        <div>July 17, 2019</div>
                        <div class="by-who">by</div>
                        <a href="#">Admin</a>
                    </div>
                    <p class="blog-txt">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                        Dolores eos soluta, dolore harum molestias consectetur.
                    </p>
                </div>
            </div>
            <div class="blog-block padding">
                <a href="./single.php">
                    <img src="./images/img_3.jpg" alt="Oops image not found!" class="blog-img" />
                </a>
                <div class="text-under-image">
                    <h2>
                        <a href="./single.php" class="text-black">Lorem ipsum dolor sit amet</a>
                    </h2>
                    <div class="uploaded">
                        <div>July 17, 2019</div>
                        <div class="by-who">by</div>
                        <a href="#">Admin</a>
                    </div>
                    <p class="blog-txt">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                        Dolores eos soluta, dolore harum molestias consectetur.
                    </p>
                </div>
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