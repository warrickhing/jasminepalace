<?php	 
	if (strpos(getcwd(),'jasminepalace.co.nz') > 0) {
		/*
		 * 	PRODUCTION SETTINGS
		 *  ===================
		 *  LIVE PATH: /var/www/vhosts/jasminepalace.co.za/httpdocs 
		 * 
		 * */
		define("SITEROOT","/");		
	} else {
		define("SITEROOT","/jasminepalace/");		
	}
?>


	