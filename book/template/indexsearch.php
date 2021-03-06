<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>信息操作页面</title>
<link type="text/css" media="screen" charset="utf-8" rel="stylesheet" href="template/default/content/css/style.account-1.1.css" />
<link charset="utf-8" rel="stylesheet" href="template/default/content/css/personal.record-1.0.css" media="all" />
<style type="text/css"> 
.tip-faq{
	clear:both;
	margin-top:0px;
}
#J-table-consume{
	margin-bottom:40px;
}
.ui-form-tips .m-cue{
	 background-position: -27px -506px;
	 *background-position: -27px -505px;
}
#J-set-date a{
	font-family:宋体;
}
</style>
<script type="text/javascript" charset="utf-8" src="template/default/content/js/arale.js"></script>
<script charset="utf-8" src="template/default/content/js/recordIndex.js?t=20110523"></script>
<script language="javascript" type="text/javascript" src="template/default/js/jquery.min.js"></script>
<script language="javascript" type="text/javascript" src="template/default/content/js/common.js"></script>
<script language="javascript" type="text/javascript" src="DatePicker/WdatePicker.js"></script>
<script type="text/javascript"> 
E.onDOMReady(function() {

	record = new AP.widget.Record({
		dom: {
			queryForm : "queryForm",
			searchForm : "topSearchForm",
			keyword : "J-keyword",
			keywordType : "J-keyword-type"
		}
	});

	//切换高级筛选状态
	E.on('J-filter-link', 'click', record.switchFilter);
});

</script>
</head>
<!--[if lt IE 7]><body class="ie6"><![endif]--><!--[if IE 7]><body class="ie7"><![endif]--><!--[if IE 8]><body class="ie8"><![endif]--><!--[if !IE]><!--><body><!--<![endif]-->
<div id="container" class="ui-container">
 
<div id="content" class="ui-content fn-clear" coor="default" coor-rate="0.02">
	<div class="ui-grid-21" coor="content">
		<div class="ui-grid-21 ui-grid-right record-tit" coor="title">
			<h2 class="ui-tit-page">图书信息列表</h2>
			
			<div class="record-tit-amount">
				<p>总共有<span class="number"><?php echo public_number('book')?></span>条数据
              </p>
			</div>
		</div>
		
		<!-- 过滤表单 -->
		<form method="get" action="admin.php" name="topSearchForm" class="ui-grid-21 ui-grid-right ui-form">
		<input type="hidden" name="ischeck" value="<?php echo $ischeck?>" />
		<input type="hidden" name="ac" value="<?php echo $ac?>" />
		<input type="hidden" name="do" value="list" />
		<input type="hidden" name="fileurl" value="<?php echo $fileurl?>" />
		<input type="hidden" name="vuidtype" value="<?php echo $vuidtype?>" />
		<div class="ui-grid-21 ui-grid-right record-search">
		
			<div id="J-advanced-filter-option" class="">
				<div class="record-search-time fn-clear">
					<div class="ui-form-item ui-form-item-time">
					<label class="ui-form-label" for="J-start">编号：</label>
						<div class="ui-form-content">
							<input type="text" value="<?php echo urldecode($number)?>" name="number" style="width:80px;" class="ui-input search-keyword" id="J-keyword">
						</div>
						<label class="ui-form-label" for="J-start">名称：</label>
						<div class="ui-form-content">
							<input type="text" value="<?php echo urldecode($title)?>" name="title" style="width:80px;" class="ui-input search-keyword" id="J-keyword">
						</div>
						
					<!--	<label class="ui-form-label" for="J-start">保存期限：</label>
						<div class="ui-form-content">
		<select name="enddate" class="BigStatic" id="enddate">
									  <option value="0" selected="selected">请选择</option>
									  <option value="5">五年</option>
									  <option value="99">永久</option>
									  <option  value="1">一年</option>
									  <option value="3">三年</option>
									  </select>
					  </div> -->
						<label class="ui-form-label" for="J-start">创建时间：</label>
						<div class="ui-form-content">
		<input type="text" value="<?php echo $vstartdate?>"  class="ui-input i-date" readonly="readonly"  onClick="WdatePicker();" name='vstartdate' > - <input type="text" value="<?php echo $venddate?>"  class="ui-input i-date" readonly="readonly"  onClick="WdatePicker();" name='venddate' >
					  </div>
						<label class="ui-form-label" for="J-start">所属类目：</label>
						<div class="ui-form-content">
		<select class="BigStatic" name="filetype">
		<option value="" selected="selected">请选择</option>
		<?php get_book_type(0,$filetype)?>
		</select>
					  </div>
						<div class="submit-time-container ">
							<div class="submit-time ui-button ui-button-sorange">
								<input type="submit" class="ui-button-text"id="J-submit-time" value="查 找"/>
							</div>
						</div>
						
					</div>
			  </div>
			</div>
		</div><!-- .record-search -->
		</form>
 

		<div class="ui-grid-21 ui-grid-right fn-clear" coor="total">
		                                <table width="100%" border="0" align="center" cellpadding="0" cellspacing="0">
                                          <tr>
                                            <td width="91%">
											<?php echo showpage($num,$pagesize,$page,$url)?></td>
                                            <td width="9%" align="right" style="padding-right:10px;"><input type="button" value="新建图书" class="BigButtonBHover" onClick="javascript:window.location='admin.php?ac=add&fileurl=book'"></td>
                                          </tr>
                                        </table>
		  
										

	  </div>
	</div>
	<form name="excel" method="post" action="admin.php?ac=<?php echo $ac?>&fileurl=<?php echo $fileurl?>">
	<input type="hidden" name="vuidtype" value="<?php echo $vuidtype?>" />
	<input type="hidden" name="ischeck" value="<?php echo $ischeck?>" />
	<input type="hidden" name="title" value="<?php echo $title?>" />
	<input type="hidden" name="number" value="<?php echo $number?>" />
	<input type="hidden" name="enddate" value="<?php echo $enddate?>" />
	<input type="hidden" name="filetype" value="<?php echo $filetype?>" />
	<input type="hidden" name="vstartdate" value="<?php echo $vstartdate?>" />
	<input type="hidden" name="venddate" value="<?php echo $venddate?>" />
		<input type="hidden" name="do" value="excel" />
		</form>
	<form name="update" method="post" action="admin.php?ac=<?php echo $ac?>&fileurl=<?php echo $fileurl?>">
		<input type="hidden" name="do" value="update" />
		<div class="ui-grid-21 ui-grid-right fn-clear" id="J-table-consume" coor="consumelist">
			<div class="ui-tab">
												<div class="ui-tab-trigger"> 
					<ul class="fn-clear"> 
