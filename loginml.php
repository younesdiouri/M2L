<?php
session_start();
	if (isset($_POST['connexion'])) {
	if ((isset($_POST['login']) && !empty($_POST['login'])) && (isset($_POST['password']) && !empty($_POST['password']))) 
	{

		$login = $_POST["login"];
		$password = $_POST["password"];
		@mysql_connect("localhost","root","");
		@mysql_select_db("agenda");
		$req = "select count(*) FROM contact WHERE login='$login' and password='$password'";
		$resultat = mysql_query($req);
		$data = mysql_fetch_array($resultat);
		if($data[0]==1)
		{
			$_SESSION["login"] = $login;
			$req = "delete from actualite";
 $resultat = mysql_query($req);
 
 //ajout des actu du flux rss
 $url = "http://www.lequipe.fr/rss/actu_rss.xml"; /*  ici l'adresse du flux RSS */
$rss = simplexml_load_file($url);
echo '<ul>';
foreach ($rss->channel->item as $item){
 $datetime = date_create($item->pubDate);
 $date = date_format($datetime, 'd M Y');
 $title = ($item->title);
 $hour = date_format($datetime,'H\hi');
 $description= ($item->comments);
 
@mysql_connect("localhost","root","");
$test=mysql_select_db("agenda");
if(!$test) echo mysql_error();
$req2 = "insert into actualite (date,heure,designation,Description)
							    values ('$date','$hour','$title','$description')";
 $resultat2 = mysql_query($req2);
 
			
}
			
			//on test le temps du password
			//$tempspass="select date_changepass from contact where login='$login'";
			//$querytime=mysql_query($tempspass);
			//$today = strtotime('today UTC');
			
			
			header("location:membres.php");
			
			
			
		}else {
			$req = "select count(*) from admin where login='$login' and password='$password'";
		$resultat = mysql_query($req);
		$data = mysql_fetch_array($resultat);
		if($data[0]==1){
			$_SESSION["login"] = $login;
			
		header("location:admin.php");
		}
		
		else{
		$erreur = "Mauvais identifiants";
		
	    header("location:acceuilml.php");
		}
		}
	}
	else {
		
	$erreur = "Au moins un des champs est vide.";
	header('Location: acceuilml.php');
	}
}
else {
		
	header('Location: acceuilml.php');
}
?>
