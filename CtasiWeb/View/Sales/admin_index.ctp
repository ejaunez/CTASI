<div class="sales index">
	<h2><?php echo __('Sales'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('sale_id'); ?></th>
			<th><?php echo $this->Paginator->sort('customer_id'); ?></th>
			<th><?php echo $this->Paginator->sort('address_id'); ?></th>
			<th><?php echo $this->Paginator->sort('phone_id'); ?></th>
			<th><?php echo $this->Paginator->sort('sale_date'); ?></th>
			<th><?php echo $this->Paginator->sort('dispatch_date'); ?></th>
			<th><?php echo $this->Paginator->sort('transport_id'); ?></th>
			<th><?php echo $this->Paginator->sort('items_qty'); ?></th>
			<th><?php echo $this->Paginator->sort('sale_commission'); ?></th>
			<th><?php echo $this->Paginator->sort('sale_net'); ?></th>
			<th><?php echo $this->Paginator->sort('sale_tax'); ?></th>
			<th><?php echo $this->Paginator->sort('sale_total'); ?></th>
			<th><?php echo $this->Paginator->sort('sale_user_id'); ?></th>
			<th><?php echo $this->Paginator->sort('aproval_user_id'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($sales as $sale): ?>
	<tr>
		<td><?php echo h($sale['Sale']['sale_id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($sale['Customer']['customer_id'], array('controller' => 'customers', 'action' => 'view', $sale['Customer']['customer_id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($sale['Address']['address_id'], array('controller' => 'addresses', 'action' => 'view', $sale['Address']['address_id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($sale['Phone']['phone_id'], array('controller' => 'phones', 'action' => 'view', $sale['Phone']['phone_id'])); ?>
		</td>
		<td><?php echo h($sale['Sale']['sale_date']); ?>&nbsp;</td>
		<td><?php echo h($sale['Sale']['dispatch_date']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($sale['Transport']['name'], array('controller' => 'transports', 'action' => 'view', $sale['Transport']['transport_id'])); ?>
		</td>
		<td><?php echo h($sale['Sale']['items_qty']); ?>&nbsp;</td>
		<td><?php echo h($sale['Sale']['sale_commission']); ?>&nbsp;</td>
		<td><?php echo h($sale['Sale']['sale_net']); ?>&nbsp;</td>
		<td><?php echo h($sale['Sale']['sale_tax']); ?>&nbsp;</td>
		<td><?php echo h($sale['Sale']['sale_total']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($sale['SaleUser']['name'], array('controller' => 'users', 'action' => 'view', $sale['SaleUser']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($sale['AprovalUser']['name'], array('controller' => 'users', 'action' => 'view', $sale['AprovalUser']['id'])); ?>
		</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $sale['Sale']['sale_id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $sale['Sale']['sale_id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $sale['Sale']['sale_id']), array('confirm' => __('Are you sure you want to delete # %s?', $sale['Sale']['sale_id']))); ?>
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
		<li><?php echo $this->Html->link(__('New Sale'), array('action' => 'add')); ?></li>
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
