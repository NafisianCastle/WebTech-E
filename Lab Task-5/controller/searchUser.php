<?php

require_once '../model.php';

if(isset($_POST['submit'])){
	$data = $_POST['search'];
	searchProduct($data);
}

?>