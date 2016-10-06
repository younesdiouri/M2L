<!DOCTYPE HTML>
<html>

<head>
<meta charset="utf-8">
	<!-- Favicon -->
	<link rel="shortcut icon" type="image/x-icon" href="images/favicon.ico">
	
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
	<script src="jquery.js"></script>

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

<title>Connexion</title></head>

</head>

<body>
<div class="container" style="margin-top:200px;">
<div class="row">
<center>
<div class="modal-content">
          <div class="modal-header">
              <h4 class="modal-title" id="myModalLabel">Se connecter à m2l.com</h4>
          </div>
          <div class="modal-body">
              <div class="row">
                  <div class="col-xs-6">
                      <div class="well">
                          <form id="loginForm" method="POST" action="loginml.php">
                              <div class="form-group">
                                  <label for="username" class="control-label">Identifiant</label>
                                  <input type="text" class="form-control" id="username" name="login" value="" required="" title="Saisir votre identifiant" placeholder="login">
                                  <span class="help-block"></span>
                              </div>
                              <div class="form-group">
                                  <label for="password" class="control-label">Mot de Passe</label>
                                  <input type="password" class="form-control" id="password" name="password" value="" required="" title="Saisir votre mot de passe">
                                  <span class="help-block"></span>
                              </div>
                              <div id="loginErrorMsg" class="alert alert-error hide">Mauvais mot de passe ou login</div>
                              <div class="checkbox">
                                  <label>
                                      <input type="checkbox" name="remember" id="remember"> Se rappeler de l'identifiant
                                  </label>
                                  <p class="help-block">(si c'est un ordinateur privé)</p>
                              </div>
                              <input type="submit" name="connexion" value="Se Connecter" class="btn btn-success btn-block" />
                              
                          </form>
                      </div>
                  </div>
                  <div class="col-xs-6">
                      <p class="lead">Vous n'êtes pas inscrits? Rejoignez nous  <span class="text-success">GRATUITEMENT</span></p>
                      <ul class="list-unstyled" style="line-height: 2">
                          <li><span class="fa fa-check text-success"></span> Facilité d'inscription</li>
                          <li><span class="fa fa-check text-success"></span> Vos réservations en ligne</li>
                          <li><span class="fa fa-check text-success"></span> Une Interface unique</li>
                          <li><span class="fa fa-check text-success"></span> Un Staff qui vous accompagne</li>
                          <li><span class="fa fa-check text-success"></span> Une communauté sportive et dynamique!</li>
                          <li><a href="index.php"><u>En savoir plus</u></a></li>
                      </ul>
                      <p><a href="inscription.php" class="btn btn-info btn-block">Je veux m'inscrire !</a></p>
                  </div>
              </div>
          </div>
      </div>
	</div>
	<br /> 
	<br />
	
	<?php
	if(isset($success))
	{
		echo '<br /><div class="alert alert-success" role="alert">
	<strong>Merci!</strong> '.$success.'</div>';
	}
	?>
	<center><a href="index.php"><button class="btn btn-default btn-lg">Revenir à la Page d'accueil</button></a></center>
</div>
	  </body>