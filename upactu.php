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

<?php

@mysql_connect("localhost","root","");
$test=mysql_select_db("agenda");
if(!$test) echo mysql_error();
	//supression des actualites 
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
header("location:admin.php");
?>
