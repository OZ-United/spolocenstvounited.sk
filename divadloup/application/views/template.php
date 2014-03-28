<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Divadlo UP - <?php echo $title ?></title>
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/style.css" type="text/css" media="screen" />
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/responsiveslides.css">
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/responsiveslides.min.js"></script>
    <script>
    // You can also use "$(window).load(function() {"
    $(function () {

      // Slideshow 1
      $("#slider1").responsiveSlides({
        maxwidth: 930,
        speed: 1000
      });
    });
  </script>
</head>

<body>
	<div class="header"></div>
    
	<div id="container">
		<div class="logo">
        	<img src="<?php echo base_url()?>assets/images/logo.png" />
        </div>

        <div class="search">
            <form>  
                <input type="text" id="search">  
                <input type="submit" class="solid" value="Hľadať">  
            </form>
        </div>
        
        <ul class="rslides" id="slider1">
            <li><img src="<?php echo base_url()?>assets/images/slideshow/1.jpg" alt=""></li>
            <li><img src="<?php echo base_url()?>assets/images/slideshow/2.jpg" alt=""></li>
            <li><img src="<?php echo base_url()?>assets/images/slideshow/3.jpg" alt=""></li>
        </ul>
        
		<?php echo $content ?>
        
    </div>
    
    <div class="footer">
        <p style="text-align: center;">&copy;2013 Divadlo UP</p>
        <p><small>
         Web & Design by <a href="http://danielmisina.sk" target="_blank">danielmisina.sk</a>
        </small></p>
    </div>
    
</body>
</html>