<?php require_once('includes/header.php'); ?>

<table border="1" cellpadding="5" width="100%">
    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Content</th>
        <th>Date added</th>
        <th>Delete</th>
    </tr>
    <?php foreach ($data as $value) { ?>
    <tr>
        <td><?php echo $value->getId();?></td>
        <td><?php echo $value->getName();?></td>
        <td><?php echo $value->getContent();?></td>
        <td><?php echo $value->getDate()?></td>
        <td>

            <a href="index.php?c=news&a=comments_delete&id=<?php echo $value->getId();?>&news_id=<?=$value->getNewsId();?>">Iztrii</a>
        </td>
    </tr>
    <?php } ?>
</table>
<br>
<?php require_once('includes/footer.php'); ?>