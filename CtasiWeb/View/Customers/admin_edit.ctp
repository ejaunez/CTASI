<div class="customers form">
<?php echo $this->Form->create('Customer'); ?>
	<fieldset>
		<legend><?php echo __('Admin Edit Customer'); ?></legend>
	<?php
		echo $this->Form->input('customer_id');
		echo $this->Form->input('names');
		echo $this->Form->input('last_name');
		echo $this->Form->input('mother_name');
		echo $this->Form->input('last_contact_date');
		echo $this->Form->input('last_contact_user_id');
		echo $this->Form->input('creation_date');
		echo $this->Form->input('creation_user_id');
		echo $this->Form->input('update_date');
		echo $this->Form->input('update_user_id');
		echo $this->Form->input('comment');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Customer.customer_id')), array('confirm' => __('Are you sure you want to delete # %s?', $this->Form->value('Customer.customer_id')))); ?></li>
		<li><?php echo $this->Html->link(__('List Customers'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Addresses'), array('controller' => 'addresses', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Address'), array('controller' => 'addresses', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Phones'), array('controller' => 'phones', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Phone'), array('controller' => 'phones', 'action' => 'add')); ?> </li>
	</ul>
</div>
