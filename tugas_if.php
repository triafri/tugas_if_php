<?php

	$nilai = 50;
	$nilai2 = 7;

	if ( $nilai%2 === 0 ) {
		echo "$nilai adalah angka genap";
	}else {
		echo "$nilai adalah ganjil";
	}

	if ( $nilai2%2 === 0 ) :
		echo "<br> $nilai2 adalah angka genap";
	else :
		echo "<br> $nilai2 adalah ganjil";
	endif

?>