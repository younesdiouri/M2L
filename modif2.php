	<html>
<body>

<?php
   $num=$_GET["num"];   
@mysql_connect("localhost","root","");
$test=mysql_select_db("agenda");
$req = "select * from contact where idcontact=$num";
$resultat = mysql_query($req);

$ligne = mysql_fetch_assoc($resultat);

?>
<form action="modif3.php" method="post">
id<input type="text" name="idcontact" value="<?php echo $ligne["idcontact"];?>">
Nom:<input type="text" name="nom" value="<?php echo $ligne["nom"];?>">
Prenom<input type="text" name="prenom" value="<?php echo $ligne["prenom"];?>">
adresse:<input type="text" name="adresse" value="<?php echo $ligne["adresse"];?>">
ville:<input type="text" name="ville" value="<?php echo $ligne["ville"];?>">
telephone:<input type="text" name="telephone" value="<?php echo $ligne["telephone"];?>">
code postal:<input type="text" name="codepostal" value="<?php echo $ligne["codepostal"];?>">
Sport:Sport:&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<select name="sport">
  <option value="escrime">escrime</option> 
  <option value="pingpong" selected>ping pong</option>
  <option value="tennis">tennis</option>
</select><br /> <br />

<input type="submit" value="Enregistrer" />
</form>

