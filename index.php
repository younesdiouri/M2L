<head>
<meta charset="utf-8">
<link rel="shortcut icon" type="image/x-icon" href="images/favicon.ico">
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800' rel='stylesheet' type='text/css'>
	<link href="css/index.css" rel="stylesheet" type="text/css">
	<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.10.2.min.js"></script>
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
    <script type="text/javascript">
        window.alert = function(){};
        var defaultCSS = document.getElementById('bootstrap-css');
        function changeCSS(css){
            if(css) $('head > link').filter(':first').replaceWith('<link rel="stylesheet" href="'+ css +'" type="text/css" />'); 
            else $('head > link').filter(':first').replaceWith(defaultCSS); 
        }
        $( document ).ready(function() {
          var iframe_height = parseInt($('html').height()); 
          window.parent.postMessage( iframe_height, 'http://bootsnipp.com');
        });
    </script>
    <!-- Bootstrap Core CSS -->
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">	
	

	<title>Maison des Ligues de Lorraine</title>
</head>
<body>
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800' rel='stylesheet' type='text/css'>

<div class="container" style="margin-top:50px;">
	<div class="jumbotron" style="background-color:rgba(0,0,0,0);">
	<center><h1> Bienvenue sur le site de la M2L</h1>
	</div>
	
    <div id="tabs-home" class="row slider text-center"  style="background:url(images/background-m2l.jpg) no-repeat center fixed; border-radius:2%; padding-top:100px; padding-left:250px;">
        <div class="col-sm-4">
            <nav class="nav-sidebar">
                <ul class="nav tabs">
                    <li class="active"><a href="#tab1" data-toggle="tab"><p>UN Club Unique</p><span>Rejoignez-nous a la M2L</span></a></li>
                    <li class=""><a href="#tab2" data-toggle="tab"><p>S'inscrire</p><span>S'enregistrer et se connecter</span></a></li>
                    <li class=""><a href="#tab3" data-toggle="tab"><p>Déja inscrit?</p><span>Se connecter</span></a></li>   
                    <li class=""><a href="#tab4" data-toggle="tab"><p>Visiter le site</p><span>Toutes les activites de la M2L</span></a></li>  
                </ul>
            </nav>
        </div>
        <!-- tab content -->
        <div id="wea" class="col-sm-8 tab-content">
        
            <div class="tab-pane active text-style fade in active" id="tab1">
                <h2>La Maison des Ligues de Lorraine</h2>
                <p>Situe en Lorraine, plusieurs sports et coachs à votre disposition en plus d'applications</p>
                <p><strong>Ouvert 7J/7 de 8h à 23h</strong></p>
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">La M2l un espace privilégié</h3>
                    </div>
                    <div class="panel-body">
                     Réservez vos horaires sur le site, payer directement via <strong>Paypal</strong><br />
					Consultez les <strong>actualités</strong> du site!<br />
					Une équipe compétente à <strong>votre service!</strong><br />
                    </div>
                </div>
            </div>
            
            <div class="tab-pane text-style fade" id="tab2">
                <h2>Une inscription facile</h2>
                <p>Totalement sur internet et une inscription gratuite</p>
                <p><strong>Un paiement à la séance pour éviter des frais inutiles!</strong></p>
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">Cliquez sur le bouton pour commencer:</h3>
                    </div>
                    <div class="panel-body">
                       <a href="inscription.php"> <input type="button" value="S'inscrire" /></a>
                    </div>
                </div>
            </div>
            
            <div class="tab-pane text-style fade" id="tab3">
                <h2>Espace Membre !</h2>
                <p>Vous connecter en toute sécurité </p>
                <p><strong>Veuillez cliquer sur le bouton pour vous connecter:</strong></p>
                <a href="acceuilml.php"><button class="btn btn-primary btn-lg">Se connecter</button></a>
            </div> 
            
            <div class="tab-pane text-style fade" id="tab4">
                <h2>La Maison des Ligues de Lorraine n'attend que vous !</h2>
                <p>Déjà une communauté sportive vous attend. Vous pouvez vous rendre à notre <strong>adresse</strong> physique pour des informations supplémentaires.</p>
            </div> 
        </div>
        
    </div>
    









	<script type="text/javascript">
	 var stop = false;
$(document).ready(function() {
   
 
   
 
     var tabCarousel = setInterval(function() {
        var tabs = $('#tabs-home .nav.tabs > li'),
            active = tabs.filter('.active'),
            next = active.next('li'),
            toClick = next.length ? next.find('a') : tabs.eq(0).find('a');

        toClick.trigger('click');
    }, 5000);

    
});
	</script>
	</body>














