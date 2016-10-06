<?php 
include("headeradmin.php");	?>
<script type="text/javascript" src="moment.js"></script>
<script type="text/javascript" src="daterangepicker.js"></script>
<link rel="stylesheet" type="text/css" media="all" href="daterangepicker.css" />
 <div id="page-wrapper">
            
            
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">PGI-m2L</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                        
            <h4>FONCTIONS DE CHANGEMENT DE LOGIN ET MOT DE PASSE:</h4>
			<br />
			<div class="col-lg-3">
			
			
			
			
			
			<form class="form" role="form" method="POST" action="post-user.php">
			<?php 
			$req="select idcontact,nom,prenom from contact order by idcontact";
			$query=mysql_query($req);
			$ligne=mysql_fetch_assoc($query);
			?>
			<br /><br />
			<label for="InputName">Choisir un membre de la m2l :</label><br />
			<div class="form-group">
    <label for="InputName"></label><input type="hidden" name="id" value="<?php echo $ligne["idcontact"];?>">
</div>

    <select class="form-control" name="membre">
		<?php
			while($ligne)
			{
				echo "<option value='".$ligne["idcontact"]."'>".$ligne["nom"]." ".$ligne["prenom"]."</option>";
				$ligne=mysql_fetch_assoc($query);
			}
		?>
	</select>
	<br />
	
  <button type="submit" name="envoyer" class="btn btn-primary btn-lg">Ajouter</button>
</form>