
<h1>Customer Feedback</h1>

<p>
	To our valued guests: Thank you for your comments about our service, food and restaurant. 
	Your feedback is greatly appreciated and we strive to improve in all areas where we can.	
	<div>
		<ul class="pagination">
			<?php
				$iCurrentPage	= 1;
				if (isset($_GET['page'])) {
					$iCurrentPage	= $_GET['page'];
				}
				
				for ($iPages = 1; $iPages <= 26; $iPages++) {
					if ($iPages == $iCurrentPage){$sClass	= ' class="selected"';}else{$sClass	= '';}
					
					echo "<li $sClass><a href=\"".SITEROOT."feedback/?page=".$iPages."\">".$iPages."</a></li>";
				}
			?>
		</ul>
	</div>
	<div class="content-box-wide">
		<img class="left border" src="<?php echo SITEROOT; ?>app/images/feedback/page<?php echo $iCurrentPage ?>.gif" />	
	</div>	
</p>
