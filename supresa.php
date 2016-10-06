<?php 
$num=$_GET["num"];
@mysql_connect("localhost","root","");
 mysql_select_db("agenda");
 $req="delete from reservation where id=$num";
 mysql_query($req);
 header("location:resa.php");

?>