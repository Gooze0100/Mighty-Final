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
    public $contactsFeedback = '';

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
        if ($this->connection->query($sqlInsertComments) === true) {
            $this->commentsFeedback = "New comment uploaded!";
        } else {
            $this->commentsFeedback = 'There is an error, not uploaded!';
        }
    }

    // Get comments from Database ===========================================================================================================

    public function getComments()
    {
        $sql = "SELECT * FROM `comments`";
        $getDataFromDB = $this->connection->query($sql);

        if ($getDataFromDB->num_rows > 0) {
            return $getDataFromDB->fetch_all(MYSQLI_ASSOC);
        } else {
            $this->feedback = 'Error 0 rows!';
        }
    }

    // Contacts ===========================================================================================================

    // Insert contacts to Database ===========================================================================================================
    public function insertToContacts($ar1, $ar2, $ar3, $ar4)
    {
        $sqlInsertContacts = "INSERT INTO contacts(`firstName`,`lastName`,`email_contacts`,`message_contacts`) VALUES ('$ar1', '$ar2', '$ar3', '$ar4')";
        if ($this->connection->query($sqlInsertContacts) === true) {
            $this->contactsFeedback = "New contact uploaded!";
        } else {
            $this->contactsFeedback = 'There is an error, not uploaded!';
        }
    }

    // Close Database ===========================================================================================================
    public function closeConnection()
    {
        $this->connection->close();
    }
}
