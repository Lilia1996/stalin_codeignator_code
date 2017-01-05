<?php if ( ! defined('BASEPATH')) exit('No direct script access
allowed');
function are_they_old_enough($dob, $at_least = 18) {
	$birthday = strtotime($dob['year'].'-'.$dob['month'].'-'.$dob['day']);
	$diff = floor((time() - $birthday) / (60 * 60 * 24 * 365));
	if ($diff >= $at_least) {
		return true;
	} else {
		return false;
	}
}
function good(){
	
	return "stalin";
}