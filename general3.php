<div class="fbg">
    <div class="fbg_resize">
      <div class="col c1">
        <h2><span>Image</span> Gallery</h2>
      <marquee> <a href="#"><img src="images/1.jpg" width="75" height="75" alt="" class="gal" />
	   <img src="images/2.jpg" width="75" height="75" alt="" class="gal" />
	   <img src="images/3.jpg" width="75" height="75" alt="" class="gal" />
	   <img src="images/4.jpg" width="75" height="75" alt="" class="gal" />
	   <img src="images/5.jpg" width="75" height="75" alt="" class="gal" />
	   <img src="images/6.jpg" width="75" height="75" alt="" class="gal" />
	   <img src="images/7.jpg" width="75" height="75" alt="" class="gal" />
	   <img src="images/8.jpg" width="75" height="75" alt="" class="gal" />
	   </a> <a href="#">
	   <img src="images/9.jpg" width="75" height="75" alt="" class="gal" /></a> 
	   <a href="#"><img src="images/11.jpg" width="75" height="75" alt="" class="gal" /></marquee>
	   <marquee></a> <a href="#"><img src="images/12.jpg" width="75" height="75" alt="" class="gal" /></a> 
	    <img src="images/13.jpg" width="75" height="75" alt="" class="gal" />
	   <img src="images/14.jpg" width="75" height="75" alt="" class="gal" />
	   <img src="images/15.jpg" width="75" height="75" alt="" class="gal" />
	   <img src="images/16.jpg" width="75" height="75" alt="" class="gal" />
	   <img src="images/17.jpg" width="75" height="75" alt="" class="gal" />
	   <img src="images/18.jpg" width="75" height="75" alt="" class="gal" />
	   <img src="images/19.jpg" width="75" height="75" alt="" class="gal" />
	   <img src="images/21.jpg" width="75" height="75" alt="" class="gal" /></a> 
	   <a href="#"><img src="images/2.jpg" width="75" height="75" alt="" class="gal" /></a> </marquee></div>
      <div class="col c2">
        <h2><span>Services</span> Overview</h2>
        <p>The system will provide the following things to the user of the system.</p>
        <ul class="fbg_ul">
          <li>1-Calculate All Information Regarding Population</li>
		  <li>2-Calculate All Information Regarding Income of Population</li>
		  <li>3-Calculate All Information Regarding Domestic Animals</li>
        </ul> 
      </div>
      <div class="col c3">
       <h3><span>Agency</span> Contact Information</h3>
	      <span>Phone:</span> <?php
  $con=mysql_connect("localhost","root","vertrigo");
    if(!$con)
     {
    die('coud not conect:'.mysql_error());
    }
     mysql_select_db("ethiopopulation",$con);
    $result=mysql_query("select PhoneNumber FROM agency_information");
	 $row=mysql_fetch_array($result);
	  //if($row>0)
	  
			// {
				

   
  
   echo $row['PhoneNumber'];
  
   ///////////////////////HomeNumber
 // }
   mysql_close($con);
    ?>	<br />
	<span>Fax:</span><?php
  $con=mysql_connect("localhost","root","vertrigo");
    if(!$con)
     {
    die('coud not conect:'.mysql_error());
    }
     mysql_select_db("ethiopopulation",$con);
    $result=mysql_query("select Fax FROM agency_information");
	 $row=mysql_fetch_array($result);
	  //if($row>0)
	  
			// {
				

   
  
   echo $row['Fax'];
  
   ///////////////////////HomeNumber
 // }
   mysql_close($con);
    ?><br />
		  <span>B.O Pox:</span><?php
  $con=mysql_connect("localhost","root","vertrigo");
    if(!$con)
     {
    die('coud not conect:'.mysql_error());
    }
     mysql_select_db("ethiopopulation",$con);
    $result=mysql_query("select PoBox FROM agency_information");
	 $row=mysql_fetch_array($result);
	  //if($row>0)
	  
			// {
				

   
  
   echo $row['PoBox'];
  
   ///////////////////////HomeNumber
 // }
   mysql_close($con);
    ?><br />
		  

		   <span>E-mail:</span> <a href="<?php
  $con=mysql_connect("localhost","root","vertrigo");
    if(!$con)
     {
    die('coud not conect:'.mysql_error());
    }
     mysql_select_db("ethiopopulation",$con);
    $result=mysql_query("select Email FROM agency_information");
	 $row=mysql_fetch_array($result);
	  //if($row>0)
	  
			// {
				

   
  
   echo $row['Email'];
  
   ///////////////////////HomeNumber
 // }
   mysql_close($con);
    ?>"><?php
  $con=mysql_connect("localhost","root","vertrigo");
    if(!$con)
     {
    die('coud not conect:'.mysql_error());
    }
     mysql_select_db("ethiopopulation",$con);
    $result=mysql_query("select Email FROM agency_information");
	 $row=mysql_fetch_array($result);
	  //if($row>0)
	  
			// {
				

   
  
   echo $row['Email'];
  
   ///////////////////////HomeNumber
 // }
   mysql_close($con);
    ?></a></br>
	 <span>Website:</span> <a href="<?php
  $con=mysql_connect("localhost","root","vertrigo");
    if(!$con)
     {
    die('coud not conect:'.mysql_error());
    }
     mysql_select_db("ethiopopulation",$con);
    $result=mysql_query("select Website FROM agency_information");
	 $row=mysql_fetch_array($result);
	  //if($row>0)
	  
			// {
				

   
  
   echo $row['Website'];
  
   ///////////////////////HomeNumber
 // }
   mysql_close($con);
    ?>"><?php
  $con=mysql_connect("localhost","root","vertrigo");
    if(!$con)
     {
    die('coud not conect:'.mysql_error());
    }
     mysql_select_db("ethiopopulation",$con);
    $result=mysql_query("select Website FROM agency_information");
	 $row=mysql_fetch_array($result);
	  //if($row>0)
	  
			// {
				

   
  
   echo $row['Website'];
  
   ///////////////////////HomeNumber
 // }
   mysql_close($con);
    ?></a></br>
		</p>
      </div>
      <div class="clr"></div>
    </div>
  </div>