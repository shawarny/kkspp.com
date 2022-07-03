		<?php

		$conn = mysql_connect("localhost","root","");
		mysql_select_db("kksp",$conn);
		$result = "DELETE FROM kehadiran where table_id=".($_REQUEST['id'])."";

		if (!mysql_query($result,$conn))
		{
		 die ('Error:' . mysql_error());
		}

		else
			{
				echo "<script languange = 'Javascript'>
				alert('Rekod telah dipadam.');
			location.href = 'status_graduan.php';
			</script>";
			}

			
		?>