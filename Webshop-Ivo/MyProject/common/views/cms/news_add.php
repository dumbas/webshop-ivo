<?php require_once('includes/header.php'); ?>
	

<h2>Dobavqne novina</h2>
<form action="" method="post" enctype="multipart/form-data">
    <label>
        Zaglavie
        <input type="text" name="title"><br><br>
    </label>
    <label>
        Avtor
        <input type="text" name="author"><br><br>
    </label>
    <label>
        Data
        <input type="text" name="date_added" value="<?=date('Y-m-d H:i:s');?>"><br><br>
    </label>
    <label>
        Kartinka
        
        <input type="file" name="image"><br><br>
    </label>
    <label>
        Sadarjanie<br>
        <textarea rows="10" cols="50" name="content"></textarea><br><br>
    </label>
    <button type="submit">Dobavi</button>
</form>

<?php require_once('includes/footer.php'); ?>