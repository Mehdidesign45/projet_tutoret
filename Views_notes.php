<!DOCTYPE html>
<html>
<head>
    <title>Consulter les notes et matière</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body>
    <div class="container">
        
        <!-- Tableau pour afficher les notes -->
        <table class="table">
            <thead>
                <tr>
                    <th>Matricule</th>
                    <th>Matière</th>
                    <th>Note</th>
                </tr>
            </thead>
            <tbody>
                <?php
                // Récupérer les notes depuis la base de données en utilisant le matricule et la matière spécifiés
                $matricule = $_POST['matricule'];
                $matiere = $_POST['matiere'];

                // Connexion à la base de données et requête pour récupérer les notes
                $conn = mysqli_connect("localhost", "nom_utilisateur", "mot_de_passe", "nom_base_de_donnees");
                $query = "SELECT * FROM notes WHERE matricule = '$matricule' AND matiere = '$matiere'";
                $result = mysqli_query($conn, $query);

                // Afficher les données dans le tableau
                while ($row = mysqli_fetch_assoc($result)) {
                    echo "<tr>";
                    echo "<td>" . $row['matricule'] . "</td>";
                    echo "<td>" . $row['matiere'] . "</td>";
                    echo "<td>" . $row['note'] . "</td>";
                    echo "</tr>";
                }
                ?>
            </tbody>
        </table>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>