<?php
// Connexion à la base de données
$servername = "localhost";
$username = "root"; // Utilisez votre nom d'utilisateur MySQL
$password = ""; // Utilisez votre mot de passe MySQL
$dbname = "pouponniere";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Échec de la connexion : " . $conn->connect_error);
}

// Récupérer les données du formulaire
// Information de l'enfant
    $Numéro_identification = $_POST['Numéro_identification'];
    $nom = $_POST['nom'];
    $prénom = $_POST['prénom'];
    $sexe = $_POST['sexe'];
    $date_naissance = $_POST['date_naissance'];
    $situation = $_POST['situation'];
    $date_entrée = $_POST['date_entrée'];
    $adresse = $_POST['adresse'];
    $phone = $_POST['phone'];
    $durée = $_POST['durée'];
// Insertion dans la base de données
$sql = "INSERT INTO enfants (Numéro_identification, nom, prénom, sexe, date_naissance, situation, date_entrée, adresse, phone, durée )
VALUES ('$Numéro_identification', '$nom', '$prénom', '$sexe', '$date_naissance', '$situation', '$date_entrée', '$adresse', '$phone', '$durée' )";

if ($conn->query($sql) === TRUE) {
    echo "Enregistrement réussi!";
    // Redirection vers la même page après l'enregistrement réussi
    header("Location: index.php?success=1");
    exit();
} else {
    echo "Erreur : " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>