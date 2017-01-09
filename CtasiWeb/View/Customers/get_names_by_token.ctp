<?php
/** 
 * Returns a JSON encoded array of <b>{'value', 'data'}</b> tuples
 * with the customer's full_name and id, for the autocomplete functionality.
 * @author ejaunez@gmail.com
 * @version 1.0
 */
	$suggestions = array();
	foreach ($customers as $customer):
		array_push($suggestions,
				array('value' => $customer['Customer']['full_name'], 'data' => $customer['Customer']['customer_id']));
	endforeach;
	
	echo json_encode(array('suggestions' => $suggestions), JSON_UNESCAPED_UNICODE);
?> 