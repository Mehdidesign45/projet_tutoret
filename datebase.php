<?php
$serveur = "localhost"; 
$utilisateur = "root";
$mot_de_passe_mysql = "";
$nom_base_de_donnees = "gestion_notes";

try {
    $connexion = new PDO("mysql:host=$serveur;dbname=$nom_base_de_donnees", $utilisateur, $mot_de_passe_mysql);
    $connexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e) {
    echo "La connexion à la base de données a reuisi: " . $e->getMessage();
}




?>