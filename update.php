<?php
	require('lib/print.php');
?>

<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Update</title>
</head>
<body>
  <h1>WEB</h1>
  <form action="update_process.php" method="post">
    <input type="hidden" name="old_title" value="<?php print_title(); ?>">
    <input type="text" placeholder="Title" name="title" value="<?php print_title(); ?>"><br>
    <textarea name="desc" placeholder="Description" cols="30" rows="10"><?php print_desc(); ?></textarea><br>
    <input type="submit" value="Submit">
    <input type="reset" value="Reset">
  </form>
</body>
</html>