<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<script type="text/javascript">
function boxHide(num){
	var m1=document.getElementById("txtP1RegId"),m2=document.getElementById("txtP2RegId"),m3=document.getElementById("txtP3RegId"),m4=document.getElementById("txtP4RegId"),m5=document.getElementById("txtP5RegId"),m6=document.getElementById("txtP6RegId"),m7=document.getElementById("txtP7RegId"),m8=document.getElementById("txtP8RegId"),m9=document.getElementById("txtP9RegId"),m10=document.getElementById("txtP10RegId"),m11=document.getElementById("txtP11RegId");
	var mn1=document.getElementById("txtP1Name"),mn2=document.getElementById("txtP2Name"),mn3=document.getElementById("txtP3Name"),mn4=document.getElementById("txtP4Name"),mn5=document.getElementById("txtP5Name"),mn6=document.getElementById("txtP6Name"),mn7=document.getElementById("txtP7Name"),mn8=document.getElementById("txtP8Name"),mn9=document.getElementById("txtP9Name"),mn10=document.getElementById("txtP10Name"),mn11=document.getElementById("txtP11Name");


	m11.disabled=false;
	m10.disabled=false;
	m9.disabled=false;
	m8.disabled=false;
	m7.disabled=false;
	m6.disabled=false;
	m5.disabled=false;
	m4.disabled=false;
	m3.disabled=false;
	m2.disabled=false;
	m1.disabled=false;
	mn11.disabled=false;
	mn10.disabled=false;
	mn9.disabled=false;
	mn8.disabled=false;
	mn7.disabled=false;
	mn6.disabled=false;
	mn5.disabled=false;
	mn4.disabled=false;
	mn3.disabled=false;
	mn2.disabled=false;
	mn1.disabled=false;
	
	switch(num){
	case 5:
	m11.disabled=true;
	m10.disabled=true;
	m9.disabled=true;
	m8.disabled=true;
	m7.disabled=true;
	mn11.disabled=true;
	mn10.disabled=true;
	mn9.disabled=true;
	mn8.disabled=true;
	mn7.disabled=true;
	break
	case 4:
	m11.disabled=true;
	m10.disabled=true;
	m9.disabled=true;
	m8.disabled=true;
	mn11.disabled=true;
	mn10.disabled=true;
	mn9.disabled=true;
	mn8.disabled=true;
	break
	case 2:
	m11.disabled=true;
	m10.disabled=true;
	mn11.disabled=true;
	mn10.disabled=true;
	break
	case 7:
	m11.disabled=true;
	m10.disabled=true;
	m9.disabled=true;
	m8.disabled=true;
	m7.disabled=true;
	m6.disabled=true;
	m5.disabled=true;
	mn11.disabled=true;
	mn10.disabled=true;
	mn9.disabled=true;
	mn8.disabled=true;
	mn7.disabled=true;
	mn6.disabled=true;
	mn5.disabled=true;
	break
	case 8:
	m11.disabled=true;
	m10.disabled=true;
	m9.disabled=true;
	m8.disabled=true;
	m7.disabled=true;
	m6.disabled=true;
	m5.disabled=true;
	m4.disabled=true;
	mn11.disabled=true;
	mn10.disabled=true;
	mn9.disabled=true;
	mn8.disabled=true;
	mn7.disabled=true;
	mn6.disabled=true;
	mn5.disabled=true;
	mn4.disabled=true;
	break
	case 6:
	m11.disabled=true;
	m10.disabled=true;
	m9.disabled=true;
	m8.disabled=true;
	m7.disabled=true;
	m6.disabled=true;
	mn11.disabled=true;
	mn10.disabled=true;
	mn9.disabled=true;
	mn8.disabled=true;
	mn7.disabled=true;
	mn6.disabled=true;
	break
	
	}
	}
	  function changeMembers(item){
	//alert("hiii");
var mem7=new Array(47,49,52,53,56,57,58,60,61,66);
var mem10=new Array(48,50,51,54,55,59);
var mem5=new Array(46);
var mem12=new Array(63);
var mem8=new Array(62);
var mem4=new Array(18);
var mem6=new Array(17);
//alert("hiii");
for(i=0;i<9;i++){
if(mem7[i]==item){
boxHide(5);
break;
}
}
for(i=0;i<6;i++){
if(mem10[i]==item){
boxHide(2);
break;
}
}
for(i=0;i<9;i++){
if(mem5[i]==item){
boxHide(7);
break;
}
}
for(i=0;i<9;i++){
if(mem12[i]==item){
boxHide(0);
break;
}
}
for(i=0;i<9;i++){
if(mem8[i]==item){
boxHide(4);
break;
}
}
for(i=0;i<9;i++){
if(mem4[i]==item){
boxHide(8);
break;
}
}
for(i=0;i<9;i++){
if(mem6[i]==item){
boxHide(6);
break;
}
}


/*switch(item){
case 15:
alert("chenda");
boxHide(5);
break;
case 17: boxHide(7);
break;
case 45: boxHide(6);
break;
case 59: boxHide(3);
break;
case 60: boxHide(100);
break;
}*/
if(item==66){
boxHide(5);
}else
if(item==46){
boxHide(7);
}else
if(item==63){
	boxHide(0);
}else
if(item==62){
	boxHide(4);
}else
if(item==18){
	boxHide(8);
}else
if(item==17){
	boxHide(5);
}else
	if(item==65){
		boxHide(2);
	}

}
function clearGMsg()
{
	var name=document.getElementById("lblName");
	name.innerHTML="";
}
function mTyping(n,value){
var msg1=document.getElementById("lblM1"),msg2=document.getElementById("lblM2"),msg3=document.getElementById("lblM3"),msg4=document.getElementById("lblM4"),msg5=document.getElementById("lblM5"),msg6=document.getElementById("lblM6"),msg7=document.getElementById("lblM7"),msg8=document.getElementById("lblM8"),msg9=document.getElementById("lblM9"),msg10=document.getElementById("lblM10"),msg11=document.getElementById("lblM11");
var m1=document.getElementById("txtP1RegId"),m2=document.getElementById("txtP2RegId"),m3=document.getElementById("txtP3RegId"),m4=document.getElementById("txtP4RegId"),m5=document.getElementById("txtP5RegId"),m6=document.getElementById("txtP6RegId"),m7=document.getElementById("txtP7RegId"),m8=document.getElementById("txtP8RegId"),m9=document.getElementById("txtP9RegId"),m10=document.getElementById("txtP10RegId"),m11=document.getElementById("txtP11RegId");
var button=document.getElementById("btnSubmit");
	var m1v=m1.value;
	var m2v=m2.value;
	var m3v=m3.value;
	var m4v=m4.value;
	var m5v=m5.value;
	var m6v=m6.value;
	var m7v=m7.value;
	var m8v=m8.value;
	var m9v=m9.value;
	var m10v=m10.value;
	var m11v=m11.value;
	switch(n){
	case 2:
	m2v=value;
	break;
	case 3:
	m3v=value;
	break;
	case 4:
	m4v=value;
	break;
	case 5:
	m5v=value;
	break;
	case 6:
	m6v=value;
	break;
	case 7:
	m7v=value;
	break;
	case 8:
	m8v=value;
	break;
	case 9:
	m9v=value;
	break;
	case 10:
	m10v=value;
	break;
	case 11:
	m11v=value;
	break;
	
	}
	/*
alert("hi"+m1v+""+m2v+"no"+n);
	if(n==11){
		document.write("values <br />"+m1v+"<br />"+m2v+"<br />"+m3v+"<br />"+m4v+"<br />"+m5v+"<br />"+m6v+"<br />"+m7v+"<br />"+m8v+"<br />"+m9v+"<br />"+m10v+"<br />"+m11v);
	}*/
	if(n==2){
		switch(m2v){
		
		case "":
		button.disabled=false;
		msg2.innerHTML="";
		break;
		case m1v:
		msg2.innerHTML="Register No Already Typed";
		button.disabled=true;
		m2.focus();
	break;
	default:
		button.disabled=false;
	
		}
}else
	if(n==3){
		switch(m3v){
		case "":
		button.disabled=false;
		msg3.innerHTML="";
		break;
		case m1v:
		case m2v:	
		msg3.innerHTML="Register No Already Typed";
		button.disabled=true;
			m3.focus();
			break;
	default:
		button.disabled=false;
	
		}
}else
	if(n==4){
		switch(m4v){
		case "":
		button.disabled=false;
		msg4.innerHTML="";
		break;
		case m1v:
		case m2v:
		case m3v:
		
	msg4.innerHTML="Register No Already Typed";
		button.disabled=true;
	m4.focus();
			break;
	default:
		button.disabled=false;
	
	
		}
}else
	if(n==5){
		switch(m5v){
		
		case "":
		button.disabled=false;
		msg5.innerHTML="";
		break;
		case m1v:
		case m2v:
		case m3v:
		case m4v:
		
	msg5.innerHTML="Register No Already Typed";
		button.disabled=true;
	m5.focus();
			break;
	default:
		button.disabled=false;
	
		}
}else
	if(n==6){
	switch(m6v){
		case "":
		button.disabled=false;
		msg6.innerHTML="";
		break;
		case m1v:
		case m2v:
		case m3v:
		case m4v:
		case m5v:
		
	msg6.innerHTML="Register No Already Typed";
		button.disabled=true;
	m6.focus();
			break;
	default:
		button.disabled=false;
	
		}
}else
	if(n==7){
	switch(m7v){
		case "":
		button.disabled=false;
		msg7.innerHTML="";
		break;
		case m1v:
		case m2v:
		case m3v:
		case m4v:
		case m5v:
		case m6v:
		
	msg7.innerHTML="Register No Already Typed";
		button.disabled=true;
	m7.focus();
			break;
	default:
		button.disabled=false;
	
		}
}else
	if(n==8){
	switch(m8v){
		case "":
		button.disabled=false;
		msg8.innerHTML="";
		break;
		case m1v:
		case m2v:
		case m3v:
		case m4v:
		case m5v:
		case m6v:
		case m7v:
		
	msg8.innerHTML="Register No Already Typed";
		button.disabled=true;
	m8.focus();
			break;
	default:
		button.disabled=false;
	
		}
}else
	if(n==9){
	switch(m9v){
		case "":
		button.disabled=false;
		msg9.innerHTML="";
		break;
		case m1v:
		case m2v:
		case m3v:
		case m4v:
		case m5v:
		case m6v:
		case m7v:
		case m8v:
		
	msg9.innerHTML="Register No Already Typed";
		button.disabled=true;
	m9.focus();
			break;
	default:
		button.disabled=false;
	
		}
}else
	if(n==10){
	switch(m10v){
		case "":
		button.disabled=false;
		msg10.innerHTML="";
		break;
		case m1v:
		case m2v:
		case m3v:
		case m4v:
		case m5v:
		case m6v:
		case m7v:
		case m8v:
		case m9v:
		
	msg10.innerHTML="Register No Already Typed";
		button.disabled=true;
	m10.focus();
			break;
	default:
		button.disabled=false;
	
		}
}else
	if(n==11){
	switch(m11v){
		case "":
		button.disabled=false;
		msg11.innerHTML="";
		break;
		case m1v:
		case m2v:
		case m3v:
		case m4v:
		case m5v:
		case m6v:
		case m7v:
		case m8v:
		case m9v:
		case m10v:
		
	msg11.innerHTML="Register No Already Typed";
		button.disabled=true;
	m11.focus();
			break;
	default:
		button.disabled=false;
	
		}
	}
}
function clearMMsg(no)
{
	var msg1=document.getElementById("lblM1"),msg2=document.getElementById("lblM2"),msg3=document.getElementById("lblM3"),msg4=document.getElementById("lblM4"),msg5=document.getElementById("lblM5"),msg6=document.getElementById("lblM6"),msg7=document.getElementById("lblM7"),msg8=document.getElementById("lblM8"),msg9=document.getElementById("lblM9"),msg10=document.getElementById("lblM10"),msg11=document.getElementById("lblM11");
	
	if(no==1){
	msg1.innerHTML="";
}else
	if(no==2){
	msg2.innerHTML="";
}else
	if(no==3){
	msg3.innerHTML="";
}else
	if(no==4){
	msg4.innerHTML="";
}else
	if(no==5){
	msg5.innerHTML="";
}else
	if(no==6){
	msg6.innerHTML="";
}else
	if(no==7){
	msg7.innerHTML="";
}else
	if(no==8){
	msg8.innerHTML="";
}else
	if(no==9){
	msg9.innerHTML="";
}else
	if(no==10){
	msg10.innerHTML="";
}else
	if(no==11){
	msg11.innerHTML="";
	}
}
</script>
</head>

