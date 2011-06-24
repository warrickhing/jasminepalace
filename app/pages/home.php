<?php		
	$aFeedback = array(
		array("page" => 5, "comment" => "Starters + Main course was absolutely fantastic, we will DEFINITELY be eating it again very soon"),
		array("page" => 7, "comment" => "Thanks so much for outstanding service & food, I always enjoy coming in to your restaurant, it has a welcoming atmosphere with friendly faces!"),
		array("page" => 11, "comment" => "We always look forward to our visits and we are never dissapointed"),
		array("page" => 13, "comment" => "The best chinese food we have had outside China, and we have travelled all over the world"),
		array("page" => 16, "comment" => "Our family came to celebrate my birthday and thorougly enjoyed the experience. The food was tastey and more than enough. Thank you Jasmine Palace for being part of my special day"),
		array("page" => 18, "comment" => "Whether we have a take-away or a sit-down meal the food is always excellent"),
		array("page" => 25, "comment" => "Thank you for such a nice and wonderful experience. We have enjoyed every moment and learn about the Chinese culture")
	);
	
	$aRand = array_rand($aFeedback,3);
?>

<h1>Welcome to Jasmine Palace Chinese Restaurant & Takeaway</h1>

<p>
	<img class="right border" src="<?php echo SITEROOT; ?>app/images/img_08.jpg" />
	Situated in the eastern suburbs of Pretoria, Jasmine Palace is a Chinese Restaurant specializing in 
	Cantonese cuisines. 
</p>
<p>
	Choose to dine with us and you will enjoy a unique taste of Chinese food surrounded by an authentic and 
	traditional eastern atmosphere. We boast a comprehensive menu with a wide variety of dishes suitable
	for anyone's pallet or special requests. Our recently renovated restaurant will make your visit an 
	unforgettable experience.	
</p>

<p>
	<img class="left border" src="<?php echo SITEROOT; ?>app/images/img_05.jpg" />
	While we stock a big range of wines and beers we also allow BYO.	
</p>
<p>		
	Our English and Chinese speaking staff pride themselves with providing quality and friendly service 
	with a smile. Mr Li - our head chef who has worked at various restaurants and sushi bars runs 
	the kitchen and strives for perfection to ensure his guests are served with nothing but the best.
</p>
<p>
	So call us to make a reservation or simply come on in and give us a try. 
</p>
<!--
<div class="left" style="width:210px;padding-top:0;">
	<h1>News</h1>		
	<ul class="newslist">
		<li>
			<strong>April 09</strong> - The South African Bridal Industry Academy <strong>Star Of The Day</strong>&nbsp;
			<a href="<?php echo SITEROOT; ?>app/docs/Stars-JasminePalace925-27March.pdf" target="_blank">View award</a>
		</li>
	</ul>
</div>
-->

<div class="clearBoth"></div>

<h1>Customer Feedback</h1>
<p>
	<?php
		for ($iRand=0; $iRand < sizeOf($aRand); $iRand++) {
			echo '<span class="quote">&ldquo;</span>'.$aFeedback[$aRand[$iRand]]["comment"].'<span class="quote">&rdquo;</span> <a href="'.$SITEROOT.'feedback/?page='.$aFeedback[$aRand[$iRand]]["page"].'">Read More</a><br /><br />';
		}
	?>
</p>
<!--
<h1>News</h1>
<p>
	<ul class="newslist">
		<li>
			<strong>April 09</strong> - The South African Bridal Industry Academy <strong>Star Of The Day</strong><br />
			<a href="<?php echo SITEROOT; ?>app/docs/Stars-JasminePalace925-27March.pdf" target="_blank">View award</a>
		</li>
	</ul>
</p>
-->



