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
<head><meta charset="UTF-8" />
<link rel="stylesheet" href="style1.css" type="text/css" />

</script>
</head>
<body>
<center>
<h1> Reservations:</h1>

<a  href="#number"><img src="1.png" name="photo1" /></a>
<img src="2.png" name="photo2" />

<h2> Tableau des réservations </h2>
<div class="tablecolor">
<table>
<tr><th>Nom</th><th>Date</th><th>Sport</th><th>Heure de début</th><th>Heure de Fin</th><th>Modifier</th><th>Supprimer</th>
<?php
@mysql_connect("localhost","root","");
$test=mysql_select_db("agenda");
if(!$test) echo mysql_error();
$req = "select * from reservation order by sport";
$resultat = mysql_query($req);
if(!$resultat) echo mysql_error();
$ligne = mysql_fetch_assoc($resultat);

while($ligne)
{
	echo "<tr><td>".$ligne["nom"]."</td><td>".$ligne["date"]."</td><td> ".$ligne["sport"]."</td><td> ".$ligne["heuredebut"]."</td>
	<td> ".$ligne["heurefin"]."</td><td><a href='modifresa.php?num=".$ligne["id"]."'><img src='modifier.png'/></a></td>.
	<td><a href='supresa.php?num=".$ligne["id"]."'><img src='supprimer.png'/></a></td></tr>";
	$ligne = mysql_fetch_assoc($resultat);

}

?>
</table>
</div>
<br /><br /><br /><br />
<br /><br /><br /><br /><br />










<div id="number"></div>
<div class="form-style-5">
<form action="formulaireresa.php" method="post">
<legend><span class="number">1</span> Créer Une réservation</legend>
Nom : <select name="nom">
<option>Admin</option>
<?php

@mysql_connect("localhost","root","");
mysql_select_db("agenda");
$req = "select distinct nom,prenom from contact order by nom";
$resultat = mysql_query($req);
$ligne = mysql_fetch_assoc($resultat);
while($ligne)
{
echo "<option>".$ligne["nom"]."&nbsp".$ligne["prenom"]."</option>";
$ligne = mysql_fetch_assoc($resultat);
}
 ?>
</select><br /><br />
Date (JJ-MM-AAAA) : <input type="text" name="date" /><br /><br />
Heure début (HH:MM) :  <input type="text" name="heuredebut" /><br /><br />
Heure fin (HH/MM): <input type="text" name="heurefin" /> <br /><br />
Sport:&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<select name="sport">
  <option value="escrime">escrime</option> 
  <option value="pingpong" selected>ping pong</option>
  <option value="tennis">tennis</option>
</select><br /> <br />

<input type="submit" value="valider" />
<input type="reset" value="annuler" />
</form>
</div>