<!DOCTYPE html>
<html>
<head>
  <title>Accueil</title>
  <link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body>
  <h1>Bienvenue sur le</h1>
  <div id="login-form">
    <h2>Connexion</h2>
    <form action="admin.php" method="POST">
      <input type="text" name="login" placeholder="Identifiant" required>
      <input type="password" name="password" placeholder="Mot de passe" required>
      <button type="submit">Se connecter</button>
    </form>
  </div>
</body>
</html>