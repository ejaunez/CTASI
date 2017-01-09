<div class="posts view">
<h2><?php echo __('Post'); ?></h2>
	<dl>
		<dt><?php echo __('Post Id'); ?></dt>
		<dd>
			<?php echo h($post['Post']['post_id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($post['Post']['name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Address'); ?></dt>
		<dd>
			<?php echo h($post['Post']['address']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Department'); ?></dt>
		<dd>
			<?php echo $this->Html->link($post['Department']['name'], array('controller' => 'departments', 'action' => 'view', $post['Department']['department_id'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Post'), array('action' => 'edit', $post['Post']['post_id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Post'), array('action' => 'delete', $post['Post']['post_id']), array('confirm' => __('Are you sure you want to delete # %s?', $post['Post']['post_id']))); ?> </li>
		<li><?php echo $this->Html->link(__('List Posts'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Post'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Departments'), array('controller' => 'departments', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Department'), array('controller' => 'departments', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Transports'), array('controller' => 'transports', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Transport'), array('controller' => 'transports', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Transports'); ?></h3>
	<?php if (!empty($post['Transport'])): ?>
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
	<?php foreach ($post['Transport'] as $transport): ?>
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
