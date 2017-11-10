<?php
echo "Masukkan kalimat gabut lo ngehe = ";
$string = str_split(trim(fgets(STDIN)));
	for ($i=0; $i <count($string) ; $i++) {
		for ($a=0; $a <= $i; $a++) { 
			echo $string[$a];
		}
		if($i<=count($string)-1) {
			echo "\n";
		}
	}
	for ($b=count($string)-1; $b >= 0 ; $b--) { 
		for ($c=0; $c <= $b; $c++) { 
			echo $string[$c];
		}
		echo "\n";
	}
?>
