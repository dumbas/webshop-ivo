<?php require_once('includes/header.php'); ?>

<table border="1" cellpadding="5" width="100%">
    <tr>
        <th>ID</th>
        <th>Ime na produkt</th>
        <th>Deistviq</th>
		
    </tr>
    <?php foreach ($products as $value) { ?>
    <tr>
        <td><?php echo $value->getId(); ?></td>
        <td><?php echo $value->getTitle(); ?></td>
        <td>
            <a href="index.php?c=products&a=edit&id=<?php echo $value->getId();?>">Redaktirai</a>
            <a href="index.php?c=productimage&id=<?php echo $value->getId();?>">Gallery</a>
            <a href="index.php?c=products&a=delete&id=<?php echo $value->getId();?>">Iztrii</a>
        </td>
    </tr>
    <?php } ?>
</table>
<br>
<a href="index.php?c=products&a=add">Dobavi</a>

<?php require_once('includes/footer.php'); ?>