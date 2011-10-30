<?php
	$menuCategories 	= array();
	$menuCategoriesData	= file("app/data/menu-categories.txt",1);	
	
	for ($iMenuCategoriesData=0; $iMenuCategoriesData<count($menuCategoriesData); $iMenuCategoriesData++) {
		$menuCategoryData	= explode("|",$menuCategoriesData[$iMenuCategoriesData]);
		$menuCategories[$iMenuCategoriesData]["menu_category_id"]	= $menuCategoryData[0];
		$menuCategories[$iMenuCategoriesData]["title_en"] 			= $menuCategoryData[1];
		$menuCategories[$iMenuCategoriesData]["title_ch"] 			= $menuCategoryData[2];
	}
	
	$menuItems		= array();
	$menuItemsData	= file("app/data/menu-items.txt",1);
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
	echo '<h1>Menu</h1>';
	echo '<p>';
	echo 'We have a wide variety of dishes suitable for anyone\'s taste and requirements - we do vegetarian dishes as well.<br />';	
	echo '</p>';
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
			echo 	'<tr><td width="70%"></td><td width="30%"></td></tr>';
			foreach ($menuItems[$menuCategoryID] as $menuItem) {
				if ($menuItemCounter % 2 == 0) {$class="even";} else {$class="odd";}
				echo '<tr class="'.$class.'">';
				echo "	<td>" . $menuItem['title_en'] . "</td>";
				echo "	<td>" . $menuItem['title_ch'] . "</td>";
				//echo "	<td>" . $menuItem['price'] . "</td>";
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

