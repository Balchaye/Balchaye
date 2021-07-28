 
<?php
//var_dump(mail('+251938709459', 'KDA', 'You have Membershiped to KDA'));
?>

 <?php
    include("conf.php");
  if (isset($_POST['ID_Number1'])){
  	mysql_select_db("kda",$con);
  	$result=mysql_query("select * from memeberships where ID_Number = '$_POST[ID_Number1]'");
        $row=mysql_fetch_array($result);
    if($row>0)
    
       {
                
      $result="UPDATE memeberships SET Type='Membershiped' WHERE ID_Number = '$row[ID_Number]'";

    
  if(!mysql_query($result,$con)){
die('couldnot update '.mysql_error());  
}
echo '<div class="alert alert-dismissable alert-success">';
    echo '<strong>'."Become Membership of KDA!".'</strong>';
    echo'<p>';
    echo'</div>';
    
  }
  
}


  ?> 
<!--  
Disallowance 
 -->
<?php
    include("conf.php");
  if (isset($_POST['ID_Number2'])){
  	mysql_select_db("kda",$con);
  	$result=mysql_query("select * from memeberships where ID_Number = '$_POST[ID_Number2]'");
        $row=mysql_fetch_array($result);
    if($row>0)
    
       {
                
      $result="UPDATE memeberships SET Type='Disapproved' WHERE ID_Number = '$row[ID_Number]'";

    
  if(!mysql_query($result,$con)){
die('couldnot update '.mysql_error());  
}
echo '<div class="alert alert-dismissable alert-success">';
    echo '<strong>'."Disapproved form Membership of KDA!".'</strong>';
    echo'<p>';
    echo'</div>';
    
  }
  
}
  ?> 



  <?php
    include("conf.php");
  if (isset($_POST['ID_Number'])){
   mysql_select_db("kda",$con);
        $result=mysql_query("select * from memeberships where ID_Number = '$_POST[ID_Number]'");
        $row=mysql_fetch_array($result);
    $result1=mysql_query("select * from memebershipamha where ID_Number = '$_POST[ID_Number]'");
        $row1=mysql_fetch_array($result1);
        echo"<table style=' border:4px solid silver' cellpadding='15px' cellspacing='10px'
              align='center' border='0' >";
echo"<tr>";
echo"<td>"."<strong>"."<font size=4>"."KDA memebership ID :-"."<u>" .$row['ID_Number']."</u>"."</font>"."</strong>"."</td>";
echo "</tr>"; 
echo"<tr>";
echo "<td>". "<img style='margin-top:0px; width='80' height='80' border-width: 0px; margin-left:0px;'  alt='Unable to View' src='" .$row['Photo'] ."' >"."</td>";
echo"</tr>";
echo "<tr>"; 
echo"<td>"."<font size=3>"."<strong>"."Name :-"."</strong>" .$row['Name']." ".$row['FatherName']." ".$row['GFName']."</font>"."</td>";
echo"</tr>";
echo "<tr>"; 
echo"<td>"."<font size=3>"."<strong>"."ስም :-"."</strong>" .$row1['Name']." ".$row1['FatherName']." ".$row1['GFName']."</font>"."</td>";
echo"</tr>";
echo "<tr>"; 
echo"<td>"."<font size=3>"."<strong>"."Address :-"."</strong>" .$row['Zone']." ".$row['Woreda']." ".$row['Kebele']."</font>"."</td>";
echo"</tr>";
echo "<tr>"; 
echo"<td>"."<font size=3>"."<strong>"."ቀበለ :-"."</strong>" .$row1['Zone']." ".$row1['Woreda']." ".$row1['Kebele']."</font>"."</td>";
echo"</tr>";
echo "<tr>"; 
echo"<td>"."<font size=3>"."<strong>"."Current Place of Work:-"."</strong>".$row['Current_work']."</font>"."</td>";
echo"</tr>";
echo "<tr>"; 
echo"<td>"."<font size=3>"."<strong>"."አሁን የምሰሩበት :-"."</strong>".$row1['Current_work']."</font>"."</td>";
echo"</tr>";
echo "<tr>"; 
echo"<td>"."<font size=3>"."<strong>"."Profession/ሙያ :-"."</strong>".$row['Profession']."/".$row1['Profession']."</font>"."</td>";
echo"</tr>";
echo "<tr>"; 
echo"<td>"."<font size=3>"."<strong>"."Age/ዕድሜ:-"."</strong>".$row['Age']."</font>"."</td>";
echo"</tr>";
echo "<tr>"; 
echo"<td>"."<font size=3>"."<strong>"."Phone Number/ስልክ ቁጥር:-"."</strong>".$row['Phone']."</font>"."</td>";
echo"</tr>";
echo "<tr>"; 
echo"<td>"."<font size=3>"."<strong>"."Date Registered/የተመዘገቡበት ቀን:-"."</strong>".$row['RegisterDate']."</font>"."</td>";
echo"</tr>";
echo"<td>"."<form class='form-horizontal' method='POST' enctype='multipart/form-data'>"."Approve as Membership:-"." "."<input type='submit' name='ID_Number1' value='$row[ID_Number]''/>"."<font size=3.5>"."<strong>"."</strong>" ."</font>"."</form>"."</td>";
echo"</tr>";
echo"</tr>";
echo"<td>"."<form class='form-horizontal' method='POST' enctype='multipart/form-data'>"."Disapprove from Membership:-"." "."<input type='submit' name='ID_Number2' value='$row[ID_Number]''/>"."<font size=3.5>"."<strong>"."</strong>" ."</font>"."</form>"."</td>";
echo"</tr>";
echo"</table>";
echo"<p>";
  echo"</p>";
        mysql_close($con);
}
  ?> 
 <?php
