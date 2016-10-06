<?php
	include("nav.php");
	@mysql_connect("localhost","root","");
	mysql_select_db("agenda");
	if(isset($_POST["envoyer"]))
{
	$nom=$_POST["nom"];
	$prenom=$_POST["prenom"];
	$telephone=$_POST["telephone"];
	$ville=$_POST["ville"];
	$mail=$_POST["mail"];
	$codepostal=$_POST["codepostal"];
	$adresse=$_POST["adresse"]; 
	$req="update contact set nom='$nom', prenom='$prenom', telephone='$telephone', ville='$ville', email='$mail', codepostal='$codepostal', adresse='$adresse' where login='".$_SESSION["login"]."'";
	$query=mysql_query($req);
	if($query)
	{
		$success="Vos modifications ont bien été prises en compte!";
	}
	else
	{
		$erreur="Erreur lors de l'enregistrement de vos modifications.";
	}
}

	$req="select nom, prenom, telephone, ville, email, codepostal, adresse from contact where login='".$_SESSION['login']."'";
	$query=mysql_query($req);;
	$result = mysql_fetch_assoc($query);
	$nom = $result['nom'];
	$prenom = $result['prenom'];
	$telephone = $result['telephone'];
	$ville = $result['ville'];
	$mail = $result['email'];
	$codepostal = $result['codepostal'];
	$adresse = $result['adresse'];
	
?>

<head>
	<title>Modifier le profil</title>
</head>

<div class="container">
	<?php if(isset($success)) echo "<h2>".$success."</h2>";
		elseif(isset($erreur)) echo "<h2>".$erreur."</h2>";
	?>
	<form method="POST" action="modifprofil.php">
		<div class="col-md-12">
			<h1 class="text-center">Modifier votre profil</h1>
			<div class="form-group">
				<label class="control-label">Nom</label>
				<input  maxlength="100" type="text" name="nom"   class="form-control" value="<?php echo $nom; ?>" placeholder="<?php echo $nom; ?>"  />
			</div>
			<div class="form-group">
				<label class="control-label">Prenom</label>
				<input maxlength="100" type="text" name="prenom"   class="form-control" value="<?php echo $prenom; ?>" placeholder="<?php echo $prenom; ?>" />
			</div>
			
			<div class="form-group">
				<label class="control-label">Telephone</label>
				<input maxlength="10" type="text" name="telephone"   class="form-control" value="<?php echo $telephone; ?>" placeholder="<?php echo $telephone; ?>" />
			</div>
			
			<div class="form-group">
				<label class="control-label">Ville</label>
				<input maxlength="100" type="text" name="ville"   class="form-control" value="<?php echo $ville; ?>" placeholder="<?php echo $ville; ?>" />
			</div>
			
			<div class="form-group">
				<label class="control-label">E-mail</label>
				<input maxlength="100" type="text" name="mail"   class="form-control" value="<?php echo $mail; ?>" placeholder="<?php echo $mail; ?>" />
			</div>
			
			<div class="form-group">
				<label class="control-label">Code Postal</label>
				<input maxlength="5" type="text" name="codepostal"   class="form-control" value="<?php echo $codepostal; ?>" placeholder="<?php echo $codepostal; ?>" />
			</div>
			
			<div class="form-group">
				<label class="control-label">Adresse</label>
				<input maxlength="100" type="text" name="adresse"   class="form-control" value="<?php echo $adresse; ?>" placeholder="<?php echo $adresse; ?>" />
            </div>
		</div>
		<button class="btn btn-primary btn-lg pull-right" name="envoyer" type="submit">Confirmer les changements</button>
	</form>
</div>

<body>

</html>