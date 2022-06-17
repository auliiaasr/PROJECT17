<?php
$server = true;

if ($server) {
    // SERVER //
    define('host', 'localhost');
    define('user', '202410101122');
    define('pass', 'secret');
    define('db', 'uas202410101122');
    $baseUrl = 'http://pbw.ilkom.unej.ac.id/sia/sia202410101122/UAS/';
} else {
    // LOCAL //
    define('host', 'localhost');
    define('user', 'root');
    define('pass', '');
    define('db', 'project');
    $baseUrl = '';
}

$conn = mysqli_connect(host, user, pass, db);