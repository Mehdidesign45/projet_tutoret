<?php
require_once './datebase.php';
if ($_SERVER["REQUEST_METHOD"]=="POST") {
	if (!empty($_POST["login"]) && (!empty($_POST["password"]))) {
		$matricule=$_POST["login"];
		$password=$_POST["password"];

		try {
            $select_query = "SELECT * FROM etudiants WHERE matricule = :matricule AND password= password";
            $statement = $connexion->prepare($select_query);
            $statement->execute(array(":matricule" => $matricule,":password" => $password));
            $result = $statement->fetch(PDO::FETCH_ASSOC);

            if ($result) {
                session_start();
                $_SESSION['login'] = $result['login'];
                header("Location: admin.php");
            } else {
                $erreur = "matricule ou mot de passe incorrect.";
            }
        } catch(PDOException $e) {
            $erreur = "Erreur lors de la connexion : " . $e->getMessage();
        }
	}
}