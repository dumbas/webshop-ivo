<?php require_once('includes/header.php'); ?>
<div id="div1">
<?php foreach ($news as $value) { ?>
	<div id="div51">
		
		<h1><a href="index.php?c=article&id=<?=$value->getId(); ?>"><?=$value->getTitle(); ?></a></h1>
		<h5>Written by : <?=$value->getAuthor();?> on <?=$value->getDate();?></h5>
		<p><?=$value->getExcerpt(); ?></p>
	</div>

<?php } ?>
<div id="div55">
	<?php for ($i = 1; $i <= $page_count; $i++) { ?>
	<a href="index.php?c=news&p=<?=$i;?>"><?=$i;?> |</a>
	<?php } ?>
</div>
<?php require_once('includes/footer.php'); ?>