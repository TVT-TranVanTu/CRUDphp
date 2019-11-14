<?php
	$link = new mysqli("localhost","root","","phpdata") or die ("khong the ket noi den CSDL My SQL");
	if(isset($_GET['id'])){
		$keyname =$_GET['id'];
		$sql="DELETE FROM person WHERE keyname='$keyname'";
		mysqli_query($link,$sql) or die('xoa khong thanh cong');
		header('location:example.php');
	}

?>