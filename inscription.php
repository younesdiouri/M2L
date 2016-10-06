<!DOCTYPE HTML>
<html>

<head>
	<meta charset="utf-8">
	<link href="css/inscription.css" rel="stylesheet">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	<link rel="shortcut icon" type="image/x-icon" href="images/favicon.ico">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" rel="stylesheet" integrity="sha256-MfvZlkHCEqatNoGiOXveE8FIwMzZg4W85qfrfIFBfYc= sha512-dTfge/zgoMYpP7QbHy4gWMEGsbsdZeCXz7irItjcC3sPUFtf0kuFbDz/ixG7ArTxmDjLXDmezHubeNikyKGVyQ==" crossorigin="anonymous">
	<link href="http://getbootstrap.com/examples/theme/theme.css" rel="stylesheet"/>
	<script src="http://code.jquery.com/jquery-2.1.4.min.js"></script>
	<script src='https://www.google.com/recaptcha/api.js'></script>
	
  
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js" integrity="sha256-Sk3nkD6mLTMOF0EOpNtsIry+s1CsaqQC1rVLTAy+0yc= sha512-K1qjQ+NcF2TYO/eI3M6v8EiNYZfA95pQumfvcVrTHtwQVDG+aHRqLi/ETn2uB+1JqwYqVG3LIvdm9lj6imS/pQ==" crossorigin="anonymous"></script>
	<script src="js/inscription.js"></script>
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

<title>Accueil inscription</title></head>


<link rel="stylesheet" type="text/css" href="css/style-base.css" />
 <script type="text/javascript">
$(document).ready(function()
{    
 $("#username").keyup(function()
 {  
  var name = $(this).val(); 
  
  if(name.length > 5)
  {  
   $("#result").html('<img src="loader.gif"/> Recherche...');
   
   $.post("inscription-checker.php", $("#reg-form").serialize())
    .done(function(data){
    $("#result").html(data);
   });
   
   $.ajax({
    
    type : 'POST',
    url  : 'inscription-checker.php',
    data : $(this).serialize(),
    success : function(data)
        {
              $("#result").html(data);
           }
    });
    return false;
   
  }
  else
  {
   $("#result").html('Doit contenir plus de 5 caractères');
  }
 });
 
 
  $("#mail").keyup(function()
 {  
  var mail = $(this).val(); 
  
    if(mail.indexOf("@") >= 0)
	{
   $("#result2").html('<img src="loader.gif"/> Recherche...');
   
   $.post("mail-checker.php", $("#reg-form").serialize())
    .done(function(data){
    $("#result2").html(data);
   });
   
   $.ajax({
    
    type : 'POST',
    url  : 'mail-checker.php',
    data : $(this).serialize(),
    success : function(data)
        {
              $("#result2").html(data);
           }
    });
    return false;
	}
   else
  {
   $("#result2").html('<font class="red">Doit contenir un @</font>');
  }
  });
  
 });

</script>

</head>

<body>
<div class="container">
<div class="stepwizard">
    <div class="stepwizard-row setup-panel">
        <div class="stepwizard-step">
            <a href="#step-1" type="button" class="btn btn-primary btn-circle">1</a>
            <p>Informations</p>  
        </div>
        <div class="stepwizard-step">
            <a href="#step-2" type="button" class="btn btn-default btn-circle" disabled="disabled">2</a>
            <p>Compte</p>
        </div>
       
    </div>
</div>
<form role="form" method="POST" action="add.php"  >
    <div class="row setup-content" id="step-1">
        <div class="col-xs-12">
            <div class="col-md-12">
                <h3> Informations personnels</h3>
                <div class="form-group">
                    <label class="control-label">Nom</label>
                    <input  maxlength="100" type="text" name="nom" required="required" class="form-control" placeholder="Saisir nom"  />
                </div>
                <div class="form-group">
                    <label class="control-label">Prenom</label>
                    <input maxlength="100" type="text" name="prenom" required="required" class="form-control" placeholder="Saisir prenom" />
                </div>
				
				<div class="form-group">
                    <label class="control-label">Telephone</label>
                    <input maxlength="10" type="text" name="telephone" required="required" class="form-control" placeholder="Saisir telephone" />
                </div>
				
				<div class="form-group">
                    <label class="control-label">Ville</label>
                    <input maxlength="100" type="text" name="ville" required="required" class="form-control" placeholder="Saisir ville" />
                </div>
				
				<div class="form-group">
                    <label class="control-label">E-mail</label>
                    <input maxlength="100" type="text" name="mail" id="mail" required="required" class="form-control" placeholder="Saisir e-mail" />
               <div id="result2"></div> </div>
				
				<div class="form-group">
                    <label class="control-label">Code Postal</label>
                    <input maxlength="5" type="text" name="codepostal" required="required" class="form-control" placeholder="Saisir Code Postal" />
                </div>
				
				<div class="form-group">
                    <label class="control-label">Adresse</label>
                    <input maxlength="100" type="text" name="adresse" required="required" class="form-control" placeholder="Saisir adresse" />
                </div>
				
				<div class="form-group">
				<label class="control-label">Sport</label>
				<select name="sport" class="form-control">
					<option value="tennis">Tennis</option>
					<option value="escrime">Escrime</option>
					<option value="pingpong">Ping-pong</option>
					</select>
                </div>
				<a href="index.php"><button class="btn btn-secondary" type="button" >Retour à l'accueil</button></a>
                <button class="btn btn-primary nextBtn btn-lg pull-right" type="button" >Suivant</button>
            </div>
        </div>
    </div>
    <div class="row setup-content" id="step-2">
        <div class="col-xs-12">
            <div class="col-md-12">
                <h3>Informations de compte</h3>
                <div class="form-group">
                    <label class="control-label">Identifiant:</label>
                    <input maxlength="200" type="text" name="login" id="username" required="required" class="form-control" placeholder="Saisr Identifiant" />
                <div id="result"></div></div>
                <div class="form-group">
                    <label class="control-label">Mot de Passe:</label>
                    <input maxlength="200" type="password" name="password" required="required" class="form-control" placeholder="Saisir Mot de Passe"  />
                </div>
				<div class="g-recaptcha" data-sitekey="6LfVGR0TAAAAAIGeOfBkJXQYt7C3sS0O10HxoX-2"></div>
                <button class="btn btn-success btn-lg pull-right" name="envoyer" type="submit">Terminer l'inscription</button>
            </div>
        </div>
    </div>
    
</form>
</div>

</body>
<script src="js/inscription.js"></script>