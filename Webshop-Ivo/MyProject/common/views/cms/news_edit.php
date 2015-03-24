<?php require_once('includes/header.php'); ?>

<h2>Redaktirane na novina</h2>
<form action="" method="post" enctype="multipart/form-data">
    <label>
        Zaglavie
        <input type="text" name="title" value="<?=$data->getTitle(); ?>"><br><br>
    </label>
    <label>
        Avtor
        <input type="text" name="author" value="<?=$data->getAuthor(); ?>"><br><br>
    </label>
    <label>
        Data
        <input type="text" name="date_added" value="<?=$data->getDate()?>"><br><br>
    </label>
    <label>
        Kartinka
        <?php if ($data->getImage() != '') { ?>
        <img src="../storage/<?=$data->getImage()?>" width="300"><br>
        <?php } ?>
        <input type="file" name="image"><br><br>
    </label>
    <label>
        Sadarjanie<br>
        <textarea rows="10" cols="50" name="content"><?=$data->getContent(); ?></textarea><br><br>
    </label>
    <button type="submit">Redaktirai</button>
</form>

<?php require_once('includes/footer.php'); ?>