<?php
	echo "Example 1";
	$b = 30;
	$c ='';
		if(isset($b,$c)){
			echo "<br>The value stored in B is = ". $b;
			echo "<br> The value stored in C is = " .$c;
		if(empty($c)){
			echo "<br>There is no value stored in C". $c;
		}
	}
	echo "<br><br> Example 2";
	$name = "Mehul";
	$last = "";
		if(empty($name and $last)){
			echo "<br>First name = " .$name;
			echo "<br> Last name = " .$last;
			echo "<br>Please re-enter your full name";
		}
	echo "<br><br> Example 3";
	$var1= 0;
	$str1= "Learning";
		if(empty($var1 and $str1)){
			echo "<br>var1 is 0 or empty";
			echo "<br>string is not empty";
			echo "<br>String = " .$str1;
		}
	echo "<br><br> Example 4<br>";
		$amount = '';
		if (empty($amount)){
			echo "Amount = " .$amount;
			echo "<br>The amount is 0 or empty";
		}
	
?>