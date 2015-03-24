<?php
require_once('includes/header.php'); 
?>

<table border="1" cellpadding="5" width="100%">
    <tr>
        <th>ID</th>
        <th>Image</th>
        <th>Deistviq</th>
        
    </tr>
    <?php foreach ($data as $value) { ?>
    <tr>
        <td><?php echo $value->getId(); ?></td>
        <td><img src="../storage/<?php echo $value->getImage(); ?>" width="200"></td>
        <td>
            
			<a href="index.php?c=productimage&a=productimage_delete&id=<?php echo $value->getId();?>&product_id=<?=$value->getProductId();?>">Iztrii</a>
		</td>
    </tr>
    <?php } ?>
</table>
<br>
<form action="" method="post" enctype="multipart/form-data">
    <input type="file" name="image">
    <button type="submit">Kachi</button>
</form>

<?php require_once('includes/footer.php'); ?>