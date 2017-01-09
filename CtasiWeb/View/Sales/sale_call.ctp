<?php echo $this->Html->div('JSON_DBG','Texto del JSON'); ?>
<div class="sales form">
<fieldset>
		<legend><?php echo __('Do a Sale'); ?></legend>
	<?php
		echo $this->Form->create('SelectCustomer');
		echo $this->Form->hidden('id');
		echo $this->Form->input('name');
		//echo $this->Form->select('select', array('disabled' => true));
		echo $this->Form->end(_('Select Customer'));

		if(!empty($customer['Customer'])) {
			
			
		}
			
// 		echo $this->Form->create('Sale');
// 		echo $this->Form->hidden('customer_id');
// 		echo $this->Form->input('customer_name');
// 		echo $this->Form->select('customer_sel', array('1' => 'xxx 1', '2' => 'xxx 2', '3' => 'xxx 3', '4' => 'xxx 4'));
// 		echo $this->Form->input('address_id');
// 		echo $this->Form->input('phone_id');
// 		echo $this->Form->input('sale_date');
// 		echo $this->Form->input('dispatch_date');
// 		echo $this->Form->input('transport_id');
// 		echo $this->Form->input('items_qty');
// 		echo $this->Form->input('sale_commission');
// 		echo $this->Form->input('sale_net');
// 		echo $this->Form->input('sale_tax');
// 		echo $this->Form->input('sale_total');
// 		echo $this->Form->input('sale_user_id');
// 		echo $this->Form->input('aproval_user_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="related">
<?php echo $this->Form->create('SaleAddresAndPhone'); ?>
<h3><?php echo __('Customer Adresses'); ?></h3>
	<?php if (!empty($customer['Address'])): ?>
		<table class="detail" cellpadding = "0" cellspacing = "0">
		<tr>
			<th class="actions"><?php echo __('Select'); ?></th>
			<th><?php echo __('Street'); ?></th>
			<th><?php echo __('Number'); ?></th>
			<th><?php echo __('Block'); ?></th>
			<th><?php echo __('Apartment'); ?></th>
			<th><?php echo __('Sector'); ?></th>
			<th><?php echo __('Department'); ?></th>
			<th><?php echo __('City'); ?></th>
		</tr>
		<?php foreach ($customer['Address'] as $address): ?>
			<tr>
				<td><?php
					$radioOpt = array( $address['address_id'] => ' ');
					$radioAttr = array('type' => 'radio', 'value' => 'addressId', 'options' => $radioOpt, 'label' => false);
					echo $this->Form->input('address', $radioAttr);
				?></td>
				<td><?php echo $address['street']; ?></td>
				<td><?php echo $address['number']; ?></td>
				<td><?php echo $address['block']; ?></td>
				<td><?php echo $address['apartment']; ?></td>
				<td><?php echo $address['sector']; ?></td>
				<td><?php echo $address['Department']['name']; ?></td>
				<td><?php echo $address['city']; ?></td>
				
			</tr>
		<?php endforeach; ?>
		</table>
	<?php endif; ?>
</div>
<div class="related">
	<h3><?php echo __('Customer Phones'); ?></h3>
	<?php if (!empty($customer['Phone'])): ?>
		<table cellpadding = "0" cellspacing = "0">
		<tr>
			<th><?php echo __('Country'); ?></th>
			<th><?php echo __('Area Code'); ?></th>
			<th><?php echo __('Number'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
		</tr>
		<?php foreach ($customer['Phone'] as $phone): ?>
			<tr>
				<td><?php echo $phone['Country']['name']; ?></td>
				<td><?php echo $phone['area_code']; ?></td>
				<td><?php echo $phone['number']; ?></td>
			</tr>
		<?php endforeach; ?>
		</table>
	<?php endif; ?>
</div>

<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
	</ul>
</div>
