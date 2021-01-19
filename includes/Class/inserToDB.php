<?php

class InserToDB
{
    public function insertToDB()
    {
        $sqlInsert = "INSERT INTO comments(`name`,`email`,`website`,`message`) VALUES ($this->name, $this->email, $this->website, $this->message)";
        $this->connection->query($sqlInsert);
    }
}
