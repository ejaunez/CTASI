<div class="transports form">
<?php echo $this->Form->create('Transport'); ?>
	<fieldset>
		<legend><?php echo __('Edit Transport'); ?></legend>
	<?php
		echo $this->Form->input('transport_id');
		echo $this->Form->input('name');
		echo $this->Form->input('phone');
		echo $this->Form->input('mobile');
		echo $this->Form->input('email');
		echo $this->Form->input('store_id');
		echo $this->Form->input('Post');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Transport.transport_id')), array('confirm' => __('Are you sure you want to delete # %s?', $this->Form->value('Transport.transport_id')))); ?></li>
		<li><?php echo $this->Html->link(__('List Transports'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Stores'), array('controller' => 'stores', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Store'), array('controller' => 'stores', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Posts'), array('controller' => 'posts', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Post'), array('controller' => 'posts', 'action' => 'add')); ?> </li>
	</ul>
</div>
