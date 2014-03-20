<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/css/style.css" />
    <title>Prihlásiť | United Blog</title>
</head>

<body>

	<div id="container">
		<img src="<?php echo base_url() ?>assets/images/logo.jpg" />
	</div>

    <div id="auth">
    
        <h1>Prihlásenie</h1
        
        
        ><?php 
        echo form_open('auth/login');
        ?>
        
        <input type="text" name="login" value="" id="login" placeholder="Meno"  />
        <input type="password" name="heslo" value="" id="heslo" placeholder="Heslo"  />
        <input type="submit" name="submit" value="Prihlásiť"  />
        
        <?php
        echo form_close();
        ?>
        
        <div class="errors">
        <?php echo validation_errors() ?>
        </div>
    
    </div>

</body>
</html>