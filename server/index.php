<!DOCTYPE HTML>
<html>
	<head>
		<title>
			Upload to "lib" server
		</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width">
		<style>
		 * {
			 font-family:monospace;
			 font-size:20px;
		 }
		</style>
	</head>
	<body>
		<p><?php require("upload.php"); ?></p>

		<p>Files:</p>

		<?php
		/* Print latest uploads. */
		$ignore = [".", "..", "index.php", "upload.php"];

		$files = scandir(".");
		$files = array_diff($files, $ignore);

		echo "<ul>";
		foreach($files as $f) {
			$modif_time = number_format(
				(time() - filemtime($f)) / 60 / 60, 2);
			echo "<li>" .
			     "<a href='$f'>$f</a> " .
			     "<i>{$modif_time} hour(s) ago</i>" .
			     "</li>";
		}
		echo "</ul>";
		?>

		<form method="POST" enctype="multipart/form-data">
			<p>Upload lib/*.tar</p>
			<input type="file" name="file">
			<button type="submit">Upload</button>
		</form>
	</body>
</html>
