<!DOCTYPE html>
<html>
<head>
	<title>Log in</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body>
<?php
require "connection.php";
    $sql = "SELECT * FROM film";
	$query = mysqli_query($db,$sql); 
	$result = mysqli_fetch_all($query,MYSQLI_ASSOC);
	
	foreach ($result as $row) {
        echo "<div class='col-lg-4'><div class='card'><div class='card-body'> <h4 class='card-title'>".$row["Naziv"]."</h4><p class='card-text'>Reziser: ".$row["Reziser"]."</p><p class='card-text'>Duzina trajanja: ".$row["DuzinaTrajanja"]."</p><p class='card-text'>Datum izlaska: ".$row["DatumIzlaska"]."</p><button class='card-button btn btn-primary'>Iznajmi $".$row["CijenaIznamljivanja"]."</button><button class='btn btn-danger card-button'>Kupi $".$row["CijenaKupovine"]."</button><p class='card-text'>Rating: ".$row["Rating"]."</p><p class='card-text'>Box office: $".$row["BoxOffice"]."</p></div></div></div>";
	}



?>