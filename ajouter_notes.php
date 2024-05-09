
<!DOCTYPE html>
<html>
<head>
    <title>Ajouter une note</title>
    <link rel="stylesheet" type="text/css" href="styles.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>

<header id="header" class="fixed-top">
    
    <nav class="navbar navbar-expand-lg navbar-white bg-white">
        <a class="navbar-brand" href="admin.php">AcademySchool</a>
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
    
    </header><br><br><br><br>
    <h1>Ajouter une note</h1><br>

    <!-- Formulaire pour ajouter une note -->
    <form action="voir_notes.php" method="POST">
           
            <label></label>
        <input type="number" name="note" placeholder="Note" required>
          
        </select><br>
        <label>Matière:</label>
        <select name="code_matiere" required>
            <option value="">Sélectionner une matière</option><br>
            <option value="">technologie web 3</option><br>
            <option value="">Marketing digital</option><br>
            <option value="">Reseaux et cablage</option><br>
            <button type="submit" class="">Ajouter</button>
           
        </select><br><br>
        <button type="submit" class="">Ajouter</button>
        
    </form>
</body>
</html>

