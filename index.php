<?php
include 'db.php';

// On récupère toutes les tâches de la base de données
$stmt = $pdo->query("SELECT * FROM tasks");
$tasks = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html>
<head>
    <title>To-Do List</title>
    <link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body>
    <div class="container">
        <h1>To-Do List</h1>
        <form action="add_task.php" method="post">
            <input type="text" name="title" placeholder="Titre" required>
            <textarea name="description" placeholder="Description"></textarea>
            <input type="datetime-local" name="due_date" placeholder="Date d'échéance">
            <input type="datetime-local" name="reminder_date" placeholder="Date de rappel">
            <select name="priority">
                <option value="low">Basse</option>
                <option value="medium">Moyenne</option>
                <option value="high">Haute</option>
            </select>
            <input type="text" name="category" placeholder="Catégorie">
            <button type="submit">Ajouter la tâche</button>
        </form>

        <h2>Tâches en cours</h2>
        <ul>
            <?php foreach ($tasks as $task): ?>
                <li>
                    <h3><?php echo htmlspecialchars($task['title']); ?></h3>
                    <p><?php echo htmlspecialchars($task['description']); ?></p>
                    <p>Statut : <?php echo htmlspecialchars($task['status']); ?></p>
                    <p>Échéance : <?php echo htmlspecialchars($task['due_date']); ?></p>
                    <p>Priorité : <?php echo htmlspecialchars($task['priority']); ?></p>
                    <p>Catégorie : <?php echo htmlspecialchars($task['category']); ?></p>
                    <form action="update_task.php" method="post">
                        <input type="hidden" name="id" value="<?php echo $task['id']; ?>">
                        <button type="submit" name="status" value="done">Marquer comme faite</button>
                    </form>
                    <form action="delete_task.php" method="post">
                        <input type="hidden" name="id" value="<?php echo $task['id']; ?>">
                        <button type="submit">Supprimer</button>
                    </form>
                </li>
            <?php endforeach; ?>
        </ul>
    </div>
</body>
</html>
