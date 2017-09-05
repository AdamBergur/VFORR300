<?php 

include_once $_SERVER['DOCUMENT_ROOT'] . '/nemendur/adambergur/jokes/categories/worker.php';
?>

<?php include_once $_SERVER['DOCUMENT_ROOT'] . '/nemendur/adambergur/jokes/workers/htmlSpecialChars.php';

 ?>

<!DOCTYPE html>
<html lang-'en'>
	<head>
		<meta charset='utf-8'>
		<title>Manage Categories</title>
		<style>
			body {
			background:#141E30;
			}
			a {
			color:white;
			}
			p{
			color:white;
			}
			h1{
			color:white;
			}
			form{
			color:white;
			}
		</style>
	</head>
	<body>
		<h1>Manage Categories</h1>
		<p><a href='worker.php?add'>Add new category</a></p>
		<ul>
			<?php 
			foreach ($categories as $category): ?>
			<li>
				<form action='' method='post'>
				<div>
					<?php echo html($category['name']); ?>
					<input type='hidden' name='id' value='<?php echo $category['id']; ?>'>
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