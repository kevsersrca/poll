<?php
include("connect.php");
$db=connect();
if(isset($_GET["id"]))
	$id=$_GET["id"];
		$musteri=$db->prepare('SELECT * FROM question where id=?');
		$musteri->execute(array($id));
		$musteri=$db->prepare('DELETE FROM question WHERE id=?');
		$musteri->execute(array($id));
		if($musteri){
			header("location:../../index.php");
		}
