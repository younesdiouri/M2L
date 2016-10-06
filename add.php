<?php
if(isset($_POST["envoyer"]))
{
	$nom=$_POST["nom"];
	$prenom=$_POST["prenom"];
	$telephone=$_POST["telephone"];
	$ville=$_POST["ville"];
	$mail=$_POST["mail"];
	$codepostal=$_POST["codepostal"];
	$adresse=$_POST["adresse"];
	$sport=$_POST["sport"];
	$login=$_POST["login"];
	$password=$_POST["password"];
	
	@mysql_connect("localhost","root","");
	mysql_select_db("agenda");
 
	$req="insert into contact (nom,prenom,telephone,ville,email,codepostal,adresse,sport,login,password,credits) 
	VALUES ('$nom','$prenom','$telephone','$ville','$mail','$codepostal','$adresse','$sport','$login','$password','5')";
	$query=mysql_query($req);
	if($query)
	{
		$success="Vous êtes bien inscrits!";
		include("acceuilml.php");
	}
	else
	{
		$erreur="L'inscription a échouée.";
		include("incription.php");
	}
}
?>

