<?php 
   //$valor_random = "https:\/\/images.dog.ceo\/breeds\/stbernard\/n02109525_2104.jpg";
$valor_random = file_get_contents('https://dog.ceo/api/breeds/image/random');
$valor_random = json_decode($valor_random);
$img = "<img width='35%' src= '$valor_random->message' />";
//https://idratherbewriting.com/learnapidoc/docapis_access_json_values.html
?>

<!DOCTYPE html>
<html>
<head>
	<title>Perros</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>
<body>
	<h3>PERROS</h3>
	<p>Consumiento web API de perros, donde aparecen aleatoriamente</p>
	<div>
		<a type="button" class="btn btn-success" style="width: 35%;" href="javascript:location.reload(true)">Random</a>
		<br><br>
		<?php 
            echo $img;
		 ?>
	</div>
</body>

</html>



