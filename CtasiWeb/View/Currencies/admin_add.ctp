<div class="currencies form">
<?php echo $this->Form->create('Currency'); ?>
	<fieldset>
		<legend><?php echo __('Admin Add Currency'); ?></legend>
	<?php
		echo $this->Form->input('name');
		echo $this->Form->input('dollar_parity');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Currencies'), array('action' => 'index')); ?></li>
	</ul>
</div>
