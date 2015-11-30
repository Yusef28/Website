<?php

					 
	echo 'The page is now ';
						
		if ($_GET['page'] == '') {
						
			echo 'Home';
			$pg = 'home';
							
		} else {
						
			echo $_GET['page'];
			$pg = $_GET[page];
		}
				
?>