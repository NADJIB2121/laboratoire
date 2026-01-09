
<?php
// Paramètres de connexion
$host = "localhost";
$user = "root";
$pass = "";
$db   = "laboraja";

// Création de la connexion
$conn = mysqli_connect($host, $user, $pass, $db);

// Vérifier si la connexion fonctionne
if (!$conn) {
    die("La connexion a échoué : " . mysqli_connect_error());
}

// Récupération des données (vérifiez les 'name' dans votre HTML)
$nom = $_POST['nom'] ?? '';
$email = $_POST['email'] ?? '';
$tel = $_POST['telephone'] ?? '';

// Requête SQL vers votre table 'client'
$sql = "INSERT INTO client (nom, email, telephone) VALUES ('$nom', '$email', '$tel')";

if (mysqli_query($conn, $sql)) {
    echo "<h1>Enregistrement réussi !</h1>";
    echo "Les données de $nom ont été ajoutées à la base.";
} else {
    echo "Erreur SQL : " . mysqli_error($conn);
}

mysqli_close($conn);
?>