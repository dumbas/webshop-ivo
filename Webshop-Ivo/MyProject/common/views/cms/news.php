<?php require_once('includes/header.php'); ?>

<table border="1" cellpadding="5" width="100%">
    <tr>
        <th>ID</th>
        <th>Zaglavie</th>
        <th>Komentari</th>
        <th>Deistviq</th>
    </tr>
    <?php foreach ($news as $value) { ?>
    <tr>
        <td><?php echo $value->getID(); ?></td>
        <td><?php echo $value->getTitle(); ?></td>
        <td><a href="index.php?c=news&a=comments&id=<?php echo $value->getID(); ?>"><?php echo $value->getCommentCount(); ?></a></td>
        <td>
            <a href="index.php?c=news&a=edit&id=<?php echo $value->getID();?>">Redaktirai</a>
            <a href="index.php?c=news&a=delete&id=<?php echo $value->getID(); ?>">Iztrii</a>
        </td>
    </tr>
    <?php } ?>
</table>
<br>
<a href="index.php?c=news&a=add">Dobavi</a><br>
<?php require_once('includes/footer.php'); ?>