<li class="ui-tab-trigger-item ui-tab-trigger-item-current">
<a href="admin.php?ac=indexsearch&fileurl=book" class="ui-tab-trigger-text">图书借阅</a></li>
<li class="ui-tab-trigger-item">
<a href="admin.php?ac=file_read&fileurl=book&type=1" class="ui-tab-trigger-text">等待借阅</a></li>	
<li class="ui-tab-trigger-item">
<a href="admin.php?ac=file_read&fileurl=book&type=3" class="ui-tab-trigger-text">已借图书</a></li>
<li class="ui-tab-trigger-item">
<a href="admin.php?ac=file_read&fileurl=book&type=4" class="ui-tab-trigger-text">已归还图书</a></li>					
</ul>
				</div>
 
				<div class="ui-tab-container" id="myScene">
					<div class="ui-tab-container-item ui-tab-container-item-current">
					
						<table id="tradeRecordsIndex" class="ui-table">

							<thead>
								<tr>
									<th class="checkbox">
									<input type="checkbox" class="checkbox" value="1" name="chkall" onClick="check_all(this)" /></th>
									<th width="100">图书编号</th>
									<th class="title">图书名称</th>
									<th width="100">所属类目</th>
									<th width="120">图书数量</th>
									<th width="80" align="center">发布人</th>
									<th class="info">发布时间</th>
									<th width="180" align="center">操作</th>
								</tr>
							</thead>
							
							
							
							
							<tbody>
<?foreach ($result as $row) {?>
																																								
<tr <?php if($result%2==0){?>class="split" <?php }?>>
<td class="checkbox">
<?php
get_boxlistkey("id[]",$row['id'],$row['uid'],$_USER->id)
?></td>
<td width="100"><?php echo $row['bookumber']?></td>
<td class="title">
<a href="admin.php?ac=views&do=edit&fileurl=book&id=<?php echo $row['id']?>"><?php echo $row['bookname']?></a>
</td>
<td width="100"><?php echo get_book_type_name($row['booktype'])?></td>
<td width="120"><?php echo $row['booknum']?>本</td>
<td width="80" align="center"><?php echo get_realname($row['uid'])?></td>
<td class="info"><?php echo $row['date']?></td>
<td width="180" align="center">
<?php
//读取己借出多少本书
	
$key1 = $db->result("SELECT COUNT(*) AS numbers FROM ".DB_TABLEPRE."book_read WHERE type='1'  and bookid='".$row['id']."'");
$key2 = $db->result("SELECT COUNT(*) AS numberss FROM ".DB_TABLEPRE."book_read WHERE type='3'  and bookid='".$row['id']."'");
$num_read=$key1[numbers]+$key2[numberss];
//输出书的参数
echo "待审(<font color=red>".$key1[numbers]."</font>) | 借阅中(<font color=red>".$key2[numberss]."</font>) ";
if ($num_read<$row['booknum']){
echo '| <a href="admin.php?ac=indexsearch&do=save&fileurl=book&id='.$row['id'].'">借阅</a>';
}

?></td>						
</tr>
<?}?>			
																									
</tbody>
		</table>
 
											</div>
					
					<div class="fn-clear">
						<!-- 图释 -->
					  <div class="iconTip fn-left" style="padding-left:15px;">
					
</div>
						
												<div class="page page-nobg fn-right">
							<span class="page-link"><?php echo showpage($num,$pagesize,$page,$url)?></span>
						</div>
						<!-- /分页 -->
											</div>
				</div>
			</div>
 
		
		</div>
		
 </form>		
	</div>
 
 
	
</div>


</div>

                            

</body>
</html>
 

