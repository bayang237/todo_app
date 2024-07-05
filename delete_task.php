<?php
include 'db.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // On nettoie l'ID
    $id = (int)$_POST['id'];

    // On prépare et exécute la requête de suppression
    $stmt = $pdo->prepare("DELETE FROM tasks WHERE id = ?");
    $stmt->execute([$id]);

    // On redirige vers la page principale
    header('Location: index.php');
    exit();
}
?>
