<div class="purchases index">
	<h2><?php echo __('Purchases'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('purchase_id'); ?></th>
			<th><?php echo $this->Paginator->sort('provider_id'); ?></th>
			<th><?php echo $this->Paginator->sort('provider_name'); ?></th>
			<th><?php echo $this->Paginator->sort('provider_address'); ?></th>
			<th><?php echo $this->Paginator->sort('net_amount'); ?></th>
			<th><?php echo $this->Paginator->sort('discount_percentage'); ?></th>
			<th><?php echo $this->Paginator->sort('discount_amount'); ?></th>
			<th><?php echo $this->Paginator->sort('tax_amount'); ?></th>
			<th><?php echo $this->Paginator->sort('total_amount'); ?></th>
			<th><?php echo $this->Paginator->sort('purchase_date'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($purchases as $purchase): ?>
	<tr>
		<td><?php echo h($purchase['Purchase']['purchase_id']); ?>&nbsp;</td>
		<td><?php echo h($purchase['Purchase']['provider_id']); ?>&nbsp;</td>
		<td><?php echo h($purchase['Purchase']['provider_name']); ?>&nbsp;</td>
		<td><?php echo h($purchase['Purchase']['provider_address']); ?>&nbsp;</td>
		<td><?php echo h($purchase['Purchase']['net_amount']); ?>&nbsp;</td>
		<td><?php echo h($purchase['Purchase']['discount_percentage']); ?>&nbsp;</td>
		<td><?php echo h($purchase['Purchase']['discount_amount']); ?>&nbsp;</td>
		<td><?php echo h($purchase['Purchase']['tax_amount']); ?>&nbsp;</td>
		<td><?php echo h($purchase['Purchase']['total_amount']); ?>&nbsp;</td>
		<td><?php echo h($purchase['Purchase']['purchase_date']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $purchase['Purchase']['y'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $purchase['Purchase']['y'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $purchase['Purchase']['y']), array('confirm' => __('Are you sure you want to delete # %s?', $purchase['Purchase']['y']))); ?>
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
		<li><?php echo $this->Html->link(__('New Purchase'), array('action' => 'add')); ?></li>
	</ul>
</div>
