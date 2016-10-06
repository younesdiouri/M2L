
<?php
@mysql_connect("localhost","root","");
mysql_select_db("agenda");
$id=$_POST["id"];
$nom=$_POST["nom"];
$date=$_POST["date"];
$heuredebut=$_POST["heuredebut"];
$heurefin=$_POST["heurefin"];
$sport=$_POST["sport"];
$req="UPDATE reservation 
        SET nom='$nom',
		date='$date',
		heuredebut='$heuredebut',
		heurefin='$heurefin',
		sport='$sport' WHERE id='$id'";
          
mysql_query($req);	
header("location: resa.php");
 
?>