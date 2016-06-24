<?php

function flattenArray($array) {
if(is_null($array) || empty($array)) {
		return array(-1);
	}
	$resultarray = [];
	foreach ($array as $element) {
		if (is_array($element)) {
			$resultarray = array_merge($resultarray, flattenArray($element));
		}
		else {
			array_push ($resultarray, $element);
		}		
	}
	return $resultarray;
}

$array = [1,2,3,[4,5,6],[7,[8,9]]];

print (implode(flattenArray($array)));
