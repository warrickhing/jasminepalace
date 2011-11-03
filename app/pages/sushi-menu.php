<?php
	$menuCategories 	= array();
	$menuCategoriesData	= file("app/data/sushi-menu-categories.txt",1);	
	
	for ($iMenuCategoriesData=0; $iMenuCategoriesData<count($menuCategoriesData); $iMenuCategoriesData++) {
		$menuCategoryData	= explode("|",$menuCategoriesData[$iMenuCategoriesData]);
		$menuCategories[$iMenuCategoriesData]["menu_category_id"]	= $menuCategoryData[0];
		$menuCategories[$iMenuCategoriesData]["title_en"] 			= $menuCategoryData[1];
		$menuCategories[$iMenuCategoriesData]["title_ch"] 			= $menuCategoryData[2];
	}
	
	$menuItems		= array();
	$menuItemsData	= file("app/data/sushi-menu-items.txt",1);
	for ($iMenuItemsData=0; $iMenuItemsData<count($menuItemsData); $iMenuItemsData++) {
		$menuItemData		= explode("|",$menuItemsData[$iMenuItemsData]);
		$menuCategoryID		= $menuItemData[0]; // The first item in the |'ed list
		
		$tmpItems						= array();
		$tmpItems["menu_category_id"]	= $menuItemData[0];
		$tmpItems["title_en"] 			= $menuItemData[1];
		$tmpItems["title_ch"] 			= $menuItemData[2];
		$tmpItems["price"] 				= $menuItemData[3];
		
		$menuItems[$menuCategoryID][]	= $tmpItems;
	}
	
	//var_dump($menuCategories);
	//print_r($menuItems);
	


	echo '<script language="JavaScript1.2" src="'.SITEROOT.'app/lib/script/jasminepalace.js" type="text/javascript"></script>';
/*
	echo '<script language="javascript" type="text/javascript" src="'.SITEROOT.'app/lib/script/jquery-1.3.2.min.js"></script>';
    echo '<script language="javascript" type="text/javascript" src="'.SITEROOT.'app/lib/script/jquery.slidingGallery-1.2.min.js"></script>';   
   	echo '<script language="javascript" type="text/javascript">';   	
    	echo '$(function() {';    	
        echo '    var zoomFunc = function(dimension) {';        
        echo '        return dimension * 1.5;';
        echo '    };';
        echo '    var shrinkFunc = function(dimension) {';
        echo '        return dimension * 0.5;';
        echo '    };';
        echo '    $(\'div.gallery img\').slidingGallery({\'slideSpeed\':\'slow\',\'Lzoom\':zoomFunc, \'Pzoom\':zoomFunc,\'Lshrink\':shrinkFunc,\'Pshrink\':shrinkFunc});';        
        echo '});';        
    echo '</script>';
*/

	echo '<h1>Sushi Menu</h1>';
	//echo '<strong>Sushi Special: Mon & Sun - less 15% for cash payments or less 10% for card payments.</strong> ';
	echo 'All items are seasonal and not always available<br /><br />';

/*
	echo '<p><div class="gallery">';
        echo '<img src="'.SITEROOT.'app/images/sushi0380.jpg" alt="Image 1" class="start" />';
        echo '<img src="'.SITEROOT.'app/images/sushi0381.jpg" alt="Image 1" />';
        echo '<img src="'.SITEROOT.'app/images/sushi0382.jpg" alt="Image 1" />';
        echo '<img src="'.SITEROOT.'app/images/sushi0383.jpg" alt="Image 1" />';
        
    echo '</div></p>';
*/
    
	echo '<div class="scroll">';
	/*
	echo '<img src="'.SITEROOT.'app/images/ChristmasMenuBannerTop.gif" />';	
	echo '<div class="christmasMenu">';
	echo '<span class="info">Jasmine Palace is looking forward to welcoming you to our Christmas lunch on Friday 25th December 2009</span>';
	echo '<span class="title">Menu</span>';
	echo '<span class="details">(R165.00 pp)</span>';
	echo '<span class="title">Soup of the day</span>';
	echo '<span class="details">Mock Shark Fin Soup or Chicken and Corn Soup</span>';
	echo '<span class="title">Starters</span>';
	echo '<span class="details">Vegetable Spring Rolls<br />Deep Fried Mix Seafood</span>';	
	echo '<span class="title">Main Course</span>';
	echo '<span class="details">Garlic  Chicken / Garlic Beef or Kung Bo Chicken / Beef (Spicy Hot)</span>';
	echo '<span class="details">Deep Fried Kingklip</span>';
	echo '<span class="details">Sweet & Sour Pork / Chicken Cantonese Style</span>';
	echo '<span class="details">Egg Fried Rice or Chow Mein</span>';	
	echo '<span class="title">Dessert</span>';
	echo '<span class="details">Bowtie and Ice Cream<br />Jasmine tea</span>';	
	echo '<span><br />On arrival, each person will be served with a glass of house wine or soft drink and will receive a  Christmas gift.';
	echo '<span><br /><strong>Bookings are essential</strong> so please <a href="'.SITEROOT.'contact-us/">contact us</a> to avoid disappointment.</span>';
	echo '</div>';
	echo '<img src="'.SITEROOT.'app/images/ChristmasMenuBannerBottom.gif" />';
	*/
	echo '	<p>';
	
	for ($iMenuCategories=0;$iMenuCategories<count($menuCategories);$iMenuCategories++) {
		$menuCategoryID		= $menuCategories[$iMenuCategories]["menu_category_id"];
		$menuItemCounter	= 0;

		if (array_key_exists($menuCategoryID,$menuItems)) {
			echo '<div class="category-header">';
			echo '	<a href="javascript:void(0);" onclick="javascript:toggleShowHide(\'dspCategory_'.$iMenuCategories.'\');">';
			echo '		<span class="category-title">'.$menuCategories[$iMenuCategories]["title_en"].'</span>';
			echo '	</a>';
			echo '</div>';
			
			echo '<div id="dspCategory_'.$iMenuCategories.'" class="category-content" style="display:block;">';
			echo '<table width="100%">';
			//echo 	'<tr><td width="70%"></td><td width="20%"></td><td width="10%"></td></tr>';	
			echo 	'<tr><td width="90%"></td><td width="10%"></td></tr>';
			foreach ($menuItems[$menuCategoryID] as $menuItem) {
				if ($menuItemCounter % 2 == 0) {$class="even";} else {$class="odd";}
				echo '<tr class="'.$class.'">';
				echo "	<td>" . $menuItem['title_en'] . "</td>";
				//echo "	<td>" . $menuItem['title_ch'] . "</td>";
				echo "	<td>" . $menuItem['price'] . "</td>";
				echo "</tr>";
				$menuItemCounter++;
			}
			echo "</table>";
			echo "</div><br />";
		}
		
	}
	
	echo '	</p>';
	echo '</div>';
