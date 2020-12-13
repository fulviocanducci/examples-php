<?php


	$total = array("6.00","7.00","9.5","10","5.5","7.75","6.5","9");
	
	function sum($a, $b)
	{
		$a += (float)$b < 7 ? 1 : 0;
		return $a;
	}
	
	echo array_reduce($total, 'sum', 0);