<?php
$host = "localhost";         // ou 127.0.0.1
$user = "root";              // nom d'utilisateur MySQL (souvent "root" sous XAMPP)
$password = "";              // mot de passe MySQL (vide par défaut sous XAMPP)
$dbname = "gcusers";

// Connexion au serveur MySQL (sans base pour la créer d'abord)
$conn = mysqli_connect($host, $user, $password);

// Vérification
if (!$conn) {
    die("Échec de connexion : " . mysqli_connect_error());
}

// Créer la base de données si elle n'existe pas
$sql_create_db = "CREATE DATABASE IF NOT EXISTS $dbname CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci";
// if (mysqli_query($conn, $sql_create_db)) {
//     echo "✅ Base de données '$dbname' créée avec succès.<br>";
// } else {
//     die("❌ Erreur création base : " . mysqli_error($conn));
// }

// Sélectionner la base
mysqli_select_db($conn, $dbname);

// Créer la table users
$sql_create_table = "
  CREATE TABLE IF NOT EXISTS users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(50) UNIQUE,
    first_name VARCHAR(50),
    last_name VARCHAR(50),
    email VARCHAR(100) UNIQUE,
    phone VARCHAR(20),
    address VARCHAR(255),
    password VARCHAR(255),
    role ENUM('user', 'admin', 'moderator') DEFAULT 'user',
    created_at DATETIME DEFAULT CURRENT_TIMESTAMP
  )
";

// if (mysqli_query($conn, $sql_create_table)) {
//     echo "✅ Table 'users' créée avec succès.";
// } else {
//     die("❌ Erreur création table : " . mysqli_error($conn));
// }

// Fermer la connexion
mysqli_close($conn);
?>


<?php

function getDatabaseConnection() {
  $servername = "localhost";
  $username = "root";
  $password = "";
  $database = "gcusers";

  // CONNECTION CREATION
  $connection = new mysqli($servername, $username, $password, $database);
  if ($connection->connect_error) {
  die("Error to connect to MySQL: " . $connection->connect_error);
  }
  
  return $connection;
}
  
  if (isset($_SESSION["email"])) {
  header("location: ../../index.php"); 
  exit;
  }

?>