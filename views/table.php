<table <?php echo HTML::attributes($table_class); ?> <?php echo $table_attributes;?>>
<?php foreach($records AS $row){ ?>
	<tr>
		<?php foreach($row AS $data){ ?>
			<td><?php echo $data; ?></td>
		<?php } ?>
	</tr>
<?php } ?>
</table>