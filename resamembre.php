<!DOCTYPE html>
<head><title>SOS Partenaire</title></head>
<?php include('nav.php') ?>
<center>

 <div class="page-header">
        <h1>Choisissez vos créneaux et nous vous trouvons un Partenaire !</h1>
      </div>
	 
<div class="container">
	<form method="POST" action="submit.php?#part" role="form">
		<table class="table table-striped table-bordered table-hover"><tr><th>Lundi</th><th>Mardi</th><th>Mercredi</th><th>Jeudi</th><th>Vendredi</th><th>Samedi</th><th>Dimanche</th></tr>
			<tr class="success"><td><label><input type="radio" class="no-margin" name="lundi" value="matin"> Matin</label></td>
			<td><label><input type="radio" class="no-margin" name="mardi" value="matin"  > Matin</label></td>
			<td><label><input type="radio" class="no-margin" name="mercredi" value="matin"> Matin</label></td>
			<td><label><input type="radio" class="no-margin" name="jeudi" value="matin"> Matin</label></td>
			<td><label><input type="radio" class="no-margin" name="vendredi" value="matin"> Matin</label></td>
			<td><label><input type="radio" class="no-margin" name="samedi" value="matin"> Matin</label></td>
			<td><label><input type="radio" class="no-margin" name="dimanche" value="matin"> Matin</label></td></tr>
		
			<tr class="info"><td><label><input type="radio" class="no-margin" name="lundi" value="jour"> Après-midi</label></td>
			<td><label><input type="radio" class="no-margin" name="mardi" value="jour"> Après-midi</label></td>
			<td><label><input type="radio" class="no-margin" name="mercredi" value="jour"> Après-midi</label></td>
			<td><label><input type="radio" class="no-margin" name="jeudi" value="jour"> Après-midi</label></td>
			<td><label><input type="radio" class="no-margin" name="vendredi" value="jour"> Après-midi</label></td>
			<td><label><input type="radio" class="no-margin" name="samedi" value="jour"> Après-midi</label></td>
			<td><label><input type="radio" class="no-margin" name="dimanche" value="jour"> Après-midi</label></td></tr>
		
			<tr class="warning"><td><label><input type="radio" class="no-margin" name="lundi" value="soir"> Soir</label></td>
			<td><label><input type="radio" class="no-margin" name="mardi" value="soir"> Soir</label></td>
			<td><label><input type="radio" class="no-margin" name="mercredi" value="soir"> Soir</label></td>
			<td><label><input type="radio" class="no-margin" name="jeudi" value="soir"> Soir</label></td>
			<td><label><input type="radio" class="no-margin" name="vendredi" value="soir"> Soir</label></td>
			<td><label><input type="radio" class="no-margin" name="samedi" value="soir"> Soir</label></td>
			<td><label><input type="radio" class="no-margin" name="dimanche" value="soir"> Soir</label></td></tr>
		</table>
		<br />
			<h3>Votre Sport :</h3>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
			<select class="form-control" name="sport">
  				<option value="escrime">Escrime</option> 
  				<option value="pingpong">Tennis de table</option>
  				<option value="tennis">Tennis</option>
			</select><br />

		<div class="row">
			
				<button type="submit" class="btn btn-default" name="annuler" aria-label="true">
					<span class="glyphicon glyphicon-remove" aria-hidden="true"></span>Annuler
				</button>

				<button type="submit" name="envoyer" class="btn btn-default">
					<span class="glyphicon glyphicon-ok" aria-hidden="true"></span> Envoyer
				</button>
			</div>
		
	</form>
	<?php 
	if(isset($_POST["envoyer"])){if(isset($_POST["lundi"])||isset($_POST["mardi"])||isset($_POST["mercredi"])||isset($_POST["jeudi"])||isset($_POST["vendredi"])||isset($_POST["samedi"])||isset($_POST["dimanche"]))
	{echo '<br /><div class="alert alert-success" role="alert">
	<strong>Merci!</strong> Vos choix ont correctement été transmis.
    </div>';}else if(empty($_POST["annuler"])){{echo '<br />
	<div class="alert alert-warning" role="alert">
        <strong>Attention!</strong> Vous n\' avez renseigné aucun choix
    </div>';}}}if(isset($_POST["annuler"]))echo '<br />
	<div class="alert alert-danger" role="alert">
        <strong>Attention!</strong> Vous avez annuler votre choix
    </div>';?>
	
</div><br /><br />
<button data-toggle="modal" href="#infos" class="btn btn-primary btn-lg">Vos Réservations</button>
<div class="modal fade" id="infos">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">x</button>
        <h4 class="modal-title">Liste des réservations</h4>
      </div>
      <div class="modal-body">
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
       
      </div>
	  <div class="modal-footer">
        <button class="btn btn-info" data-dismiss="modal">Fermer</button>
      </div>
    </div>
  </div>
</div>
<div class="tablecolor">

</div>
<br /><br /><br /><br />
<br />
<em>Effectuer une <a href="formulaireresam.php">reservation </a></em>
</body></html>