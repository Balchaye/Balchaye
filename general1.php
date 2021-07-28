  
<?php

include("modal_style.php");
?>
<?php 
include("conf.php");
?>
 <div align="center" > <a href="#">
	<img src="images/rut.png"  width="120" height="120" alt="" />
	<marquee width="780" direction="up" height="115px">
		<?php  
				//$id = $_SESSION['log']['Username'];
				$query = mysql_query("SELECT * FROM headerimage ") or die (mysql_error()); 
				$row = mysql_fetch_array($query);
				echo '<table>';
				echo '<tr>';
				echo '<td>';
				echo '</td>';
				echo '<td>';
				$result=mysql_query("SELECT heade_image FROM headerimage");

					  while($row=mysql_fetch_array($result))
   {
          echo"<tr>";
		  echo'<font charset=utf8>';
          echo"<td>" ."<img style='margin-top:-80px; border-width: 0px; margin-left:-80px;'  width=880 height=480 alt='Unable to View' src='" .$row['heade_image'] ."' >"."</td>";
           echo'</font>';
		  
   }
			echo '</td>';
				echo '</tr>';
				echo '</table>';
	?>
	<!--<img src="images/ict.jpg" width="780" height="480" alt="" />
	<img src="images/konso6.jpg" width="780" height="480" alt="" />
	<img src="images/konso2.jpg" width="780" height="480" alt="" />
	<img src="images/konso3.jpg" width="780" height="480" alt="" />
	<img src="images/konso4.jpg" width="780" height="480" alt="" />
	<img src="images/konso7.jpg" width="780" height="480" alt="" />
	<img src="images/konso8.jpg" width="780" height="480" alt="" />
	<img src="images/konso9.jpg" width="780" height="480" alt="" />
	<img src="images/konso11.jpg" width="780" height="480" alt="" />
	<img src="images/konso12.jpg" width="780" height="480" alt="" />
	<img src="images/konso5.jpg" width="780" height="480" alt="" />--></marquee>
	<img src="images/rut.png" width="120" height="120" alt="" /> 
	</a> <a href="#"> <strong><marquee direction="left" height="40px"><font size="5" color="Black">Konso Development Association(KDA)- <font color="blue">For the Better Life of Konso People!!</font> የኮንሶ ልማት ማህበር(ኮልማ)-<font color="blue">ለኮንሶ ሕዝብ የተሻለ ሕይወት!!</font></marquee></font></strong></a>
      </div>