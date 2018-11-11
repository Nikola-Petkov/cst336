<!DOCTYPE html>
<html lang="en">
    <head>
    	<meta charset="utf-8"/>
        <title>CosmoQuiz</title>
        <link rel="icon" href="img/saturn.ico" type="image/ico"/>
        <style>
        	@import url("css/styles.css");
        </style>
    </head>
    <body>
        <div id = "header">
        	<h1 id = title> CosmoQuiz </h1>
        </div>
    	
    <div id="main">
    	
		<form id="cosmoquiz" method="post">
			<fieldset>
			<label for="numplanets">#1 How many planets are known as "gas giants"?</label>
			<select id="numplanets" name="Q1">
			<option value="1" <?= ($_POST['Q1']=="1")?"selected":"" ?>>1</option>
			<option value="2" <?= ($_POST['Q1']=="2")?"selected":"" ?>>2</option>
			<option value="3" <?= ($_POST['Q1']=="3")?"selected":"" ?>>3</option>
			<option value="4" <?= ($_POST['Q1']=="4")?"selected":"" ?>>4</option>
			<option value="5" <?= ($_POST['Q1']=="5")?"selected":"" ?>>5</option>
			<option value="6" <?= ($_POST['Q1']=="6")?"selected":"" ?>>6</option>
			<option value="7" <?= ($_POST['Q1']=="7")?"selected":"" ?>>7</option>
			<option value="8" <?= ($_POST['Q1']=="8")?"selected":"" ?>>8</option>
			<option value="9" <?= ($_POST['Q1']=="9")?"selected":"" ?>>9</option>
			<option value="10" <?= ($_POST['Q1']=="10")?"selected":"" ?>>10</option>
			</select>
			</fieldset>
		    
			<fieldset>
			<legend>#2 Which planet is the largest in both diameter and mass?</legend>
			<input id="Saturn" type="radio" name="Q2" value="saturn" <?= ($_POST['Q2']=="saturn")?"checked":"" ?>>
			<label for="Saturn">Saturn</label><br>
			<input id="Neptune" type="radio" name="Q2" value="neptune" <?= ($_POST['Q2']=="neptune")?"checked":"" ?>>
			<label for="Neptune">Neptune</label><br>
			<input id="Jupiter" type="radio" name="Q2" value="jupiter" <?= ($_POST['Q2']=="jupiter")?"checked":"" ?>>
			<label for="Jupiter">Jupiter</label><br>
			<input id="Venus" type="radio" name="Q2" value="venus" <?= ($_POST['Q2']=="venus")?"checked":"" ?>>
			<label for="Venus">Venus</label><br>
			</fieldset>
			
			<fieldset>
			<legend>#3 Which two moons belong to Mars?</legend>
			<input id="Phobos" type="checkbox" name="Q3[]" value="Phobos" <?= (in_array("Phobos", $_POST['Q3']))?"checked":"" ?>>
			<label for="Phobos">Phobos</label><br>
			<input id="Deimos" type="checkbox" name="Q3[]" value="Deimos" <?= (in_array("Deimos", $_POST['Q3']))?"checked":"" ?>>
			<label for="Deimos">Deimos</label><br>
			<input id="Europa" type="checkbox" name="Q3[]" value="Europa" <?= (in_array("Europa", $_POST['Q3']))?"checked":"" ?>>
			<label for="Europa">Europa</label><br>
			<input id="Callisto" type="checkbox" name="Q3[]" value="Callisto" <?= (in_array("Callisto", $_POST['Q3']))?"checked":"" ?>>
			<label for="Callisto">Callisto</label><br>
			<input id="Titan" type="checkbox" name="Q3[]" value="Titan" <?= (in_array("Titan", $_POST['Q3']))?"checked":"" ?>>
			<label for="Titan">Titan</label><br>
			<input id="Iapetus" type="checkbox" name="Q3[]" value="Iapetus" <?= (in_array("Iapetus", $_POST['Q3']))?"checked":"" ?>>
			<label for="Iapetus">Iapetus</label><br>			
			</fieldset>
			
			<fieldset>
			<legend>#4 Which moon does not belong to Uranus?</legend>
			<input id="Ariel" type="radio" name="Q4" value="ariel" <?= ($_POST['Q4']=="ariel")?"checked":"" ?>>
			<label for="Ariel">Ariel</label><br>
			<input id="Umbriel" type="radio" name="Q4" value="umbriel" <?= ($_POST['Q4']=="umbriel")?"checked":"" ?>>
			<label for="Umbriel">Umbriel</label><br>
			<input id="Ganymede" type="radio" name="Q4" value="ganymede" <?= ($_POST['Q4']=="ganymede")?"checked":"" ?>>
			<label for="Ganymede">Ganymede</label><br>
			<input id="Oberon" type="radio" name="Q4" value="oberon" <?= ($_POST['Q4']=="oberon")?"checked":"" ?>>
			<label for="Oberon">Oberon</label><br>
			</fieldset>
			
			<fieldset>
			<legend>#5 Type in the name of the planet pictured:</legend>
		    <label for='pictured'><img id="planet" src="img/planet.png" alt="Planet" /></label>
			<input id='pictured' type='text' name='Q5' value="<?php if (isset($_POST['Q5'])) echo $_POST['Q5']; ?>"/>
			</fieldset>
			
			<fieldset>
			<legend>#6 Galaxies can be classified as Spiral, Elliptical, Triangular.</legend>
			<input id="true" type="radio" name="Q6" value="true" <?= ($_POST['Q6']=="true")?"checked":"" ?>>
			<label for="true">True</label><br>
			<input id="false" type="radio" name="Q6" value="false" <?= ($_POST['Q6']=="false")?"checked":"" ?>>
			<label for="false">False</label><br>
			</fieldset>
			
			<fieldset>
			<legend>#7 Andromeda is the closest galaxy to the Milky Way at a distance of:</legend>
			<input id="3" type="radio" name="Q7" value="3" <?= ($_POST['Q7']=="3")?"checked":"" ?>>
			<label for="3">3 Million Light Years</label><br>
			<input id="2.54" type="radio" name="Q7" value="2.54" <?= ($_POST['Q7']=="2.54")?"checked":"" ?>>
			<label for="2.54">2.54 Million Light Years</label><br>
			<input id="29" type="radio" name="Q7" value="29" <?= ($_POST['Q7']=="29")?"checked":"" ?>>
			<label for="29">29 Million Light Years</label><br>
			<input id="21" type="radio" name="Q7" value="21" <?= ($_POST['Q7']=="21")?"checked":"" ?>>
			<label for="21">21 Million Light Years</label><br>
			</fieldset>
			
			<fieldset>
			<legend>#8 Which planets have no known moons?</legend>
			<input id="Venus" type="checkbox" name="Q8[]" value="Venus" <?= (in_array("Venus", $_POST['Q8']))?"checked":"" ?>>
			<label for="Venus">Venus</label><br>
			<input id="Neptune" type="checkbox" name="Q8[]" value="Neptune" <?= (in_array("Neptune", $_POST['Q8']))?"checked":"" ?>>
			<label for="Neptune">Neptune</label><br>
			<input id="Mercury" type="checkbox" name="Q8[]" value="Mercury" <?= (in_array("Mercury", $_POST['Q8']))?"checked":"" ?>>
			<label for="Mercury">Mercury</label><br>
			<input id="Mars" type="checkbox" name="Q8[]" value="Mars" <?= (in_array("Mars", $_POST['Q8']))?"checked":"" ?>>
			<label for="Mars">Mars</label><br>
			</fieldset>
			
			<fieldset>
			<legend>#9 Dobsonian telescope is a type of:</legend>
			<input id="Gallilean" type="radio" name="Q9" value="Gallilean" <?= ($_POST['Q9']=="Gallilean")?"checked":"" ?>>
			<label for="Gallilean">Gallilean telescope</label><br>
			<input id="Keplerian" type="radio" name="Q9" value="Keplerian" <?= ($_POST['Q9']=="Keplerian")?"checked":"" ?>>
			<label for="Keplerian">Keplerian telescope</label><br>
			<input id="Newtonian" type="radio" name="Q9" value="Newtonian" <?= ($_POST['Q9']=="Newtonian")?"checked":"" ?>>
			<label for="Newtonian">Newtonian telescope</label><br>
			</fieldset>
			
			<fieldset>
			<legend>#10 Optical telescopes are classified as:</legend>
		    Refractor, 
			<input id='telescope' type='text' name='Q10' value="<?php if (isset($_POST['Q10'])) echo $_POST['Q10']; ?>"/>
			, Catadioptric.
			</fieldset>
			
			<div id="buttons">
				<br><br>
				<input type="submit" name="submit" value="Submit Quiz">
				<input type="reset" name="reset" value="Clear">
			</div>
		</form>
	</div>
	
	<?php
		if (!empty($_POST['submit']))
		{
			
			include 'inc/functions.php';
			echo '<div id="output">';
			echo '</br>';
    		checkAnswers();
    		echo '</br>';
    		echo '</div>';
		}
	?>
	
    <footer>
        <hr>
		CST336 - Internet Programming. 2018&copy; Petkov<br />
		<strong>Data: </strong><a href="http://spacefacts.com">SpaceFacts.com</a>
		<strong>Photos: </strong><a href="http://nasa.gov">NASA</a>, <a href="http://wallpapercave.com/w/2wuJNqK">WallpaperCave</a><br />
		Used for academic purposes only.<br />
		<img src="img/CSUMBLogoWhite.png" alt="Picture of CSUMB logo" height="100" width="274" />
		</footer>
    </body>
</html>