<div class="sales form">
<?php echo $this->Html->div('JSON_DBG','Texto del JSON'); ?>
	<fieldset>
		<legend><?php echo __('Add Sale'); ?></legend>
	<?php
		echo $this->Form->create('SelectCustomer');
		echo $this->Form->hidden('id');
		echo $this->Form->input('name');
		echo $this->Form->select('select', array());
		echo $this->Form->end(_('Select Customer')); 
		
		echo $this->Form->create('Sale');
		echo $this->Form->input('address_id');
		echo $this->Form->input('phone_id');
		echo $this->Form->input('sale_date');
		echo $this->Form->input('dispatch_date');
		echo $this->Form->input('transport_id');
		echo $this->Form->input('items_qty');
		echo $this->Form->input('sale_commission');
		echo $this->Form->input('sale_net');
		echo $this->Form->input('sale_tax');
		echo $this->Form->input('sale_total');
		echo $this->Form->input('sale_user_id');
		echo $this->Form->input('aproval_user_id');
		echo $this->Form->end(_('Add Sale')); 
		?>
	</fieldset>
<?php ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Sales'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Customers'), array('controller' => 'customers', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Customer'), array('controller' => 'customers', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Addresses'), array('controller' => 'addresses', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Address'), array('controller' => 'addresses', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Phones'), array('controller' => 'phones', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Phone'), array('controller' => 'phones', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Transports'), array('controller' => 'transports', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Transport'), array('controller' => 'transports', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Sale User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Saleitems'), array('controller' => 'saleitems', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Saleitem'), array('controller' => 'saleitems', 'action' => 'add')); ?> </li>
	</ul>
</div>
