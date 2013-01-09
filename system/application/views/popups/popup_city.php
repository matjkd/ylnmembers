<script type="text/javascript">
	// increase the default animation speed to exaggerate the effect
	$.fx.speeds._default = 500;
$(document).ready(function() {
		$('#dialog_city').dialog({
			autoOpen: false,
			
			width:450,
			height:200
		});
		
		$('#add_city').click(function() {
			$('#dialog_city').dialog('open');
			return false;
		});
	});


	</script>
	
	<div id="dialog_city"  class="dialog" title="Add City">


<div id="popup_form" align="center">
<?=form_open('members/create_city')?>

<?=form_label('City Name')?> <?=form_input('city_name')?><br/>

<?=form_submit('submit','Submit')?>

<?=form_close()?>
</div>
</div>

