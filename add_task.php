<?php
include 'db.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // On nettoie et valide les données
    $title = htmlspecialchars($_POST['title']);
    $description = htmlspecialchars($_POST['description']);
    $due_date = $_POST['due_date'];
    $reminder_date = $_POST['reminder_date'];
    $priority = $_POST['priority'];
    $category = htmlspecialchars($_POST['category']);

    // On prépare et exécute la requête d'insertion
    $stmt = $pdo->prepare("INSERT INTO tasks (title, description, due_date, reminder_date, priority, category) VALUES (?, ?, ?, ?, ?, ?)");
    $stmt->execute([$title, $description, $due_date, $reminder_date, $priority, $category]);

    // On redirige vers la page principale
    header('Location: index.php');
    exit();
}
?>
