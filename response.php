<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="style.css">
	<title>Gamer result</title>
</head>
<body>
	<div class="container">
		<h1>Jouw profiel</h1>
		<p>Je favoriete spel is <?= $_POST['game'] ?></p>
		<p>Je favoriete genre is <?= $_POST['genre'] ?></p>
			<?php
			  if ($_POST['count'] == 'one')
			  {
			    echo '<p>Je speelt minder dan 5 spellen per jaar</p>';
			  }
			  elseif ($_POST['count'] == 'two')
			  {
			    echo '<p>Je speelt tussen de 5 en de 15 spellen per jaar</p>';
			  }
			  elseif ($_POST['count'] == 'three')
			  {
			    echo '<p>Je speelt meer dan 15 spellen per jaar</p>';
			  }
			?>
	</div>
</body>
</html>