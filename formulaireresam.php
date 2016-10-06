<!DOCTYPE html>
<head><title>Réserver</title></head>
<?php include('nav.php') ?>
<script type="text/javascript" src="moment-with-langs.min.js"></script>
      <script type="text/javascript" src="daterangepicker.js"></script>
<link rel="stylesheet" type="text/css" media="all" href="daterangepicker.css" />
 <script type="text/javascript">
        moment.lang('fr');
        var pickerLocale = {
            applyLabel: 'OK',
            cancelLabel: 'Annuler',
            fromLabel: 'Entre',
            toLabel: 'et',
            customRangeLabel: 'Période personnalisée',
            daysOfWeek: moment().lang()._weekdaysMin,
            monthNames: moment().lang()._months,
            firstDay: 0
        };
        var pickerRanges = {
           'Aujourd\'hui': [moment(), moment()],
           'Hier': [moment().subtract('days', 1), moment().subtract('days', 1)],
           '5 jours précédents': [moment().subtract('days', 4), moment().subtract('days', 1)],
           'Ce mois': [moment().startOf('month'), moment().endOf('month')],
           'Mois précedent': [moment().subtract('month', 1).startOf('month'), moment().subtract('month', 1).endOf('month')]
        };
         $(document).ready(function() {
            $('#periode').daterangepicker(
               {
                  showDropdowns: false,
                  ranges: pickerRanges,
                  format: 'DD/MM/YYYY',
                  separator: ' à ',
                  locale: pickerLocale
               }
           );
            $('#periode_heure').daterangepicker(
               {
                  startDate: moment().subtract('days', 1),
                  endDate: moment(),
                  showDropdowns: false,
                  showWeekNumbers: true,
                  timePicker: true,
                  timePickerIncrement: 1,
                  timePicker12Hour: false,
                  ranges: pickerRanges,
                  format: 'DD/MM/YYYY hh:mm',
                  separator: ' à ',
                  locale: pickerLocale
               }
            );
            $('#date_simple').daterangepicker(
               {
                  startDate: moment(),
                  format: 'DD/MM/YYYY',
                  singleDatePicker: true,
                  locale: pickerLocale
               }
           );
         });
        </script>
<h1><center>Créer une Réservation</center><br /></h1>
<div class="container">
	<form method="POST" action="formulaireresam.php" class="form-inline" role="form">
<div class="form-group">
<label for="exampleInputName2">Date (JJ-MM-AAAA) : <input type="text" id="date_simple" name="date" class="form-control">
            <i class="glyphicon glyphicon-calendar fa fa-calendar"></i>
		<!--	Période: <input type="text" style="width: 300px" name="periode_heure" id="periode_heure" />-->
<div class="form-group">
<label for="exampleInputName2">Heure début (HH:MM) :</label>  <input type="text" class="form-control" name="heuredebut" /></div>&nbsp;&nbsp;&nbsp;
<div class="form-group">
<label for="exampleInputName2">Heure fin (HH/MM):</label> <input type="text" class="form-control" name="heurefin" /> </div>
<center><br /><div class="form-group">
<label for="exampleInputName2">Votre Sport:</label>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<select class="form-control" name="sport">
          <option value="escrime">Escrime</option> 
          <option value="pingpong">Tennis de table</option>
          <option value="tennis">Tennis</option>
      </select><br /> </div>
<br /><br />
<input type="submit" class="btn btn-success" name="valider" value="Envoyer" /> &nbsp;&nbsp;&nbsp;
<input type="reset" class="btn btn-danger" name="annuler" value="Annuler" />
</center>
</form></div>
<?php 
if(isset($_POST["valider"]))
{
	$date = $_POST["date"];
   $heuredebut=$_POST["heuredebut"];
   $heurefin=$_POST["heurefin"];
   $sport=$_POST["sport"];
 // Une reservation par personne
 $match="select count(*) from reservation where login='".$_SESSION["login"]."'";
 //la resa de doit pas empieter sur un creneau donne
 if(preg_match('`^(00|01|02|03|04|05|06|07|08|09|10|11|12|13|14|15|16|17|18|19|20|21|22|23):[0-5][0-9]`', $heuredebut) && preg_match('`^(00|01|02|03|04|05|06|07|08|09|10|11|12|13|14|15|16|17|18|19|20|21|22|23):[0-5][0-9]`', $heurefin)) {
$duplicate="select count(*) from reservation where date='$date' and sport='$sport' and ((heuredebut>='$heuredebut' and heuredebut<='$heurefin')or(heuredebut<='$heuredebut'and heurefin>='$heurefin')or
(heurefin>='$heuredebut' and heurefin<='$heurefin'))";
 $resu=mysql_query($match);
 $data = mysql_fetch_array($resu);
 $dupli=mysql_query($duplicate);
 $datadu = mysql_fetch_array($dupli);
 if($data[0]>=1){
 echo '<script>alert("Il a deja une reservation en votre nom!");</script>';
 }
 elseif($datadu[0]==1){
echo '<script>alert("Ce créneau est déjà utilisé!");</script>';
 }
else {

//retrait du crédit
				$comptecred="select credits from contact where login='".$_SESSION["login"]."'";
				$cptcredquery=mysql_query($comptecred);
				$nbcred = mysql_fetch_array($cptcredquery);
				if($nbcred[0]<=0) echo '<script>alert("Vous n\'avez pas assez de crédits sur votre compte.");</script>';
				else {
					$req="insert into reservation(date,sport,heuredebut,heurefin,login) values ('$date','$sport','$heuredebut','$heurefin','".$_SESSION["login"]."')";
					$query=mysql_query($req);
					echo '<script>alert("Votre reservation a été prise en compte.");</script>';
					$updatecredit="update contact set credits=credits-1 where login='".$_SESSION["login"]."'";
					$creditquery=mysql_query($updatecredit);
					}
}
}
}
 ?></div>


 
