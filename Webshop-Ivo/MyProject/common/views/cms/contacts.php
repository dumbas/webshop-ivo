<?php require_once('includes/header.php'); ?>
<h1>Konatakti s klienti</h1><br><br>
<table border="1" cellpadding="5" width="100%">
    <tr>
		<th>id</th>
        <th>Data</th>
        <th>Ime</th>
        <th>Telefon</th>
		<th>E-mail</th>
		<th>Sadarjanie</th>
		<th>Premahvane</th>
    </tr>
    <?php foreach ($contacts as $value) { ?>
    <tr>
        <td><?php echo $value->getId();?></td>
        <td><?php echo $value->getDate(); ?></td>
        <td><?php echo $value->getName();?></td>
		<td><?php echo $value->getPhone(); ?></td>
        <td><?php echo $value->getEmail(); ?></td>
		<td><?php echo $value->getContent(); ?></td>
        <td>   
            <a href="index.php?c=contacts&a=delete&id=<?php echo $value->getID(); ?>">Iztrii</a>
        </td>
    </tr>
    <?php } ?>
</table>




<?php require_once('includes/footer.php'); ?>