$con=mysql_connect("localhost","root","vertrigo");
if(!$con)
{
die('coud not conect:'.mysql_error());
}
mysql_select_db("kda",$con);
$result=mysql_query("select *FROM  memeberships where Type='New' ");
$result1=mysql_query("select *FROM  memebershipamha ");
echo "<p>";
 echo "<font size=5 color=blue-black>"."<u>"."New KDA Membership"."</u>"."</font>";
 echo "</p>";
while($row=mysql_fetch_array($result))
	
{
	
 echo"<table style=' border:4px solid silver' cellpadding='15px' cellspacing='10px'
              align='center' border='0' >";

echo"<tr>";
echo"<td>"."<strong>"."<font size=2>"."KDA ID:-"."<u>" .$row['ID_Number']."</u>"."</font>"."</strong>"."</td>";
echo "</tr>"; 
echo"<tr>";
echo "<td>". "<img style='margin-top:0px; width='80' height='80' margin-left:0px;'  alt='Unable to View' src='" .$row['Photo'] ."' >"."</td>";
echo"</tr>";
echo "<tr>"; 
echo"<td>"."<font size=2>"."<strong>"."Name :-"."</strong>" .$row['Name']." ".$row['FatherName']." ".$row['GFName']."</font>"."</td>";
echo"</tr>";
echo "<tr>"; 
echo"<td>"."<font size=2>"."<strong>"."Profession :-"."</strong>" .$row['Profession']."</font>"."</td>";
echo"</tr>";
echo "<tr>"; 
echo"<td>"."<font size=2>"."<strong>"."Registered on :-"."</strong>" .$row['RegisterDate']."</font>"."</td>";
echo"</tr>";
echo "<tr>"; 
echo"<td>"."<form class='form-horizontal' method='POST' enctype='multipart/form-data'>"."KDA ID:-"." "."<input type='submit' name='ID_Number' value='$row[ID_Number]''/>"."<font size=3.5>"."<strong>"."</strong>" ."</font>"."</form>"."</td>";
echo"</tr>";
echo"</table>";
echo"<p>";
  echo"</p>";
}
mysql_close($con);
?>