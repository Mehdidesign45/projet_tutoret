<?php
// Récupérer les données du formulaire
$id_etudiant = $_POST['id_etudiant'];
$code_matiere = $_POST['code_matiere'];
$note = $_POST['note'];

// Connexion à la base de données
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

// Requête d'insertion de la note dans la table "note"
$query = "INSERT INTO note (id_etudiant, code_matiere, note) VALUES ($id_etudiant, '$code_matiere', $note)";

// Exécution de la requête
if (mysqli_query($conn, $query)) {
    echo "Note ajoutée avec succès!";
} else {
    echo "Erreur lors de l'ajout de la note: " . mysqli_error($conn);
}

// Fermeture de la connexion
mysqli_close($conn);
?>