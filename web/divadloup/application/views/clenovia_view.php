
<div class="menu">
	<h2>Menu</h2>
    <ul>
    	<li><?php echo anchor('', 'O divadle') ?></li>
        <li class="active"><?php echo anchor('menu/clenovia', 'Členovia') ?></li>
        <li><?php echo anchor('menu/predstavenia', 'Predstavenia') ?></li>
        <li><?php echo anchor('menu/galeria', 'Galéria') ?></li>
        <li><?php echo anchor('menu/kontakt', 'Kontakt') ?></li>
    </ul>
</div>

<div id="content">
	<h1>Členovia</h1>
    
    <?php foreach($up_clenovia as $obj) : ?>
    	<div class="clenovia">
        <div class="trojuholnik"></div>
        	<img src="<?php echo base_url() ?>assets/images/clenovia/<?php echo $obj->obrazok ?>.jpg"  />
        	<h2><?php echo $obj->meno?></h2>
            <p><?php echo $obj->pokec?><p>        
        </div>  
    <?php endforeach ?>
    
</div>