		<?php

		$conn = mysql_connect("localhost","root","");
		mysql_select_db("kksp",$conn);
		$result = "DELETE FROM student where table_id=".($_REQUEST['id'])."";
		$result2 = "SELECT *  FROM student where table_id=".($_REQUEST['id'])."";
		$output2=mysql_query($result2) or die(mysql_error());
		$row2=mysql_fetch_array($output2);
		$no_kp=$row2['no_kp'];
		$result3="DELETE FROM kehadiran where no_kp='$no_kp'";
		mysql_query($result3);

		if (!mysql_query($result,$conn))
		{
		 die ('Error:' . mysql_error());
		}

		else
			{
				echo "<script languange = 'Javascript'>
				alert('Rekod telah dipadam.');
			location.href = 'admin_senarai.php';
			</script>";
			}

			
		?>