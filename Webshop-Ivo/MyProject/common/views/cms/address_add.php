<?php require_once('includes/header.php'); ?>
	<?php if ($error == 1) { ?>
			<div style="color: #a00;">ERROR</div>
	<?php } ?>

<h2>Dobavqne na info</h2>
<form action="" method="post" enctype="multipart/form-data">
    <label>
        Adres
        <input type="text" name="address"><br><br>
    </label>
	<label>
        Telefon
        <input type="text" name="phone" placeholder="xxxx/xx-xx-xx"><br><br>
    </label>
	<label>
        E-mail
        <input type="text" name="email" ><br><br>
    </label>
   
    <button type="submit">Dobavi</button>
</form>

<?php require_once('includes/footer.php'); ?>