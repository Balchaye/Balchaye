
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta charset="utf-8">
<link href="css/style.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" type="text/css" href="css/coin-slider.css" />
<script type="text/javascript" src="js/cufon-yui.js"></script>
<script type="text/javascript" src="js/droid_sans_400-droid_sans_700.font.js"></script>
<script type="text/javascript" src="js/jquery-1.4.2.min.js"></script>
<script type="text/javascript" src="js/script.js"></script>
<script type="text/javascript" src="js/coin-slider.min.js"></script>
<title>Adminstrator Page </title>
  <link rel="shortcut icon" HREF="images/konsofig.PNG" />
</head>
<body>
<div class="main">
  <div class="header">
    <div class="header_resize">
	
      <div class="searchform">

      </div>
      <div class="clr"></div>
      <div class="menu_nav">
        <ul>
		<?php include("general1.php"); ?>
          <li class="active"><a href="home.php"><span>KDA HOME</span></a></li>
		  <li class="active"><a href="login_selection.php"><span>About</span></a></li>
		  <li class="active"><a href="php_project.php"><span>Projects</span></a></li>
		  <li class="active"><a href="php_coadmin_login_page.php"><span>Contacts</span></a></li>
		  <li class="active"><a href="php_achieve_before.php"><span>Pervious Achievments</span></a></li>
		  <li class="active"><a href="php_login_admin.php"><span>Login</span></a></li>
		 

		  
        </ul>
      </div>
	 
        <div class="clr"></div>
     <!-- <div class="slider">
	  <h1><font color="blue-black">LOGIN SELECTION PAGE</font></h1>
