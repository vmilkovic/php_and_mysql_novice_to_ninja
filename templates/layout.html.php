<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="jokes.css">
	<link rel="stylesheet" href="form.css">
	<title><?= $title ?></title>
</head>
<body>

	<header>
		<h1>Internet Joke Databese</h1>
	</header>
	<nav>
		<ul>
			<li><a href="index.php">Home</a></li>
			<li><a href="index.php?route=joke/list">Jokes List</a></li>
			<li><a href="index.php?action=joke/edit">Add a new Joke</a></li>
		</ul>
	</nav>
	<main>
		<?=$output?>
	</main>
	<footer>
		&copy; IJDB 2019
	</footer>
</body>
</html>