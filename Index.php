<!DOCTYPE html>
<html>
	<head>
		<link type='text/css' rel='stylesheet' href='./css/style.css'>
		<title>PHPCornac</title>
		<meta charset='utf-8'>
	</head>

	<body>

		<?php
			include 'header.php';
		?>

		<p>
			<?php

				include 'tableau.php';

				foreach($tab as $element){
					if ($element == 'Clown') {
						echo "<p>10h $element Bozo</p>";
					}
					elseif ($element == 'Magicien') {
						echo "<p>11h $element Le grand Manitou</p>";
					}
					elseif ($element == 'Trapeziste') {
						echo "<p>12h $element Alfeo</p>";
					}
					elseif ($element == 'Jongleur') {
						echo "<p>13h30 $element Jean francois dit main leste</p>";
					}
				}

			?>
		</p>

		<?php
			include 'footer.php';
		?>

	</body>
</html>