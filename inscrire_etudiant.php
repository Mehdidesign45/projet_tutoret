<?php
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

                    
?>


<!DOCTYPE html>
<html>
<head>
    <title>Inscrire un étudiant</title>
    <link rel="stylesheet" type="text/css" href="styles.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
<header id="header" class="fixed-top">
    
    <nav class="navbar navbar-expand-lg navbar-blue bg-white">
        <a class="navbar-brand" href="AcademyConnect.php">AcademyConnect</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="container-fluid d-flex justify-content-between align-items-center " id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="inscrire_etudiant.php">Inscrire un étudiant</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="ajouter_formation.php">Ajouter une formation</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="ajouter_notes.php">ajouter une notes</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="voir_notes.php">Voir notes etudiant</a>
                </li>
                </li>
            </ul>
        </div>
    </nav>
    
    </header><br><br><br>


    <div class="container">
        <h1>Inscrire un étudiant</h1>

        <!-- Formulaire pour inscrire un étudiant -->
        <form action="ajouter_formation.php" method="POST">
            <div class="form-group">
                <label for="nom_etudiant">Nom de l'étudiant:</label>
                <input type="text" class="form-control" name="nom_etudiant" id="nom_etudiant" required>
            </div>
            <div class="form-group">
                <label for="id_formation">Formation:</label>
                <select class="form-control" name="id_formation" id="id_formation" required>
                    <option value="">Sélectionner une formation</option>
                    <option value="">Reseaux et cablage</option>
                    <option value="">Developpement web</option>
                    <option value="">Marketing digital</option>
                    <button type="submit" class="btn btn-primary">S'inscrire</button>
                    
                </select>
                </div>  
                <button type="submit" class="btn btn-primary">Inscrire</button>      
     </form>
                
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    

    
</body>
</html>