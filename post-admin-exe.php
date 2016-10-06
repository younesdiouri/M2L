<?php
include("config.php");
if(isset($_POST["envoyer"]))
{
	$id=$_POST["id"];
	$login=$_POST["login"];
	$password=$_POST["password"];
	
	@mysql_connect("localhost","root","");
	mysql_select_db("agenda");
 
	$req="UPDATE admin 
        SET login='$login', password='$password'   
		WHERE idadmin='$id'";
          
	$query=mysql_query($req);	
	
}
header("Location : admin.php");
?>