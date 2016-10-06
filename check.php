<?php




if(isSet($_POST['username']))
{
$username = $_POST['username'];

@mysql_connect("localhost","root","");
	mysql_select_db("agenda");

$sql_check = mysql_query("select login from contact where login='".$username."'") or die(mysql_error());

if(mysql_num_rows($sql_check))
{
echo '<font color="red">Le pseudo <STRONG>'.$username.'</STRONG> est déjà utilisé.</font>';
}
else
{
echo 'OK';
}

}

if(isSet($_POST['mail']))
{
$mail = $_POST['mail'];

@mysql_connect("localhost","root","");
	mysql_select_db("agenda");

$sql_check = mysql_query("select email from contact where email='".$mail."'") or die(mysql_error());

if(mysql_num_rows($sql_check))
{
echo '<font color="red">Adresse email <STRONG>'.$mail.'</STRONG> déjà utilisé.</font>';
}
else
{
echo 'OK';
}

}

?>