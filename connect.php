<?php

session_start();

// Connessione al database
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "Utenza";

$conn = mysqli_connect($servername, $username, $password, $dbname);

if (!$conn) {
    die("Connessione fallita: " . mysqli_connect_error());
}

function ritorno($link)
{
    header("Location: " . $link);
    die();
}