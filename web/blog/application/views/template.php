<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/style.css" />
    <script src="http://code.jquery.com/jquery-1.9.1.min.js"></script>
    <script>!window.jQuery && document.write('<script src="assets/js/jquery-1.9.1.min"><\/script>')</script>
    <title><?php echo $title ?></title>
</head>

<body>
	<div id="container">
    <div id="header">
    	<div class="menu">
    	<?php
			echo anchor('blog', 'Nový článok');
			echo anchor('blog/topics', 'Upraviť staršie články');
		?>
        </div>
        
        <div class="odhlasit">
    	<?php
			echo anchor('logout', 'Odhlásiť');
		?>
        </div>
    </div>

	
	
		<?php echo $content ?>
    
    </div>
    
    
    
    <script>
    	$(function()
		{
			$('.flash').delay(3000).slideUp(750);
		})
    </script>

</body>
</html>