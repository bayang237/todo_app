<?php
// Les paramètres de connexion à la base de données
$host = 'localhost';
$db = 'todo_app';
$user = 'root';
$pass = '';

// On essaie de se connecter à la base de données avec PDO
try {
    $pdo = new PDO("mysql:host=$host;dbname=$db;charset=utf8", $user, $pass);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    // Si ça échoue, on affiche l'erreur
    die("Impossible de se connecter à la base de données $db :" . $e->getMessage());
}
?>
