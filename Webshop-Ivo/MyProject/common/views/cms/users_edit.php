<?php require_once('includes/header.php'); ?>

<h2>Redaktirane na User</h2>
<form action="" method="post" enctype="multipart/form-data">
    <label>
        Username<br>
        <input type="text" name="username" value="<?=$data->getUsername();?>"><br><br>
    </label>

    <label>
        Password<br>
        <input type="text" name="password" value="<?=$data->getPassword();?>"><br><br>
    </label>
    <button type="submit">Redaktirai</button>
</form>

<?php require_once('includes/footer.php'); ?>