<?php if( false ) {
	
	// Return as JSON
	echo '[{';
	$i = count($customers);
	foreach ($customers as $customer): 
		echo '"' . h($customer['Customer']['customer_id']) . '":"' . h($customer['Customer']['full_name'] . '"');
		$i--;
		if( $i > 0 ) echo ',';
	endforeach;
	echo '}]';
} else {
	// Return as OPTION elements
	foreach ($customers as $customer):
		echo '<option value="' . h($customer['Customer']['customer_id']) . '">' . h($customer['Customer']['full_name']) . '</option>';
	endforeach;
}?>
