<div class="commisions form">
<?php echo $this->Form->create('Commision'); ?>
	<fieldset>
		<legend><?php echo __('Admin Add Commision'); ?></legend>
	<?php
		echo $this->Form->input('user_id');
		echo $this->Form->input('commisions');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Commisions'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
	</ul>
</div>
