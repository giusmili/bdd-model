<?php

# Paramètres de connexion à la base de données
$dsn = "mysql:host=localhost;charset=utf8mb4";
$username = "votre_nom_utilisateur";
$password = "votre_mot_de_passe";

try {
    # Connexion à la base de données
    $pdo = new PDO($dsn, $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    # Nom de la base de données
    $dbname = "nom_de_votre_base_de_donnees";

    # Requête SQL pour créer la base de données si elle n'existe pas déjà
    $sql_create_db = "CREATE DATABASE IF NOT EXISTS $dbname";
    $pdo->exec($sql_create_db);
    echo "Base de données créée avec succès\n";

    # Utilisation de la base de données créée
    $pdo->query("USE $dbname");

    # Requête SQL pour créer la table client
    $sql_create_table_client = "CREATE TABLE IF NOT EXISTS client (
        id INT AUTO_INCREMENT PRIMARY KEY,
        nom VARCHAR(50) NOT NULL,
        prenom VARCHAR(50) NOT NULL,
        age INT
    )";
    $pdo->exec($sql_create_table_client);
    echo "Table client créée avec succès\n";

    # Requête SQL pour créer une autre table (exemple : commande)
    $sql_create_table_commande = "CREATE TABLE IF NOT EXISTS commande (
        id INT AUTO_INCREMENT PRIMARY KEY,
        client_id INT,
        produit VARCHAR(100) NOT NULL,
        quantite INT
    )";
    $pdo->exec($sql_create_table_commande);
    echo "Table commande créée avec succès\n";

    # Requête SQL pour créer une autre table (exemple : produit)
    $sql_create_table_produit = "CREATE TABLE IF NOT EXISTS produit (
        id INT AUTO_INCREMENT PRIMARY KEY,
        nom VARCHAR(100) NOT NULL,
        prix DECIMAL(10,2) NOT NULL
    )";
    $pdo->exec($sql_create_table_produit);
    echo "Table produit créée avec succès\n";

} catch (PDOException $e) {
    echo "Erreur : " . $e->getMessage();
}

?>
