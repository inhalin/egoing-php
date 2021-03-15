<?php
	require('lib/print.php');
?>

<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>
		<?php
			print_title();
		?>
	</title>
</head>
<body>
	<h1><a href="index.php">WEB</a></h1>
	<a href="create.php">Create</a>
	<?php
		if(isset($_GET['id'])){ ?>
			<a href="update.php?id=<?= $_GET['id']; ?>">Update</a>
			<form action="delete.php?id=<?= $_GET['id']; ?>" method="post">
				<input type="hidden" name="id" value="<?= $_GET['id']; ?>">	
				<input type="submit" value="Delete">
			</form>
	<?php	} ?>
	<hr>
	<ol>
		<?php
			print_list();
		?>
	</ol>
	<h2>
		<?php 
			print_title();
		?>
	</h2>
	<p>
		<?php
			print_desc();
		?>
	</p>
</body>
</html>