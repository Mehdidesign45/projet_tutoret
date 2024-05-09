<!DOCTYPE html>
<html>
<head>
    <title>Consulter les notes  et matière</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body>

<header id="header" class="fixed-top">
    
    <nav class="navbar navbar-expand-lg navbar-blue bg-white">
        <a class="navbar-brand" href="#admin.php">AcademyConnect</a>
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
        <h1>Consulter les notes  et matière</h1>

        <!-- Formulaire pour consulter les notes -->
        <form action="views_notes.php" method="POST">
            <div class="form-group">
                <label for="matricule">Matricule:</label>
                <input type="text" class="form-control" name="matricule" id="matricule" required>
            </div>
            <div class="form-group">
                <label for="matiere">Matière:</label>
                <select class="form-control" name="matieres" id="" required>
                    <option value="">Sélectionner une Matières</option>
                    <option value="">Reseaux et cablage</option>
                    <option value="">HTML ET CSS</option>
                    <option value="">Marketing digital</option>
                </select><br><br>
      
            </div>
                <button type="submit" class="btn btn-primary">Consulter</button>
        </form>

    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>