<?php 
include("headeradmin.php");	?>

 <div id="page-wrapper">
            
            
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Liste des Membres</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
				 <div class="panel panel-default">
                    <div class="panel-heading">
                            Vos Membres en détail:
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="dataTable_wrapper">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
									<tr><th> Nom </th><th> Prénom </th><th> Téléphone </th><th> Adresse </th><th> Ville </th><th> Code postale </th> <th>Email</th><th>Sport</th><th>Modifier</th><th>Supprimer</th></tr>
									</thead>
									<tbody>
									<?php
@mysql_connect("localhost","root","");
$test=mysql_select_db("agenda");
if(!$test) echo mysql_error();
$req = "select * from contact order by nom";
$resultat = mysql_query($req);
if(!$resultat) echo mysql_error();
$ligne = mysql_fetch_assoc($resultat);

while($ligne)
{
	echo "<tr><td>".$ligne["nom"]."</td><td>".$ligne["prenom"]."</td><td> ".$ligne["telephone"]."</td><td> ".$ligne["adresse"]."</td>
	<td> ".$ligne["ville"]."</td><td> ".$ligne["codepostal"]."</td><td> ".$ligne["email"]."</td><td>".$ligne["sport"]."</td></td><td class='text-center'><a class='btn btn-info btn-xs' href='modif2.php?num=".$ligne["idcontact"]."'>
											<span class=\"glyphicon glyphicon-edit\"></span>Editer</a></td>
											<td class='text-center'><a  class=\"btn btn-danger btn-xs\" href='sup1.php?num=".$ligne["idcontact"]."' 
											onclick=\"return confirm('Êtes-vous certain de vouloir effacer définitivement cette entrée ?')\">
											<span class=\"glyphicon glyphicon-remove\"></span>Suppr</a></td></tr>";
	$ligne = mysql_fetch_assoc($resultat);


}

?>
</tbody>
</table><script>
    $(document).ready(function() {
        $('#dataTables-example').DataTable({
                responsive: true
        });
    });
    </script>
<br /><br /><br /><br />