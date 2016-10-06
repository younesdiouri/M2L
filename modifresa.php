	<html>
<body>

<?php
   $num=$_GET["num"];   
@mysql_connect("localhost","root","");
$test=mysql_select_db("agenda");
$req = "select * from reservation where id=$num";
$resultat = mysql_query($req);

$ligne = mysql_fetch_assoc($resultat);

?>
<form action="modifresa2.php" method="post">
id<input type="hidden" name="id" value="<?php echo $ligne["id"];?>">
Nom:<input type="text" name="nom" value="<?php echo $ligne["nom"];?>">
Date<input type="text" name="date" value="<?php echo $ligne["date"];?>">
Heure de debut:<input type="text" name="heuredebut" value="<?php echo $ligne["heuredebut"];?>">
Heure de fin:<input type="text" name="heurefin" value="<?php echo $ligne["heurefin"];?>">
Sport:Sport:&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<select name="sport">
  <option value="escrime">escrime</option> 
  <option value="pingpong" selected>ping pong</option>
  <option value="tennis">tennis</option>
</select><br /> <br />

<input type="submit" value="Enregistrer" />
</form>

