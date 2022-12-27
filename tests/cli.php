<?php
	include('runner.php');

	$ran		= 0;
	$public_passed	= 0;
	$strict_passed	= 0;

	foreach ($tests as $test){

		$ran++;

		if ($test['expected'] == $test['result_public']){
			$public_passed++;
		} else{
			print_r($test);
		}

		if ($test['expected'] == $test['result_strict']){
			$strict_passed++;
		} else{
			print_r($test);
		}

	}

	echo "Public passed $public_passed of $ran\n";
	echo "Strict passed $strict_passed of $ran\n";
?>
