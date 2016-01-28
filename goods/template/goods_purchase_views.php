<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd"><html>
<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type"/>
<link rel="stylesheet" type="text/css" href="template/default/content/css/style.css">
<script language="javascript" type="text/javascript" src="DatePicker/WdatePicker.js"></script>
<script src="template/default/tree/js/admincp.js?SES" type="text/javascript"></script>
<script charset="utf-8" src="eweb/kindeditor.js"></script>

<title>OA办公系统</title>
 
</head>
<body>
<table width="90%" border="0" align="center" cellpadding="3" cellspacing="0" class="small">
  <tr>
    <td class="Big"><img src="template/default/content/images/notify_new.gif" align="absmiddle"><span class="big3"> 查看办公用品采购</span>&nbsp;&nbsp;&nbsp;&nbsp;
	<span style="font-size:12px;">
	
	<a href="admin.php?ac=goods_purchase&fileurl=<?php echo $fileurl?>" style="font-size:12px;">返回列表页</a><img src="template/default/content/images/f_ico.png" align="absmiddle"></span>
    </td>
  </tr>
</table>
<form name="save" method="post" action="#">
<table class="TableBlock" border="0" width="90%" align="center" style="border-bottom:#4686c6 solid 0px;">
    <tr>
      <td nowrap class="TableContent">单号:</td>
      <td class="TableData"><?php echo $blog['number']?></td>
    </tr>
    <tr>
      <td nowrap class="TableContent" width="15%"> 申请人：</td>
      <td class="TableData"><?php echo $blog['application']?></td>
    </tr>
    <tr>
      <td nowrap class="TableContent"> 申请日期：</td>
      <td class="TableData"><?php echo $blog['startdate']?></td>
    </tr>
	<tr>
      <td nowrap class="TableContent"> 采购人：</td>
      <td class="TableData"><?php echo $blog['purchase']?></td>
    </tr>
	<tr>
      <td nowrap class="TableContent"> 金额合计：</td>
      <td class="TableData"><?php echo $blog['pricenum']?>RMB</td>
    </tr>
	<tr>
      <td nowrap class="TableContent"> 审批人：</td>
      <td class="TableData"><?php echo $blog['examination']?></td>
    </tr>
	<tr>
      <td nowrap class="TableContent"> 审批时间：</td>
      <td class="TableData"><?php echo $blog['keydate']?></td>
    </tr>
	<tr>
      <td nowrap class="TableContent"> 备注：</td>
      <td class="TableData">
        <?php echo $blog['content']?></td>
    </tr>
	
	<tr>
      <td nowrap class="TableHeader" colspan="2"><b>&nbsp;物品设置</b></td>
    </tr>
	<tr>
      <td nowrap class="TableContent"> 采购物品：</td>
      <td class="TableData"><div style="float:left; width:100%; background-color:#FFFFFF; border:1px solid #999999; height:260px;overflow:hidden;overflow-y:scroll;">
	  
	  <table width="95%" border="0" cellspacing="0" cellpadding="0">
        <tr>
          <td width="6%" height="30" align="center" bgcolor="#CCCCCC">ID</td>
          <td width="39%" height="30" align="center" bgcolor="#CCCCCC">名称</td>
          <td width="21%" height="30" align="center" bgcolor="#CCCCCC">规格</td>
          <td width="11%" height="30" align="center" bgcolor="#CCCCCC">单位</td>
		  <td width="10%" height="30" align="center" bgcolor="#CCCCCC">数量</td>
          <td width="13%" height="30" align="center" bgcolor="#CCCCCC">单价</td>
        </tr>
		<?foreach ($result as $row) {?>
        <tr>
          <td height="20" align="center">
		  <?php echo $row['id']?>
		  </td>
          <td height="20"><?php echo $row['title']?></td>
          <td height="20"><?php echo $row['specification']?></td>
          <td height="20"><?php echo $row['unit']?></td>
		  <td height="20"><?php echo $row['goodsnumber']?></td>
          <td height="20"><?php echo $row['price']?>RMB</td>
        </tr>
		<?}?>
        <tr>
          <td height="30" colspan="6"><?php echo showpage($num,$pagesize,$page,$url)?></td>
          </tr>
      </table>
	  </div></td>
    </tr>
	

  </table>
</form>
</body>
</html>
