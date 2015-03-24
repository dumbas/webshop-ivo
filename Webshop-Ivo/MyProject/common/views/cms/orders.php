<?php require_once('includes/header.php'); ?>

<table border="1" cellpadding="5" width="100%">
    <tr>
        <th>Dobaven na</th>
        <th>Ime</th>
        <th>Email</th>
        <th>Phone</th>
		<th>Produkt</th>
		<th>Cena</th>
		<th>Izpylnena</th>
		<th>Iztrii</th>
    </tr>
    <?php foreach ($orders as $value) { ?>
    <tr>
        <td><?php echo $value->getDate(); ?></td>
        <td><?php echo $value->getName(); ?></td>
		<td><?php echo $value->getEmail(); ?></td>
        <td><?php echo $value->getPhone(); ?></td>
		<td><?php echo $value->getProductTitle(); ?></td>
		<td><?php echo $value->getProductPrice();?></td>
        <td><input type="checkbox" class="complete" <?php if ($value->getIsComplete()) { ?> checked="checked" <?php } ?> value="<?php echo $value->getId(); ?>"></td>
		<td>
		
		<a href="index.php?c=orders&a=delete&id=<?php echo $value->getId();?>">Iztrii</a>
		</td>
		<?php } ?>
	</tr>
    
</table>
<br>


<?php require_once('includes/footer.php'); ?>