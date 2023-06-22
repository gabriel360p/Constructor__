<?php

class User{
    protected $conn;

    public function __construct(SQLite3 $connection)
    {
        $this->conn=$connection;
    }

    public function save($sql){
        $this->conn->exec($sql);
    }

    public function delete($sql){
        $this->conn->exec($sql);
    }

    public function find($sql){
        $find=$this->conn->query($sql);
        return $find->fetchArray();

    }

    public function update($sql){
    }
}