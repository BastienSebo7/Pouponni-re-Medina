<?php
// Connexion à la base de données
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "pouponniere";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Échec de la connexion : " . $conn->connect_error);
}

// Récupérer les enregistrements des enfants
$sql = "SELECT id,Numéro_identification, nom, prénom, sexe, date_naissance, situation, date_entée, adresse, phone, durée, date_enregistrement FROM enfants";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<h1>Liste des enfants enregistrés</h1>";
    echo "<table border='1'>
            <tr>
                <th>ID</th>
                <th>Numéro_identification</th>
                <th>Nom</th>
                <th>Prénom</th>
                <th>Sexe</th>
                <th>Date de naissance</th>
                <th>situation</th>
                <th>Date d'entrée</th>
                <th>adresse</th>
                <th>phone</th>
                <th>durée</th>
                <th>Date d'enregistrement</th>
            </tr>";
    while($row = $result->fetch_assoc()) {
        echo "<tr>
                <td>".$row["id"]."</td>
                <td>".$row["Numéro_identification"]."</td>
                <td>".$row["nom"]."</td>
                <td>".$row["prénom"]."</td>
                <td>".$row["sexe"]."</td>
                <td>".$row["date_naissance"]."</td>
                <td>".$row["date_entrée"]."</td>
                <td>".$row["adresse"]."</td>
                <td>".$row["phone"]."</td>
                <td>".$row["durée"]."</td>
                <td>".$row["date_enregistrement"]."</td>
              </tr>";
    }
    echo "</table>";
} else {
    echo "Aucun enregistrement trouvé.";
}

$conn->close();
?>