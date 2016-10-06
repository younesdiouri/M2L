<html>
<head><meta charset="UTF-8" />
<link rel="stylesheet" href="styleajoutml.css" type="text/css" />

<body>
<center>
<h1> Formulaire d'inscription:  </h1>

<div class="form-style-5">
<form action="formulaireml.php" method="post">
<fieldset>
<legend><span class="number">1</span> Info Membre</legend>
<input type="text" name="nom" placeholder="nom" /><br /><br />
<input type="text" name="prenom" placeholder="prenom" /><br /><br />
<input type="text" name="telephone" placeholder="telephone" /><br /><br />
<input type="text" name="ville" placeholder="ville" /><br /><br />
<input type="text" name="email" placeholder="email" /> <br /><br />
<input type="text" name="codepostal" placeholder="codepostal" /> <br /> <br />
<input type="text" name="adresse" placeholder="adresse" /> <br /> <br />
<label for="job">Sport:&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</label><select id="job" name="sport">
  <option value="escrime">escrime</option> 
  <option value="pingpong" selected>ping pong</option>
  <option value="tennis">tennis</option>
</select><br /> <br />


<input type="submit" value="valider" />
<input type="reset" value="annuler" />
</form>
</div>
