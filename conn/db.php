<?php
$host = '127.0.0.1'; // ou 'localhost'
$dbname = 'sitechefcuisinier';
$username = 'root';
$password = '';

// Connexion avec MySQLi
$conn = mysqli_connect($host, $username, $password, $dbname);

// Vérification de la connexion
if (!$conn) {
    die("Erreur de connexion : " . mysqli_connect_error());
} 
?>