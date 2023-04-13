<?php
try {
    // $user = 'eb2a_33593927';
    // $password = 'most1682002';
    // $dbname = 'eb2a_33593927_login';
    // $host = 'sql207.eb2a.com';
    $user = 'root';
    $password = '';
    $dbname = 'login';
    $host = 'localhost';
    $connection = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8;", $user, $password);
} catch (Exception $e) {
    echo $e->getMessage();
}
