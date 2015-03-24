<?php require_once('includes/header.php'); ?>
<h1>Adres na firmata</h1><br><br>
<table border="1" cellpadding="5" width="100%">
    <tr>
		<th>id</th>
        <th>Adres</th>
        <th>Telefon</th>
		<th>E-mail</th>
		<th>Redaktirai</th>
		<th>Premahvane</th>
    </tr>
    <?php foreach ($address as $value) { ?>
    <tr>
        <td><?php echo $value->getID();?></td>
        <td><?php echo $value->getAddress();?></td>
		<td><?php echo $value->getPhone();?></td>
		<td><?php echo $value->getEmail();?></td>
		
        <td>
            <a href="index.php?c=address&a=edit&id=<?php echo $value->getID();?>">Redaktirai</a>
		</td>
		<td>
            <a href="index.php?c=address&a=delete&id=<?php echo $value->getID(); ?>">Iztrii</a>
        </td>
    </tr>
    <?php } ?>
</table>
<br>
<a href="index.php?c=address&a=add">Dobavi adres</a>
<?php require_once('includes/footer.php'); ?>