<?php
echo "Example 1<br>";
	if ($i == 0) {
		echo "i equals 0<br>";
	} 
	elseif ($i == 1) {
		echo "i equals 1<br>";
	} 
	elseif ($i == 2) {
		echo "i equals 2<br>";
	}

	switch ($i) {
		case 0:
			echo "i equals 0<br>";
        break;
		case 1:
			echo "i equals 1<br>";
        break;
		case 2:
			echo "i equals 2<br>";
        break;
}

echo "<br>Example 2<br>";
	$favcolor = "";
	if (isset($favcolor));
	
	switch ($favcolor) {
		case "red":
			echo "Your favorite color is red!";
        break;
		case "blue":
			echo "Your favorite color is blue!";
        break;
		case "green":
			echo "Your favorite color is green!";
        break;
		default:
			echo "Your favorite color is neither red, blue, nor green!";
}

echo "<br><br>Example 3<br>";
	$amount= "";
		if (empty($amount));
		
		switch ($total) {
		case "4":
			echo "Your total is 2!";
        break;
		case "":
			echo "Your amount is 0!";
        break;
		case "5":
			echo "Your amount is 5!";
        break;
}

echo "<br><br>Example 4<br>";
		$subject;
			if (isset($subject));
			if (is_null($subject)){
				$subject= "Math";
			}
		switch ($subject){
			case "Science":
				echo "Subject = ". $subject;
				break;
			case "Math":
				echo "Subject = ". $subject;
				break;
			case "English":
				echo "Subject = ". $subject;
				break;
		}

?>