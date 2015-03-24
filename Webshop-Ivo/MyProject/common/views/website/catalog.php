<?php require_once('includes/header.php'); ?>
		<div id="div1">
			<div id="div31">
				<form action="" method="post">
				<input id="search" type="text" name="search" value="<?php if ($search != '') { echo $search; }?>" placeholder="Search">
				<button type="submit">Search</button>
					<select name="order">
						<option value="">Order by</option>
						<option value="title" <?php if ($order_by == 'title') { echo 'selected="selected"'; } ?>>Name</option>
						<option value="price" <?php if ($order_by == 'price') { echo 'selected="selected"'; } ?>>Price</option>
					</select>
				</form>
			</div>
		<?php foreach ($products as $value) { ?>
			<div id="div32">
			
				<a href="index.php?c=products&a=product&id=<?=$value->getId(); ?>">
				<img src="../storage/<?=$value->getImage(); ?>">
				</a>
					<h3> <?php echo $value->getTitle(); ?></h3> 
					<h4> <?php echo $value->getPrice(); ?> lv. </h4>
					<div class="clear"></div>
					<p><?php echo $value->getContent(); ?></p>
			
			</div>
		<?php } ?>
		
			<div id="">
	<?php for ($i = 1; $i <= $page_count; $i++) { ?>
	<a href="index.php?c=products&a=search&s=<?=$search?>&o=<?=$order_by?>&p=<?=$i;?>"><?=$i;?> |</a>
	<?php } ?>
</div>

<?php require_once('includes/footer.php'); ?>