<?php 
	include("nav.php");
?>
<head>
    <!-- Bootstrap Core CSS -->
    <link href="admin/bower_components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="admin/bower_components/metisMenu/dist/metisMenu.min.css" rel="stylesheet">

    <!-- Timeline CSS -->
    <link href="admin/dist/css/timeline.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="admin/dist/css/sb-admin-2.css" rel="stylesheet">

    <!-- Morris Charts CSS -->
    <link href="admin/bower_components/morrisjs/morris.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="admin/bower_components/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
	

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

<title>Accueil membre</title></head>

<br />
<br />
<div class="container">
    <div class="row">
        <div class="col-sm-6">
          <div class="panel panel-success">
            <div class="panel-heading">
				<h3 class="panel-title">
				<?php
					// Ici on est bien loggué, on affiche un message
					echo 'Bienvenue, <strong> '. $_SESSION['login'].'</strong>';
				?> 
				</h3>
			
                
			
			</div>
            <div class="panel-body">
              Vos Informations : <br />
				<table class="table">
					<thead>
					<tr><th>Nom</th><th>Prénom</th><th>Sport</th><th>Crédits</th></tr>
					</thead>
					<tbody>
					<tr>
					<?php 
					$req="select * from contact where login='".$_SESSION["login"]."'";
					$query=mysql_query($req);
					$data=mysql_fetch_assoc($query);
					while($data)
					{
						echo "<tr><td>".$data["nom"]."</td><td>".$data["prenom"]."</td><td>".$data["sport"]."</td><td>".$data["credits"]."</td></tr>";
						$data=mysql_fetch_assoc($query);
					}
					?>
					</tbody>
				</table>
				<br />
            </div> <!-- fin div panel body -->
          </div> <!-- fin div panel  -->
		</div> <!-- fin div class-->
		
		
		<div class="col-sm-3">
			<div class="panel panel-default">
				<div class="panel-heading">
					<h3 class="panel-title">
					<?php
   
					echo '<strong> Ajout de crédits</strong>';
					?> 
					</h3>
			
					<div class="panel-body">
					<br />
					
					<a href="add-credits.php"/><img src="images/coin.png" /></a>
					<br />
					</div>
				</div>
			</div>
		</div>
		<div class="col-lg-3">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa-comments fa-5x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <div class="huge">1</div>
                                    <div>Nouveaux Messages!</div>
                                </div>
                            </div>
                        </div>
                        <a href="#">
                            <div class="panel-footer">
                                <span class="pull-left"><button data-toggle="modal" href="#infos" class="btn btn-primary">Détails</button>
														<div class="modal fade" id="infos">
															<div class="modal-dialog">
																<div class="modal-content">
																	<div class="modal-header">
																		<button type="button" class="close" data-dismiss="modal">x</button>
																		<h4 class="modal-title">Liste des messages</h4>
																	</div>
																	<div class="modal-body">
																		<strong>Admin</strong>: 06-12-2015 ; La maintenance des services infos s'effectue de 10H à 14H
																	</div>
																</div>
															</div>
														</div>
								</span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
        </div>
	</div>
	 

	<br />
	<br />
	<div class="row">
			<div class="table responsive">
				<table class= "table table-striped table-bordered table-hover">
					<thead>
						<tr><th>Actualite</th><th>Date</th><th>Heure</th></tr>
					</thead>
					<tbody>	
							<?php
							@mysql_connect("localhost","root","");
							$test=mysql_select_db("agenda");
							if(!$test) echo mysql_error();
							$req = "select * from actualite order by id limit 10";
							$resultat = mysql_query($req);
							$ligne = mysql_fetch_assoc($resultat);
							while($ligne)
							{
								echo "<tr><td>".$ligne["designation"]."</td><td>".$ligne["date"]."</td><td> ".$ligne["heure"]."</td></tr>";
								$ligne = mysql_fetch_assoc($resultat);
							
							}
							?>
					</tbody>
				</table>
				
			</div><!-- fin div table responsive -->
					
                    <!-- /.panel .chat-panel -->
    </div>
                <!-- /.col-lg-4 -->
				
				
		
</div><!-- fin div ROW -->

	

<br />
<br />

</body>

</html>
