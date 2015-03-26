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
		<p>Je speelt 
			<?=
			  if ($_POST['count'] == 'one')
			  {
			    echo '<p>minder dan 5</p>';
			  }
			  elseif ($_POST['count'] == 'two')
			  {
			    echo '<p>tussen de 5 en de 15</p>';
			  }
			  elseif ($_POST['count'] == 'three')
			  {
			    echo '<p>meer dan 15</p>';
			  }
			?> 
		per jaar</p>
</p>
	</div>
</body>
</html>