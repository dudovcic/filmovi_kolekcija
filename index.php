<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="./css/styles.css" /> 
<title>Filmovi</title>


</head>

<!-- Navigation -->
<nav class="navbar navbar-custom navbar-fixed-top" role="navigation">
  <div class="container">
    <div class="navbar-header">
      <a class="navbar-brand page-scroll" href="#page-top"> <i class="fa fa-paper-plane-o"></i> PHP Seminar</a> </div>
  

<div id="abc">
<form action="index.php" method="POST" name="letter" onclick="submit">
| <a href="index.php?letter=A">A</a> | <a href="index.php?letter=B">B</a> | <a href="index.php?letter=C">C</a> | <a href="index.php?letter=D">D</a> | <a href="index.php?letter=E">E</a> | <a href="index.php?letter=F">F</a> | <a href="index.php?letter=G">G</a> | <a href="index.php?letter=H">H</a> | <a href="index.php?letter=I">I</a> | <a href="index.php?letter=J">J</a> | <a href="index.php?letter=K">K</a> | <a href="index.php?letter=L">L</a> | <a href="index.php?letter=M">M</a> | <a href="index.php?letter=N">N</a> | <a href="index.php?letter=O">O</a> | <a href="index.php?letter=P">P</a> | <a href="index.php?letter=R">R</a> | <a href="index.php?letter=S">S</a> | <a href="index.php?letter=T">T</a> | <a href="index.php?letter=U">U</a> | <a href="index.php?letter=V">V</a> | <a href="index.php?letter=Z">Z</a> | 
</form>
</div>

<?php 





// Connect to DB
if ( isset($_GET['letter'] )) {
	
$char = $_GET["letter"];

	try {
		$con = mysqli_connect('127.0.0.1:3306','root','', 'kolekcija');

		// Query string
		$query = "SELECT * FROM filmovi WHERE naslov LIKE '$char%'";
		// Query result
		$result = mysqli_query($con, $query);

		echo "<table id='showit'>"
		."<tr>"
			."<td>Slika</td>"
			."<td>Naslov filma</td>"
			."<td>Godina</td>"
			."<td>Trajanje</td>"
			."<td>Akcija</td>"
		."</tr>";
		
		while ($row = mysqli_fetch_assoc($result) ) {

			//print_r( $row['naslov'] );

			echo 
			"<tr>"

				."<td>"."<img src='".$row['slika']."'/>"."</td>"
				."<td>".$row['naslov']."</td>"
				."<td>".$row['godina']."</td>"
				."<td>".$row['trajanje']."</td>"
				."<td>".$row['id_zanr']."</td>"

			."</tr>";


		}

		echo "</table>";
	} catch ( Exception $err ) {
			echo $err;
		}

						// TEST
					// if ( isset($con) ) {
					// 	echo "<br/><br/>Connected to the DB <br/><br/><br/>";
					// 	echo $char;
					// } else {
					// 	echo "Failed connecting to the DB";
					// }



}

	
?>

</div>
</body>
</html>

