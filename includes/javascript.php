<script src="./main.js"></script>
<script src="https://code.jquery.com/jquery-2.2.4.min.js" integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44=" crossorigin="anonymous"></script>
<script src="./includes/Youtube-Vimeo-Modal-Plugin-jQuery/js/jquery-modal-video.js"></script>
<script>
    $(".js-video-button").modalVideo({
        vimeo: {
            autoplay: false,
        }
    });
</script>
<?php
if ($title === 'Single Blog') {
    echo '<script src="./includes/JS/singlePageFV.js"></script>';
}

if ($title === 'Contacts') {
    echo '<script src="./includes/JS/contactFV.js"></script>';
}
?>
</body>

</html>
<?php $db->closeConnection(); ?>