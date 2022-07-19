<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<script type="text/javascript">
function clearMsg()
{
	var msg=document.getElementById("lblRegNo");
	msg.innerHTML="";
}
function clearSuccessMsg(){
	var msg=document.getElementById("txtSuccess");
	msg.innerHTML="";
}
</script>
<title>ADD RESULTS</title>
</head>

<body>
<form id="form1" name="form1" method="post" action="" onsubmit="this.return(validate())">
<?php
  include("dbconnection.php");
  	  $success=0;
	  $flag=1;
	  $Item="";
  function doesExist($value){
	  $sql="select * from result_details where Item='$value'";
	  $res=mysql_query($sql);
	  $temp=mysql_num_rows($res);
	  if(mysql_num_rows($res)==0)
	  {
	  
	  return false;
	  }else
	  return true;
  }
  if(isset($_POST['btnSubmit'])){
	  
  $First=$_POST['First'];
  $dpt1=$_POST['dpt1'];
  $sem1=$_POST['sem1'];
  $Second=$_POST['Second'];
  $dpt2=$_POST['dpt2'];
  $sem2=$_POST['sem2'];
  $Theird=$_POST['Theird'];
  $dpt3=$_POST['dpt3'];
  $sem3=$_POST['sem3'];
  $Item=$_POST['Item'];
  if(!doesExist($Item)){
	  $flag=1;
  $sql="insert into result_details(First,dpt1,sem1,Second,dpt2,sem2,Theird,dpt3,sem3,Item) values ('$First','$dpt1','$sem1','$Second','$dpt2','$sem2','$Theird','$dpt3','$sem3','$Item')";
  if(mysql_query($sql))
  {
  $success=1;
  }
  }else
  $flag=0;
  
  }
   ?>
  <table width="500" height="300" border="2" cellpadding="2" align="center">
  <td colspan="2" align="center">
