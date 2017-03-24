<?php
    // Setting TimeZone
    date_default_timezone_set('America/Chicago');

    // Agent Data
    require "usertest.php";
    // error_reporting(E_ALL);
?>

<section class="container" id="ot">

	<form name="myForm" action="<?php bloginfo('template_url'); ?>/inc/post.php" method="post" onsubmit="return validateForm()">

	    <section>
	      <h2>Slot #</h2>
	      <input type="number" name="slot_number" class="textarea time" maxlength="3" required></textarea>
	    </section>
	    
		<!-- <input type="submit" value="Submit"> -->

	</form>

	<div class="testMessage">

		<?php

		  error_reporting(E_ALL);

		  $con = mysql_connect("127.0.0.1", "root", "root");

		  if (!$con) {
		    $noDatabase = true;
		    die('Could not connect: ' . mysql_error());
		  }

		  $noDatabase = !mysql_select_db("dotcom", $con);

		  $query = "SELECT * FROM ot_request ORDER BY SlotNumber * 1 ASC";

		  $checking_table = mysql_query('select 1 from `ot_request` LIMIT 1');

		  $result = mysql_query($query);

		  if($checking_table === FALSE) {
		      die('<h1>No Data To Display</h1>');
		  }
		  else {
		  	if (is_user_logged_in() == True) {
		  	echo '
		  	<div tabindex="0" class="onclick-menu">
			    <ul class="onclick-menu-content">
			        <li>
			          <a href="http://ausrcwa230/dotcom/wp-content/themes/dotcom/inc/cleanload.php" class="DB_Cleanload">
			            <button>Remove Records</button>
			          </a>
			        </li>
			    </ul>
			</div>
		  	';
		  }
		  echo '<h1>Requested OT</h1>';
		  echo '<hr>';

		  echo '<table>
		  			<thead>
		            <tr>
		              <td>Slot #</td>
		              <td>Agent</td>';
		    echo '</tr>
		    	</thead>';

		  while($row = mysql_fetch_array($result)){ 
		    echo '
		            <tr>
		              <td>' . $row['SlotNumber'] . '</td>
		              <td>' . $row['Agent'] . '</td>
		            </tr>';
		  }

		  echo '</table>';
		  }
		  

		  mysql_close();
		?>

	</div>
</section>