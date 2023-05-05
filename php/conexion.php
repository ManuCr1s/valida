<?php

$db = new mysqli("localhost", "root", "", "validapdgd");
if ($db->connect_errno) {
    echo "Fallo al conectar a MySQL: (" . $db->connect_errno . ") " . $mysqli->connect_error;
}
