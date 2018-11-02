<?php

	function fillPlanetArray($filename)
	{
		$newArray = explode(", ", $filename);
		return $newArray;
	}

	function displayPlanet($name, $pos, $size){
		if ($size <= 0) {	// image will not appear
			return false;
		}
		$imgID = 'planet'.$pos;
		if ($size < 12) {
	    	$imgID = $imgID.'S';	// Differentiate small images so they can expand more on hover.
	    }
		echo "<img id=$imgID src='img/$name.png' alt='$name' title='". ucfirst($name) . "' width='$size%' >";
	}
	
	function play() {
		echo "<img id='sun' src='img/sun.gif' alt='sun' title='Sun' width='10%'>";
		$elements = "mercury, venus, earth, mars, jupiter, saturn, uranus, neptune";
		$planetsArray = fillPlanetArray($elements);
		shuffle($planetsArray);
		$percentages = array();
		for ($i = 0; $i < 100; $i++) {
			$percentages[$i] = rand(5, 20);	// Generate a large array of random values.
		}
	    for ($i = 0; $i < sizeof($planetsArray); $i++) {
	       	$size = $percentages[array_rand($percentages)];	// The random size of an image in percent.
           	displayPlanet($planetsArray[$i], $i, $size);
	    }
	}

?>