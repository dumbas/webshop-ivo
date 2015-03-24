<?php require_once('includes/header.php'); ?>
		<?php if ($error == 1) { ?>
			<div style="color: #a00;">ERROR</div>
		
		<?php } ?>
		
<div id="div1">
	<div id="div61">
		<h1> <?php echo $news->getTitle(); ?></h1>
		<img src="../storage/<?=$news->getImage();?>">
		<p><?php echo $news->getContent(); ?></p>
	</div>			
	<div id="div62">
		<h3>Comments</h3>
		<?php foreach ($data as $value) { ?>
			<ul>
				<li><em> <?php echo $value->getName(); ?> 
					коментира на 
					<?php echo $value->getDate()?> </em>
					<p> "<?php echo $value->getContent(); ?>" </p>
				</li>
					
					
			</ul>
		<?php } ?>

		<div id="div63">
			<form action="" method="post">
				<h3>Comment yourself</h3>
				<label>
					<span>Name</span>
					<input type="text" name="name">
				</label>
				<label>
					<span>Comment</span>
					<textarea name="content"></textarea>
				</label>
				<button type="submit">Comment</button>
			</form>
		</div>
	</div>


		
</div>
<?php require_once('includes/footer.php'); ?>