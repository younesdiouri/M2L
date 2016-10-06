<!DOCTYPE html>
<head><title>Vos réservations</title></head>
<?php include('nav.php') ?>
<div class="container">
<center>
	<h1>Liste des réservations</h4><br/>
	<table class="table table-bordered">
	  <thead>
<tr><th>Nom</th><th>Prenom</th><th>Date</th><th>Sport</th><th>Heure de début</th><th>Heure de Fin</th></thead>
<tbody>
<?php
@mysql_connect("localhost","root","");
$test=mysql_select_db("agenda");
if(!$test) echo mysql_error();
$req = 'select reservation.date,reservation.sport,nom,prenom,heuredebut,heurefin from reservation,contact where (contact.login=reservation.login and contact.login="'.$_SESSION["login"].'")';
$resultat = mysql_query($req);
if(!$resultat) echo mysql_error();
$ligne = mysql_fetch_assoc($resultat);

while($ligne)
{
	echo "<tr><td>".$ligne["nom"]."</td><td>".$ligne["prenom"]."</td><td>".$ligne["date"]."</td><td> ".$ligne["sport"]."</td><td> ".$ligne["heuredebut"]."</td>
	<td> ".$ligne["heurefin"]."</td>";
	$ligne = mysql_fetch_assoc($resultat);

}

?>
</tbody>
</table>
</center>
</div>
</body>
</html>