Item: <select name="Item" id="Item" style="font-family:ML-TTKarthika">
          <option value="0">
		  
            ---
		
 </option>
          <option value="1">
           1. ചിത്രരചന - പെൻസിൽ
 </option>
          <option value="2">          
           2. ചിത്രരചന - ജലഛായം
 </option>
          <option value="3"> 
           3. ചിത്രരചന - എണ്ണഛായം
 </option>
          <option value="4">
           4. കാർട്ടൂൺ 
 </option>
          <option value="5">
           5. കൊളാഷ്
 </option>
          <option value="6">
           6. ശാസ്ത്രീയ സംഗീതം ആൺ 
 </option>
          <option value="7">
           7. ശാസ്ത്രീയ സംഗീതം പെൺ
 </option>
          <option value="8">
           8. ലളിതഗാനം ആൺ 
 </option>
          <option value="9">
           9. ലളിതഗാനം പെൺ 
 </option>
          <option value="10">
           10. മാപ്പിളപ്പാട്ട് ആൺ 
 </option>
          <option value="11">
           11. മാപ്പിളപ്പാട്ട് പെൺ 
 </option>
          <option value="12">
           12. വയലിൻ 
 </option>
          <option value="13">
           13. ഗിറ്റാർ 
 </option>
          <option value="14">
           14. ഓടക്കുഴൽ 
 </option>
          <option value="16">
           16. മൃതങ്ങാം
 </option>
          <option value="17">
           17. ചെണ്ട ( തായമ്പക )
 </option>
          <option value="18">
           18. മദ്ദളം 
 </option>
          <option value="19">
           19. തബല 
 </option>
          <option value="20">
           20. കഥകളി 
 </option>
          <option value="21">
           21. ഓട്ടൻതുള്ളൽ ആൺ 
 </option>
          <option value="22">
           22. ഓട്ടൻതുള്ളൽ പെൺ 
 </option>
          <option value="23">
           23. നാടോടി നൃത്തം ആൺ 
 </option>
          <option value="24">
           24. നാടോടി നൃത്തം പെൺ
 </option>
          <option value="25">
           25. ഭാരതനാട്ട്യം ആൺ 
 </option>
          <option value="26">
           26. ഭാരതനാട്ട്യം പെൺ
 </option>
          <option value="27">
           27. കുച്ചുപ്പുടി 
 </option>
          <option value="28">
           28. ചാക്യാർകൂത്
 </option>
          <option value="29">
           29. മോഹിനിയാട്ടം 
 </option>
          <option value="30">
           30. പ്രസംഗം മലയാളം
 </option>
          <option value="31">
           31. പ്രസംഗം ഇന്ഗ്ലീഷ് 
 </option>
          <option value="32">
           32. ഉപന്ന്യാസം മലയാളം
 </option>
          <option value="33">
           33. ഉപന്ന്യാസം ഇന്ഗ്ലീഷ് 
 </option>
          <option value="34">
           34. കഥാരചന മലയാളം
 </option>
          <option value="35">
           35. കഥാരചന ഇന്ഗ്ലീഷ് 
 </option>
          <option value="36">
           36. കവിതാരചന മലയാളം
 </option>
          <option value="37">
           37. കവിതാരചന ഇന്ഗ്ലീഷ് 
 </option>
          <option value="38">
           38. പഥ്യം ചൊല്ലൽ മലയാളം ആൺ
 </option>  
          <option value="39">
           39. പഥ്യം ചൊല്ലൽ മലയാളം പെൺ
 </option>
          <option value="40">
           40. പഥ്യം ചൊല്ലൽ ഇന്ഗ്ലീഷ് ആൺ
 </option>
          <option value="41">
           41. പഥ്യം ചൊല്ലൽ ഇന്ഗ്ലീഷ് പെൺ
 </option>
          <option value="42">
           42. മോണോ ആക്ട് ആൺ
 </option>
          <option value="43">
           43. മോണോ ആക്ട് പെൺ
 </option>
          <option value="44">
           44. മിമിക്രി ആൺ 
 </option>
          <option value="45">
          45. മിമിക്രി പെൺ
</option>
          <option value="46">
          46. കഥാപ്രസംഗം 
</option>
          <option value="47">
          47.സംഘനൃത്തം 
</option>
          <option value="48">
          48. തിരുവാതിര 
</option>
          <option value="49">
          49. മാർഗംകളി 
</option>
          <option value="50">
          50. ഒപ്പന 
</option>
          <option value="51">
          51. വട്ടപ്പാട്ട് 
</option>
          <option value="52">
          52. സംഘഗാനം 
</option>
          <option value="53">
          53. ഗാനമേള 
</option>
          <option value="54">
          54. നാടകം മലയാളം
</option>
          <option value="55">
          55.നാടകം ഇന്ഗ്ലീഷ്
</option>
          <option value="56">
          56. മൂകാഭിനയം 
</option>
          <option value="57">
          57. ചെണ്ടമേളം 
</option>
          <option value="58">
          58. പഞ്ചവാദ്യം
</option>
          <option value="59">
          59. വഞ്ചി പ്പാട്ട്
</option>
          <option value="60">
          60. നടൻ പാട്ട് 
</option>
          <option value="61">
          61. വൃന്ദവാദ്യം 
</option>
          <option value="62">
          62. പരിചമുട്ടുകളി 
</option>
          <option value="63">
          63. കോൽക്കളി 
</option>
          <option value="64">
          64. പൂരക്കളി 
</option>
          <option value="65">
          65. ദഫ്മുട്ട്
</option>
          <option value="66">
          66. ദേശഭക്തി ഗാനം 
