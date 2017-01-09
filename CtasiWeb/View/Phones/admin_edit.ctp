<div class="phones form">
<?php echo $this->Form->create('Phone'); ?>
	<fieldset>
		<legend><?php echo __('Admin Edit Phone'); ?></legend>
	<?php
		echo $this->Form->input('phone_id');
		echo $this->Form->input('customer_id');
		echo $this->Form->input('country_id');
		echo $this->Form->input('area_code');
		echo $this->Form->input('number');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Phone.phone_id')), array('confirm' => __('Are you sure you want to delete # %s?', $this->Form->value('Phone.phone_id')))); ?></li>
		<li><?php echo $this->Html->link(__('List Phones'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Customers'), array('controller' => 'customers', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Customer'), array('controller' => 'customers', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Countries'), array('controller' => 'countries', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Country'), array('controller' => 'countries', 'action' => 'add')); ?> </li>
	</ul>
</div>
