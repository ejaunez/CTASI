<div class="units form">
<?php echo $this->Form->create('Unit'); ?>
	<fieldset>
		<legend><?php echo __('Edit Unit'); ?></legend>
	<?php
		echo $this->Form->input('unit_id');
		echo $this->Form->input('unit_name');
		echo $this->Form->input('unit_parity');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Unit.unit_id')), array('confirm' => __('Are you sure you want to delete # %s?', $this->Form->value('Unit.unit_id')))); ?></li>
		<li><?php echo $this->Html->link(__('List Units'), array('action' => 'index')); ?></li>
	</ul>
</div>
