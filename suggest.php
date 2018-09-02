<?php
 
$people[] ="asdf";
$people[] ="fsdf";
$people[] ="fsdf";
$people[] ="f";
$people[] ="df";
$people[] ="sdzdf";
$people[] ="masdf";
$people[] ="hfsdf";
$people[] ="efsdf";
$people[] ="af";
$people[] ="ddf";
$people[] ="zsdzdf";

$q = $_REQUEST['q'];
$suggestion = ""; 

if ($q!==""){
	$q = strtolower($q);
	$len = strlen($q);

	foreach ($people as $person) {
		if(stristr($q,substr($person,0,$len) ) ){
			if($suggestion===""){
				$suggestion = $person;
			}
			else{
				$suggestion .= ", $person";				
			} 
		}
	}
}

echo $suggestion === ""?"No Suggestion":$suggestion;