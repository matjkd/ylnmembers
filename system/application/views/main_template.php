<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<?php $this->load->view('global/header'); ?>
<body>
<input type="hidden" id="baseurl" value="<?=base_url()?>"/>
<div id="header">
	<div id="header_inner">
		<div id="logo"><img src="<?=base_url()?>images/logo2.png"  height=63px></div>
        <div id="top_menu"><?php $this->load->view('global/menutop'); ?>	
		</div>
    </div>
</div>

<div id="mainnav">

	<div id="mainnav_inner">
        <?php $this->load->view('global/main_menu'); ?>
	</div>
</div>
	

	
    <div class="container">
 
		<div class="contents">
		<?php $this->load->view('global/warning'); ?>
        <?php $this->load->view($main); ?>
        </div>
     
  	</div>
  

<?php $this->load->view('global/footer'); ?>



<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.8.16/jquery-ui.min.js"></script>
<script src="<?=base_url()?>js/wymeditor/jquery.wymeditor.min.js" type="text/javascript"></script>
<script src="<?=base_url()?>js/jeditable.js" type="text/javascript"></script>
<script src="<?=base_url()?>js/jquery.jeditable.datepicker.js" type="text/javascript"></script>
<script src="<?=base_url()?>js/jquery.dataTables.min.js" type="text/javascript"></script>
<script src="<?=base_url()?>js/scripts.js" type="text/javascript"></script>
</body>
</html>