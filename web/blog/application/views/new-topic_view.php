<div id="blog">
	<img src="<?php echo base_url() ?>assets/images/logo.jpg" />	
    <h1>Pridať nový článok.</h1>

	<?php
		echo $this->session->flashdata('message');	
		echo validation_errors();		
		echo form_open('blog/add');
	?>
    
		<input type="text" name="nazov" value="" placeholder="Názov" />
		<textarea name="text" placeholder="Obsah" ></textarea>
		<input type="submit" name="submit" value="Ulož článok"  />
        
	<?php
    	echo form_close();
	?>
	
</div>