<?php
require_once('./datebase.php');
$matricule = $_POST['matricule'];
$nom = $_POST['nom'];
$prenom = $_POST['prenom'];
$email = $_POST['email'];
$telephone = $_POST['telephone'];
$password = $_POST['password'];
 try {
    $insert_query="INSERT INTO etudiant(matricule, nom, prenom, email, telephone, password) VALUES (:matricule,:nom,:prenom,:email,:telephone,:password)";
    $smt=$connexion-> prepare($insert_query);
    
    $smt->execute(array(":matricule" => $matricule,":nom" => $nom,":prenom" => $prenom,":email" => $email,":telephone" => $telephone,":password" => $password));
    
    echo "Inscription réussie !";
} catch(PDOException $e) {
    echo "L'inscription a echoue: " . $e->getMessage();
}





?>