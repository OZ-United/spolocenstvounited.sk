
	<div id="list">
	<?php foreach($topics as $obj) : ?>
		<ul>
        	<li><?php echo anchor('blog/topicsUpdate/'.$obj->id, $obj->nazov.' <small>'.$obj->cas.'</small>');  ?></li>
        </ul>
    <?php endforeach; ?>
	</div>