<?php
include 'resamembre.php';
if(isset($_POST["envoyer"])){
@mysql_connect("localhost","root","");
@mysql_select_db("agenda");

$req="select user,lundi,mardi,mercredi,jeudi,vendredi,samedi,dimanche,login,nom,prenom,telephone,planning.sport from planning,contact where (user not like '".$_SESSION["login"]."' and ( ";
if(isset($_POST["lundi"])){
$req.="lundi like '".$_POST["lundi"]."' or ";
}
if(isset($_POST["mardi"])){
$req.="mardi like '".$_POST["mardi"]."' or ";
}
if(isset($_POST["mercredi"])){
$req.="mercredi like '".$_POST["mercredi"]."' or  ";
}
if(isset($_POST["jeudi"])){
$req.="jeudi like '".$_POST["jeudi"]."' or ";
}
if(isset($_POST["vendredi"])){if(isset($_POST["dimanche"]) || isset($_POST["samedi"])){
$req.="vendredi like '".$_POST["vendredi"]."' or ";
}
else{
	$req.="vendredi like '".$_POST["vendredi"]."'";
}}
if(isset($_POST["samedi"])){if(isset($_POST["dimanche"])){
$req.="samedi like '".$_POST["samedi"]."'or ";
}
else{
	$req.="samedi like '".$_POST["samedi"]."'";
}}
if(isset($_POST["dimanche"])){
$req.="dimanche like '".$_POST["dimanche"]."'";
}
$req.=") and planning.sport like '".$_POST["sport"]."' and contact.login=planning.user)";
$sql=mysql_query($req);
if(!$sql){
	echo "<h2>La recherche de partenaire n'a rien donné veuillez réessayer et modifier vos horaires...</h2>";
}
else{
$data = mysql_fetch_assoc($sql);
echo "<row><br /><br /><h2> Choisissez parmi ces partenaires </h2>";
echo "<table class=\"table table-bordered\" id=\"part\">";
echo "<th>Nom</th><th>Prenom</th><th>Telephone</th><th>lundi</th><th>mardi</th><th>mercredi</th><th>jeudi</th><th>vendredi</th><th>samedi</th><th>dimanche</th>";
		while($data)
		{
	echo "<tr><td>".$data["nom"]."</td><td>".$data["prenom"]."</td><td>".$data["telephone"]."</td><td>".$data["lundi"]."</td><td>".$data["mardi"]."</td><td>".$data["mercredi"]."</td>
	<td>".$data["jeudi"]."</td><td>".$data["vendredi"]."</td><td>".$data["samedi"]."</td><td>".$data["dimanche"]."</td></tr>";
	$data=mysql_fetch_assoc($sql);
		}
echo "</table></row>";
}
$up = "update planning set ";
$query="insert into planning(lundi,mardi,mercredi,jeudi,vendredi,samedi,dimanche,user,sport) VALUES (";
$check="";
$checkm="";
$checkme="";
$checkje="";
$checkve="";
$checksa="";
$checkdi="";
if(isset($_POST["lundi"])){

$check = $_POST["lundi"];

	 } 
	 
if(empty($_POST["lundi"])){
$check =0;}

$up .= "lundi = '$check',";
$query.="'$check',";

if(isset($_POST["mardi"])){
$checkm = $_POST["mardi"];
}
	  
if(empty($_POST["mardi"])){
$checkm =0;}

$query.="'$checkm',";
$up .= " mardi = '$checkm',";

if(isset($_POST["mercredi"])){
$checkme = $_POST["mercredi"];
}

if(empty($_POST["mercredi"])){
$checkme =0;}

$query.="'$checkme',";
$up .= " mercredi = '$checkme',";

if(isset($_POST["jeudi"])){
$checkje = $_POST["jeudi"];}
	
 if(empty($_POST["jeudi"])){
$checkje =0;}

$query.="'$checkje',";
$up .= " jeudi = '$checkje',";

if(isset($_POST["vendredi"])){
$checkve = $_POST["vendredi"];}

if(empty($_POST["vendredi"])){
$checkve =0;}

$query.="'$checkve',";
$up .= " vendredi = '$checkve',";

if(isset($_POST["samedi"])){
$checksa = $_POST["samedi"];}
	 
	 if(empty($_POST["samedi"])){
$checksa =0;}

$query.="'$checksa',";
$up .= " samedi = '$checksa',";

if(isset($_POST["dimanche"])){
$checkdi = $_POST["dimanche"];}
	 
	 if(empty($_POST["dimanche"])){
$checkdi =0;}

$query.="'$checkdi',";
$up .= " dimanche = '$checkdi',";

$query.="'".$_SESSION["login"]."','".$_POST["sport"]."')";
$up.=" sport='".$_POST["sport"]."' where user=".$_SESSION["login"]."";


$fir="select count(*) from planning where user='".$_SESSION["login"]."'";
$que=mysql_query($fir);
if(!$que) echo $que."".mysql_error();
$tab=mysql_fetch_array($que);

if($tab[0]==1)
{
	
$req=mysql_query($up);
}
else
{
	
	$req=mysql_query($query);
}

if(!$req) echo $req."".mysql_error();
}
?>