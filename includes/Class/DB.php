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

    public function closeConnection()
    {
        $this->connection->close();
    }
}
