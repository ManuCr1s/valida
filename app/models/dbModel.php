<?php
class dataBase{
    private $db="validapdgd";
    private $server="172.16.10.15";
    private $user="query_exp";
    private $password="Peru2024@";
    public function conect(){
        $db = new mysqli($this->server,$this->user,$this->password,$this->db);
        if ($db->connect_errno) {
            echo "Fallo al conectar a MySQL: (" . $db->connect_errno . ") " . $mysqli->connect_error;
        }
        return $db;
    }
}