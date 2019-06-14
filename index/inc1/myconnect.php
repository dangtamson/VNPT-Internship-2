<?php

	$dbc=mysqli_connect('localhost','root','','demo');
	
	if(!$dbc)
	{
		echo "ket noi khong thanh cong";
	}
	else
	{
		mysqli_set_charset($dbc,'utf8');
		
	}
 ?>