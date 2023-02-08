<?php
session_start();

if(isset($_SESSION['username'])) {
  $username = $_SESSION['username'];
  echo "Bienvenue de retour, $username!<br>";
} elseif(isset($_POST['username'])) {
  $_SESSION['username'] = $_POST['username'];
  $username = $_SESSION['username'];
  echo "Bienvenue pour la première fois, $username!<br>";
}

if(isset($_POST['logout'])) {
  session_destroy();
  header("Refresh:0");
  exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="" method="post">
  Entrez votre nom : <input type="text" name="username">
  <input type="submit" value="Envoyer">
  <input type="submit" name="logout" value="Déconnexion">
</form>
</body>
</html>
