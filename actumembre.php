<?php
// On prolonge la session
session_start();
// On teste si la variable de session existe et contient une valeur
if($_SESSION['login']!='membre') 
{
	if($_SESSION['login']!='admin')
	{
  // Si inexistante ou nulle, on redirige vers le formulaire de login
  header('Location: acceuilml.php');
  exit();
	}
}
?>
<html>
<head>
<head>
<link rel="stylesheet" href="style1.css" type="text/css" />
</head>
<center>
<div class="tablecolor">
<table>
<tr><th>Actualite</th><th>Date</th><th>Heure</th></tr>
<?php
@mysql_connect("localhost","root","");
$test=mysql_select_db("agenda");
if(!$test) echo mysql_error();
$req = "select * from actualite order by id";
$resultat = mysql_query($req);
$ligne = mysql_fetch_assoc($resultat);
while($ligne)
{
	echo "<tr><td>".$ligne["designation"]."</td><td>".$ligne["date"]."</td><td> ".$ligne["heure"]."</td></tr>";
	$ligne = mysql_fetch_assoc($resultat);

}


?>
</table>
</div>
</center>