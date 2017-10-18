<?php
	$date =  date('Y-m-d', time());
	echo "The value of \$date: ".$date."<br>";
	$tar = "2017/05/24";
	echo "The value of \$tar: ".$tar."<br>";
	$year = array("2012", "396", "300","2000", "1100", "1089");
	echo "The value of \$year:\n ";
	print_r($year);
	echo "<br>";
	echo "<br>";

	


	$date = str_replace('-', '/', $date);
	echo "(2) The \$date with - was replaed with : ".$date."<br>";

	//$result = strnatcasecmp($date, $tar);
	//echo $result;


	if ((strnatcasecmp($date, $tar)) > 0) {
		echo "(3) \$date compared to \$tar: The Future" ."<br>";
	} elseif ((strnatcasecmp($date, $tar)) < 0) {
		echo "(3) \$date compared to \$tar: The past";
	} elseif ((strnatcasecmp($date, $tar)) == 0) {
		echo "(3) \$date compated to \$tar: Oops";
	}



	$offset = 0;
	$find = '/';
	$find_length = strlen($find);
	
	while($string_pos = strpos($date, $find, $offset)){
		echo "(4) Postion of '/' in \$date: " . $string_pos."<br>";
		$offset = $string_pos + $find_length; 
	}


	echo "(5) Number of Words in \$date: ".str_word_count($date)."<br>";

	echo "(6) Length of \$daate String: ".strlen($date)."<br>";

	echo "(7) ASCII value of first char is \$date string: ".ord($date)."<br>";

	echo "(8) Last two Chars in \$date: ".substr($date, -2)."<br>";

	echo "(9) Date ".$date = explode('/', $date);print_r($date)."<br";

	echo "<br>";







	foreach ($year as $value) {
		echo "(10) $value ";
		if (($value % 4 == 0) && ($value % 100 != 0) || ($value % 400 == 0))
			echo " True ";
		else 
			echo " False ";


		
		//echo $value, ':', (date('L', strtotime("$value-01-01")), ' ';

		//echo ($value) ? 'True' : 'Flase';
	}










?>
