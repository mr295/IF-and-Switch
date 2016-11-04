<?php
	echo "Example 1";
	$var_name;  
		if (is_null($var_name)){  
			echo '<br>Variable is  NULL';  
		}  
		else{  
			echo '<br>Variable is not NULL';  
		}

	echo "<br><br>Example 2";
		$name1;
		$name2 = 'Rahul';
		$name3;
			if (is_null($name1 || $name2 || $name3)){
				echo "One or more names missing";
			}
			else{
				echo "<br>String is null";
			}
			
	echo "<br><br> Example 3";
		$name;
			if (is_null($name)){
				$name= "mehul";
			}
			echo "<br>". $name;
			
	echo "<br><br> Example 4";
		$subject;
			if (isset($subject)){
				echo "Subject is not Set";
			}
			if (is_null($subject)){
				$subject= "Math";
				echo "<br>Your new Subject is = ". $subject;
			}
?> 