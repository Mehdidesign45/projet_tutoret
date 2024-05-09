<?php
require_once('./inscrire_etudiant.php');
// Récupérer les données du formulaire
$nom_etudiant = $_POST['nom_etudiant'];
$id_formation = $_POST['id_formation'];

    
// Requête d'insertion de l'étudiant dans la table "etudiant"
try {
    $insert_query="INSERT INTO etudiant( nom_etudiant, id_formation) VALUES (:nom_etudiant,:id_formation)";
    $smt=$connexion-> prepare($insert_query);
    $smt->execute(array(":nom_etudiant" => $nom_etudiant,":id_formation" => $id_formation));
    echo "Inscription réussie !";
} catch(PDOException $e) {
    echo "L'inscription a echoue: " . $e->getMessage();
}

// Exécution de la requête

if (mysqli_query($conn, $query)) {
    echo "Étudiant inscrit avec succès!";
} else {
    echo "Erreur lors de l'inscription de l'étudiant: " . mysqli_error($conn);
}

// Fermeture de la connexion
mysqli_close($conn);
?>