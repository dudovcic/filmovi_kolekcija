<!DOCTYPE html>
<html>
<head>
	<title>Unos</title>
	<link rel="stylesheet" href="./css/styles.css" />
</head>
<body>
<div id="table">
	<form method="POST" action="unos.php" id="unos">
		<table>

			 <tr>
			    <th>Naslov:</th>
			    <td><input type="text" name="naslov"></input></td>
			  </tr>
			  <tr>
			    <th>Zanr:</th>
			    <td>

					<select form="unos" name="zanr">
					  <option value="volvo">Akcija</option>
					  <option value="saab">Drama</option>
					  <option value="opel">Fantazija</option>
					  <option value="asdaw">Sci-fi</option>
					</select>

			    </td>
			  </tr>
			  <tr>
			    <th>Godina:</th>
			    <td><input type="text" name="godina"></input></td>
			  </tr>
			   <tr>
			    <th>Trajanje:</th>
			    <td><input type="text" name="trajanje"></input></td>
			  </tr>
			   <tr>
			    <th>Slika:</th>
			    <td><input type="file" name="slika"></input></td>
			  </tr>
			   <tr>
			    <th>Gumb:</th>
			    <td><input type="submit" name="submit"></input></td>
			  </tr>

		</table>
	</form>
</div>

</body>
</html>


<?php 

if ( isset( $_POST['submit'] )) {

	$naslov = $_POST['naslov'];
	$zanr = $_POST['zanr'];
	$godina = $_POST['godina'];
	$trajanje = $_POST['trajanje'];
	$slika = $_POST['slika'];

	$con = mysqli_connect('127.0.0.1:3306','root','', 'kolekcija');

	$query = "INSERT INTO filmovi ( naslov, id_zanr, godina, trajanje, slika ) VALUES ( '$naslov', 2, '$godina', '$trajanje', '$slika' )";

	mysqli_query($con, $query);
}



 ?>