<?php
/**
 * Class Db
 */

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

    /**
     * @param string $sql
     * @return int
     */
    public function exec(string $sql)
    {
        return $this->conn->exec($sql);
    }

    /**
     * @param string $sql
     * @return mixed
     */
    public function find(string $sql)
    {
        $query = $this->conn->query($sql);
        return $query->fetch();
    }

    /**
     * @param string $sql
     * @return array
     */
    public function findAll(string $sql)
    {
        $query = $this->conn->query($sql);
        return $query->fetchAll();
    }
}