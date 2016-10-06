<!DOCTYPE html>
<head><title>Ajout de crédits</title></head>
<?php 
	include("nav.php");
?>

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
            </div>
          </div>
		</div>
		
		<div class="col-sm-6">
          <div class="panel panel-success">
            <div class="panel-heading">
              <h3 class="panel-title">
 <?php
    // Ici on est bien loggué, on affiche un message
    echo 'Achat de crédits';
  ?> 
			</h3>
			
                
<form action="add_paypal.php" method="post">			
			</div>
            <div class="panel-body">
            Choisissez le nombre de crédit à ajouter :  <br /><br />
			<center>
			1 crédit <input type="radio" name="nbr_credit" value="1" checked/> Pour 20€ <br />
			2 crédit <input type="radio" name="nbr_credit" value="2"/> Pour 38€ <br />
			3 crédit <input type="radio" name="nbr_credit" value="3"/> Pour 55€ <br />
			4 crédit <input type="radio" name="nbr_credit" value="4"/> Pour 72€ <br /><br />
			
			
			
			<button type="submit" class="bouton" name="envoyer" value="paypal"><img src="images/payer_paypal.png"></button>
</form>
			</center>
			  
			  <br />
            </div>
          </div>
		</div>
		
		
</body>
</html>
