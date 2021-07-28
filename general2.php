<?php

include("modal_style.php");
?>
<?php 
include("conf.php");
?>
<div class="fbg">
    <div class="fbg_resize">
      <div class="col c1">
        <h2><span>Image</span> Gallery</h2>
      <marquee> <a href="#">
	   <?php  
				//$id = $_SESSION['log']['Username'];
				$query = mysql_query("SELECT * FROM headerimage ") or die (mysql_error()); 
				$row = mysql_fetch_array($query);
				echo '<table>';
				$result=mysql_query("SELECT heade_image FROM headerimage");

					  while($row=mysql_fetch_array($result))
   {
		  echo'<font charset=utf8>';
          echo"<img style='margin-top:3px; border-width: 10px; margin-left:3px;'  width=275 height=175 alt='Unable to View' src='" .$row['heade_image'] ."' >";
           echo'</font>';
		  
   }
				echo '</table>';
	?>
	</marquee></a> 
	  <marquee></a> <a href="#">
	  <?php  
				//$id = $_SESSION['log']['Username'];
				$query = mysql_query("SELECT * FROM footerimage ") or die (mysql_error()); 
				$row = mysql_fetch_array($query);
				echo '<table>';
				$result=mysql_query("SELECT heade_image FROM footerimage");

					  while($row=mysql_fetch_array($result))
   {
		  echo'<font charset=utf8>';
          echo"<img style='margin-top:3px; border-width: 0px; margin-left:3px;'  width=275 height=175 alt='Unable to View' src='" .$row['heade_image'] ."' >";
           echo'</font>';
		  
   }
				echo '</table>';
	?>
	  </a> 
	   <a href="#"></a> </marquee></div>
      <div class="col c2">
        <h2>Links</h2>
        <ul class="fbg_ul">
		<font size='4.5'><u>
          <li class="active"><a href="home.php"><span><font color="blue">KDA HOME</font></span></a></li>
		  <li class="active"><a href="php_project.php"><span><font color="blue">Projects</font></span></a></li>
		  <li class="active"><a href="php_coadmin_login_page.php"><span><font color="blue">Contacts</font></span></a></li>
		  <li class="active"><a href="php_achieve_before.php"><span><font color="blue">Pervious Achievments</font></span></a></li>
		  <li class="active"><a href="php_login_admin.php"><span><font color="blue">Login</font></span></a></li>
        </u></font>
		</ul>
      </div>
      <div class="col c3">
      <h2><span>KDA</span> Contact</h2>
        <p>Blow there is the contact information of the KDA </p>
        <p class="contact_info"> <span>Address:</span> Xonso Zone, Karat<br />
	      <span>Gmail:</span>BalchaNamakoW'cBombe<br />
		   <span>Fax:</span>Balcha Bekele Lawca<br />
		   <span>Phone Number:</span>+2514-6773-0039<br />
		   <span>Fax Number:</span>Tigist/Fikre Gessesse Roba<br />
		  <span>PO.Box:</span> +2519-2611-2098<br />
		</p>
      </div>
      <div class="clr"></div>
    </div>
  </div>