<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd"><html>
<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type"/>
<link rel="stylesheet" type="text/css" href="template/default/content/css/style.css">
<script language="javascript" type="text/javascript" src="DatePicker/WdatePicker.js"></script>
<script src="template/default/tree/js/admincp.js?SES" type="text/javascript"></script>
<script language="javascript" type="text/javascript" src="template/default/js/jquery.min.js"></script>
<script charset="utf-8" src="eweb/kindeditor.js"></script>
<script type="text/javascript"> 
function show_help()
{
   mytop=(screen.availHeight-430)/2;
   myleft=(screen.availWidth-800)/2;
   window.open("admin.php?ac=view&fileurl=help&helpid=<?php echo $fileurl?>","","height=470,width=800,status=0,toolbar=no,menubar=no,location=no,scrollbars=yes,top="+mytop+",left="+myleft+",resizable=yes");
}
filenumber_show()
function filenumber_show()
{
   jQuery.ajax({
      type: 'GET',
      url: 'admin.php?ac=file&fileurl=public&filenumber=<?php echo $filenumber?>&officetype=4&'+new Date(),
      success: function(data){
		  if(data!=''){
			  $("#filenumber").html(data);
		  }else{
		  	  <? if($blog['id']==''){?>
			  $("#filenumber").html('还没有附件!');
			  <? }?>
		  }
      }
   });
}
</script>
<title>Office 515158 2011 OA办公系统</title>
 
</head>
<body>
<table width="90%" border="0" align="center" cellpadding="3" cellspacing="0" class="small">
  <tr>
    <td class="Big"><img src="template/default/content/images/notify_new.gif" align="absmiddle"><span class="big3"> <?php echo $_title?><?php echo $human_type_name?>信息</span>&nbsp;&nbsp;&nbsp;&nbsp;
	<span style="font-size:12px;">
	
	<a href="admin.php?ac=humanlist&fileurl=<?php echo $fileurl?>&type=<?php echo $type?>" style="font-size:12px;">返回列表页</a><img src="template/default/content/images/f_ico.png" align="absmiddle"></span>
    </td>
  </tr>
</table>

<script Language="JavaScript"> 
function CheckForm()
{
   <? if($blog['id']==''){?>
   if(document.save.number.value=="")
   { alert("流水单号不能为空！");
     document.save.number.focus();
     return (false);
   }
   if(document.save.userid.value=="")
   { alert("单位员工不能为空！");
     document.save.userid.focus();
     return (false);
   }
   <? }?>
<?
global $db;
$query = $db->query("SELECT * FROM ".DB_TABLEPRE."human_form where type1='".$type."'  ORDER BY id Asc");
	while ($row = $db->fetch_array($query)) {
		if($row["confirmation"]=='1'){
?>

if(document.save.<?php echo $row["inputname"]?>.value=="")
   { alert("<?php echo $row["formname"]?>不能为空！");
     document.save.<?php echo $row["inputname"]?>.focus();
     return (false);
   }
   
<?php
	}
}
?>
   return true;
}
function sendForm()
{
   if(CheckForm())
      document.save.submit();
}
</script>
<form name="save" method="post" action="?ac=humanadd&do=addsave&fileurl=<?php echo $fileurl?>&type=<?php echo $type?>">
	<input type="hidden" name="savetype" value="add" />
	<input type="hidden" name="filenumber" value="<?php echo $filenumber?>" />
	<input type="hidden" name="id" value="<?php echo $blog['id']?>" />
	<input name="number" type="hidden" value="<?php echo get_date('ymdHis',PHP_TIME)?>" />