</option>
          </select><br /><br />     
      </td>
      </tr>
    <tr>
      <th scope="row">First</th>
      <td><input type="text" name="First" id="txtChestNo" /></td>
      <th scope="row">Department</th>
      <td><select name="dpt1" id="dpt1" >
	  <option value="" >
      --
      </option>
      <option value="Computer Engineering" >
      Computer Engineering
      </option>
      <option value="Automobile Engineering">
      Automobile Engineering
      </option>
      <option value="Civil engineering">
      Civil engineering
      </option>
      <option value="Mechanical Engineering">
      Mechanical Engineering
      </option>
      <option value="Architectural Engineering">
      Architectural Engineering
      </option>
      <option value="Electrical Engineering">
      Electrical Engineering
      </option>
      </select></td>
      <th scope="row">Semester</th>
      <td><select name="sem1" id="sem1">
	  <option value="" >
      --
      </option>
      <option value="S1">
      S1
      </option>
      <option value="S2">
      S2
      </option>
      <option value="S3">
      S3
      </option>
      <option value="S4">
      S4
      </option>
      <option value="S5">
      S5
      </option>
      <option value="S6">
      S6
      </option>
      </select>&nbsp;
      </td>
      </tr>
          <tr>
      <th scope="row">Second</th>
      <td><input type="text" name="Second" id="Second" /></td>
      <th scope="row">Department</th>
      <td><select name="dpt2" id="dpt2" >
	  <option value="" >
      --
      </option>
      <option value="Computer Engineering" >
      Computer Engineering
      </option>
      <option value="Automobile Engineering">
      Automobile Engineering
      </option>
      <option value="Civil engineering">
      Civil engineering
      </option>
      <option value="Mechanical Engineering">
      Mechanical Engineering
      </option>
      <option value="Architectural Engineering">
      Architectural Engineering
      </option>
      <option value="Electrical Engineering">
      Electrical Engineering
      </option>
      </select></td>
      <th scope="row">Semester</th>
      <td><select name="sem2" id="sem2">
	  <option value="" >
      --
      </option>
      <option value="S1">
      S1
      </option>
      <option value="S2">
      S2
      </option>
      <option value="S3">
      S3
      </option>
      <option value="S4">
      S4
      </option>
      <option value="S5">
      S5
      </option>
      <option value="S6">
      S6
      </option>
      </select>&nbsp;
      </td>
      </tr>
  
      <tr>
      <th scope="row">Theird</th>
      <td><input type="text" name="Theird" id="Theird" /></td>
      <th scope="row">Department</th>
      <td><select name="dpt3" id="dpt3" >
	  <option value="" >
      --
      </option>
      <option value="Computer Engineering" >
      Computer Engineering
      </option>
      <option value="Automobile Engineering">
      Automobile Engineering
      </option>
      <option value="Civil engineering">
      Civil engineering
      </option>
      <option value="Mechanical Engineering">
      Mechanical Engineering
      </option>
      <option value="Architectural Engineering">
      Architectural Engineering
      </option>
      <option value="Electrical Engineering">
      Electrical Engineering
      </option>
      </select></td>
      <th scope="row">Semester</th>
      <td><select name="sem3" id="sem3">
	  <option value="" >
      --
      </option>
      <option value="S1">
      S1
      </option>
      <option value="S2">
      S2
      </option>
      <option value="S3">
      S3
      </option>
      <option value="S4">
      S4
      </option>
      <option value="S5">
      S5
      </option>
      <option value="S6">
      S6
      </option>
      </select>&nbsp;
      </td>
      </tr>
  
  
  
  
      <tr>
      <td height="30" colspan="2" align="right">
       <font align="center" color="green" id="txtSuccess"><?php
  if($success==1)
  { 
  echo "<b>Entry Successfully Added</b>";
  }
  if($flag==0)
  {
	  echo "<b>Item Already Added</b>";
  }
  
  ?>
  </font>
  <a href="index.html">Back</a>
  <input name="btnCancel" type="button" value="Cancel" />
          <input name="btnSubmit" type="submit" value="Submit" />
      </td>
    </tr>
  </table>
  
  <p>&nbsp;</p>
</form>
</body>
</html>