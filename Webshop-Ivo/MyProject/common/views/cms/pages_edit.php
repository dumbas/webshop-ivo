<?php require_once('includes/header.php'); ?>

<h2>Redaktirane na company info</h2>
<form action="" method="post" enctype="multipart/form-data">
    <label>
        Zaglavie
        <input type="text" name="title" value="<?=$data->getTitle();?>"><br><br>
    </label>

    <label>
        Opisanie<br>
        <textarea rows="10" cols="50" name="content"><?=$data->getContent();?></textarea><br><br>
    </label>
    <button type="submit">Redaktirai</button>
</form>

<?php require_once('includes/footer.php'); ?>