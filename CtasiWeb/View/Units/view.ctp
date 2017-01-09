<div class="units view">
<h2><?php echo __('Unit'); ?></h2>
	<dl>
		<dt><?php echo __('Unit Id'); ?></dt>
		<dd>
			<?php echo h($unit['Unit']['unit_id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Unit Name'); ?></dt>
		<dd>
			<?php echo h($unit['Unit']['unit_name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Unit Parity'); ?></dt>
		<dd>
			<?php echo h($unit['Unit']['unit_parity']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Unit'), array('action' => 'edit', $unit['Unit']['unit_id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Unit'), array('action' => 'delete', $unit['Unit']['unit_id']), array('confirm' => __('Are you sure you want to delete # %s?', $unit['Unit']['unit_id']))); ?> </li>
		<li><?php echo $this->Html->link(__('List Units'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Unit'), array('action' => 'add')); ?> </li>
	</ul>
</div>
