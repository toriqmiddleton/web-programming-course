<?php

$DBHOST = 'localhost:3307';
$DBUSER = 'root';
$DBPASSWORD = '';
$DBNAME = 'pemweb_db';

$db_connect = mysqli_connect($DBHOST, $DBUSER, $DBPASSWORD, $DBNAME);

if (mysqli_connect_errno()) {
    die("Failed to connect to MySQL: " . mysqli_connect_error());
}

