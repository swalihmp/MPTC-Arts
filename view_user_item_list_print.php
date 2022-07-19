<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>MADIN POLYTECHNIC COLLEGE</title>
<link href="assets/css/bootstrap.css" rel="stylesheet" />
    <!-- FONTAWESOME STYLES-->
    <style type="text/css">
	.th{
	font-weight:200;
	border:thick;
	
	}
	</style>
</head>

<body>
<center>
<h3>MPTC ARTS FEST 2K19</h3>
<br />
<h4>Group Details</h4>
<br />
</center>
<div align="center">
 <h4><?php
 $selName="All Departments";
 if(isset($_POST['btnSelect'])){
 
 $selName=$_POST['optDepartment'];
 }
 echo $selName;
 ?>
 </h4>
 </div>

<form id="form1" name="form1" method="post" action="">
<?php
 include("dbconnection.php");
 $sql="select * from user_details";
 if(isset($_POST['btnSelect'])){
	 $optDept=$_POST['optDepartment'];
	if($optDept=="all"){
	$sql="select * from user_details";
	}
	 else
	 {
		 $sql="select * from user_details where department='$optDept'";
	 }
 }
 
 $res=mysql_query($sql);
 
 
?>
  <table width="634" border="1" align="center" cellpadding="10" class="table  table-bordered table-hover">
    <tr bgcolor="#eeeeee">
      <th scope="col">Sl.No</th>
      <th scope="col">Name</th>
      <th scope="col">Gender</th>
      <th scope="col">Reg. No</th>
      <th scope="col">Department (semester)</th>
      <th scope="col">Individual Item List</th>
      <th scope="col">Group Item List</th>
    </tr>
  <?php 
  $i=0;
   while($row=mysql_fetch_array($res)){
	 $sid=$row['s_id'];
 	$name=$row['name'];
	$name=$row['name'];
	$gender=$row['gender'];
	$regNo=$row['reg_no'];
	$department=$row['department'];
	$semester=$row['semester'];
	$ch1=$row['choice1'];
	$ch2=$row['choice2'];
	$ch3=$row['choice3'];
	$ch4=$row['choice4'];
	$i++;
	?>
     <tr>
    <td>
    <?php echo $i ?>
    </td>
    <td>
    
    <?php echo $name ?>
    </td>
    <td>
    <?php echo $gender ?>
    </td>
    <td>
    <?php echo $regNo ?>
    </td>
    <td>
    <?php echo $department." (".$semester.")" ?>
    </td>
    <td>
    <?php 
	$arrayIitems=Array('1'=>"ചിത്രരചന - പെൻസിൽ"
,'2'=>"ചിത്രരചന - ജലഛായം"
,'3'=>"ചിത്രരചന - എണ്ണഛായം"
,'4'=>"കാർട്ടൂൺ"
,'5'=>"കൊളാഷ്"
,'6'=>"ശാസ്ത്രീയ സംഗീതം ആൺ "
,'7'=>"ശാസ്ത്രീയ സംഗീതം പെൺ"
,'8'=>"ലളിതഗാനം ആൺ"
,'9'=>"ലളിതഗാനം പെൺ"
,'10'=>"മാപ്പിളപ്പാട്ട് ആൺ "
,'11'=>"മാപ്പിളപ്പാട്ട് പെൺ"
,'12'=>"വയലിൻ "
,'13'=>"ഗിറ്റാർ"
,'14'=>"ഓടക്കുഴൽ "
,'16'=>"മൃതങ്ങാം"
,'17'=>"ചെണ്ട ( തായമ്പക )"
,'18'=>" മദ്ദളം "
,'19'=>" തബല "
,'20'=>"കഥകളി"
,'21'=>"ഓട്ടൻതുള്ളൽ ആൺ "
,'22'=>"ഓട്ടൻതുള്ളൽ പെൺ " 
,'23'=>"നാടോടി നൃത്തം ആൺ "
,'24'=>"നാടോടി നൃത്തം പെൺ"
,'25'=>"ഭാരതനാട്ട്യം ആൺ "
,'26'=>"ഭാരതനാട്ട്യം പെൺ"
,'27'=>"കുച്ചുപ്പുടി "
,'28'=>"ചാക്യാർകൂത്"
,'29'=>"മോഹിനിയാട്ടം "
,'30'=>"പ്രസംഗം മലയാളം"
,'31'=>" പ്രസംഗം ഇന്ഗ്ലീഷ് "
,'32'=>"ഉപന്ന്യാസം മലയാളം"
,'33'=>" ഉപന്ന്യാസം ഇന്ഗ്ലീഷ് "
,'34'=>"കഥാരചന മലയാളം"
,'35'=>"കഥാരചന ഇന്ഗ്ലീഷ് "
,'36'=>"കവിതാരചന മലയാളം"
,'37'=>" കവിതാരചന ഇന്ഗ്ലീഷ്"
,'38'=>"പഥ്യം ചൊല്ലൽ മലയാളം ആൺ"
,'39'=>"പഥ്യം ചൊല്ലൽ മലയാളം പെൺ"
,'40'=>"പഥ്യം ചൊല്ലൽ ഇന്ഗ്ലീഷ് ആൺ"
,'41'=>"പഥ്യം ചൊല്ലൽ ഇന്ഗ്ലീഷ് പെൺ"
,'42'=>"മോണോ ആക്ട് ആൺ"
,'43'=>"മോണോ ആക്ട് പെൺ"
,'44'=>"മിമിക്രി ആൺ "
,'45'=>"മിമിക്രി പെൺ"
,'46'=>"കഥാപ്രസംഗം "
,'47'=>"സംഘനൃത്തം "
,'48'=>" തിരുവാതിര "
,'49'=>"മാർഗംകളി "
,'50'=>"ഒപ്പന "
,'51'=>" വട്ടപ്പാട്ട് "
,'52'=>"സംഘഗാനം "
,'53'=>"ഗാനമേള"
,'54'=>"നാടകം മലയാളം"
,'55'=>"നാടകം ഇന്ഗ്ലീഷ്"
,'56'=>"മൂകാഭിനയം"
,'57'=>"ചെണ്ടമേളം "
,'58'=>"പഞ്ചവാദ്യം"
,'59'=>"വഞ്ചി പ്പാട്ട്"
,'60'=>"നടൻ പാട്ട്"
,'61'=>"വൃന്ദവാദ്യം "
,'62'=>"പരിചമുട്ടുകളി"
,'63'=>"കോൽക്കളി"
,'64'=>"പൂരക്കളി"
,'65'=>" ദഫ്മുട്ട്"
,'66'=>"ദേശഭക്തി ഗാനം");
	?>
      <font face='ML-TTKarthika'>
	  <ol type="1">
    <?php  if($ch1!="0"){
	  ?>
      <li><?php echo $arrayIitems[$ch1]; 
	  ?></li>
      <?php
	  }
	  if($ch2!="0")
	  {?>
      <li><?php echo $arrayIitems[$ch2]; 
	  ?></li>
      <?php
      }if($ch3!="0")
	  {

	  ?><li><?php echo $arrayIitems[$ch3]; 
	  ?></li>
      <?php
      }
	  if($ch4!="0")
	  {?><li><?php echo $arrayIitems[$ch4]; 
	  ?></li>
      <?php
      }
	  
	 ?>
      <ol>
      </font>
      
    </td>
    <td>
    <?php
	$arrayGitems=array('17'=>"ചെണ്ട (തായമ്പക) "
,'18'=>"മദ്ദളം "
,'19'=>"തബല "
,'46'=>"കഥാപ്രസംഗം "
,'47'=>"സംഘനൃത്തം "
,'48'=>"തിരുവാതിര "
,'49'=>"മാർഗംകളി "
,'50'=>"ഒപ്പന "
,'51'=>"വട്ടപ്പാട്ട്"
,'52'=>"സംഘഗാനം "
,'53'=>"ഗാനമേള "
,'54'=>" നാടകം മലയാളം"
,'55'=>"നാടകം ഇന്ഗ്ലീഷ്"
,'56'=>"മൂകാഭിനയം "
,'57'=>"ചെണ്ടമേളം "
,'58'=>"പഞ്ചവാദ്യം"
,'59'=>"വഞ്ചി പ്പാട്ട്"
,'60'=>"നടൻ പാട്ട് "
,'61'=>"വൃന്ദവാദ്യം "
,'62'=>"പരിചമുട്ടുകളി "
,'63'=>"കോൽക്കളി "
,'64'=>"പൂരക്കളി  "
,'65'=>"ദഫ്മുട്ട് "
,'66'=>"ദേശഭക്തി ഗാനം ");
?>
<font face='ML-TTKarthika'>

	<ol> 
<?php
	$sql2="select distinct item from group_details where student_reg_no='$regNo' or leader_reg_no='$regNo'";
	$res2=mysql_query($sql2);
	$count=0;
	while($row2=mysql_fetch_array($res2)){
	$item=$row2['item'];
	$count++;
	if($item!=""){
	
	?>
      <li type="1"><?php echo $arrayGitems[$item]; 
	  ?></li>
      <?php
    }
	}
	 ?>
    </ol> 
          </font>
    </td>
    <td id="actionC">
        </td>
    </tr>
    
    
    <?php
 	}?>
    
 <?php
	
	if(isset($_POST['btnDelete'])){
		$regNo=$_POST['regNo'];
		 $sql="delete from user_details where reg_no=$regNo";
	  mysql_query($sql);
	 header("location:view_user_item_list.php");
  
	}
 ?>
  </table>
</form>
<script type="text/javascript">
window.onload=window.print();
window.location="view_user_item_list.php";
</script>
</body>
</html>