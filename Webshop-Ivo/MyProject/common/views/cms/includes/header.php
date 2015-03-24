<!DOCTYPE html>
<html>
<head>
    <link href="css/style.css" rel="stylesheet" type="text/css">
	<script type="text/javascript" src="js/jquery-1.11.2.js"></script>
    <script type="text/javascript" src="js/script.js"></script>
</head>
<body>
    <h1>Softacad CMS v1</h1>
	<?php if (isset($_SESSION['user_id'])) { ?>
    <nav>
        <a href="index.php">Home</a>
        <a href="index.php?c=news">News</a>
        <a href="index.php?c=products">Products</a>
        <a href="index.php?c=orders">Orders</a>
        <a href="index.php?c=contacts">Contacts</a>
		<a href="index.php?c=address">Adres</a>
		<a href="index.php?c=pages">Pages</a>
		<a href="index.php?c=users">Users</a>
		<a href="index.php?c=chat">Chat (<span id="chatcnt">0</span>)</a>
        <a href="index.php?c=index&a=logout">Logout</a>
    </nav>
	<?php } ?>
    <div class="container">