?>



<!--
<p>
	<span class="heading1"></span><br />
	All items are seasonal and not always available.
</p>

<div class="scroll">	
	<p>
		<img class="right border" src="<?php echo SITEROOT; ?>app/images/sushi0378.jpg" />
		<ul class="menulist">
			<li>Sushi (Raw seafood with vinegar- flavoured rice)</li>
			<li>Nigiri Regular - 7 pieces Nigiri and 4 pieces of California roll (Chef's choice)</li>
			<li>Nigiri Deluxe - 9 pieces Nigiri and 4 pieces of California roll (Chef's choice)</li>
			<li>Nigiri Combination - 6 pieces Nigiri and 4 pieces California roll and 4 pieces</li>
			<li>Sashimi (Chef's choice)</li>
			<li>Salmon Combination- 4 pieces Nigiri and 2 pieces Battleship and 4 pieces of</li> 
			<li>Rainbow roll and 4 pieces Maki and 5 pieces Sashimi</li>
		</ul>
	
		<ul class="menulist">
			<li>Nigiri A La Carte (2 pieces)</li>
			<li>Maguro (Red Tuna)</li>
			<li>Shake (Scottish Salmon)</li>
			<li>Hamachi (Yellow Tail)</li>
			<li>Tai (Local Fish)</li>
			<li>Ebi (Prawn)</li>
			<li>Ikura (Salmon Roe)</li>
			<li>Tobiko (Caviar)</li>
			<li>Tamago (Egg Omelette)</li>
			<li>Kanikama  (Crab Stick)</li>
			<li>Inari Tofu (Bean Curd Skin)</li>
		</ul>
		
		<img class="right border" src="<?php echo SITEROOT; ?>app/images/sushi0380.jpg" />
		
		<ul class="menulist">
			<li>Maki Sushi (Rolled Sushi 4 pieces)</li>
			<li>Futo Maki</li>
			<li>LI's Special</li>
			<li>Salad Maki</li>
		</ul>
	
		<ul class="menulist">
			<li>Maki (Rolled Sushi 8 pieces)</li>
			<li>Tekka Maki (Tuna Roll)</li>
			<li>Kappa Maki (Cucumber Roll)</li>
			<li>Oshinko Maki (Japanese pickle Roll)</li>
			<li>Kanpyo Maki (Japanese Gourd Skin Roll)</li>
			<li>Ume Kyu Maki (Japanese Plum & Cucmber)</li>
		</ul>
	
		<img class="right border" src="<?php echo SITEROOT; ?>app/images/sushi0375.jpg" />
	
		<ul class="menulist">
			<li>Maki (Rolled Sushi 8 pieces)</li>
			<li>California Roll</li>
			<li>New York Roll</li>
			<li>Alaska Roll</li>
			<li>Hawaiian Roll</li>
			<li>Hot Spicy Roll</li>
			<li>Rainbow Roll</li>
			<li>Fashion Sandwich</li>
		</ul>
		
		<ul class="menulist">
			<li>Temaki (Hand Roll)</li>
			<li>Ebi Temaki</li>
			<li>Negi Toro Temaki</li> 
			<li>California Temaki</li> 
			<li>Salad Temaki</li>
			<li>Hot Spicy Temaki</li>
			<li>Kanikama Temaki</li>
			<li>Golden Mushroom Temaki</li>
		</ul>
	
		<ul class="menulist">
			<li>Sashimi (Selection of sliced Raw Fish)</li>
			<li>Sashimi Regular - 12 slices, Chef's choice</li>
			<li>Sashimi Deluxe - 16 slices, Chef's choice</li>
		</ul>
	
		<ul class="menulist">
			<li>Sashimi A La Carte (5 slices)</li>
			<li>Maguro (Tuna)</li>
			<li>Shake (Scottish Salmon)</li>
			<li>Hamachi (Yellow Tail)</li>
			<li>Tai (Local Fish)</li>
		</ul>
	
		<ul class="menulist">
			<li>Side Orders</li>
			<li>Sunimono</li>
			<li>Japanese Salad</li> 
			<li>Miso Soup</li>
			<li>Rice</li>
			<li>Ocha</li>
			<li>Sake</li>
			<li>Kirin beer</li> 
			<li>Extra Wasabi</li>
			<li>Extra ginger</li>
		</ul>
	</p>
</div>
-->