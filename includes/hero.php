<section class="<?php
                if ($title === 'Foam Sweet Foam') {
                    echo 'foam-hero';
                } else if ($title === 'Single Blog') {
                    echo 'single-bgc-fixed hero ';
                } else {
                    echo 'hero';
                }
                ?>">
    <div class="<?php if ($title === 'Single Blog') {
                    echo 'single-main-title';
                } else {
                    echo 'main-text';
                }
                ?>">
        <?php
        if ($title === 'Single Blog') {
            echo '
                <div class="single-page-date">
                <span class="single-blog-hero-date">
                September 11, 2019
                <span class="point">•</span>
                by James Miller
                </span>
                </div>
                ';
        } else {
            echo '';
        };
        echo "<h1 class='main-title'>$heroTitle</h1>";
        if ($title === 'Single Blog') {
            echo '';
        } else {
            echo '
        <p class="main-par">
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Soluta
            veritatis in tenetur doloremque, maiores doloribus officia iste.
            Dolores.
        </p>';
        };
        if ($heroTitle === 'Mighty Web Design Agency') {
            echo '<p class="btn-contact">
            <a href="./contacts.php">Contact Us</a>';
        } else {
            echo '';
        };
        ?>
    </div>
</section>