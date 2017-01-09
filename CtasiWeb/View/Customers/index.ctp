<div class="customers index">
	<h2><?php echo __('Customers'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('customer_id'); ?></th>
			<th><?php echo $this->Paginator->sort('names'); ?></th>
			<th><?php echo $this->Paginator->sort('last_name'); ?></th>
			<th><?php echo $this->Paginator->sort('mother_name'); ?></th>
			<th><?php echo $this->Paginator->sort('last_contact_date'); ?></th>
			<th><?php echo $this->Paginator->sort('last_contact_user_id'); ?></th>
			<th><?php echo $this->Paginator->sort('creation_date'); ?></th>
			<th><?php echo $this->Paginator->sort('creation_user_id'); ?></th>
			<th><?php echo $this->Paginator->sort('update_date'); ?></th>
			<th><?php echo $this->Paginator->sort('update_user_id'); ?></th>
			<th><?php echo $this->Paginator->sort('comment'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($customers as $customer): ?>
	<tr>
		<td><?php echo h($customer['Customer']['customer_id']); ?>&nbsp;</td>
		<td><?php echo h($customer['Customer']['names']); ?>&nbsp;</td>
		<td><?php echo h($customer['Customer']['last_name']); ?>&nbsp;</td>
		<td><?php echo h($customer['Customer']['mother_name']); ?>&nbsp;</td>
		<td><?php echo h($customer['Customer']['last_contact_date']); ?>&nbsp;</td>
		<td><?php echo h($customer['Customer']['last_contact_user_id']); ?>&nbsp;</td>
		<td><?php echo h($customer['Customer']['creation_date']); ?>&nbsp;</td>
		<td><?php echo h($customer['Customer']['creation_user_id']); ?>&nbsp;</td>
		<td><?php echo h($customer['Customer']['update_date']); ?>&nbsp;</td>
		<td><?php echo h($customer['Customer']['update_user_id']); ?>&nbsp;</td>
		<td><?php echo h($customer['Customer']['comment']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $customer['Customer']['customer_id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $customer['Customer']['customer_id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $customer['Customer']['customer_id']), array('confirm' => __('Are you sure you want to delete # %s?', $customer['Customer']['customer_id']))); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
	'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
	));
	?>	</p>
	<div class="paging">
	<?php
		echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
	?>
	</div>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('New Customer'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Addresses'), array('controller' => 'addresses', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Address'), array('controller' => 'addresses', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Phones'), array('controller' => 'phones', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Phone'), array('controller' => 'phones', 'action' => 'add')); ?> </li>
	</ul>
</div>
