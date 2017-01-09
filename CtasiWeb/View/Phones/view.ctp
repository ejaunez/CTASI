<div class="phones view">
<h2><?php echo __('Phone'); ?></h2>
	<dl>
		<dt><?php echo __('Phone Id'); ?></dt>
		<dd>
			<?php echo h($phone['Phone']['phone_id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Customer'); ?></dt>
		<dd>
			<?php echo $this->Html->link($phone['Customer']['customer_id'], array('controller' => 'customers', 'action' => 'view', $phone['Customer']['customer_id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Country'); ?></dt>
		<dd>
			<?php echo $this->Html->link($phone['Country']['name'], array('controller' => 'countries', 'action' => 'view', $phone['Country']['country_id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Area Code'); ?></dt>
		<dd>
			<?php echo h($phone['Phone']['area_code']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Number'); ?></dt>
		<dd>
			<?php echo h($phone['Phone']['number']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Phone'), array('action' => 'edit', $phone['Phone']['phone_id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Phone'), array('action' => 'delete', $phone['Phone']['phone_id']), array('confirm' => __('Are you sure you want to delete # %s?', $phone['Phone']['phone_id']))); ?> </li>
		<li><?php echo $this->Html->link(__('List Phones'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Phone'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Customers'), array('controller' => 'customers', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Customer'), array('controller' => 'customers', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Countries'), array('controller' => 'countries', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Country'), array('controller' => 'countries', 'action' => 'add')); ?> </li>
	</ul>
</div>
