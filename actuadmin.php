<?php
// On prolonge la session
session_start();
// On teste si la variable de session existe et contient une valeur

	if($_SESSION['login']!='admin')
	{
  // Si inexistante ou nulle, on redirige vers le formulaire de login
  header('Location: acceuilml.php');
  exit();
	}

?>
<html>
<head><head><meta charset="UTF-8" />
<link rel="stylesheet" href="style1.css" type="text/css" />
</head>
<body>
<h1><center>Gestion des actualités</center></h1>

<form method="post" action="upactu.php">
<div class="maj">Mettre à jour:</div><br />
<input type="submit" name="Mettre à jour"/>
</form>
