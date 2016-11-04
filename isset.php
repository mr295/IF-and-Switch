<?php
	$name = "Mehul Rana";
	if (isset($name)) {
		echo "Full Name is = " .$name;
	}
	
	$subject;
		if (isset($subject)){
			echo "<br> Course Name = " .$subject ;
		}
		else{
			echo "<br> Course Name is not set";
		}
		
	$id_num = 31088888;
		if (isset($id_num)){
			echo "<br> ID Number is = " .$id_num;
		}
		
	$num_credit = 3;
		if (isset($num_credit)){
			echo "<br> Number of Credits = " .$num_credit;
		}
?>