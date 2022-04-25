	<?php
	if( empty(session_id()) && !headers_sent()){
		session_start();
	}
		
	include "header.php";
	include "config.php";
	?>

	<div id="main">
	   <div id="products">
		   <?php
		   include "add.php";
		   ?>
	   </div>
</div> 
<link href="style.css" type="text/css" rel="stylesheet">

		
	 <?php
	include "footer.php";
	?> 

