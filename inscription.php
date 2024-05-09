<!DOCTYPE html>
<html>
<head>
  <title>Inscription</title>
  <link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body>
  <h1>Inscription</h1>
  <div id="login-form">
  <form action="index.php" method="POST">
    <input type="text" name="matricule" placeholder="Matricule" required>
    <input type="text" name="nom" placeholder="Nom" required>
    <input type="text" name="prenom" placeholder="Prénom" required>
    <input type="text" name="email" placeholder="email" required>
    <input type="text" name="telephone" placeholder="Numéro de téléphone" required>
    <input type="password" name="password" placeholder="Mot de passe" required>
    <button type="submit">S'inscrire</button>
  </form>
  </div>
</body>
</html>