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
		<p>Je speelt op<?php if (isset($_POST['pc'])){echo " de PC,";} if (isset($_POST['wii'])){echo " de WAA,";} if (isset($_POST['xb_360'])){echo " de XBAV 360,";} if (isset($_POST['ps_3'])){echo " de Playstation 3.";} ?> </p>
	</div>
</body>
</html>