</div> -->
      <div class="clr"></div>
    </div>
  </div>
  <div class="content">
    <div class="content_resize">
      <div class="mainbar">
        <div class="article">
         <!-- <h2><span>ADMINSTRATOR</span></h2> -->
          <div class="clr"></div>
		   <ul class="sb_menu">
        <!--adding header photo to the system -->
        <?php
    include("conf.php");
  if (isset($_POST['Headerimages'])){
  $image1 = addslashes(file_get_contents($_FILES['image1']['tmp_name']));
                                $image_name = addslashes($_FILES['image1']['name']);
                                $image_size = getimagesize($_FILES['image1']['tmp_name']);
                $type = explode('.', $image_name);
                $type = end($type);
                  if($type != 'jpg' && $type != 'png' && $type !='PNG' && $type != 'gif' && $type != 'jpeg'){
                      $message = "Invalid Photo Format Not Supported !";
                    echo '<div class="alert alert-dismissable alert-danger">';
                      echo '<button type="button" class="close" data-dismiss="alert">X</button>';
                      echo '<strong>'.$message.'</strong>';
                    echo '</div>';
                    } else{
                  
                                move_uploaded_file($_FILES["image1"]["tmp_name"], "identification_image/" . $_FILES["image1"]["name"]);
                                $prof_pic = "identification_image/" . $_FILES["image1"]["name"];
                
          mysql_query("insert into headerimage (Date_im,heade_image) values(NOW(),'$prof_pic')")or die(mysql_error());

    
echo '<div class="alert alert-dismissable alert-success">';
    echo '<strong>'."Successfully Added!".'</strong>';
    echo'<p>';
    
  }
  }
  ?> 
 
        <!-- finishing the addition header photo-->
     <form class="form-horizontal"  method="POST" enctype="multipart/form-data"> 
      <table style=" border:2px solid silver" cellpadding="5px" cellspacing="0px"
               border="0">
        <td><font size="4" color="blue-black" >Upload Header Photo</font></td>
        <tr>
  
         <tr><td><font size="4">Select Picture</font></td>
        <td>          
        <input type="file" name="image1" id="input_width" class="btn btn" title="You must select the image you added before"  required>
        </td>
          </tr>
        
    

               
           <tr>
         <td></td>
              <td colspan="2">
        <input type="submit" name="Headerimages" value="Add"  class="btn btn-success" id="input_width"  />
        <input type="reset" value="Cancel" class="btn btn-success" id="input_width" />
                </td>
            </tr>
    
      
            </table>
    
        </form>
        <!--ending the additoin of header image  -->
        <!--start of adding footer image -->
        <!--adding header photo to the system -->
        <?php
    include("conf.php");
  if (isset($_POST['Footerimages'])){
  $image1 = addslashes(file_get_contents($_FILES['image1']['tmp_name']));
                                $image_name = addslashes($_FILES['image1']['name']);
                                $image_size = getimagesize($_FILES['image1']['tmp_name']);
                $type = explode('.', $image_name);
                $type = end($type);
                  if($type != 'jpg' && $type != 'png' && $type !='PNG' && $type != 'gif' && $type != 'jpeg'){
                      $message = "Invalid Photo Format Not Supported !";
                    echo '<div class="alert alert-dismissable alert-danger">';
                      echo '<button type="button" class="close" data-dismiss="alert">X</button>';
                      echo '<strong>'.$message.'</strong>';
                    echo '</div>';
                    } else{
                  
                                move_uploaded_file($_FILES["image1"]["tmp_name"], "identification_image/" . $_FILES["image1"]["name"]);
                                $prof_pic = "identification_image/" . $_FILES["image1"]["name"];
                
          mysql_query("insert into footerimage (Date_im,heade_image) values(NOW(),'$prof_pic')")or die(mysql_error());

    
echo '<div class="alert alert-dismissable alert-success">';
    echo '<strong>'."Successfully Added!".'</strong>';
    echo'<p>';
    
  }
  }
  ?> 
 
        <!-- finishing the addition footer Photo-->
        <form class="form-horizontal"  method="POST" enctype="multipart/form-data"> 
      <table style=" border:2px solid silver" cellpadding="5px" cellspacing="0px"
               border="0">
        <td><font size="4" color="blue-black" >Upload Footer Photo</font></td>
        <tr>
  
         <tr><td><font size="4">Select Picture</font></td>
        <td>          
        <input type="file" name="image1" id="input_width" class="btn btn" title="You must select the image you added before"  required>
        </td>
          </tr>
        
    

               
           <tr>
         <td></td>
              <td colspan="2">
        <input type="submit" name="Footerimages" value="Add"  class="btn btn-success" id="input_width"  />
        <input type="reset" value="Cancel" class="btn btn-success" id="input_width" />
                </td>
            </tr>
    
      
            </table>
    
        </form>
        <!--ending the additoin of footer image  -->
	    <!-- adding video to the database-->
   
    <?php

error_reporting(1);

$con=mysql_connect("localhost","root","vertrigo");

mysql_select_db("kda",$con);

extract($_POST);
$target_dir = "uploadvideo/";

$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);

if($upd)
{
$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);

if($imageFileType != "mp4" && $imageFileType != "avi" && $imageFileType != "mov" && $imageFileType != "3gp" && $imageFileType != "mpeg" && $imageFileType !="mp3"){
  echo'<font size="4" color="red">';
    echo "File Format Not Suppoted";
    echo'</font>';
  
        }
else
  
{

$video_path=$_FILES['fileToUpload']['name'];
$YourName=$_POST['YourName'];

mysql_query("insert into videoplayi(Date_Post,Namings,location,YourName) values(NOW(),'$video_path','$target_file','$YourName')");

move_uploaded_file($_FILES["fileToUpload"]["tmp_name"],$target_file);
echo'<font size="3" color="green">';
echo "Your Video is Succeful Uploaded to the system ";
echo '</font>';

}

}
?>
<?php

//display all uploaded video

if($disp)

