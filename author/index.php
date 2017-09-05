<?php 

include_once $_SERVER['DOCUMENT_ROOT'] . '/nemendur/adambergur/jokes/author/worker.php';
?>

<?php include_once $_SERVER['DOCUMENT_ROOT'] . '/nemendur/adambergur/jokes/workers/htmlSpecialChars.php';

 ?>

<!DOCTYPE html>
<html lang-'en'>
	<head>
		<meta charset='utf-8'>
		<title>Author</title>
	</head>
	<body>
		<h1>Author</h1>
		<p><a href='worker.php?add'>Add new author</a></p>
		<ul>
			<?php 
			foreach ($author as $authors): ?>
			<li>
				<form action='' method='post'>
				<div>
					<?php echo html($author['name']); ?>
					<input type='hidden' name='id' value='<?php echo $author['id']; ?>'>
					<input type='submit' name='action' value='Edit'>
					<input type='submit' name='action' value='Delete'>
				</div>
				</form>
			</li>
			<?php endforeach; ?>
		</ul>
		<p><a href='..'>Return to JMS home</a></p>
	</body>
</html>