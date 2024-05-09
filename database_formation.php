<?php
// Récupérer les données du formulaire
$libelle_formation = $_POST['libelle_formation'];
$matieres = $_POST['matieres'];

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
// Vérifier si le formulaire a été soumis
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Récupérer les données du formulaire
    $libelle_formation = $_POST["libelle_formation"];

    // Requête d'insertion de la formation dans la table "formation"
    try {
        $insert_query="INSERT INTO formation (libelle_formation) VALUES (:$libelle_formation)";
        $smt=$connexion-> prepare($insert_query);
        $smt->execute(array(":$libelle_formation" => $$libelle_formation));
        
        echo "Inscription réussie !";
    }
     catch(PDOException $e) {
        echo "L'inscription a echoue: " . $e->getMessage();
    }
    

    // Exécution de la requête
    if (mysqli_query($conn, $query)) {
        echo "Formation ajoutée avec succès!";
    } else {
        echo "Erreur lors de l'ajout de la formation: " . mysqli_error($conn);
    }
}

// Fermeture de la connexion
mysqli_close($conn);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Ajouter une formation</title>
</head>
<body>
    <h1>Ajouter une formation</h1>

    <!-- Formulaire pour ajouter une formation -->
    <form method="POST" action="<?php echo $_SERVER["PHP_SELF"]; ?>">
        <label>Libellé de la formation:</label>
        <input type="text" name="libelle_formation" required><br><br>
        <input type="submit" value="Ajouter">
    </form>
</body>
</html>