<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="assets/css/bootstrap.css" rel="stylesheet" />
    <!-- FONTAWESOME STYLES-->
    <style type="text/css">
	.th{
	font-weight:200;
	border:thick;
	
	}
	</style> 

<title>MADIN POLYTECHNIC COLLEGE</title>
</head>

<body>
<center><h3>MPTC ARTS FEST 2K19</h3>
<h4>Group Leader List</h4></center>
<div align="right">
 <div align="center">
 <h3>
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

 $selName="All Items";
 ?>
 <font>
 <?php
 if(isset($_POST['btnSelect'])){
		
 $selName=$arrayGitems[$_POST['optItem']];
	?>
    
 <font face="ML-TTKarthika">
    <?php
	}
 echo $selName;
 ?>
 </font>
 </h3>
 </div>

<form id="form1" name="form1" method="post" action="">
<?php
 include("dbconnection.php");

?>
<table align="center" width="800">
<tr>
<td>

  <table width="" border="1"  class="table  table-bordered table-hover" align="center">
    <tr bgcolor="#eeeeee">
      <th width="37" scope="col">Sl.No</th>
      <th width="71" scope="col">Group Leader</th>
      <th width="71" scope="col">Reg. No</th>
      <th width="53" scope="col">Code Letter</th>
      <th width="90" scope="col">Item</th>
      <th width="151" scope="col">Signature</th>
    </tr>
     <?php 
	  $sql="select distinct g_id,leader_name,leader_reg_no,item,chest_no from group_details";
	  if(isset($_POST['btnSelect'])){
		
	 $btn=$_POST['btnSelect'];
	 $optItem=$_POST['optItem'];
	if($optItem=="<>"){
	$sql="select distinct g_id,leader_name,leader_reg_no,item,chest_no from group_details";
	}
	 else
	 {
		 $sql="select distinct g_id,leader_name,leader_reg_no,item,chest_no from group_details where item='$optItem'";
	 }
 }
 
	  $res=mysql_query($sql);
	
	  $chestNo2=null;
	  $flag=0;
	  $i=0;
   while($row=mysql_fetch_array($res)){
	  $i++;
 	$name=$row['leader_name'];
	$regNo=$row['leader_reg_no'];
	$item=$row['item'];
	$chestNo=$row['chest_no'];
	

	$flag=1;


	?>
    
 <tr>
 
 <td><?php echo $i; 
 ?>
 </td>
 <td><?php echo $name;?>
 </td>
 <td><?php echo $regNo;?>
 </td>
 <td><?php echo $chestNo; ?>
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

	
<?php
	if($item!=""){
	
	?>
      <?php echo $arrayGitems[$item]; 
	  ?>
      <?php
    }
	 ?>
     
          </font>
 </td>
 <td>
 </td>
 </tr>   

 <?php
   }
 ?>

  </table>
</td>
<td>
<table>
<tr>
<td>
</td>
</tr>
</table>
</tr>
</form>
<script type="text/javascript">
window.onload=window.print() ;
window.location="view_group_item_list.php";
</script>
</body>
</html>