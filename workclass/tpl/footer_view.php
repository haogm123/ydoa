


<!--公共文件 -->

<table class="TableBlock" border="0" width="99%" align="center"   style="margin-top:20px;">
<tr>
      <td nowrap class="TableHeader" colspan="2" id="m2"  align="left"><b>&nbsp;附件下载</b></td>
    </tr> 
<?php
global $db;
$query = $db->query("SELECT * FROM ".DB_TABLEPRE."fileoffice WHERE officeid='".$row['id']."' and officetype='3' and filetype='2' ORDER BY id asc");
	while ($file = $db->fetch_array($query)) { 
?>
	<tr>
      <td nowrap class="TableContent" width="15%"><?php echo get_realname($file['uid'])?><br><?php echo $file['date']?></td>
      <td class="TableData"  align="left">
	  <?php echo $file['filename']?>&nbsp;&nbsp;&nbsp;&nbsp;<a href="down.php?urls=<?php echo $file['fileaddr']?>">+下载</a>
	  </td>
    </tr>
<?php }?>
</table>

<?php if($_CONFIG->config_data('configoffice')=='1'){?>
<table class="TableBlock" border="0" width="99%" align="center">
<tr>
      <td nowrap class="TableHeader" colspan="2" id="m2"  align="left"><b>&nbsp;正文</b></td>
    </tr> 
<?php
global $db;
$query = $db->query("SELECT * FROM ".DB_TABLEPRE."fileoffice WHERE officeid='".$row['id']."' and officetype='3' and filetype='1' ORDER BY id asc");
	while ($file = $db->fetch_array($query)) { 
?>
	<tr>
      <td nowrap class="TableContent" width="15%"><?php echo get_realname($file['uid'])?><br><?php echo $file['date']?></td>
      <td class="TableData"  align="left">
	  <?php echo $file['filename']?>&nbsp;&nbsp;&nbsp;&nbsp;<a href="down.php?urls=ntko/uploadOfficeFile/<?php echo trim($file['fileid'])?>officefile<?php echo trim($file['filename'])?>">+下载</a>
	  </td>
    </tr>
<?php }?>
</table>
<? }?>
<table width="99%" border="0" align="center" cellpadding="3" cellspacing="0" class="small" style="margin-top:10px;">
  <tr>
    <td class="Big" style="font-size:12px;"  align="left"><img src="template/default/content/images/notify_new.gif" align="absmiddle"><span class="big3">流程办理进度</span>
    </td>
  </tr>
</table>
<table class="TableBlock" border="0" width="99%" align="center" >
<?php
$sql = "SELECT * FROM ".DB_TABLEPRE."workclass_personnel where workid='".$row['id']."'  order by perid asc";
$result = $db->fetch_all($sql);
$i=0;
foreach ($result as $rows) {
$sql = "SELECT * FROM ".DB_TABLEPRE."workclass_flow  WHERE fid = '".$rows['flowid']."'";
$flow = $db->fetch_one_array($sql);
$i++;
?>
	<tr>
      <td nowrap class="TableHeader" width="130" align="left">
	  第<b style="font-size:16px;"><?php echo $i?></b>步:<?php echo $flow['flowname']?></td>
      <td class="TableContent" style="font-size:12px;" align="left"><b>审批人员：</b><?php echo $rows['name']?>
	  <?php
	  if($rows['pertype']==0){
		  echo '<font color=red>[等待审批中]</font>';
	  }
	  ?>
	  </td>
    </tr>
	<?php if($flow['flownum']==1){?>
	<tr>
      <td nowrap class="TableContent" align="right" width="130">
	  <span style="font-size:16px;"><?php echo $rows['name']?></span></td>
      <td class="TableData" align="left" style="font-size:12px;">
	  <b>日期：</b><?php echo $rows['approvaldate']?><br>
	  <b>状态：</b><?php echo work_pertype($rows['pertype'])?><br>
	  <b>批示：</b><?php echo $rows['lnstructions']?><br></td>
    </tr>
	<?php }else{?>
		<?php
		if($rows['pertype']!=0){
			if($rows['appkey']==2){?>
		<tr>
		  <td nowrap class="TableContent" align="right" width="130">
		  <span style="font-size:16px;"><?php echo $rows['name']?></span></td>
		  <td class="TableData" align="left" style="font-size:12px;">
		  <b>日期：</b><?php echo $rows['approvaldate']?><br>
		  <b>状态：</b><?php echo work_pertype($rows['pertype'])?><br>
		  <b>批示：</b><?php echo $rows['lnstructions']?><br></td>
		</tr>
		<?php }else{
			$query = $db->query("SELECT * FROM ".DB_TABLEPRE."workclass_personnel_log where perid='".$rows['perid']."' ORDER BY lid Asc");
			while ($log = $db->fetch_array($query)) {
		?>
		<tr>
		  <td nowrap class="TableContent" align="right" width="130">
		  <span style="font-size:16px;"><?php echo $log['name']?></span></td>
		  <td class="TableData" align="left" style="font-size:12px;">
		  <b>日期：</b><?php echo $log['approvaldate']?><br>
		  <b>状态：</b><?php echo work_pertype_log($log['pertype'])?><br>
		  <b>批示：</b><?php echo $log['lnstructions']?><br></td>
		</tr>
		<?php 
				}
			}
		}
	}?>
	
<?php }?>	
  </table>

</div>
</body>
</html>
