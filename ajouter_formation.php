<!DOCTYPE html>
<html>
<head>
    <title>Ajouter une formation et les matières</title>
    <link rel="stylesheet" type="text/css" href="styles.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
<header id="header" class="fixed-top">
    
    <nav class="navbar navbar-expand-lg navbar-blue bg-white" id="nav" >
        <a class="navbar-brand" href="#admin.php">Admin</a>
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
    
    </header><br><br>
    <h1>Ajouter une formation et les matières</h1><br>

    <!-- Formulaire pour ajouter une formation et les matières -->
    <form action="ajouter_notes.php" method="POST">
        <label>Nom de la formation:</label>
        <input type="text" name="libelle_formation" placeholder="Nom de la formation" required><br>
        <label>Matières :</label>
        <select class="form-control" name="matieres" id="" required>
                    <option value="">Sélectionner une Matières</option>
                    <option value="">Informatique</option>
                    <option value="">Infographie</option>
                    <option value="">Marketing digital</option>
                </select><br>
                <button type="submit" class="">Ajouter</button>
        
    </form>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>
</html>