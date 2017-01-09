<div class="stores view">
<h2><?php echo __('Store'); ?></h2>
	<dl>
		<dt><?php echo __('Store Id'); ?></dt>
		<dd>
			<?php echo h($store['Store']['store_id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($store['Store']['name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Comment'); ?></dt>
		<dd>
			<?php echo h($store['Store']['comment']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Store'), array('action' => 'edit', $store['Store']['store_id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Store'), array('action' => 'delete', $store['Store']['store_id']), array('confirm' => __('Are you sure you want to delete # %s?', $store['Store']['store_id']))); ?> </li>
		<li><?php echo $this->Html->link(__('List Stores'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Store'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Inventories'), array('controller' => 'inventories', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Inventory'), array('controller' => 'inventories', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Transports'), array('controller' => 'transports', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Transport'), array('controller' => 'transports', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Inventories'); ?></h3>
	<?php if (!empty($store['Inventory'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Store Id'); ?></th>
		<th><?php echo __('Product Id'); ?></th>
		<th><?php echo __('Inv Minimun'); ?></th>
		<th><?php echo __('Inv Critical'); ?></th>
		<th><?php echo __('Inv Maximun'); ?></th>
		<th><?php echo __('Inv Stock'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($store['Inventory'] as $inventory): ?>
		<tr>
			<td><?php echo $inventory['store_id']; ?></td>
			<td><?php echo $inventory['product_id']; ?></td>
			<td><?php echo $inventory['inv_minimun']; ?></td>
			<td><?php echo $inventory['inv_critical']; ?></td>
			<td><?php echo $inventory['inv_maximun']; ?></td>
			<td><?php echo $inventory['inv_stock']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'inventories', 'action' => 'view', $inventory['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'inventories', 'action' => 'edit', $inventory['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'inventories', 'action' => 'delete', $inventory['id']), array('confirm' => __('Are you sure you want to delete # %s?', $inventory['id']))); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Inventory'), array('controller' => 'inventories', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Transports'); ?></h3>
	<?php if (!empty($store['Transport'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Transport Id'); ?></th>
		<th><?php echo __('Name'); ?></th>
		<th><?php echo __('Phone'); ?></th>
		<th><?php echo __('Mobile'); ?></th>
		<th><?php echo __('Email'); ?></th>
		<th><?php echo __('Store Id'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($store['Transport'] as $transport): ?>
		<tr>
			<td><?php echo $transport['transport_id']; ?></td>
			<td><?php echo $transport['name']; ?></td>
			<td><?php echo $transport['phone']; ?></td>
			<td><?php echo $transport['mobile']; ?></td>
			<td><?php echo $transport['email']; ?></td>
			<td><?php echo $transport['store_id']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'transports', 'action' => 'view', $transport['transport_id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'transports', 'action' => 'edit', $transport['transport_id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'transports', 'action' => 'delete', $transport['transport_id']), array('confirm' => __('Are you sure you want to delete # %s?', $transport['transport_id']))); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Transport'), array('controller' => 'transports', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
