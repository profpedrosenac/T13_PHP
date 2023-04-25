<?php
	//sleep(3);
	print_r($_POST);
	$image = $_POST['txtImg'];
	echo "<img src='data:image/png;base64, $image' width=300>";
?>