<?php
	if (isset($_REQUEST['conf'])) {
		if ($_REQUEST['conf']=='config_1') {
			define("HOST", "host");
			define("USERNAME", "username");
			define("PASSWORD", "password");
			define("DB", "db");
			define("DBTYPE", "hdbpp");
			define("LOG_REQUEST", "../../log/hdbpp_1.log");
		}
	}
	else {
		  define("HOST", "hdbpp-db");
		  define("USERNAME", "hdbppro");
		  define("PASSWORD", "hdbppro");
		  define("DB", "hdbpp");
		  define("DBTYPE", "hdbpp");
		  define("LOG_REQUEST", "../../log/hdbpp.log");
	}

  // if you wont to hide a part of your domain edit the following array
  $skipdomain = array('tango://srv-tango-srf.fcs.elettra.trieste.it:20000/'=>'');
  define("CSVREPO", 'https://myserver/csvrepo.php');

  define("ALARM_HOST", "host");
  define("ALARM_USER", "username");
  define("ALARM_PASSWORD", "password");
  define("ALARM_DB", "db");

?>