{
 /*$fetchVideos = mysqli_query("SELECT * FROM videoplayi");
     while($row = mysqli_fetch_assoc($fetchVideos)){
       $fileToUpload = $row['location'];
      // $name = $row['name'];
       echo "<div style='float: left; margin-right: 5px;'>
          <video src='".$fileToUpload."' controls width='320px' height='320px' ></video>     
          <br>
       </div>";
     }*/

  //////////////////////////

$query=mysql_query("select * from videoplayi");

  while($all_video=mysql_fetch_array($query))

  {

?>
   <table style=" border:2px solid black" cellpadding="3px" cellspacing="2px" border="10"><tr> <td>
   <th width="520"><marquee Scrollamount="3"><font size="4"><?php 
echo"$all_video[YourName]"; echo" POSTED On:-"; echo"$all_video[Date_Post]";?></font></marquee></th>
   <video style="border: 2px solid red" width="520" height="280" controls="controls" type="video/$imageFileTypei">
  <source src="uploadvideo/<?php echo  $all_video['Namings']; ?>"  >
  </video> </td></tr></table>
  
  <?php } } ?>
  <form class="form-horizontal"  method="POST" enctype="multipart/form-data"> 
      <table style=" border:2px solid silver" cellpadding="5px" cellspacing="0px"
               border="0">
        <td size="40"><font size="4" color="blue-black" >Upload Video</font></td>
        <tr>
  
         <tr><td>Select The Video</td><td><input type="file" name="fileToUpload" required /></td></tr></tr>
         <tr><td>Name of Video</td><td><input size="40" type="text" name="YourName" required /></td></tr></tr>

<tr><td>Upload Video to The Website</td><td><input type="submit" value="Uplaod Video" name="upd"/></td></tr></form>
<tr><td>View Video From KDA Website</td><td><form class="form-horizontal"  method="POST" enctype="multipart/form-data">
    <input type="submit" value="Display Video" name="disp"/>
     </form></td></tr></tr>

            </table>
       

    <div>
    

    </div>
	<!--ending the addition of video --> 
	<!-- -->

   
	<!-- --> 
	<!-- -->
	<!-- -->
		<p><a href="#"><strong></strong></a> <span></span> <span></span> <a href="#"><strong></strong></a></p>
	   </ul>
        </div>
        <div class="gadget">
         <!-- <h2 class="star"><span>ECONOMIC AND GOOD GOVERNANCE ANALYSIS</span></h2> -->
          <div class="clr"></div>
          <ul class="ex_menu">
        
          <div class="comment"> <a href="#"></a>
          </div>
		  </ul>
        </div>
        <div class="article">
         <!-- <h2><span>SOCIAL AND POLETICAL DATA ANALYSIS</span></h2> -->
          <div class="clr"></div>
		  <p><font color="Green" size="5">THE USERS OF THE SYSTEM</font></p> 
			     <p><font color="blue" size="4">2.<u>Co-ADMINSTRATOR:-</u> A persone only view all the information provided by the system</font></p>
           <p><font color="blue" size="4">3.<u>DATA INPUTERS AND UPDATERS:-</u> They uses the either Mobile based application or 
		    directly access the site to input data needed
		   to system and update informations that needs updating. But they have no right or power to create account or view the analyzed data </font></p>
    
    


		   <p><a href="#"><strong></strong></a> <span></span> <span></span> <a href="#"><strong></strong></a></p>
        </div>
      </div>
      <div class="sidebar">
        <div class="gadget">
          devlopment association
          <?php include("general4.php"); ?>
        </div>
      </div>
      <div class="clr"></div>
    </div>
  </div>
  <?php include("general2.php"); ?>
  <div class="footer">
    <div class="footer_resize">
      <p class="lf">&copy; Copyright <a href="#">MyWebSite</a>.</p>
      <p class="rf">Design by  <img src="images/hella.png" width="45" height="45" alt="" class="gal" /> <a href="https://hellasc.weebly.com//">HELLA SOFTWARE COMPANY</a></p>
      <div style="clear:both;"></div>
    </div>
  </div>
</div>
</html>
