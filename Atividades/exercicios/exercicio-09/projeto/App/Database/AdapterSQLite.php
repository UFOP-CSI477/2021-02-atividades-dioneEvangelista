<?php

namespace App\Database;

use PDO;

class AdapterSQLite implements AdapterInterface
{

    private $strConnection;
    private $db;

    public function __construct($dbfile)
    {
        $this->strConnection = 'sqlite:' . $dbfile;
        $this->db = null;
    }

    public function open()
    {
        $this->db = new PDO($this->strConnection);
    }

    public function close()
    {
        $this->db = null;
    }

    public function get()
    {
        return $this->db;
    }
}