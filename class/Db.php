<?php

class Db
{
    public $conn;

    public function __construct()
    {
        $this->conn = new PDO(
            'mysql:dbname=simpleblog;host:localhost;charset=UTF8',
            'root',
            '',
            array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES \'UTF8\'')
        );
    }

    public function exec(string $sql)
    {
        return $this->conn->exec($sql);
    }

    public function find(string $sql)
    {
        $query = $this->conn->query($sql);
        return $query->fetch();
    }

    public function findAll(string $sql)
    {
        $query = $this->conn->query($sql);
        return $query->fetchAll();
    }
}