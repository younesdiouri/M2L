<?php
include("config.php");
if(isset($_POST["envoyer"]))
{
	$id=$_POST["id"];
	$login=$_POST["login"];
	$password=$_POST["password"];
	
	@mysql_connect("localhost","root","");
	mysql_select_db("agenda");
 
	$req="UPDATE contact 
        SET login='$login', password='$password'   
		WHERE idcontact='$id'";
          
	$query=mysql_query($req);	
	
}
header("Location : add-user.php");
?>