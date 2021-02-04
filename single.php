<?php
// <!-- Title ===============================================-->
$title = 'Single Blog';
// <!-- Hero-Title ===============================================-->
$heroTitle = 'Single Blog/Event Posts Title';
// <!-- Head ===============================================-->
require('./includes/head.php');
// <!-- Navigation ===============================================-->
require('./includes/navigation.php');
// <!-- Hero section ===============================================-->
require('./includes/hero.php');
// <!-- Get all Comments ===============================================-->
$getDataFromCommentsDB = $db->getComments();
// <!-- Get all Replies ===============================================-->
$getDataFromRepliesDB = $db->getReplies();
?>
<!-- Main section ===============================================-->
<section class="single-blocks padding-for-all-section">
    <div class="container">
        <div class="flex align-items-flex-start">
            <section class="first-single-block padding">
                <div class="single-block-txt">
                    <p class="lead">
                        Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.
                    </p>
                    <p class="single-par-txt">
                        A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.
                    </p>
                    <p class="single-par-txt">
                        Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life One day however a small line of blind text by the name of Lorem Ipsum decided to leave for the far World of Grammar.
                    </p>
                    <p class="single-par-txt">
                        The Big Oxmox advised her not to do so, because there were thousands of bad Commas, wild Question Marks and devious Semikoli, but the Little Blind Text didn’t listen. She packed her seven versalia, put her initial into the belt and made herself on the way.
                    </p>
                    <p class="single-par-txt">
                        When she reached the first hills of the Italic Mountains, she had a last view back on the skyline of her hometown Bookmarksgrove, the headline of Alphabet Village and the subline of her own road, the Line Lane. Pityful a rethoric question ran over her cheek, then she continued her way.
                    </p>
                    <p class="single-par-txt">
                        A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.
                    </p>
                    <p class="single-par-txt">
                        Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life One day however a small line of blind text by the name of Lorem Ipsum decided to leave for the far World of Grammar.
                    </p>
                    <p class="single-par-txt">
                        The Big Oxmox advised her not to do so, because there were thousands of bad Commas, wild Question Marks and devious Semikoli, but the Little Blind Text didn’t listen. She packed her seven versalia, put her initial into the belt and made herself on the way.
                    </p>
                    <p class="single-par-txt">
                        When she reached the first hills of the Italic Mountains, she had a last view back on the skyline of her hometown Bookmarksgrove, the headline of Alphabet Village and the subline of her own road, the Line Lane. Pityful a rethoric question ran over her cheek, then she continued her way.
                    </p>
                </div>
                <div class="categories">
                    <p>
                        Categories:
                        <a href="#">Design</a>,
                        <a href="#">Events</a>
                        Tags:
                        <a href="#">#html</a>,
                        <a href="#">#trends</a>
                    </p>
                </div>
                <div class="comments-block" id="all-comments">
                    <!-- padaryti kad skaiciuotu komentarus -->
                    <h3 class="comments-block-title"><?php $db->numRows(); ?> Comments</h3>
                    <ul class="comment-lists">
                        <!-- The start of comments foreach============================================================================================== -->
                        <?php if (($getDataFromCommentsDB) > 0) {
                            foreach ($getDataFromCommentsDB as $comment) : ?>
                                <li class="comment-list">
                                    <div class="vcard">
                                        <img src="./images/person_4.jpg" alt="Ooops no image found!">
                                    </div>
                                    <div class="comment-body">
                                        <h3 class="comment-author"><?php echo $comment['name']; ?></h3>
                                        <div class="meta"><?php $date = DateTime::createFromFormat('Y-m-j G:i:s', $comment['date']);
                                                            echo date_format($date, "F j, Y");
                                                            echo ' AT ';
                                                            echo date_format($date, "g:i A");
                                                            ?></div>
                                        <p>
                                            <?php echo $comment['message']; ?>
                                        </p>
                                        <p>
                                        <form action="single.php?id=<?php echo $comment['id'] ?>" method="POST">
                                            <button class="reply-btn" type="submit" name="replyBtn">Reply</button>
                                        </form>
                                        </p>
                                    </div>
                                </li>
                                <!-- The start of replies foreach==============================================================================================-->
                                <?php
                                if (($getDataFromRepliesDB) > 0) {
                                    foreach ($getDataFromRepliesDB as $reply) :
                                        if ($comment['id'] === $reply['comment_id']) :
                                ?>
                                            <li class="comment-list children1">
                                                <div class="vcard">
                                                    <img src="./images/person_3.jpg" alt="Ooops no image found!">
                                                </div>
                                                <div class="comment-body">
                                                    <h3 class="comment-author"><?php echo $reply['name']; ?></h3>
                                                    <div class="meta"><?php $date = DateTime::createFromFormat('Y-m-j G:i:s', $reply['date']);
                                                                        echo date_format($date, "F j, Y");
                                                                        echo ' AT ';
                                                                        echo date_format($date, "g:i A");
                                                                        ?></div>
                                                    <p>
                                                        <?php echo $reply['message']; ?>
                                                    </p>
                                                    <p>
                                                    <form action="single.php?replyId=<?php echo $reply['id'] ?>" method="POST">
                                                        <button class="reply-btn" type="submit" name="replyBtn">Reply</button>
                                                    </form>
                                                    </p>
                                                </div>
                                            </li>
                                            <!-- The start of replies foreach==============================================================================================-->
                                            <?php
                                            if (($getDataFromRepliesDB) > 0) {
                                                foreach ($getDataFromRepliesDB as $replyToReply) :
                                                    if ($reply['id'] === $replyToReply['reply_id']) :
                                            ?>
                                                        <li class="comment-list children2">
                                                            <div class="vcard">
                                                                <img src="./images/person_2.jpg" alt="Ooops no image found!">
                                                            </div>
                                                            <div class="comment-body">
                                                                <h3 class="comment-author"><?php echo $replyToReply['name']; ?></h3>
                                                                <div class="meta"><?php $date = DateTime::createFromFormat('Y-m-j G:i:s', $replyToReply['date']);
                                                                                    echo date_format($date, "F j, Y");
                                                                                    echo ' AT ';
                                                                                    echo date_format($date, "g:i A");
                                                                                    ?></div>
                                                                <p>
                                                                    <?php echo $replyToReply['message']; ?>
                                                                </p>
                                                            </div>
                                                        </li>
                                            <?php
                                                    endif;
                                                endforeach;
                                            } ?>
                                            <!-- The end of replies foreach============================================================================================== -->
                                <?php
                                        endif;
                                    endforeach;
                                } ?>
                                <!-- The end of replies foreach============================================================================================== -->
                        <?php endforeach;
                        } ?>
                        <!-- The end of comments foreach============================================================================================== -->
                    </ul>
                </div>
                <div class="comment-form">
                    <h3>Leave a comment</h3>
                    <form action="#all-comments" method="POST">
                        <div class="form-group">
                            <label for="commFullName">Name *</label>
                            <input type="text" class="form-control margin-top <?php echo $inputFieldName ?>" id="commName" name="commFullName" value="<?php echo $commName ?>">
                            <div class="input-error-cont" id="commNameErr"><?php echo $commNameErr ?></div>
                        </div>
                        <div class="form-group">
                            <label for="commEmail">Email *</label>
                            <input type="email" class="form-control margin-top <?php echo $inputFieldEmail ?>" id="commEmail" name="commEmail" value="<?php echo $commEmail ?>">
                            <div class="input-error-cont" id="commEmailErr"><?php echo $commEmailErr ?></div>
                        </div>
                        <div class="form-group">
                            <label for="commWebsite">Website</label>
                            <input type="url" class="form-control margin-top <?php echo $inputFieldWebsite ?>" id="commWebsite" name="commWebsite" value="<?php echo $commWebsite ?>">
                            <div class="input-error-cont" id="commWebsiteErr"><?php echo $commWebsiteErr ?></div>
                        </div>
                        <div class="form-group">
                            <label for="commMessage">Message</label>
                            <textarea name="commMessage" id="commMessage" cols="30" rows="15" class="form-message margin-top"><?php echo $commMessage ?></textarea>
                        </div>
                        <div class="form-group">
                            <button type="submit" id="commentBtn" name="btnComments" class="send-btn text-white">Post Comment</button>
                        </div>
                    </form>
                </div>
            </section>
            <aside class="second-single-block padding">
                <div class="sidebar-box">
                    <form action="#" class="search-form">
                        <div class="form-group search-box">
                            <i class="fa fa-search search-icon" aria-hidden="true"></i>
                            <input type="text" class="form-control search-box-input" placeholder="Type a keyword and hit enter">
                        </div>
                    </form>
                </div>
                <div class="sidebar-box">
                    <div class="categories">
                        <h3>Categories</h3>
                        <ul>
                            <li>
                                <a href="#">Creatives<span>(12)</span></a>
                            </li>
                            <li>
                                <a href="#">News<span>(22)</span></a>
                            </li>
                            <li>
                                <a href="#">Design<span>(37)</span></a>
                            </li>
                            <li>
                                <a href="#">HTML<span>(42)</span></a>
                            </li>
                            <li>
                                <a href="#">Web Development<span>(14)</span></a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="sidebar-box">
                    <img src="./images/person_1.jpg" alt="Ooops no image found!" class="author-image">
                    <h3 class="text-black">About The Author</h3>
                    <p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life One day however a small line of blind text by the name of Lorem Ipsum decided to leave for the far World of Grammar.</p>
                    <p class="read-more-button">
                        <a href="#" class="btn text-white">Read More</a>
                    </p>
                </div>
                <div class="sidebar-box">
                    <h3 class="text-black">Paragraph</h3>
                    <p>When she reached the first hills of the Italic Mountains, she had a last view back on the skyline of her hometown Bookmarksgrove, the headline of Alphabet Village and the subline of her own road, the Line Lane. Pityful a rethoric question ran over her cheek, then she continued her way.</p>
                </div>
            </aside>
        </div>
    </div>
</section>
<?php
// <!-- Footer section =============================================== -->
require('./includes/footer.php');
// <!-- Javascript links and End tags =============================================== -->
require('./includes/javascript.php')
?>