<table class="TableBlock" width="80%" align="center">
   <tr>
      <td nowrap class="TableContent">单位员工：</td>
      <td class="TableData">
       <? if($blog['id']==''){?>
        <?php
	 get_pubuser(1,"user","","+选择人员",120,20);
	 ?>
	 <? }else{?>
	 <?php echo $blog['username']?>
	 <? }?>
      </td>
      <td nowrap class="TableContent">所学专业：</td>
      <td class="TableData">
        <INPUT type="text"name="toa_3_MAJOR" class=BigInput size="15" value="<?php echo get_human_db($blog['id'],"toa_3_MAJOR")?>">
      </td>
    </tr>
    <tr>
    	 <td nowrap class="TableContent">开始日期：</td>
      <td class="TableData">
       <?php echo get_human_date('toa_3_START_DATE',get_human_db($blog['id'],"toa_3_START_DATE"))?>
      </td>
    	<td nowrap class="TableContent">结束日期：</td>
      <td class="TableData">
       <?php echo get_human_date('toa_3_END_DATE',get_human_db($blog['id'],"toa_3_END_DATE"))?>
      </td>
    </tr>
    <tr>
      <td nowrap class="TableContent">所获学历：</td>
      <td class="TableData">
        <INPUT type="text"name="toa_3_ACADEMY_DEGREE" class=BigInput size="15" value="<?php echo get_human_db($blog['id'],"toa_3_ACADEMY_DEGREE")?>">
      </td>
      <td nowrap class="TableContent">所获学位：</td>
      <td class="TableData">
       <INPUT type="text"name="toa_3_DEGREE" class=BigInput size="15" value="<?php echo get_human_db($blog['id'],"toa_3_DEGREE")?>">
      </td>
    </tr>
    <tr>
      <td nowrap class="TableContent">曾任班干：</td>
      <td class="TableData">
        <INPUT type="text"name="toa_3_POSITION" class=BigInput size="15" value="<?php echo get_human_db($blog['id'],"toa_3_POSITION")?>">
      </td>
      <td nowrap class="TableContent">证明人：</td>
      <td class="TableData">
       <INPUT type="text"name="toa_3_WITNESS" class=BigInput size="15" value="<?php echo get_human_db($blog['id'],"toa_3_WITNESS")?>">
    </tr>
    <tr>
      <td nowrap class="TableContent">所在院校：</td>
      <td class="TableData" colspan=3>
        <textarea name="toa_3_SCHOOL" cols="78" rows="3" class="BigInput" value=""><?php echo get_human_db($blog['id'],"toa_3_SCHOOL")?></textarea>
      </td>
    </tr>
    <tr>
      <td nowrap class="TableContent">院校所在地：</td>
      <td class="TableData" colspan=3>
        <textarea name="toa_3_SCHOOL_ADDRESS" cols="78" rows="3" class="BigInput" value=""><?php echo get_human_db($blog['id'],"toa_3_SCHOOL_ADDRESS")?></textarea>
      </td>
    </tr>
    <tr>
      <td nowrap class="TableContent">获奖情况：</td>
      <td class="TableData" colspan=3>
        <textarea name="toa_3_AWARDING" cols="78" rows="3" class="BigInput" value=""><?php echo get_human_db($blog['id'],"toa_3_AWARDING")?></textarea>
      </td>
    </tr>
    <tr>
      <td nowrap class="TableContent">所获证书：</td>
      <td class="TableData" colspan=3>
        <textarea name="toa_3_CERTIFICATES" cols="78" rows="3" class="BigInput" value=""><?php echo get_human_db($blog['id'],"toa_3_CERTIFICATES")?></textarea>
      </td>
    </tr>
    <tr>
      <td nowrap class="TableContent">备注：</td>
      <td class="TableData" colspan=3>
        <textarea name="toa_3_REMARK" cols="78" rows="3" class="BigInput" value=""><?php echo get_human_db($blog['id'],"toa_3_REMARK")?></textarea>
      </td>
    </tr> 
    <tr class="TableData" id="attachment2">
      <td nowrap class="TableContent">附件文档：</td>
      <td nowrap colspan=3 >  
	  <?php
	global $db;
	$sql = "SELECT * FROM ".DB_TABLEPRE."fileoffice WHERE officeid='".$blog['id']."' and officetype='4' and filetype='2' ORDER BY id desc";
	$result = $db->query($sql);
	while ($row = $db->fetch_array($result)) {	
		echo '<a href="down.php?urls='.$row['fileaddr'].'">'.$row['filename'].'</a>&nbsp;&nbsp;&nbsp;&nbsp;上传人：'.get_realname($row['uid']).'&nbsp;&nbsp;&nbsp;&nbsp;上传时间：'.$row['date'].'<br>';
	}
	
	?>    
      </td>
   </tr>  
	<tr class="TableContent" id="attachment2">
      <td nowrap></td>
      <td nowrap colspan=3 id="filenumber">      
      </td>
   </tr>
   <tr height="25" id="attachment1">
      <td nowrap class="TableContent"><span id="ATTACH_LABEL">附件上传：</span></td>
      <td class="TableData" colspan=3>
        <input type="hidden" name="annexurlid" class="BigInput"  onpropertychange="filenumber_show();" />
	  <a href="#m2" onClick="window.open ('admin.php?ac=uploadadd&fileurl=public&name=annexurlid&filenumber=<?php echo $filenumber?>&officetype=4', 'newwindow', 'height=200, width=400, top=0, left=0, toolbar=no, menubar=no, scrollbars=yes, resizable=no,location=no, status=no')">+上传附件</a>
      </td>
   </tr>
    <tr align="center" class="TableControl">
      <td colspan=4 nowrap>
        <input type="button" name="Submit" value="保存信息" class="BigButtonBHover" onclick="sendForm();">
      </td>
    </tr>
  </table>

</form>

 
</body>
</html>
