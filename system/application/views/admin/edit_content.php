<?php foreach($content as $row):?>


<?php  $id = $row->content_id;?>


<?=form_open_multipart("admin/edit_content/$row->content_id")?> 
<p>
Title* <br/><?=form_input('title', $row->title)?><br/>
</p>


<?=form_hidden('menu', $row->menu)?>


 <?php if($row->news_image != NULL) { ?>
<img src="https://s3-eu-west-1.amazonaws.com/<?=$this->bucket?>/gallery/thumbs/thumb_<?=$row->news_image?>" style="padding:10px 10px 10px 0;" width="150px">
<?php } ?>
<p class="Image">
    <?= form_label('Image') ?><br/>

<?= form_upload('file') ?>
</p>

<?php if ($row->category == "gallery") { ?>

     <p>
        Gallery:<br/>

        <?php

        foreach($gallery_titles as $row2):
        
        	$options[$row2['gallery_id']] = $row2['gallery_title'];
        
        endforeach;
        
        ?>
    <?= form_dropdown('gallery', $options) ?>
    </p>

<?php } ?>




<br/>
<textarea cols=65 rows=20 name="content" id="content" class='wymeditor'><?=$row->content?></textarea>
<br/>

Meta Description<br/>
<textarea  cols=65 rows=2 name="meta_desc"><?=$row->meta_desc?></textarea>
<br/>
Meta Keywords<br/>
<textarea  cols=65 rows=2 name="meta_keywords"><?=$row->meta_keywords?></textarea>
<br/>
Meta Title<br/>
<textarea  cols=65 rows=2 name="meta_title"><?=$row->meta_title?></textarea>
<br/>

Extra: 
<br/><?=form_input('extra', $row->extra)?><br/>
Sidebox:
<br/><?=form_input('sidebox', $row->sidebox)?><br/>
<input type="submit" class="wymupdate" />
<?=form_close()?> 
<?php endforeach;?>