<?php require_once('includes/header.php'); ?>

<div id="div1">
	<?php foreach ($pages as $value) { ?>
	<h1> <?php echo $value->getTitle(); ?> <h1>
	<div id="div11">
		<p><?php echo $value->getContent();?></p>
	</div>
	<?php }?>
</div>
<?php require_once('includes/footer.php'); ?>