<html>
<head>
<title>信息添加编辑</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<link rel="stylesheet" type="text/css" href="template/default/content/css/style.css">
</head>
<body class="bodycolor">
<table width="90%" border="0" align="center" cellpadding="3" cellspacing="0" class="small">
  <tr>
    <td align="left" class="Big"><img src="template/default/content/images/notify_new.gif" align="absmiddle"><span class="big3">工资数据导入</span>&nbsp;&nbsp;&nbsp;&nbsp;    </td>
  </tr>
</table>
<script Language="JavaScript"> 
function CheckForm()
{	
   if(document.save.address.value=="")
   { alert("请上传数据文件！");
     document.save.address.focus();
     return (false);
   }
   return true;
}
function sendForm()
{
   if(CheckForm())
      document.save.submit();
}
</script>
<form name="save" method="post" action="?ac=<?php echo $ac?>&fileurl=<?php echo $fileurl?>&do=logadd">
	<input type="hidden" name="view" value="save" />
	<input type="hidden" name="wid" value="<?php echo $_GET['wid']?>" />
	 <table class="TableBlock" border="0" width="90%" align="center" style="border-bottom:#4686c6 solid 0px;">
	 
    
	
		<tr>
			<td nowrap class="TableContent" width="100">下载导入模板：</td>
			  <td class="TableData">
				<a href="admin.php?ac=<?php echo $ac;?>&fileurl=<?php echo $fileurl;?>&do=excel&wid=<?php echo $_GET['wid'];?>">工资报表模板下载</a>				</td>  	  	
		</tr>
	
		<tr>
		<tr>
			<td nowrap class="TableContent" width="140">上传导入文件：<? get_helps()?></td>
			  <td class="TableData">
				<?php echo public_upload('address','')?>
				</td>  	  	
		</tr>
		
	<tr>
			<td nowrap class="TableContent" width="100">提示:</td>
			  <td class="TableData">
			1、请导入工资报表模板后缀为".csv"文件。<br> 
2、使用工资报表模板导入数据，先填内容后再导入。<br>  
3、工资报表模板中，ID、姓名不能为空，也不能修改，修改或为空则不能导入。<BR>
4、导入数据执行后，之前从平台录入的信息将全部覆盖！
	  </td>  	  	
		</tr>
		<tr align="center" class="TableControl">
			<td colspan="2" nowrap>
			<input type="button" value="导入数据" class="BigButtonBHover" onClick="sendForm();">&nbsp;	    </td>
	  </tr>
	 </table>
  
</form>

 
</body>
</html>
