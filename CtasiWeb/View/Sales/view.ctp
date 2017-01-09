<div class="sales view">
<h2><?php echo __('Sale'); ?></h2>
	<dl>
		<dt><?php echo __('Sale Id'); ?></dt>
		<dd>
			<?php echo h($sale['Sale']['sale_id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Customer'); ?></dt>
		<dd>
			<?php echo $this->Html->link($sale['Customer']['customer_id'], array('controller' => 'customers', 'action' => 'view', $sale['Customer']['customer_id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Address'); ?></dt>
		<dd>
			<?php echo $this->Html->link($sale['Address']['address_id'], array('controller' => 'addresses', 'action' => 'view', $sale['Address']['address_id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Phone'); ?></dt>
		<dd>
			<?php echo $this->Html->link($sale['Phone']['phone_id'], array('controller' => 'phones', 'action' => 'view', $sale['Phone']['phone_id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Sale Date'); ?></dt>
		<dd>
			<?php echo h($sale['Sale']['sale_date']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Dispatch Date'); ?></dt>
		<dd>
			<?php echo h($sale['Sale']['dispatch_date']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Transport'); ?></dt>
		<dd>
			<?php echo $this->Html->link($sale['Transport']['name'], array('controller' => 'transports', 'action' => 'view', $sale['Transport']['transport_id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Items Qty'); ?></dt>
		<dd>
			<?php echo h($sale['Sale']['items_qty']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Sale Commission'); ?></dt>
		<dd>
			<?php echo h($sale['Sale']['sale_commission']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Sale Net'); ?></dt>
		<dd>
			<?php echo h($sale['Sale']['sale_net']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Sale Tax'); ?></dt>
		<dd>
			<?php echo h($sale['Sale']['sale_tax']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Sale Total'); ?></dt>
		<dd>
			<?php echo h($sale['Sale']['sale_total']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Sale User'); ?></dt>
		<dd>
			<?php echo $this->Html->link($sale['SaleUser']['name'], array('controller' => 'users', 'action' => 'view', $sale['SaleUser']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Aproval User'); ?></dt>
		<dd>
			<?php echo $this->Html->link($sale['AprovalUser']['name'], array('controller' => 'users', 'action' => 'view', $sale['AprovalUser']['id'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Sale'), array('action' => 'edit', $sale['Sale']['sale_id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Sale'), array('action' => 'delete', $sale['Sale']['sale_id']), array('confirm' => __('Are you sure you want to delete # %s?', $sale['Sale']['sale_id']))); ?> </li>
		<li><?php echo $this->Html->link(__('List Sales'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Sale'), array('action' => 'add')); ?> </li>
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
<div class="related">
	<h3><?php echo __('Related Saleitems'); ?></h3>
	<?php if (!empty($sale['Saleitem'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Saleitem Id'); ?></th>
		<th><?php echo __('Sale Id'); ?></th>
		<th><?php echo __('Product Id'); ?></th>
		<th><?php echo __('Quantity'); ?></th>
		<th><?php echo __('Item Price'); ?></th>
		<th><?php echo __('Item Discount'); ?></th>
		<th><?php echo __('Item Net'); ?></th>
		<th><?php echo __('Item Tax'); ?></th>
		<th><?php echo __('Item Total'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($sale['Saleitem'] as $saleitem): ?>
		<tr>
			<td><?php echo $saleitem['saleitem_id']; ?></td>
			<td><?php echo $saleitem['sale_id']; ?></td>
			<td><?php echo $saleitem['product_id']; ?></td>
			<td><?php echo $saleitem['quantity']; ?></td>
			<td><?php echo $saleitem['item_price']; ?></td>
			<td><?php echo $saleitem['item_discount']; ?></td>
			<td><?php echo $saleitem['item_net']; ?></td>
			<td><?php echo $saleitem['item_tax']; ?></td>
			<td><?php echo $saleitem['item_total']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'saleitems', 'action' => 'view', $saleitem['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'saleitems', 'action' => 'edit', $saleitem['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'saleitems', 'action' => 'delete', $saleitem['id']), array('confirm' => __('Are you sure you want to delete # %s?', $saleitem['id']))); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Saleitem'), array('controller' => 'saleitems', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
