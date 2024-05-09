-- Création de la base de données
CREATE DATABASE gestion_notes;

-- Sélection de la base de données
USE gestion_notes;

-- Table pour les utilisateurs (administrateurs et étudiants)
CREATE TABLE Utilisateur (
    id_utilisateur INT AUTO_INCREMENT PRIMARY KEY,
    login VARCHAR(50) NOT NULL UNIQUE,
    mot_de_passe VARCHAR(255) NOT NULL,
    type_utilisateur ENUM('admin', 'etudiant') NOT NULL
);

-- Table pour les formations
CREATE TABLE Formation (
    id_formation INT AUTO_INCREMENT PRIMARY KEY,
    libelle_formation VARCHAR(100) NOT NULL
);

-- Table pour les matières
CREATE TABLE Matiere (
    code_matiere VARCHAR(10) PRIMARY KEY,
    libelle_matiere VARCHAR(100) NOT NULL
);

-- Table pour les étudiants
CREATE TABLE Etudiant (
    id_etudiant INT AUTO_INCREMENT PRIMARY KEY,
    matricule VARCHAR(50) NOT NULL UNIQUE,
    nom VARCHAR(100) NOT NULL,
    prenom VARCHAR(100) NOT NULL,
    adresse VARCHAR(255),
    telephone VARCHAR(20),
    id_formation INT,
    FOREIGN KEY (id_formation) REFERENCES Formation(id_formation)
);

-- Table pour les notes
CREATE TABLE Note (
    id_note INT AUTO_INCREMENT PRIMARY KEY,
    id_etudiant INT,
    code_matiere VARCHAR(10),
    note DECIMAL(5, 2),
    FOREIGN KEY (id_etudiant) REFERENCES Etudiant(id_etudiant),
    FOREIGN KEY (code_matiere) REFERENCES Matiere(code_matiere)
);
