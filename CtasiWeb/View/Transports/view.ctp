<div class="transports view">
<h2><?php echo __('Transport'); ?></h2>
	<dl>
		<dt><?php echo __('Transport Id'); ?></dt>
		<dd>
			<?php echo h($transport['Transport']['transport_id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($transport['Transport']['name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Phone'); ?></dt>
		<dd>
			<?php echo h($transport['Transport']['phone']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Mobile'); ?></dt>
		<dd>
			<?php echo h($transport['Transport']['mobile']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Email'); ?></dt>
		<dd>
			<?php echo h($transport['Transport']['email']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Store'); ?></dt>
		<dd>
			<?php echo $this->Html->link($transport['Store']['name'], array('controller' => 'stores', 'action' => 'view', $transport['Store']['store_id'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Transport'), array('action' => 'edit', $transport['Transport']['transport_id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Transport'), array('action' => 'delete', $transport['Transport']['transport_id']), array('confirm' => __('Are you sure you want to delete # %s?', $transport['Transport']['transport_id']))); ?> </li>
		<li><?php echo $this->Html->link(__('List Transports'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Transport'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Stores'), array('controller' => 'stores', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Store'), array('controller' => 'stores', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Posts'), array('controller' => 'posts', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Post'), array('controller' => 'posts', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Posts'); ?></h3>
	<?php if (!empty($transport['Post'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Post Id'); ?></th>
		<th><?php echo __('Name'); ?></th>
		<th><?php echo __('Address'); ?></th>
		<th><?php echo __('Department Id'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($transport['Post'] as $post): ?>
		<tr>
			<td><?php echo $post['post_id']; ?></td>
			<td><?php echo $post['name']; ?></td>
			<td><?php echo $post['address']; ?></td>
			<td><?php echo $post['department_id']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'posts', 'action' => 'view', $post['post_id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'posts', 'action' => 'edit', $post['post_id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'posts', 'action' => 'delete', $post['post_id']), array('confirm' => __('Are you sure you want to delete # %s?', $post['post_id']))); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Post'), array('controller' => 'posts', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
