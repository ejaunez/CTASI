<div class="purchases form">
<?php echo $this->Form->create('Purchase'); ?>
	<fieldset>
		<legend><?php echo __('Edit Purchase'); ?></legend>
	<?php
		echo $this->Form->input('purchase_id');
		echo $this->Form->input('provider_id');
		echo $this->Form->input('provider_name');
		echo $this->Form->input('provider_address');
		echo $this->Form->input('net_amount');
		echo $this->Form->input('discount_percentage');
		echo $this->Form->input('discount_amount');
		echo $this->Form->input('tax_amount');
		echo $this->Form->input('total_amount');
		echo $this->Form->input('purchase_date');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Purchase.y')), array('confirm' => __('Are you sure you want to delete # %s?', $this->Form->value('Purchase.y')))); ?></li>
		<li><?php echo $this->Html->link(__('List Purchases'), array('action' => 'index')); ?></li>
	</ul>
</div>