<body>
<form id="form1" name="form1" method="post" action="">
 <?php 
  include("dbconnection.php");
  $success=0;
	$regNo="";
	$item="";
	$flag=1;
	$flg=Array(11);
	for($i=0;$i<11;$i++){
	$flg[$i]=1;
	}
	$chestNo="";
  function doesExistGroup($chestNo,$regiterNo,$item){
	  $sql="select * from group_details where chest_no='$chestNo' and leader_reg_no='$regiterNo' and item='$item'";
	  $res=mysql_query($sql);
	  $temp=mysql_num_rows($res);
	  
	  if(mysql_num_rows($res)==0)
	  return false;
	  else
	  return true;
  }
  function repeatTest($regNo)
  {
	  if($regNo!=""){
  $sql="select * from group_details where student_reg_no='$regNo'";
	  $res=mysql_query($sql);
	  $temp=mysql_num_rows($res);
	  if($temp<2)
	  return true;
	  else
	  return false;
	  }else return true;
  }
    if(isset($_POST['btnSubmit'])){
	$name=$_POST['txtName'];
	$regNo=$_POST['txtRegNo'];
	$item=$_POST['txtItem'];
	$chestNo=$_POST['txtChestNo'];
	$pNames=Array(11);
	$pRegNo=Array(11);
	$pNames[0]=$_POST['txtP1Name'];
	if(isset($_POST['txtP2Name'])){
	$pNames[1]=$_POST['txtP2Name'];
	}else{
	$pNames[1]="";
	}
	if(isset($_POST['txtP3Name'])){
	$pNames[2]=$_POST['txtP3Name'];
	}else{
	$pNames[2]="";
	}if(isset($_POST['txtP4Name'])){
	$pNames[3]=$_POST['txtP4Name'];
	}else{
	$pNames[3]="";
	}
	if(isset($_POST['txtP5Name'])){
	$pNames[4]=$_POST['txtP5Name'];
	}else{
	$pNames[4]="";
	}
	if(isset($_POST['txtP6Name'])){
	$pNames[5]=$_POST['txtP6Name'];
	}else{
	$pNames[5]="";
	}
	if(isset($_POST['txtP7Name'])){
	$pNames[6]=$_POST['txtP7Name'];
	}else{
	$pNames[6]="";
	}
	if(isset($_POST['txtP8Name'])){
	$pNames[7]=$_POST['txtP8Name'];
	}else{
	$pNames[7]="";
	}
	if(isset($_POST['txtP9Name'])){
	$pNames[8]=$_POST['txtP9Name'];
	}else{
	$pNames[8]="";
	}
	if(isset($_POST['txtP10Name'])){
	$pNames[9]=$_POST['txtP10Name'];
	}else{
	$pNames[9]="";
	}
	if(isset($_POST['txtP11Name'])){
	$pNames[10]=$_POST['txtP11Name'];
	}else{
	$pNames[10]="";
	}
	
	
	
	$pRegNo[0]=$_POST['txtP1RegId'];
	if(isset($_POST['txtP2RegId'])){
	$pRegNo[1]=$_POST['txtP2RegId'];
	}else{
	$pRegNo[1]="";
	}
	if(isset($_POST['txtP3RegId'])){
	$pRegNo[2]=$_POST['txtP3RegId'];
	}else{
	$pRegNo[2]="";
	}
	if(isset($_POST['txtP4RegId'])){
	$pRegNo[3]=$_POST['txtP4RegId'];
	}else{
	$pRegNo[3]="";
	}
	if(isset($_POST['txtP5RegId'])){
	$pRegNo[4]=$_POST['txtP5RegId'];
	}else{
	$pRegNo[4]="";
	}
	if(isset($_POST['txtP6RegId'])){
	$pRegNo[5]=$_POST['txtP6RegId'];
	}else{
	$pRegNo[5]="";
	}
	if(isset($_POST['txtP7RegId'])){
	$pRegNo[6]=$_POST['txtP7RegId'];
	}else{
	$pRegNo[6]="";
	}
	if(isset($_POST['txtP8RegId'])){
	$pRegNo[7]=$_POST['txtP8RegId'];
	}else{
	$pRegNo[7]="";
	}
	if(isset($_POST['txtP9RegId'])){
	$pRegNo[8]=$_POST['txtP9RegId'];
	}else{
	$pRegNo[8]="";
	}
	if(isset($_POST['txtP10RegId'])){
	$pRegNo[9]=$_POST['txtP10RegId'];
	}else{
	$pRegNo[9]="";
	}
	if(isset($_POST['txtP11RegId'])){
	$pRegNo[10]=$_POST['txtP11RegId'];
	}else{
	$pRegNo[10]="";
	}
	
	
	if(!doesExistGroup($chestNo,$regNo,$item))
	{
		if(repeatTest($pRegNo[0])){
			
		$flg[0]=1;
			if(repeatTest($pRegNo[1])){
				
		$flg[1]=1;
			if(repeatTest($pRegNo[2])){
				
		$flg[2]=1;
			if(repeatTest($pRegNo[3])){
			
		$flg[3]=1;
		if(repeatTest($pRegNo[4])){
			
		$flg[4]=1;
			if(repeatTest($pRegNo[5])){
			
		$flg[5]=1;
			if(repeatTest($pRegNo[6])){
			
		$flg[6]=1;
			if(repeatTest($pRegNo[7])){
			
		$flg[7]=1;
			if(repeatTest($pRegNo[8])){
			
		$flg[8]=1;
			
			if(repeatTest($pRegNo[9])){
			
		$flg[9]=1;
			if(repeatTest($pRegNo[10])){
			
		$flg[10]=1;
	
		$flag=1;
		$sql="select MAX(g_id) from group_details";
		$res=mysql_query($sql);
		$row=mysql_fetch_array($res);
		$id=$row[0]+1;
		$tmpFlag=1;
	for($i=0;$i<11;$i++){
		$tmpName=$pNames[$i];
		$tmpRegNo=$pRegNo[$i];
	$sql="insert into group_details(g_id,leader_reg_no,leader_name,item,student_reg_no,student_name,chest_no) values('$id','$regNo','$name','$item','$tmpRegNo','$tmpName','$chestNo')";
	if(!mysql_query($sql)){
	
		$tmpFlag=0;
	}
	}
	$flag=$tmpFlag;
	$success=1;
		}else
		$flg[10]=0;
		
			}else
		$flg[9]=0;
			}else
		$flg[8]=0;
			}else
		$flg[7]=0;
			}else
		$flg[6]=0;
			}else
		$flg[5]=0;
			}else
		$flg[4]=0;
			}else
		$flg[3]=0;
			}else
		$flg[2]=0;
			}else
		$flg[1]=0;
		}else
		$flg[0]=0;
	}else{
		$flag=0;
		}
	
	/*for($i=0;$i<11;$i++){
	echo $flg[$i];
	}*/
	}
	
 ?> <table width="620" border="1" align="center">
    <tr>
      <th width="160" scope="row">Name of Group Leader</th>
      <td width="643"><input type="text" name="txtName" id="txtName" required="required"/>
      <label id="lblName">
      <?php 
	  if($flag==0){
	  echo "Group Already exists !!";
	  }
    
	  ?>
      </label>
      </td>
    </tr>
    <tr>
      <th scope="row">Reg. No of Group Leader</th>
      <td><input name="txtRegNo" type="text" id="txtRegNo" onkeypress="clearGMsg()" required="required"/></td>
    </tr>
    <tr>
      <th scope="row">Chest No</th>
      <td><input type="text" name="txtChestNo" id="txtChestNo"  onkeypress="clearGMsg()" /></td>
    </tr>
    <tr>
      <th scope="row">Item</th>
      <td><select name="txtItem" id="txtItem" style="font-family:ML-TTKarthika" onfocus="clearGMsg()" onchange="changeMembers(this.value);">
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
      </select></td>
    </tr>
    <tr>
      <th scope="row">Members</th>
      <td> 
     <input type="text" name="txtP1Name" id="txtP1Name" placeholder="Name 1"  required="required"/>
      <input name="txtP1RegId" type="text" id="txtP1RegId" onkeypress="clearMMsg(1);"  placeholder="Register Number 1" required="required" />
      <label id="lblM1">
      <?php
	  if($flg[0]==0)
	  echo "Already registerd for 2 items ";
	  ?>
      </label>
      <br />
      <input type="text" name="txtP2Name" id="txtP2Name" placeholder="Name 2" required="required" />
      <input type="text" name="txtP2RegId" id="txtP2RegId" placeholder="Register Number 2"  onkeypress="clearMMsg(2);" required="required" onblur="mTyping(2,this.value);" />
      <label id="lblM2">
      <?php
	  if($flg[1]==0)
	  echo "Already registerd for 2 items ";
	  ?>
      </label>
      
      <br />
      <input type="text" name="txtP3Name" id="txtP3Name" placeholder="Name 3"  />
      <input type="text" name="txtP3RegId" placeholder="Register Number 3"  onkeypress="clearMMsg(3);"  onblur="mTyping(3,this.value);" id="txtP3RegId"/>
      <label id="lblM3">
      <?php
	  if($flg[2]==0)
	  echo "Already registerd for 2 items ";
	  ?>
      </label>
      
      <br />
      <input type="text" name="txtP4Name" id="txtP4Name" placeholder="Name 4"  />
      <input type="text" name="txtP4RegId" id="txtP4RegId" placeholder="Register Number 4"  onkeypress="clearMMsg(4);" onblur="mTyping(4,this.value);" />
      <label id="lblM4">
      <?php
	  if($flg[3]==0)
	  echo "Already registerd for 2 items ";
	  ?>
      </label>
      
      <br />
      <input type="text" name="txtP5Name" id="txtP5Name" placeholder="Name 5"  />
      <input type="text" name="txtP5RegId" id="txtP5RegId" placeholder="Register Number 5" onkeypress="clearMMsg(5);"  onblur="mTyping(5,this.value);" />
      <label id="lblM5">
      <?php
	  if($flg[4]==0)
	  echo "Already registerd for 2 items ";
	  ?>
      </label>
      
      <br />
      <input type="text" name="txtP6Name" id="txtP6Name" placeholder="Name 6"  />
      <input type="text" name="txtP6RegId" id="txtP6RegId" placeholder="Register Number 6" onkeypress="clearMMsg(6);"  onblur="mTyping(6,this.value);" />
      <label id="lblM6">
      <?php
	  if($flg[5]==0)
	  echo "Already registerd for 2 items ";
	  ?>
      </label>
      
      <br />
      <input type="text" name="txtP7Name" id="txtP7Name" placeholder="Name 7"  />
      <input type="text" name="txtP7RegId" id="txtP7RegId" placeholder="Register Number 7" onkeypress="clearMMsg(7);" onblur="mTyping(7,this.value);" />
      <label id="lblM7">
      <?php
	  if($flg[6]==0)
	  echo "Already registerd for 2 items ";
	  ?>
      </label>
      
      <br />
      <input type="text" name="txtP8Name" id="txtP8Name" placeholder="Name 8"  />
      <input type="text" name="txtP8RegId" id="txtP8RegId" placeholder="Register Number 8" onkeypress="clearMMsg(8);" onblur="mTyping(8,this.value);" />
      <label id="lblM8">
      <?php
	  if($flg[7]==0)
	  echo "Already registerd for 2 items ";
	  ?>
      </label>
      
      <br />
      
      <input type="text" name="txtP9Name" id="txtP9Name" placeholder="Name 9"  />
      <input type="text" name="txtP9RegId" id="txtP9RegId" placeholder="Register Number 9"  onkeypress="clearMMsg(9);" onblur="mTyping(9,this.value);" />
      <label id="lblM9">
      <?php
	  if($flg[8]==0)
	  echo "Already registerd for 2 items ";
	  ?>
      </label>
      
      <br />
      <input type="text" name="txtP10Name" id="txtP10Name" placeholder="Name 10"  />
      <input type="text" name="txtP10RegId" id="txtP10RegId" placeholder="Register Number 10" onkeypress="clearMMsg(10);" onblur="mTyping(10,this.value);" />
      <label id="lblM10">
      <?php
	  if($flg[9]==0)
	  echo "Already registerd for 2 items ";
	  ?>
      </label>
      
      <br />
      <input type="text" name="txtP11Name" id="txtP11Name" placeholder="Name 11"  />
      <input type="text" name="txtP11RegId" id="txtP11RegId" placeholder="Register Number 11" onkeypress="clearMMsg(11);" onblur="mTyping(11,this.value);" />
      <label id="lblM11">
      <?php
	  if($flg[10]==0)
	  echo "Already registerd for 2 items ";
	  ?>
      </label>
      
      </td>
    </tr>
    <tr>
      <th scope="row">&nbsp;</th>
      <td align="right">
      <font align="center" color="green" id="txtSuccess"><?php
  if($success==1)
  { 
  echo "<b>Entry Successfully Added</b>";
  }
  
  ?>
  </font>
  <input type="button" name="btnCancel" id="btnCancel" value="Cancel" />
      <input type="submit" name="btnSubmit" id="btnSubmit" value="Submit" /></td>
      
    </tr>
  </table>
</form>
<script type="text/javascript">

window.onload=boxHide(6);


</script>
</body>
</html>