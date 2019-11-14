
<a href="Update.php">update</a>
		<table class="fontinsert">
			<form method="post">
				<tr>
					<td>Keyname :</td>
					<td><input type="text" name="keyname" /></td>
				</tr>
				<tr>
					<td>Name :</td>
					<td><input type="text" name="name" /></td>
				</tr>
				<tr>
					<td>Date of bight :</td>
					<td><input type="text" name="dateofbight" /></td>
				</tr>
				<tr>
					<td>Total :</td>
					<td><input type="text" name="total" /></td>
				</tr>
				<tr>
					<td colspan="2">
						<input type="submit" value="Add new" name="insert"/>
					</td>
				</tr>
			</form>
		</table>


	<?php
	$link = new mysqli("localhost","root","","phpdata") or die ("khong the ket noi den CSDL My SQL");
		if(isset($_POST['insert'])){
			$keyname=$_POST['keyname'];
			$name=$_POST['name'];
			$dateofbight=$_POST['dateofbight'];
			$total=$_POST['total'];
			$sql = "INSERT INTO person VALUE('$keyname','$name','$dateofbight','$total')";
			mysqli_query($link,$sql) or die("them du lieu that bai");
			header('location:example.php');
		}

	?>	


	<style type="text/css" media="screen">
		.fontinsert{
			width: 40%;
			height: 200px;
			margin: auto;
			margin-top: 10%;
			background-color: #f8f9fa;
		}
		
	</style>