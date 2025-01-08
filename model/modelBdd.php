<?php

# Paramètres de connexion à la base de données
$dsn = "mysql:host=localhost;charset=utf8mb4";
$username = "root";
$password = "";

try {
    # Connexion à la base de données
    $pdo = new PDO($dsn, $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    # Nom de la base de données
    $dbname = "fantastique";

    # Requête SQL pour créer la base de données si elle n'existe pas déjà
    $sql_create_db = "CREATE DATABASE IF NOT EXISTS $dbname";
    $pdo->exec($sql_create_db);
    echo "Base de données créée avec succès\n";

    # Utilisation de la base de données créée
    $pdo->query("USE $dbname");

    # Requête SQL pour créer la table produit
    $sql_create_table = "CREATE TABLE IF NOT EXISTS produit (
        id INT AUTO_INCREMENT PRIMARY KEY,
        nom VARCHAR(50) NOT NULL,
        prenom VARCHAR(50) NOT NULL,
        age INT
    )";
    $pdo->exec($sql_create_table);
    print "Table produit créée avec succès<br>";

     // Vérifier si les tables existent et insérer des données
     $tables = ['client', 'commande', 'produit'];

     foreach ($tables as $table) {
         $checkTable = $pdo->query("SHOW TABLES LIKE '$table'")->rowCount();
         if ($checkTable > 0) {
             echo "La table $table existe ";
 
             switch ($table) {
                case 'produit':
                     // Insertion des données dans la table client
                     $sql_insert_client = "INSERT INTO produit VALUES('','Doe','John',35)";
                     $pdo->exec($sql_insert_client);
                    print "données ajoutées";
                break;
                   
 
             }
         }
     }

} 
catch (PDOException $e) {
    echo "Erreur : " . $e->getMessage();
}

?>
