<?php


class database
{
    const hostname = 'localhost';
    const username = 'root';
    const password = '';
    const dbname = "test";
    private $conn;

    public function __construct()
    {
        $this->conn = mysqli_connect(self::hostname,self::username,self::password,self::dbname);
    }
    public function DBreturn($query){
        return mysqli_query($this->conn,$query);
    }
}

