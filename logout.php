<?php

require_once('connect.php');

// Distrugge la sessione
session_destroy();

// Reindirizza l'utente alla pagina di login
header("Location: index.php");
exit;