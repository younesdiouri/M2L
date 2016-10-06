
<?php
@mysql_connect("localhost","root","");
mysql_select_db("agenda");
$idcontact=$_POST["idcontact"];
$nom=$_POST["nom"];
$prenom=$_POST["prenom"];
$adresse=$_POST["adresse"];
$telephone=$_POST["telephone"];
$ville=$_POST["ville"];
$codepostal=$_POST["codepostal"];
$sport=$_POST["sport"];
$req="UPDATE contact 
        SET nom='$nom',
		prenom='$prenom',
		adresse='$adresse',
		telephone='$telephone',
		ville='$ville',
		codepostal='$codepostal',
		sport='$sport' WHERE idcontact='$idcontact'";
          
mysql_query($req);	
header("location: admin.php");
 
?>