<?php
function ucgen($say){
	$a = 0;
	while ($a <= $say) {
		
		for ($i=0; $i <= $a; $i++) { 
			echo "0";
		}
		$a++;
		echo "<br>";
	}
}
ucgen(15);