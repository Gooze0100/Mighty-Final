<?php
class DB
{
    private $host = 'localhost';
    private $user = 'root';
    private $password = '';
    private $db = 'mightydb';

    private $connection;
    public $feedback = '';
    public $commentsFeedback = '';
    public $commentsReplyFeedback = '';
    public $contactsFeedback = '';
    public $emailFeedback = '';
    private $numberOfCommentsDB;
    private $numberOfRepliesDB;

    // Connect to Database ===========================================================================================================
    public function __construct()
    {
        $this->connection = new mysqli($this->host, $this->user, $this->password, $this->db);

        if ($this->connection->connect_error) {
            die('Error connecting:' . $this->connection->connect_error);
        } else {
            $this->feedback = 'Connection to Database Successful';
        }
    }

    // Comments ===========================================================================================================

    // Insert comments to Database ===========================================================================================================
    public function insertToDB($arg1, $arg2, $arg3, $arg4)
    {
        $sqlInsertComments = "INSERT INTO comments(`name`,`email`,`website`,`message`) VALUES ('$arg1', '$arg2', '$arg3', '$arg4')";
        $this->connection->query($sqlInsertComments);
    }

    // Get comments from Database ===========================================================================================================

    public function getComments()
    {
        $sql = "SELECT * FROM `comments`";
        $getDataFromDB = $this->connection->query($sql);

        if ($getDataFromDB->num_rows > 0) {
            $this->numberOfCommentsDB = $getDataFromDB->num_rows;
            return $getDataFromDB->fetch_all(MYSQLI_ASSOC);
        } else {
            $this->commentsFeedback = 'Error 0 rows!';
        }
    }

    // Comments Replies ===========================================================================================================

    // Insert comments to Database ===========================================================================================================
    public function insertReplyToDB($arg1, $arg2, $arg3, $arg4, $arg5)
    {
        $sqlInsertCommentsReply = "INSERT INTO replies(`name`,`comment_id`,`reply_id`,`email`,`message`) VALUES ('$arg1', '$arg2', '$arg3', '$arg4', '$arg5')";
        $this->connection->query($sqlInsertCommentsReply);
    }

    // Get replies from Database ===========================================================================================================

    public function getReplies()
    {
        $sql = "SELECT * FROM `replies`";
        $getDataFromDB = $this->connection->query($sql);

        if ($getDataFromDB->num_rows > 0) {
            $this->numberOfRepliesDB = $getDataFromDB->num_rows;
            return $getDataFromDB->fetch_all(MYSQLI_ASSOC);
        } else {
            $this->commentsReplyFeedback = 'Error 0 rows!';
        }
    }

    // Number of rows in Databases ===========================================================================================================

    public function numRows()
    {
        $numberOfRowsInDB = $this->numberOfRepliesDB + $this->numberOfCommentsDB;
        echo $numberOfRowsInDB;
    }

    // Contacts ===========================================================================================================

    // Insert contacts to Database ===========================================================================================================
    public function insertToContacts($ar1, $ar2, $ar3, $ar4)
    {
        $sqlInsertContacts = "INSERT INTO contacts(`firstName`,`lastName`,`email_contacts`,`message_contacts`) VALUES ('$ar1', '$ar2', '$ar3', '$ar4')";
        if ($this->connection->query($sqlInsertContacts) === true) {
            $this->contactsFeedback = "New contact uploaded!";
        } else {
            $this->contactsFeedback = 'There is an error, contact not uploaded!';
        }
    }

    // Email Subscription ===========================================================================================================

    // Insert email to Database ===========================================================================================================
    public function insertToEmails($arg1)
    {
        $sqlInsertContacts = "INSERT INTO subscription(`sub_email`) VALUES ('$arg1')";
        if ($this->connection->query($sqlInsertContacts) === true) {
            $this->emailFeedback = "New email uploaded!";
        } else {
            $this->emailFeedback = 'There is an error, email not uploaded!';
        }
    }

    // Close Database ===========================================================================================================
    public function closeConnection()
    {
        $this->connection->close();
    }
}
