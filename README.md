# To-Do List Application

## Description
Cette application est une simple liste de tâches (to-do list) basée sur le web. Elle permet aux utilisateurs de gérer leurs tâches en ajoutant de nouvelles tâches, en les marquant comme complétées ou en les supprimant. Les tâches sont stockées dans une base de données MySQL.

## Fonctionnalités
- Ajouter des nouvelles tâches avec un titre, une description, une date d'échéance, une date de rappel, une priorité et une catégorie.
- Afficher la liste des tâches actuelles.
- Marquer les tâches comme complétées.
- Supprimer des tâches.

## Configuration et Installation
1. **Clonez le dépôt** :
    ```bash
    git clone https://github.com/USERNAME/todo_app.git
    cd todo_app
    ```

2. **Configuration de la base de données** :
    - Accédez à [http://localhost/phpmyadmin](http://localhost/phpmyadmin).
    - Créez une base de données nommée `todo_app`.
    - Importez le script SQL suivant pour créer la table nécessaire :
        ```sql
        CREATE TABLE tasks (
          id INT AUTO_INCREMENT PRIMARY KEY,
          title VARCHAR(255) NOT NULL,
          description TEXT,
          status ENUM('in_progress', 'done') DEFAULT 'in_progress',
          creation_date DATETIME DEFAULT CURRENT_TIMESTAMP,
          due_date DATETIME,
          reminder_date DATETIME,
          priority ENUM('low', 'medium', 'high') DEFAULT 'low',
          category VARCHAR(255)
        );
        ```

3. **Configurer le serveur web** :
    - Déplacez le dossier `todo_app` dans le dossier `htdocs` de votre installation XAMPP (par exemple, `C:\xampp\htdocs\`).

4. **Démarrez les services Apache et MySQL** via le panneau de contrôle XAMPP.

## Exécution
1. **Accédez à l'application via votre navigateur** :
    - Ouvrez votre navigateur et allez à [http://localhost/todo_app/index.php](http://localhost/todo_app/index.php).

2. **Utilisez l'interface pour ajouter, afficher, marquer et supprimer des tâches**.

## Auteurs
- **Votre Nom** - Créateur de l'application

## Licence
Ce projet est sous licence MIT.
