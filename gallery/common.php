<?php
session_start();
mysql_connect('localhost', 'root', '') or die ('No server');
mysql_select_db('gallery') or die ('No data base');

function run_q($sql){
    mysql_query('SET NAMES UTF8');
    $rs = mysql_query($sql);
    if(mysql_error()){
        echo mysql_error().' SQL:' . $sql;
    }
    return $rs;
}

function fetch_all($mysql_resource){
    while($row = mysql_fetch_assoc($mysql_resource)){
        $resp[]=$row;
    }
    return $resp;
}

// this is mysqli
/*    $mysqli = new mysqli("localhost", "root", "", "");
    if ($mysqli->connect_errno) {
        echo "Failed to connect to MySQL: (" .
            $mysqli->connect_errno . ") " .
            $mysqli->connect_error;
    }
    echo $mysqli->host_info . "\n";*/