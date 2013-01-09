<script src="<?=base_url()?>js/tables/tables.js" type="text/javascript"></script>

<script type="text/javascript">
<!--
function confirmation(id) {
	var answer = confirm("are you sure you want to delete this city?")
	if (answer){

		window.location = "<?=base_url()?>members/delete_city/"+ id;
	}
	else{
		alert("nothing deleted!")
	}
}
//-->
</script>
<?=$this->load->view('members/controls')?>
<div style="display:none;" id="dvloader"><img src="<?=base_url()?>images/ajax-loader.gif"></div>
<table id="usertable"  width="100%" style="clear:both;">

	<thead>
		<tr>
			<th>ID</th>
			<th>City</th>
			<th>Chinese</th>
			<th>description</th>
			<th>Actions</th>
		</tr>
	</thead>
	<tbody>
<?php foreach($cities as $key => $row):


?>
		<tr>
			<td style="padding:2px; "><?=$row['city_id']?></td>
			<td style="padding:2px; "><a href="<?=base_url()?>members/view_city/<?=$row['city_id']?>"><?=$row['city_name']?></a></td>

			<td style="padding:2px;"><a href="<?=base_url()?>members/view/<?=$row['city_id']?>"><?=$row['city_name_chinese']?></a></td>

		<td style="padding:2px; "><?=$row['city_id']?></td>

			<td style="padding:2px;"><?="<a href='#' onclick='confirmation(".$row['city_id'].")'><span class='ui-icon ui-icon-circle-close ui-state-highlight'></span></a>"?></td>
		</tr>
		<?php endforeach;  ?>
	</tbody>
</table>

<?=$this->load->view('popups/popup_city')?>
