<?php 
	
	
	if(isset($_POST["envoyer"]))
{
	$nbr_credit = $_POST["nbr_credit"];
	
	if($nbr_credit == 1)
	{
		$prix = 20;
		$_SESSION["prix"] = $prix;
	}
	
	if($nbr_credit == 2)
	{
		$prix = 35;
		$_SESSION["prix"] = $prix;
	}
	
	if($nbr_credit == 3)
	{
		$prix = 55;
		$_SESSION["prix"] = $prix;
	}
	
	if($nbr_credit == 4)
	{
		$prix = 72;
		$_SESSION["prix"] = $prix;
	}
	
}
?>
</html>


<head>
<title>Chargement...</title>
<link rel="stylesheet" href="paypal.css">
</head>

<body onload="document.paypal.submit()">
<form action="https://www.sandbox.paypal.com/cgi-bin/webscr" name="paypal" method="post">

<!-- Indication du montant HT du panier ou TTC si la TVA n'est pas détaillée -->

<input name="amount" type="hidden" value="<?php echo $_SESSION['prix']; ?>" />

<!-- Indication de la devise -->

<input name="currency_code" type="hidden" value="EUR" />

<!-- Indication du montant des frais de port -->

<input name="shipping" type="hidden" value="0" />

<!-- Indication de l'URL de retour automatique -->

<input name="return" type="hidden" value="http://localhost/PHP/M2Lfinal/m2l/membres.php" />

<!-- Indication de l'URL de retour si annulation du paiement -->

<input name="cancel_return" type="hidden" value="http://localhost/PHP/M2Lfinal/m2l/membres.php" />

<!-- Indication de l'URL de retour pour contrôler le paiement -->

<input name="notify_url" type="hidden" value="http://localhost/PHP/M2Lfinal/m2l/ipn.php" />

<!-- Indication du type d'action -->

<input name="cmd" type="hidden" value="_xclick" />

<!-- Indication de l'adresse e-mail test du vendeur (a remplacer par l'e-mail de votre compte Paypal en production) -->

<input name="business" type="hidden" value="hellday07-facilitator@gmail.com" />

<!-- Indication du libellé de la commande qui apparaitra sur Paypal -->

<input name="item_name" type="hidden" value="Achat de credit M2L" />

<!-- Indication permettant à l'acheteur de laisser un message lors du paiement -->

<input name="no_note" type="hidden" value="1" />

<!-- Indication de la langue -->

<input name="lc" type="hidden" value="FR" />

<!-- Indication du type de paiement -->

<input name="bn" type="hidden" value="PP-BuyNowBF" />

<!-- Indication du numéro de la commande (très important) 

<input name="custom" type="hidden" value="<?php echo $_SESSION['commande']; ?>" /> -->


</form>

<h1>Chargement vers Paypal</h1>
<div class="paypal"></div>
<p>Veuillez patienter</p>

</body>



</html>
