<!DOCTYPE html>
<?php
//@DY@security
// On prolonge la session
session_start();
@mysql_connect("localhost","root","");
$test=mysql_select_db("agenda");
if(!$test) echo mysql_error();	
$req='select count(*) from contact where login="'.$_SESSION["login"].'"';
	$resultat = mysql_query($req);
		$data = mysql_fetch_array($resultat);
		if(!$data[0])
		{
			header('Location: index.php');
			//Unsession Redirect
  exit();
		}
//Si redirection avec un bouton precedent ou venant d'un autre page on traite le formulaire		
// { Début - Première partie
if(!empty($_POST) OR !empty($_FILES))
{
//post /files var superglob stockees
    $_SESSION['sauvegarde'] = $_POST ;
    $_SESSION['sauvegardeFILES'] = $_FILES ;
    
    $fichierActuel = $_SERVER['PHP_SELF'] ;
    if(!empty($_SERVER['QUERY_STRING']))
    {
        $fichierActuel .= '?' . $_SERVER['QUERY_STRING'] ;
    }
    
    header('Location: ' . $fichierActuel);
    exit;
}
// } Fin - Première partie

// { Début - Seconde partie
if(isset($_SESSION['sauvegarde']))
{
    $_POST = $_SESSION['sauvegarde'] ;
    $_FILES = $_SESSION['sauvegardeFILES'] ;
    
    unset($_SESSION['sauvegarde'], $_SESSION['sauvegardeFILES']);
}
// } Fin - Seconde partie


?>
<html lang="fr">
	<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Changer de mot de passe</title>
	<link rel="shortcut icon" type="image/x-icon" href="images/favicon.ico">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" rel="stylesheet" integrity="sha256-MfvZlkHCEqatNoGiOXveE8FIwMzZg4W85qfrfIFBfYc= sha512-dTfge/zgoMYpP7QbHy4gWMEGsbsdZeCXz7irItjcC3sPUFtf0kuFbDz/ixG7ArTxmDjLXDmezHubeNikyKGVyQ==" crossorigin="anonymous">
	<link href="http://getbootstrap.com/examples/theme/theme.css" rel="stylesheet"/>
	<script src="http://code.jquery.com/jquery-2.1.4.min.js"></script>
	<!-- validator FORM--><script src="js/validator.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js" integrity="sha256-Sk3nkD6mLTMOF0EOpNtsIry+s1CsaqQC1rVLTAy+0yc= sha512-K1qjQ+NcF2TYO/eI3M6v8EiNYZfA95pQumfvcVrTHtwQVDG+aHRqLi/ETn2uB+1JqwYqVG3LIvdm9lj6imS/pQ==" crossorigin="anonymous"></script>
	</head>
<body>
	 <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="membres.php">Maison des Ligues</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse navbar-right">
          <ul class="nav navbar-nav">
            <li class="active"><a href="membres.php">Accueil</a></li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Réservations<span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><a href="tabresamembre.php">Vos réservations</a></li>
                <li><a href="formulaireresam.php">Faire une réservation</a></li>
                <li style="background-color:orange;"><a href="resamembre.php">SOS Partenaires</a></li>
              </ul>
            </li>
			<li class="active"><a href="modif-password.php">Changer son mot de passe</a></li>
            <li><a href="contact.php">Contact</a></li>
            <li class="dropdown active">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Options <span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><a href="modifprofil.php">Modifier votre profil</a></li>
                <li><a href="logout.php">Se déconnecter</a></li>
              </ul>
            </li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="css/bootstrap/js/bootstrap.min.js"></script>
	<center>
        <h1>Changer votre mot de passe</h1> 
    </center>
	 
<div class="container">
<form data-toggle="validator" role="form" action="modif-password.php" method="post">
	  <div class="form-group col-sm-6">
    <label for="inputPassword" class="control-label">Nouveau Mot de Passe:</label>
    
      <input type="password" name="password" data-minlength="8" class="form-control" id="inputPassword" placeholder="Mot de passe" required>
      <span class="help-block">8 caractères au minimum.</span>
    </div>
    <div class="form-group col-sm-6">
	<label for="inputPassword" class="control-label">Confirmer le Mot de Passe:</label>
      <input type="password" class="form-control" id="inputPasswordConfirm" data-match="#inputPassword" data-match-error="Les mots de passe ne correspondent pas" placeholder="Confirmer le mot de passe" required>
      <div class="help-block with-errors"></div>
    </div>
	<br />
    <div class="form-group col-sm-1 col-sm-offset-11">
    <button type="submit" name="envoyer" class="btn btn-primary">Changer</button>
  </div>
	</form>
</div>	
	<?php
	if(isset($_POST["envoyer"]))
	{$password=$_POST["password"];	
		$req="update contact set password='$password', date_changepass='".date("Y-m-d")."' where login='".$_SESSION["login"]."'";
		$sql=mysql_query($req);
		if(!$sql) echo mysql_error();
		if($sql){
		echo '<br /><br /><br /><br /><div class="container"><div class="alert alert-success col-sm-6" role="alert"><strong>Merci!</strong>Votre mot de passe a bien été modifié</div></div>';
		}		
	}
	?>
</body>
   <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="css/bootstrap/js/bootstrap.min.js"></script>
    <script src="http://getbootstrap.com/assets/js/docs.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="http://getbootstrap.com/assets/js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>