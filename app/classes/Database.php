<?php

namespace App\classes;

class Database
{
    private $hostName, $userName, $password, $databaseName, $dbInfo;

    public function __construct() {

        $this->hostName = "localhost";
        $this->userName = "root";
        $this->password = "";
        $this->databaseName = "seip_homework_2";

    }

    public function dbConnect() {

      return $this->dbInfo = mysqli_connect($this->hostName, $this->userName, $this->password, $this->databaseName);

    }
}