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


    // public static function exemplo(){//a declaração static dá o método a capacidade de ser chamado sem precisar ter sua classe instanciada
    //     echo "atualizado";
    // }
}