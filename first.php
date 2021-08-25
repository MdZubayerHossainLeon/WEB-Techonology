<!DOCTYPE html>
<html>
<head>
	<title>This is my first page</title>
</head>
<body>
	<?php
	//echo "Hello world</br>";
	//cho "50+80</br>";
	$x="20";
	$y="10";
	//echo $x+$y;
	$num1="hello";
    $NUM1="HELLO";
    //echo"</br>$NUM1</br>";
	//echo $num1." ".$NUM1;
	/*echo  strtoupper($num1);
	echo"</br>";
	echo strlen($NUM1);
	echo"</br>";
	echo ucfirst($num1);
	echo"</br>";
	echo pow(2,5);
	echo"</br>";
	echo sqrt(16);
	echo"</br>";
	echo abs(-20);
	echo"</br>";
	echo cos(45);
	echo"</br>";
	echo sin(90);
	echo"</br>";
	echo 10%3;
	*/
	/*echo"</br>";
	$num3=10;
	$num3++;
	echo $num3;
	echo"</br>";
	$num3--;
	echo $num3;*/
    //echo"</br>";
	$x=array(5,10,15,20,25);
	echo $x[4];
	echo"</br>";
	$y=array("java","php","html","css","javaScript");
	echo $y[1];
	echo"</br>";
	?>
	<pre>
	<?php
	
	print_r($y);
	?>
</pre>
</body>
</html>