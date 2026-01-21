
<?php

$host = "localhost";
$user = "root";
$pass = "";
$db   = "laboraja";


$conn = mysqli_connect($host, $user, $pass, $db);
if (!$conn) {
    die("La connexion a échoué : " . mysqli_connect_error());
}


$nom = $_POST['nom'] ?? '';
$email = $_POST['email'] ?? '';
$tel = $_POST['telephone'] ?? '';


$sql = "INSERT INTO client (nom, email, telephone) VALUES ('$nom', '$email', '$tel')";

if (mysqli_query($conn, $sql)) {
    echo "<h1>Enregistrement réussi !</h1>";
    echo "Les données de $nom ont été ajoutées à la base.";
} else {
    echo "Erreur SQL : " . mysqli_error($conn);
}

mysqli_close($conn);
?>