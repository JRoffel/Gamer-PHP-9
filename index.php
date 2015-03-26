<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="style.css">
	<title>Gamer</title>
</head>
<body>
	<div class="container">
		<h1>Gamer</h1>
		<form method="post" action="response.php">
			<div>
				<label>Wat is je favoriete spel?</label>
				<span><input type="text" name="game"/></span>
			</div>

			<div>
				<label>Wat is je favoriete genre?</label>
				<span>
					<select name="genre">
						<option></option>
						<option>Action</option>
						<option>Adventure</option>
						<option>Cover Based Shooter</option>
						<option>First Person Shooter</option>
						<option>Hack 'n Slash</option>
						<option>Management Sim</option>
						<option>Puzzle</option>
						<option>Racing</option>
						<option>Racing</option>
						<option>Role Playing</option>
						<option>Strategy</option>
					</select>
				</span>
			</div>

			<div>
				<label>Hoeveel computerspellen speel je per jaar?</label>
				<span>
					<ul>
						<li><input type="radio" name="count" value="one"> Minder dan 5</li>
						<li><input type="radio" name="count" value="two"> Tussen 5 en 15</li>
						<li><input type="radio" name="count" value="three"> Meer dan 15</li>
					</ul>
				</span>
			</div>

			<div>
				<label>Op welke platformen speel je?</label>
				<ul>
					<li><input type="checkbox" name="platform[]" value="PC">PC</li>
					<li><input type="checkbox" name="platform[]" value="WAA">WAA</li>
					<li><input type="checkbox" name="platform[]" value="XBAV 360">XBAV 360</li>
					<li><input type="checkbox" name="platform[]" value="Playstation 3">Playstation 3</li>
				</ul>
			</div>

			<div>
				<label>&nbsp;</label>
				<span><input class="button" type="submit" value="Send"/></span>
			</div>
		</form>
	</div>
</body>
</html>