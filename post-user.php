<?php
include("headeradmin.php");

$id_user=$_POST["membre"];
$req="select * from contact where idcontact=".$id_user."";
$query=mysql_query($req);
$ligne=mysql_fetch_assoc($query);
while($ligne)
{
?>
<?php
function CreatePass($long_pass)
{
	$consonnes = "bcdfghjklmnpqrstvwxz";
	$voyelles = "aeiouy";

	$mdp='';
	for ($i=0; $i < $long_pass; $i++)
	{
		/* L'opérateur % permet le changement entre voyelle et consonne */
		if (($i % 2) == 0)
		{
			$mdp = $mdp.substr ($voyelles, rand(0,strlen($voyelles)-1), 1);
		}	
		else
		{
			$mdp = $mdp.substr ($consonnes, rand(0,strlen($consonnes)-1), 1);
		}
	}
	
	return $mdp;
}

/* Appel de la fonction */
$motdepasse = CreatePass(6); /* ici : exemple avec un mot de passe de 6 caracteres */


?>
        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">m2l Staff-emploi</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
			<div class="col-lg-5">

<h1>Ajouter un mot de passe à un membre </h1>
<form action="post-user-exe.php" method="post">
<div class="form-group">
    <label for="InputName">ID</label><input type="hidden" name="id" value="<?php echo $ligne["idcontact"];?>">
</div>
<div class="form-group">	
<label for="InputName">Nom:</label><input type="text" class="form-control" name="nom" value="<?php echo $ligne["nom"];?>">
</div>
<div class="form-group">
<label for="InputName">Prenom:</label><input type="text" name="prenom" class="form-control" value="<?php echo $ligne["prenom"];?>">
</div>
<div class="form-group">
<label for="InputName">Login:</label><input type="text" name="login" class="form-control" value="<?php echo $ligne["prenom"].".".$ligne["nom"][0];?>">
</div>
<div class="form-group">
<label for="InputName">Mot de passe:</label><input type="text" name="password" class="form-control" value="<?php echo $motdepasse; ?>">
</div>

<?php 
$ligne=mysql_fetch_assoc($query);
}
?>
  <input type="submit" name="envoyer" class="btn btn-primary btn-lg" value="envoyer"/>
</form>
<!-- jQuery -->
    <script src="admin/bower_components/jquery/dist/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="admin/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="admin/bower_components/metisMenu/dist/metisMenu.min.js"></script>

    <!-- Morris Charts JavaScript -->
    <script src="admin/bower_components/raphael/raphael-min.js"></script>
    <script src="admin/bower_components/morrisjs/morris.min.js"></script>
   

	    <!-- DataTables JavaScript -->
    <script src="admin/bower_components/datatables/media/js/jquery.dataTables.min.js"></script>
    <script src="admin/bower_components/datatables-plugins/integration/bootstrap/3/dataTables.bootstrap.min.js"></script>
    <!-- Custom Theme JavaScript -->
    <script src="admin/dist/js/sb-admin-2.js"></script>
</body>