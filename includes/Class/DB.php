<?php
class DB
{
    private $host = 'localhost';
    private $user = 'root';
    private $password = '';
    private $db = 'mightydb';

    private $connection;
    public $feedback = '';

    public function __construct()
    {
        $this->connection = new mysqli($this->host, $this->user, $this->password, $this->db);

        if ($this->connection->connect_error) {
            die('Error connecting:' . $this->connection->connect_error);
        } else {
            $this->feedback = 'Connection to Database Successful';
        }
    }

    public function insertToDB($arg1, $arg2, $arg3, $arg4)
    {
        // $sqlInsert = "INSERT INTO comments(`name`,`date`,`email`,`website`,`message`) VALUES ($arg1, $arg2, $arg3, $arg4, $arg5)";
        // if (1) {
        $sqlInsert = "INSERT INTO comments(`name`,`email`,`website`,`message`) VALUES ('$arg1', '$arg2', '$arg3', '$arg4')";
        //     if ($this->connection->query($sqlInsert) === true) {
        //         $this->feedback = "New comment uploaded";
        //     } else {
        //         $this->feedback = 'There is an error, not uploaded';
        //     }
        // }
        $this->connection->query($sqlInsert);
    }


    public function closeConnection()
    {
        $this->connection->close();
    }
}
