<?php
include 'db.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // On nettoie l'ID et le statut
    $id = (int)$_POST['id'];
    $status = htmlspecialchars($_POST['status']);

    // On prépare et exécute la requête de mise à jour
    $stmt = $pdo->prepare("UPDATE tasks SET status = ? WHERE id = ?");
    $stmt->execute([$status, $id]);

    // On redirige vers la page principale
    header('Location: index.php');
    exit();
}
?>
