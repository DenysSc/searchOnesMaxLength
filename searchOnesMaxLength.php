<?
	$fi = fopen("INPUT.txt", "r");
	if ($fi) {
		$inputString = fgets($fi, 101);
		$allOnes = explode("0",$inputString);
		$maxOnesLength = 0;
		foreach($allOnes as $ones) 
			if ($maxOnesLength < strlen($ones)) 
				$maxOnesLength = strlen($ones);
		$fo = fopen("OUTPUT.txt", "a");
		$succes = fwrite($fo, $maxOnesLength);
		if ($succes) echo 'Succes file write.';	
	} else 
		echo "Error of file opening.";
	fclose($fi);
?>