<!DOCTYPE html>
<html>
    <head>
        <title> Solar System Generator</title>
        <link rel="icon" href="img/Aha-Soft-Space-Galaxy.ico" type="image/ico"/>
        <style>
        	@import url("css/styles.css");
        </style>
    </head>
    <body>
    <div id="main">
		<?php
			include 'inc/functions.php';
			play();
		?>
	
		<form>
			<input type="submit" value="Generate" />
		</form>
	</div>
    </body>
</html>