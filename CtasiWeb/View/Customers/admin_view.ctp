<div class="customers view">
<h2><?php echo __('Customer'); ?></h2>
	<dl>
		<dt><?php echo __('Customer Id'); ?></dt>
		<dd>
			<?php echo h($customer['Customer']['customer_id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Names'); ?></dt>
		<dd>
			<?php echo h($customer['Customer']['names']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Last Name'); ?></dt>
		<dd>
			<?php echo h($customer['Customer']['last_name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Mother Name'); ?></dt>
		<dd>
			<?php echo h($customer['Customer']['mother_name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Last Contact Date'); ?></dt>
		<dd>
			<?php echo h($customer['Customer']['last_contact_date']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Last Contact User Id'); ?></dt>
		<dd>
			<?php echo h($customer['Customer']['last_contact_user_id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Creation Date'); ?></dt>
		<dd>
			<?php echo h($customer['Customer']['creation_date']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Creation User Id'); ?></dt>
		<dd>
			<?php echo h($customer['Customer']['creation_user_id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Update Date'); ?></dt>
		<dd>
			<?php echo h($customer['Customer']['update_date']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Update User Id'); ?></dt>
		<dd>
			<?php echo h($customer['Customer']['update_user_id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Comment'); ?></dt>
		<dd>
			<?php echo h($customer['Customer']['comment']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Customer'), array('action' => 'edit', $customer['Customer']['customer_id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Customer'), array('action' => 'delete', $customer['Customer']['customer_id']), array('confirm' => __('Are you sure you want to delete # %s?', $customer['Customer']['customer_id']))); ?> </li>
		<li><?php echo $this->Html->link(__('List Customers'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Customer'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Addresses'), array('controller' => 'addresses', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Address'), array('controller' => 'addresses', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Phones'), array('controller' => 'phones', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Phone'), array('controller' => 'phones', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Addresses'); ?></h3>
	<?php if (!empty($customer['Address'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Address Id'); ?></th>
		<th><?php echo __('Customer Id'); ?></th>
		<th><?php echo __('Street'); ?></th>
		<th><?php echo __('Number'); ?></th>
		<th><?php echo __('Block'); ?></th>
		<th><?php echo __('Apartment'); ?></th>
		<th><?php echo __('Sector'); ?></th>
		<th><?php echo __('Department Id'); ?></th>
		<th><?php echo __('City'); ?></th>
		<th><?php echo __('Reference'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($customer['Address'] as $address): ?>
		<tr>
			<td><?php echo $address['address_id']; ?></td>
			<td><?php echo $address['customer_id']; ?></td>
			<td><?php echo $address['street']; ?></td>
			<td><?php echo $address['number']; ?></td>
			<td><?php echo $address['block']; ?></td>
			<td><?php echo $address['apartment']; ?></td>
			<td><?php echo $address['sector']; ?></td>
			<td><?php echo $address['department_id']; ?></td>
			<td><?php echo $address['city']; ?></td>
			<td><?php echo $address['reference']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'addresses', 'action' => 'view', $address['address_id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'addresses', 'action' => 'edit', $address['address_id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'addresses', 'action' => 'delete', $address['address_id']), array('confirm' => __('Are you sure you want to delete # %s?', $address['address_id']))); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Address'), array('controller' => 'addresses', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Phones'); ?></h3>
	<?php if (!empty($customer['Phone'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Phone Id'); ?></th>
		<th><?php echo __('Customer Id'); ?></th>
		<th><?php echo __('Country Id'); ?></th>
		<th><?php echo __('Area Code'); ?></th>
		<th><?php echo __('Number'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($customer['Phone'] as $phone): ?>
		<tr>
			<td><?php echo $phone['phone_id']; ?></td>
			<td><?php echo $phone['customer_id']; ?></td>
			<td><?php echo $phone['country_id']; ?></td>
			<td><?php echo $phone['area_code']; ?></td>
			<td><?php echo $phone['number']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'phones', 'action' => 'view', $phone['phone_id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'phones', 'action' => 'edit', $phone['phone_id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'phones', 'action' => 'delete', $phone['phone_id']), array('confirm' => __('Are you sure you want to delete # %s?', $phone['phone_id']))); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Phone'), array('controller' => 'phones', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
