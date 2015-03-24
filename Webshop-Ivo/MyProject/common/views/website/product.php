<?php require_once('includes/header.php'); ?>
	<div id="div1">
		<div id="div41">
		
			<div id="div42">
			
				<img src="../storage/<?=$products->getImage(); ?>">
				<h3> <?php echo $products->getTitle() ?> </h3> 
				<h3> Price: <?php echo $products->getPrice() ?> lv. </h3> 
				
				<a href="index.php?c=orders&id=<?=$products->getId(); ?>">Buy now</a>
			</div>
			<div class="clear"></div>
					<p><?php echo $products->getContent(); ?></p>			
			
				<div id="div43">
					<h3>Gallery</h3>
					<?php foreach ($data as $value) { ?>
					<img src="../storage/<?=$value->getImage(); ?>">
					<?php } ?>
				</div>
				
		</div>
<?php require_once('includes/footer.php'); ?>