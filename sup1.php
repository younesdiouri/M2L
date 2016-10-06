<?php 
$num=$_GET["num"];
@mysql_connect("localhost","root","");
 mysql_select_db("agenda");
 $req="delete from contact where idcontact=$num";
 mysql_query($req);
 header("location:admin.php");

?>