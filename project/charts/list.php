<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd"><html>
<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type"/>
<link rel="stylesheet" type="text/css" href="template/default/content/css/style.css">
<script language="javascript" type="text/javascript" src="template/default/js/jquery.min.js"></script>
<script language="javascript" type="text/javascript" src="DatePicker/WdatePicker.js"></script>
<script type="text/javascript">
<!--
function searchtpl(typeid){
   var obj = document.getElementById("typeid");
   jQuery.ajax({
      type: 'GET',
      url: 'admin.php?ac=list&fileurl=<?php echo $fileurl?>&do=ajax&typeid='+obj.value+'&date='+new Date(),
      success: function(data){
		  if(data!=''){
			  $("#tplid").html(data);
			  //alert(data);
		  }else{
			  $("#tplid").html('');
		  }
      }
   });
}

function MM_jumpMenu(targ,selObj,restore){ //v3.0
  eval(targ+".location='"+selObj.options[selObj.selectedIndex].value+"'");
  if (restore) selObj.selectedIndex=0;
}
//-->
</script>
<title>Office 515158 2011 OA办公系统</title>
</head>
<body class="bodycolor">
<div id="navPanel">
<div id="search" style="float: right; margin-right:20px;">
    <select name="select" onchange="MM_jumpMenu('self',this,0)">
      <option value="admin.php?ac=<?php echo $ac?>&do=list&fileurl=<?php echo $fileurl?>&type=1" <?php if($type==1){?> selected="selected" <?php }?>>月份统计</option>
	  <option value="admin.php?ac=<?php echo $ac?>&do=list&fileurl=<?php echo $fileurl?>&type=2" <?php if($type==2){?> selected="selected" <?php }?>>日期统计</option>
	  <option value="admin.php?ac=<?php echo $ac?>&do=list&fileurl=<?php echo $fileurl?>&type=3" <?php if($type==3){?> selected="selected" <?php }?>>成员统计</option>
	  <option value="admin.php?ac=<?php echo $ac?>&do=list&fileurl=<?php echo $fileurl?>&type=4" <?php if($type==4){?> selected="selected" <?php }?>>审批状态统计</option>
    </select>
	<a href="admin.php?ac=<?php echo $ac?>&fileurl=<?php echo $fileurl?>&flashtype=Column3D&type=<?php echo $type?>" style="font-size:12px;">柱形图展示</a>&nbsp;|&nbsp;
	<a href="admin.php?ac=<?php echo $ac?>&fileurl=<?php echo $fileurl?>&flashtype=Line&type=<?php echo $type?>" style="font-size:12px;">折线图展示</a>&nbsp;|&nbsp;
	<a href="admin.php?ac=<?php echo $ac?>&fileurl=<?php echo $fileurl?>&flashtype=Pie3D&type=<?php echo $type?>" style="font-size:12px;">饼图展示</a>&nbsp;|&nbsp;
	<a href="admin.php?ac=<?php echo $ac?>&fileurl=<?php echo $fileurl?>&flashtype=Area2D&type=<?php echo $type?>" style="font-size:12px;">面积图展示</a>


</div>
</div>
<div style="position:absolute; height:90%; width:100%;overflow:auto"> 
<table width="98%" border="0" align="center" cellpadding="3" cellspacing="0" class="small" style="margin-top:6px;">
  <tr>
    <td class="Big" style="font-size:12px;"><img src="template/default/content/images/notify_new.gif" align="absmiddle"><span class="big3">项目<?php echo $title?>统计</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style="font-size:12px; float:right; margin-right:50px;">
	</span>
    </td>
  </tr>
</table>

<table width="98%" border="0" align="center" cellpadding="3" cellspacing="0" class="small">
  <tr>
    <td align="center" class="Big" style="font-size:12px;">
	<?php echo renderChartHTML("template/fusioncharts/".$flashtype.".swf", "", $strtype, "",$fw, $fh, false)?>    </td>
  </tr>
</table>
</div>
</body>
</html>
