<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd"><html>
<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type"/>
<link rel="stylesheet" type="text/css" href="template/default/content/css/style.css">
<script language="javascript" type="text/javascript" src="template/default/js/jquery.min.js"></script>
<script language="javascript" type="text/javascript" src="DatePicker/WdatePicker.js"></script>
<script type="text/javascript"> 
filenumber_show()
function filenumber_show()
{
   jQuery.ajax({
      type: 'GET',
      url: 'admin.php?ac=file&fileurl=public&filenumber=<?php echo $filenumber?>&officetype=2&'+new Date(),
      success: function(data){
		  if(data!=''){
			  $("#filenumber").html(data);
		  }else{
			  $("#filenumber").html('还没有附件!');
		  }
      }
   });
}
fileoffice_show()
function fileoffice_show()
{
   jQuery.ajax({
      type: 'GET',
      url: 'admin.php?ac=file&do=office&fileurl=public&filenumber=<?php echo $filenumber?>&officetype=2&'+new Date(),
      success: function(data){
		  if(data!=''){
			  $("#filenumberoffice").html(data);
		  }else{
			  $("#filenumberoffice").html('还没有文档!');
		  }
      }
   });
}
function show_notk()
{
   mytop=(screen.availHeight-600)/2;
   myleft=(screen.availWidth-1002)/2;
   window.open("ntko/FileEdit.php?fileType=word&FileId=51515800000&filenumber=<?php echo $filenumber?>&officetype=2&uid=<?php echo $_USER->id?>&date=<?php echo get_date('Y-m-d H:i:s',PHP_TIME)?>","","height=600,width=1002,status=0,toolbar=no,menubar=no,location=no,scrollbars=yes,top="+mytop+",left="+myleft+",resizable=yes");
}
</script>
<title>OA办公系统</title>
<style type="text/css">
<!--
.STYLE1 {
	color: #000000;
	font-size: 14px;
	font-weight: bold;
}
.STYLE8 {
	color: #FF0000;
	font-size: 24px;
	font-weight: bold;
}
.STYLE18 {color: #000000; font-size: 14px;}
-->
</style>
</head>
<body class="bodycolor">
<table width="90%" border="0" align="center" cellpadding="3" cellspacing="0" class="small">
  <tr>
    <td class="Big"><img src="template/default/content/images/notify_new.gif" align="absmiddle"><span class="big3"> <?php echo $type['name']?>发文拟稿</span>&nbsp;&nbsp;&nbsp;&nbsp;
	
    </td>
  </tr>
</table>
<script Language="JavaScript"> 
function CheckForm()
{   //判断缮印人是否选择
   if(document.save.zd_repairs.value==""){
	 alert("未选择指定缮印人");
     document.save.zd_repairs.focus();
     return (false);
	   }
   if(document.save.staff.value=="")
   { alert("拟办人员不能为空！");
     document.save.staff.focus();
     return (false);
   }
   if(document.save.fontsize.value=="")
   {// alert("发文字号不能为空！");
     //document.save.fontsize.focus();
     //return (false);
   }
   if(document.save.title.value=="")
   { alert("公文标题不能为空！");
     document.save.title.focus();
     return (false);
   }
   if(document.save.sponsor.value=="")
   { alert("主办单位不能为空！");
     document.save.sponsor.focus();
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
<form name="save" method="post" action="?ac=<?php echo $ac?>&do=add&fileurl=<?php echo $fileurl?>&apptype=<?php echo $apptype?>">
	<input type="hidden" name="filenumber" value="<?php echo $filenumber?>" />
	<input type="hidden" name="view" value="add" />
	<table border="0" width="90%" align="center">
	<tr>
      <td width="83%" align="right"> 发文日期：</td>
      <td width="17%" align="right"><input style="width:172px;" class="inputdate" type="text" value="<?php echo get_date('Y-m-d',PHP_TIME)?>" name="issuedate" onClick="WdatePicker();" /></td>
    </tr>
	</table>
	<table class="TableBlock" border="0" width="90%" align="center">
	<tr>
      <td nowrap class="TableHeader" colspan="2"><b>&nbsp;发文表单处理</b></td>
    </tr>
	
	<tr>
      <td colspan="2" style="padding-left:30px; background:#ffffff;padding-right:30px;padding-top:10px;padding-bottom:10px;"> 
<span class="STYLE1">
<style>
.tdtop{
 	font-size: 20pt;
 	color: #FC3C03;
 	font-family: 宋体;
 	font-weight: bold;
}

.titleFont{
 	font-size: 11pt;
	color: #FC3C03;
	font-family: 楷体_GB2312;
}

.inputDocStyle {
	BORDER-TOP: #8B8B8B 0px solid; 
	BORDER-BOTTOM: #8B8B8B 0px solid; 
	BORDER-LEFT: #8B8B8B 0px solid; 
	BORDER-RIGHT: #8B8B8B 0px solid; 
 	font-size: 14pt;
	width: 100%;
	HEIGHT: 25px; 
	BACKGROUND-COLOR: #F8E5E4;
}

.inputTextDocStyle {
	BORDER-TOP: #8B8B8B 0px solid; 
	BORDER-BOTTOM: #8B8B8B 0px solid; 
	BORDER-LEFT: #8B8B8B 0px solid; 
	BORDER-RIGHT: #8B8B8B 0px solid; 
 	font-size: 14pt;
	width: 100%;
	HEIGHT: 100%; 
	BACKGROUND-COLOR: #F8E5E4;
}

.Selectdocstyle {
	width: 100%;
	HEIGHT: 100%; 
	BORDER-TOP: #7F9DB9 0px solid; 
	BORDER-BOTTOM: #7F9DB9 0px solid; 
	BORDER-LEFT: #7F9DB9 0px solid; 
	BORDER-RIGHT: #7F9DB9 0px solid; 
	BACKGROUND-COLOR: #F8E5E4;
}

.sendTableStyle{
  	border-top:solid 2px #FC3C03; 
  	border-left:solid 2px #FC3C03; 
  	border-right:solid 1px #FC3C03; 
  	border-bottom:solid 2px #FC3C03; 
}

.sendTd{
  	border-bottom:solid 1px #FC3C03; 
  	border-right:solid 1px #FC3C03; 
 	PADDING-TOP: 6px; 
	PADDING-LEFT: 6px; 
 	font-size: 11pt;
	color: #FC3C03;
	font-family: 楷体_GB2312;
}

.sendTdBottom{
  	border-right:solid 1px #FC3C03; 
 	PADDING-TOP: 6px; 
	PADDING-LEFT: 6px; 
 	font-size: 11pt;
	color: #FC3C03;
	font-family: 楷体_GB2312;
}

.ReceiveTableStyle {
  	border-top:solid 2px #000000; 
  	border-left:solid 2px #000000; 
  	border-right:solid 1px #000000; 
  	border-bottom:solid 1px #000000; 
}

.ReceiveTd{
  	border-bottom:solid 1px #000000; 
  	border-right:solid 1px #000000; 
 	font-size: 11pt;
	color: #000000;
	font-family: 楷体_GB2312;
}





.head {
	font-size: 18pt; 
	font-family:楷体_GB2312; 
	color:red; 
	padding:5px
}

.littlehead {
	font-size: 11pt; 
	font-family:楷体_GB2312; 
	color:red;
}

.top {
	font-size: 11pt; 
	font-family:楷体_GB2312; 
	color:red; 
	border-top: 1 solid red;
}

.bottom {
	font-size: 11pt; 
	font-family:楷体_GB2312; 
	color:red; 
}

.lefttop {
	font-size: 11pt; 
	font-family:楷体_GB2312; 
	color:red; 
	border-left: 1 solid red; 
	border-top: 1 solid red;
}

.lefttopnored {
	font-size: 11pt; 
	font-family:楷体_GB2312; 
	border-left: 1 solid red; 
	border-top: 1 solid red;
}

.topbottom {
	font-size: 11pt; 
	font-family:楷体_GB2312;
	border-top: 1 double red;  
	border-bottom: 1 double red; 
	color:red; 
	padding:5px
}

.lefttopbottom {
	font-size: 11pt; 
	font-family:楷体_GB2312; 
	color:red; 
	border-left: 1 solid red; 
	border-top: 1 solid red;
	border-bottom: 1 solid red;
}


</style>
</span>
<TABLE width="735" HEIGHT=60 BORDER=0 ALIGN=center>
	<TR>
		<TD height=60 align="center" class="STYLE1 STYLE8">四川省扶贫和移民工作局发文稿笺
	</TABLE>
	  <table width="750" border="2" align="center" cellspacing="0" bordercolor="#FF0000" STYLE="font-size:14px;" class="STYLE18">
        <tr>
          <td height="49" bordercolor="#FF0000" bgcolor="#FFFFFF">紧急程度</td>
		  <td height="49" bordercolor="#FF0000" bgcolor="#FFFFFF" ><input name="jjcd" type="text" class="inputDocStyle" value="<?php echo $result['jjcd'] ?>" /></td>
          <td height="49" bordercolor="#FF0000" bgcolor="#FFFFFF" >密级</td>
		  <td height="49" bordercolor="#FF0000" bgcolor="#FFFFFF" ><input name="secrecy" type="text" class="inputDocStyle " value="<?php echo $result['secrecy'] ?>" /></td>
		  <td height="49" bordercolor="#FF0000" bgcolor="#FFFFFF" >发文字号</td>
		 <td height="49" bordercolor="#FF0000" bgcolor="#FFFFFF" ><input name="fontsize" type="text" class="inputDocStyle " value="<?php echo $result['fontsize'] ?>" /></td>
        </tr>
        
        <tr>
          <td colspan="6" bordercolor="#FF0000" bgcolor="#FFFFFF" ><table width="793" border="1" cellspacing="0" bordercolor="#FF0000">
            <tr>
              <td width="250" rowspan="2" valign="top" bordercolor="#FF0000">局领导签发： </td>
              <td width="252" rowspan="2" valign="top">局领导审签：</td>
              <td width="241" valign="top">局处室委负责人核稿：
                <p>&nbsp;</p>
                <p>&nbsp;</p>
                <p>&nbsp;</p>                </td>
            </tr>
            <tr>
              <td height="97" valign="top"><p>局办公室核稿：</p>
                <p>&nbsp;</p>
                <p>&nbsp;</p></td>
            </tr>
          </table>            </td>
        </tr>
		<tr>
          <td height="89" colspan="6" bordercolor="#FF0000" bgcolor="#FFFFFF">会签：</td>
        </tr>
        <tr>
          <td width="72" height="61" bordercolor="#FF0000" bgcolor="#FFFFFF" >拟稿单位</td>
          <td width="174" bordercolor="#FF0000" bgcolor="#FFFFFF"><input name="sponsor" type="text" class="inputDocStyle " value="<?php echo $result['sponsor'] ?>" /></td>
          <td width="54" bordercolor="#FF0000" bgcolor="#FFFFFF" >拟稿人</td>
          <td width="125" bordercolor="#FF0000" bgcolor="#FFFFFF" ><?php echo get_realname($_USER->id)?></td>
          <td width="82" bordercolor="#FF0000" bgcolor="#FFFFFF">份数</td>
          <td width="225" bordercolor="#FF0000" bgcolor="#FFFFFF" ><input name="gwnum" type="text" class="inputDocStyle " value="<?php echo $result['gwnum'] ?>"  /></td>
        </tr>
        <tr align="center">
          <td height="57" colspan="6" bordercolor="#FF0000" bgcolor="#FFFFFF"><table width="782" border="0" cellspacing="0">
            <tr>
              <td width="119" height="65">是否党政网发布</td>
              <td width="222"><label>
                  <select name="fb">
                    <option>是</option>
                    <option>否</option>
                  </select>
              </label></td>
              <td width="153">本部门网站公开意见</td>
              <td width="274"><label>
                  <select name="gkyj">
                    <option>主动公开</option>
                    <option>申请公开</option>
                    <option>不予公开</option>
                  </select>
              </label></td>
            </tr>
          </table></td>
        </tr>
        <tr>
          <td colspan="6" bordercolor="#FF0000" bgcolor="#FFFFFF">文件标题：    
              <input class="inputDocStyle" type="text" name="title" value="<?php echo $result['title'] ?>" />
          </td>
        </tr>
        <tr>
          <td height="65" colspan="6" bordercolor="#FF0000" bgcolor="#FFFFFF">主送机关：
              <input class="inputDocStyle" type="text" name="delivers" value="<?php echo $result['delivers'] ?>" />
          </td>
        </tr>
        <tr>
          <td height="57" colspan="6" bordercolor="#FF0000" bgcolor="#FFFFFF">抄送机关：
              <input class="inputDocStyle" type="text" name="sending" value="<?php echo $result['sending'] ?>" />
          </td>
        </tr>
		<!-- 屏蔽主题词
        <tr>
          <td height="57" colspan="6" bordercolor="#FF0000" bgcolor="#FFFFFF">主题词：
              <input class="inputDocStyle" type="text" name="keyword" />
          </td>
        </tr>
		-->
        <tr>
          <td height="40" colspan="6" bordercolor="#FF0000" bgcolor="#FFFFFF"><table width="775" border="0" cellspacing="0">
            <tr>
              <td width="140" height="63">主办处室委校核人</td>
              <td width="173"><input name="proofread" type="text" class="inputDocStyle " value="<?php echo $result['proofread'] ?>" /></td>
              <td width="59">缮印人</td>
              <td width="173">
              <select name="zd_repairs" >
				<option value="">指定缮印人</option>
                <option value="冷雪丽">冷雪丽</option>
                <option value="吴朗">吴朗</option>
              </select>
              
              <!--<input name="repairs" type="text" class="inputDocStyle " />--></td>
              <td width="50">用印人</td>
              <td width="168"><input name="sealing" type="text" class="inputDocStyle " value="<?php echo $result['sealing'] ?>"/></td>
            </tr>
          </table></td>
        </tr>
      </table>	  
	  <p class="STYLE1">&nbsp;</p></td>
	</tr>

<?php if($_CONFIG->config_data('configoffice')=='1'){?>
  
	 <tr>
      <td nowrap class="TableHeader" colspan="2"><b>&nbsp;正文设置</b></td>
    </tr>  
	<tr>
      <td nowrap class="TableContent" width="15%">文档：</td>
      <td class="TableData" id="filenumberoffice">	 </td>
    </tr>
	<tr>
      <td nowrap class="TableContent" width="15%">文档操作：</td>
      <td class="TableData">
	  <input type="hidden" name="fileofficeid" class="BigInput"  onpropertychange="fileoffice_show();" />
	  <a href="javascript:;" onClick="show_notk()">+新建word文档</a></td>
    </tr>
	 <? }?>

	<tr>
      <td nowrap class="TableHeader" colspan="2" id="m2"><b>&nbsp;附件设置</b></td>
    </tr>  
	<tr>
      <td nowrap class="TableContent" width="15%">附件文档：</td>
      <td class="TableData" id="filenumber">	  </td>
    </tr>
	<tr>
      <td nowrap class="TableContent" width="15%">附件操作：</td>
      <td class="TableData">
	  <input type="hidden" name="annexurlid" class="BigInput"  onpropertychange="filenumber_show();" />
	  <a href="#m2" onClick="window.open ('admin.php?ac=uploadadd&fileurl=public&name=annexurlid&filenumber=<?php echo $filenumber?>&officetype=2', 'newwindow', 'height=200, width=400, top=0, left=0, toolbar=no, menubar=no, scrollbars=yes, resizable=no,location=no, status=no')">+上传附件</a></td>
    </tr>
  
  
	 <tr id="uid2">
      <td nowrap class="TableHeader" colspan="2"><b>&nbsp;审批流转设置</b></td>
    </tr>
    <tr>
      <td nowrap class="TableContent"> 拟办人员：<? get_helps()?></td>
      <td class="TableData">
		<input type="hidden" name="appflow" value="<?php echo $flow['fid']?>" />
		<input type="hidden" name="appkey" value="<?php echo $flow['flowkey1']?>" />
		<input type="hidden" name="appkey1" value="<?php echo $flow['flowkey2']?>" />
	  <?php
	  if($type['appkey']=='1'){
	  //固定流程
		  if($flow['flowkey1']=='2'){
		  //单人审批
			  if($flow['flowflag']=='1'){//可选
				  get_pubuser(1,"staff",'',"+选择审批人员",120,20);
			  }else{//不可选
				  get_pubuser(1,"staff",'',"+选择审批人员",120,20,$flow['flowuser']);
			  }
		  }else{
		  //多人审批
			  if($flow['flowflag']=='1'){//可选
				  get_pubuser(2,"staff",$flow['flowuser'],"+选择审批人员",40,4);
			  }else{
			  	  //不可选
				  echo "<textarea name='staff' cols='40' rows='4'";
				  echo " readonly style='background-color:#F5F5F5;color:#006600;'>";
				  echo $flow['flowuser']."</textarea>";
				  echo "<input type='hidden' name='staffid' value='".get_realid($flow['flowuser'])."' />";
			  }
		  }
	  }else{
		  //自由流程
		  get_pubuser(2,"staff",$flow['flowuser'],"+选择审批人员",40,4);
		  echo '<br>节点动作设定：';
		  $nodeid=explode(',',$nodeid);
		  $nodename=explode(',',$nodename);
		  for($i=0;$i<sizeof($nodeid);$i++){
			 echo '<input name="node" type="radio" value="'.$nodeid[$i].'" ';
			 if(trim($i)==0){
			    echo ' checked="checked"';
			 }
			 echo ' style="border:0;" />'.$nodename[$i];
		  }
	  }
	  ?>
	  
	  <br>
	 <?php get_smsbox("审批人员","work")?>
	  <!--<input  type="hidden" name="staffname" value="">
			<input  type="hidden" name="staffid" value="">
			<input  type="hidden" name="phone" value="">
			<a href="#uid2" onClick="window.open ('admin.php?ac=attamember&fileurl=approval&type=0', 'newwindow', 'height=500, width=550, top=0, left=0, toolbar=no, menubar=no, scrollbars=yes, resizable=no,location=no, status=no')">+选择拟办人员</a><input type="text" name="staff" value="" style="border:0px; background-color:#FFFFFF; width:40px;">&nbsp;&nbsp;&nbsp;&nbsp;<?php get_smsbox("审批人员","keyuser")?> --></td>
    </tr>
 
<tr align="center" class="TableControl">
      <td colspan="2" nowrap height="35">
<input type="button" name="Submit" value="存草稿" class="BigButtonBHover" onclick=" document.save.save_type.value='2';document.save.submit();">      
<input type="button" name="Submit" value="发布信息" class="BigButtonBHover" onclick="sendForm();">
<input type="hidden" value="1" name="save_type">
<input type="button" name="Submit" value="继续新建" class="BigButtonBHover" onclick=" document.save.save_type.value='3';sendForm();">      
	   </td>
    </tr>
  </table>
</form>
 
</body>
</html>
