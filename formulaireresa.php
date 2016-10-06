	<?php
   $nom = $_POST["nom"];
   $date = $_POST["date"];
   $heuredebut=$_POST["heuredebut"];
   $heurefin=$_POST["heurefin"];
   $sport=$_POST["sport"];
  
@mysql_connect("localhost","root","");
 mysql_select_db("agenda");
$req="insert into reservation (nom,date,heuredebut,heurefin,sport,login)
                  values('$nom','$date','$heuredebut','$heurefin','$sport','".$_SESSION["login"]"')";
mysql_query($req);
header("location: resa.php");
?>