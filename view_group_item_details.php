<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>	MADIN POLYTECHNIC COLLEGE</title>
<link href="assets/css/bootstrap.css" rel="stylesheet" />
</head>

<body>
<form id="form1" name="form1" method="post" action="">
<?php
 include("dbconnection.php");
 $gId=$_GET['g_id'];
 $sql="select * from group_details where g_id='$gId'";
 $res=mysql_query($sql);
 $row=mysql_fetch_array($res);
 $name=$row['leader_name'];
 $regId=$row['leader_reg_no'];
 $item=$row['item'];
 $chestNo=$row['chest_no'];
 
 
?><center>
<h3>MPTC ARTS FEST 2K19</h3>
<h4>Group Details</h4>
</center>
  <table width="301" border="1" class="table  table-bordered table-hover">
    <tr bgcolor="#eeeeee">
      <th width="81" scope="row">Item</th>
      <td width="159"><label id="lblItem">
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
    <tr>
      <th scope="row">Chest No</th>
      <td><label id="lblChestNo">
<?php echo $chestNo;
?>
      </label>&nbsp;</td>
    </tr>
    <tr>
      <th scope="row">Group Captain</th>
      <td>
      <?php
	  $sql="select distinct leader_name,leader_reg_no from group_details where g_id=$gId";
	  $res=mysql_query($sql);
	  $row=mysql_fetch_array($res);
	  ?>
      <label id="lblMName">
            <?php 
	  echo $row['leader_name'];
	  ?>
      </label>
      </td>
      </tr>
      <tr>
      <th>
      Register No
      </th>
      <td> <label id="lblMRegNo">
      <?php 
	  echo $row['leader_reg_no']."<br />";
	  ?>
      </label>
     
      </td>
      </tr>
      <tr>
      <th>Members
      </th>
      <td>
      <?php 
	  $sql=
      $sql="select student_name,student_reg_no from group_details where g_id='$gId'";
	  $res=mysql_query($sql);
	  while($row=mysql_fetch_array($res)){
	  if($row['student_name'!=""]){
	  ?>
      <p><?php echo $row['student_name']."";?> (<?php echo $row['student_reg_no'];
	  	 ?>
         )</p><br />
         <?php
          }
	  
	  }
	  ?></td>
    </tr>
    </table>
    <div id="tblPrint" align="center">
      <input type="submit" name="btnBack" id="btnBack" value="Back" />
      <input type="submit" name="btnDelete" id="btnDelete" value="Delete" />
      <input type="button" name="btnPrint" id="btnPrint" value="Print" onclick="document.getElementById('tblPrint').style.display='none';
      window.print();
      document.getElementById('tblPrint').style.display='block';
 " />
      <?php if(isset($_POST['btnBack'])){
      header("location:view_group_item_list.php");
	  }
	  if(isset($_POST['btnDelete'])){
      $sql="delete from group_details where g_id=$gId";
	  mysql_query($sql);
	  header("location:view_group_item_list.php");
	  }
	  ?>
      </div>
</form>
</body>
</html>