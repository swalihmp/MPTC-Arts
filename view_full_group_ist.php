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

<title>Untitled Document</title>
<script type="application/javascript">
function confm(){
var gId=document.getElementById("gId").value;
   var choice=confirm('Do You Want To Delete Entry From Table ?');
   if(choice){
   window.location="view_group_item_list.php?btnDelete=Delete&gId="+gId;
   }
}
</script>
</head>

<body>
<center><h2>Full Group List</h2></center>
<div align="right">
 <form action="print_full_group_list.php" method="post">
 <?php
 if(isset($_POST['btnSelect'])){
 ?>
 <?php 
 }
 ?>
 </form>
 <?php
  include("dbconnection.php");
 
	  $sql="select distinct g_id,leader_name,leader_reg_no,item,chest_no from group_details where ifnull(TRIM(student_name),'')!='' and ifnull(TRIM(student_reg_no),'')!=''";
	  $sql2="select g_id,student_name,student_reg_no,item,chest_no from group_details where ifnull(TRIM(student_name),'')!='' and ifnull(TRIM(student_reg_no),'')!=''";
	  
	  if(isset($_POST['btnSelect'])){
		
	 $btn=$_POST['btnSelect'];
	 $optItm=$_POST['optItem'];
	if($optItm=="<>"){
	$sql="select distinct g_id,leader_name,leader_reg_no,item,chest_no from group_details where ifnull(TRIM(student_name),'')!='' and ifnull(TRIM(student_reg_no),'')!=''";
	  $sql2="select g_id,student_name,student_reg_no,item,chest_no from group_details where ifnull(TRIM(student_name),'')!='' and ifnull(TRIM(student_reg_no),'')!=''";

	}
	 else
	 {
		 $sql="select distinct g_id,leader_name,leader_reg_no,item,chest_no from group_details where item='$optItm' and ifnull(TRIM(student_name),'')!='' and ifnull(TRIM(student_reg_no),'')!=''";
		 	 $sql2="select g_id,student_name,student_reg_no,item,chest_no from group_details where item='$optItm' and ifnull(TRIM(student_name),'')!='' and ifnull(TRIM(student_reg_no),'')!=''";
	 }
 }
 
?></div>
 <table align="center">
<tr>
<td>
<form action="" method="post">
<select name="optItem" style="font-family:ML-TTKarthika">
<option value="<>" >
      <>
</option>
      <option value="17">17. ചെണ്ട (തായമ്പക) 
</option>
      <option value="18">18. മദ്ദളം 
</option>
      <option value="19">19. തബല 
</option>
      <option value="46">46. കഥാപ്രസംഗം 
</option>
      <option value="47">47.സംഘനൃത്തം 
</option>
      <option value="48">48. തിരുവാതിര 
</option>
      <option value="49">49. മാർഗംകളി 
</option>
      <option value="50">50. ഒപ്പന 
</option>
      <option value="51"> 51. വട്ടപ്പാട്ട്
</option>
      <option value="52">52. സംഘഗാനം 
</option>
      <option value="53">53. ഗാനമേള  
</option>
      <option value="54">54. നാടകം മലയാളം
</option>
      <option value="55">55.നാടകം ഇന്ഗ്ലീഷ്
</option>
      <option value="56">56. മൂകാഭിനയം 
</option>
      <option value="57">57. ചെണ്ടമേളം 
</option>
      <option value="58">58. പഞ്ചവാദ്യം
</option>
      <option value="59">59. വഞ്ചി പ്പാട്ട്
</option>
      <option value="60">60. നടൻ പാട്ട് 
</option>
      <option value="61">61. വൃന്ദവാദ്യം  
</option>
      <option value="62">62. പരിചമുട്ടുകളി 
</option>
	  <option value="63">63. കോൽക്കളി 
</option>
      <option value="64">64. പൂരക്കളി  
</option>
      <option value="65">65. ദഫ്മുട്ട്
</option>
	  <option value="66">66. ദേശഭക്തി ഗാനം 
</option>
</select>
</td>
<td>
<input name="btnSelect" type="submit" value="Select" />

</form>
</td>
</tr>
</table>
<form id="form1" name="form1" method="post" action="">

<table align="center" width="800">
<tr>
<td>

  <table width="377" border="1"  class="table  table-bordered table-hover" align="center">
    <tr bgcolor="#eeeeee">
      <th width="37" scope="col">Sl.No</th>
      <th width="71" scope="col">Name</th>
      <th width="71" scope="col">Reg. No</th>
      <th width="53" scope="col">Group Chest No</th>
      <th width="31" scope="col">Item</th>
    </tr>
     <?php
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
 </tr>   

 <?php
   }
 ?>
  <?php
	  $res=mysql_query($sql2);
		$chestNo2=null;
	  $flag=0;
	  //$count=0;
   while($row=mysql_fetch_array($res)){
	  $i++;
	  //$count++;
	  //if($count==11){
//	  $count=0;
//	  break;
//	  }//
//	  if($count==1){
 	$name=$row['student_name'];
	$regNo=$row['student_reg_no'];
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
 </tr>   

 <?php
  // }
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
<?php
	
	if(isset($_GET['btnDelete'])){
		$gId=$_GET['gId'];
		 $sql="delete from group_details where g_id=$gId";
	  mysql_query($sql);
	 header("location:view_group_item_list.php");
  
	}
 ?>
</body>
</html>