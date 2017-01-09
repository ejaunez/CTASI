<div class="currencies view">
<h2><?php echo __('Currency'); ?></h2>
	<dl>
		<dt><?php echo __('Currency Id'); ?></dt>
		<dd>
			<?php echo h($currency['Currency']['currency_id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($currency['Currency']['name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Dollar Parity'); ?></dt>
		<dd>
			<?php echo h($currency['Currency']['dollar_parity']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Currency'), array('action' => 'edit', $currency['Currency']['currency_id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Currency'), array('action' => 'delete', $currency['Currency']['currency_id']), array('confirm' => __('Are you sure you want to delete # %s?', $currency['Currency']['currency_id']))); ?> </li>
		<li><?php echo $this->Html->link(__('List Currencies'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Currency'), array('action' => 'add')); ?> </li>
	</ul>
</div>
