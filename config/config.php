<?php

const DB_SERVER = 'localhost';
const DB_USERNAME = 'root';
const DB_PASSWORD = 'admin';
const DB_NAME = 'db';
//connecting to the mysql database
function getDBConnection()
{
    $conn = new mysqli(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    return $conn;
}

