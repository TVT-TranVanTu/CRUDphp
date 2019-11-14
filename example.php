<?php
$link = new mysqli("localhost","root","","phpdata") or die ("khong the ket noi den CSDL My SQL");
	
$sql = "select *from person";
$result = mysqli_query($link,$sql);
	
	echo "<table border='1' width='80%'>";
	echo "<caption>Du lieu bang person</caption><br>";
	echo "<tr><th>keyname</th><th>name</th><th>dateofbight</th><th>total</th><th>handling</th></tr><br>";
		while($row=mysqli_fetch_array($result))
	{
		$keyname = $row{"keyname"};
		$name = $row{"name"};
		$dateofbight = $row{"dateofbight"};
		$total = $row{"total"};
		echo "<tr>";
			echo "<td>$keyname</td>";
			echo "<td>$name</td>";
			echo "<td>$dateofbight</td>";
			echo "<td>$total</td>";
		echo "<td><a class='delete' href='Delete.php?id=$keyname'>Delete</a>   |
		<a href='Update.php?id=$keyname'>Update</a></td></tr>";
	}
	echo "</table>";
	echo "<title>Insert data</title>";
?>
	<h2>Them du lieu </h2>
	<a class="add" href="add.php">Add new data</a>





<style type="text/css" media="screen">
	table{
		margin: auto;
	}
	h2{
		text-align: center;
	}
	.add{
		text-decoration: none;
		text-align: center;
		font-size: 20px;
	}
	caption{
		font-size: 30px;
		font-weight: 700;
		margin-bottom: 20px;
	}
	td{
		font-weight: 500;
		font-size: 20px;
	}
	.fontinsert{
		padding: 15px;
		border: 1px solid black;
		margin-top: 40px;
	}
	td a{
		list-style: none;
		text-decoration: none;
		text-align: center;
		padding-left: 10px;
		margin: auto;
		padding-left: 15%;
		padding-right: 12%;
	}
	.delete{
		color: red;
	}
</style>
