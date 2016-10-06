	<?php
   $nom = $_POST["nom"];
   $prenom = $_POST["prenom"];
   $telephone = $_POST["telephone"];
   $adresse = $_POST["adresse"];
   $codepostal=$_POST["codepostal"];
   $ville=$_POST["ville"];
   $email=$_POST["email"];
   $sport=$_POST["sport"];
  
@mysql_connect("localhost","root","");
 mysql_select_db("agenda");
$req="insert into contact (nom, prenom,adresse,ville,codepostal,telephone,email,sport)
                  values('$nom','$prenom','$adresse','$ville','$codepostal','$telephone','$email','$sport')";
mysql_query($req);
header("location: generation.php");
?>