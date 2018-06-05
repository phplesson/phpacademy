<?php
/**
 * Created by PhpStorm.
 * User: Alex
 * Date: 05.06.2018
 * Time: 15:39
 */

class Database
{
    public $db;

    public function __construct($host, $user, $password, $db)
    {
        $this->db = mysqli_connect($host, $user, $password);
        if (!$this->db) {
            exit('No connection with database');
        }
        if (mysqli_select_db($db, $this->db)) {
            exit ('No table');
        }
        mysqli_query($this->db, "SET NAMES cp-1251");
    }

    public function get_all_db(){}
    public function get_one_db(){}

}