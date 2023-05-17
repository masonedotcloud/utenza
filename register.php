<?php

require_once('connect.php');



// Prendo i dati inviati dal form
$nome = $_POST['firstname'];
$cognome = $_POST['lastname'];
$username = $_POST['username'];
$email = $_POST['email'];
$password = $_POST['password'];

// Eseguo l'escape dei caratteri speciali per evitare problemi di SQL injection
$nome = mysqli_real_escape_string($conn, $nome);
$cognome = mysqli_real_escape_string($conn, $cognome);
$username = mysqli_real_escape_string($conn, $username);
$email = mysqli_real_escape_string($conn, $email);
$password = mysqli_real_escape_string($conn, $password);

// Creo la query per l'inserimento dei dati
$sql = "INSERT INTO utenti (nome, cognome, username, email, password)
VALUES ('$nome', '$cognome', '$username', '$email', '$password')";

// Eseguo la query e controllo se è andata a buon fine
if (mysqli_query($conn, $sql)) {
    ritorno("index.php?message=Registrazione avvenuta con successo!");
} else {
    ritorno("index.php?message=Errore durante la registrazione: " . mysqli_error($conn));
}

// Chiudo la connessione al database
mysqli_close($conn);
