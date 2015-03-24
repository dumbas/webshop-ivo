<?php require_once('includes/header.php'); ?>

<?php if ($error == 1) { ?>
	<div style="color: #a00;">ERROR</div>
<?php } ?>

	<div id="div1">
			<img src="../storage/<?=$products->getImage();?>" width="300">
			<h3> <?php echo $products->getTitle(); ?>
			<h4>Price:  <?php echo $products->getPrice(); ?> lv. </h4>
		<div id="div22">
			<form action="" method="post">
				<label><span> Name </span><input type="text" name="name" ></label>
				<br><br>
				<label><span>E-mail</span><input type="text" name="email" ></label>
				<br><br>
				<label><span>Phone</span><input type="text" name="phone" ></label>
				<br><br>

				<button type="submit">BUY NOW</button>
			</form>							
		</div>							

<?php require_once('includes/footer.php'); ?>