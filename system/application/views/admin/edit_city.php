<?php foreach($city as $row): ?>

<?=form_open('/members/edit_city')?>

<p>City
<input type="text" name="city" value="<?=$row['city_name']?>" />
</p>

<?=form_close()?>

<?php endforeach; ?>