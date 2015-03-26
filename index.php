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
			<p>
				<label>Wat is je favoriete spel?</label>
				<span><input type="text" name="game"/></span>
			</p>

			<p>
				<label>Wat is je favoriete genre?</label>
				<span>
					<select name="genre">
						<option>Action</option>
						<option>Adventure</option>
						<option>Cover Based Shooter</option>
						<option>First Person Shooter</option>
						<option>Hack 'n Slash</option>
						<option>Management Sim</option>
						<option>Puzzel</option>
						<option>Racing</option>
						<option>Racing</option>
						<option>Role Playing</option>
						<option>Strategy</option>
					</select>
				</span>
			</p>

			<p>
				<label>&nbsp;</label>
				<span><input class="button" type="submit" value="Send"/></span>
			</p>
		</form>
	</div>
</body>
</html>