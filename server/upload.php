<?php
if(isset($_FILES) and !empty($_FILES)) {
	$f = $_FILES["file"];
	if(move_uploaded_file($f["tmp_name"], $f["name"]))
		echo "{$f["name"]} Uploaded.\n";
}
?>
