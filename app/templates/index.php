<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

	<?php 
		/* require_once("app/classes/JasminePalace.php"); */
		require_once("settings.php");
	?>
	<?php require("header.php"); ?>
	
	<body>
	
		<div id="wrapper">
			
			<div id="left-column">
				<?php require("leftcolumn.php"); ?>
			</div>
								
			<div id="right-column">

				<?php require("navigation.php"); ?>
				
				<div class="content-bg">
					<div class="content">
						<?php require("app/pages/$template");?>
					</div>
				</div>
				
			</div>
		</div>
		
	</body>
</html>