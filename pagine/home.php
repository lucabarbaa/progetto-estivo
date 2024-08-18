<?php
	session_start();
    if(!isset($_SESSION['username'])){ 
		header('location: home.php');
	}
    $username = $_SESSION["username"];

?>


<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>online store</title>
</head>
<body>
    <?php
        require("nav.php");
    ?>
    <div class="contenuto">
        <h1>online store</h1>
		<h2>home page</h2>
