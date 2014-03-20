<div id="blog">
	<img src="<?php echo base_url() ?>assets/images/logo.jpg" />	
    <h1>Upraviť článok.</h1>

	<?php	
		echo validation_errors();		
		echo form_open('blog/update/' . $topic->id);
	?>
        
		<input type="text" name="nazov" value="<?php echo $topic->nazov ?>" placeholder="Názov" />
		<textarea name="text" placeholder="Obsah" ><?php echo $topic->text ?></textarea>
		<input type="submit" name="submit" value="Aktualizovať"  />
        
	<?php
    	echo form_close();
	?>
	
</div>