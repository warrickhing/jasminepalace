<?php	 
	if (strpos(getcwd(),'jasminepalace.co.za') > 0) {
		/*
		 * 	PRODUCTION SETTINGS
		 *  ===================
		 *  LIVE PATH: /var/www/vhosts/jasminepalace.co.za/httpdocs 
		 * 
		 * */
		define("SITEROOT","/");		
	} else {
		/*
		 * 	DEVELOPMENT SETTINGS
		 *  ===================
		 *   
		 * */
		define("SITEROOT","/jasminepalace/");		
	}
?>


	