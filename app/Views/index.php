<?php
	print("Mi primer php");
	echo "<h1>Mi primer php</h1>";
	$a=1;
	echo "<h3>$a </h3>";

	function mensaje($men1){
		echo "La miss nos enseña php $men1";
	}

	mensaje("con muchas ganas");

	echo "<br>";

	function mayorYmenor($num1,$num2,$num3){
		if($num1>$num2&&$num1>$num3){
			if($num2>$num3){
				echo "El numero menor es $num3 y el mayor es $num1";
			}else{
				echo "El numero menor es $num2 y el mayor es $num1";
			}
		}else if($num2>$num1&&$num2>$num3){
			if($num1>$num3){
				echo "El numero menor es $num3 y el mayor es $num2";
			}else{
				echo "El numero menor es $num1 y el mayor es $num2";
			}
		}else if($num3>$num2&&$num3>$num1){
			if($num1>$num2){
				echo "El numero menor es $num2 y el mayor es $num3";
			}else{
				echo "El numero menor es $num1 y el mayor es $num3";
			}
		}
	}

	mayorYmenor(5,10,1);
?>
