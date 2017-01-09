<div class="purchases view">
<h2><?php echo __('Purchase'); ?></h2>
	<dl>
		<dt><?php echo __('Purchase Id'); ?></dt>
		<dd>
			<?php echo h($purchase['Purchase']['purchase_id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Provider Id'); ?></dt>
		<dd>
			<?php echo h($purchase['Purchase']['provider_id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Provider Name'); ?></dt>
		<dd>
			<?php echo h($purchase['Purchase']['provider_name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Provider Address'); ?></dt>
		<dd>
			<?php echo h($purchase['Purchase']['provider_address']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Net Amount'); ?></dt>
		<dd>
			<?php echo h($purchase['Purchase']['net_amount']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Discount Percentage'); ?></dt>
		<dd>
			<?php echo h($purchase['Purchase']['discount_percentage']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Discount Amount'); ?></dt>
		<dd>
			<?php echo h($purchase['Purchase']['discount_amount']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Tax Amount'); ?></dt>
		<dd>
			<?php echo h($purchase['Purchase']['tax_amount']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Total Amount'); ?></dt>
		<dd>
			<?php echo h($purchase['Purchase']['total_amount']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Purchase Date'); ?></dt>
		<dd>
			<?php echo h($purchase['Purchase']['purchase_date']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Purchase'), array('action' => 'edit', $purchase['Purchase']['y'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Purchase'), array('action' => 'delete', $purchase['Purchase']['y']), array('confirm' => __('Are you sure you want to delete # %s?', $purchase['Purchase']['y']))); ?> </li>
		<li><?php echo $this->Html->link(__('List Purchases'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Purchase'), array('action' => 'add')); ?> </li>
	</ul>
</div>
