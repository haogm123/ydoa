<?php
include_once('head.php');
?>
<style>
<!--table
	{mso-displayed-decimal-separator:"\.";
	mso-displayed-thousand-separator:"\,";}
@page
	{margin:1.0in .75in 1.0in .75in;
	mso-header-margin:.5in;
	mso-footer-margin:.5in;}
tr
	{mso-height-source:auto;
	mso-ruby-visibility:none;}
col
	{mso-width-source:auto;
	mso-ruby-visibility:none;}
br
	{mso-data-placement:same-cell;}
.style0
	{mso-number-format:General;
	text-align:general;
	vertical-align:bottom;
	white-space:nowrap;
	mso-rotate:0;
	mso-background-source:auto;
	mso-pattern:auto;
	color:windowtext;
	font-size:12.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:宋体;
	mso-generic-font-family:auto;
	mso-font-charset:134;
	border:none;
	mso-protection:locked visible;
	mso-style-name:常规;
	mso-style-id:0;}
td
	{mso-style-parent:style0;
	padding-top:1px;
	padding-right:1px;
	padding-left:1px;
	mso-ignore:padding;
	color:windowtext;
	font-size:12.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:宋体;
	mso-generic-font-family:auto;
	mso-font-charset:134;
	mso-number-format:General;
	text-align:general;
	vertical-align:bottom;
	border:none;
	mso-background-source:auto;
	mso-pattern:auto;
	mso-protection:locked visible;
	white-space:nowrap;
	mso-rotate:0;}
.xl24
	{mso-style-parent:style0;
	text-align:center;
	vertical-align:middle;
	white-space:normal;}
.xl25
	{mso-style-parent:style0;
	text-align:center;
	vertical-align:middle;
	border:.5pt solid windowtext;
	white-space:normal;}
.xl26
	{mso-style-parent:style0;
	text-align:center;
	vertical-align:middle;
	border:.5pt solid windowtext;
	background:silver;
	mso-pattern:auto none;
	white-space:normal;}
.xl27
	{mso-style-parent:style0;
	text-align:left;
	vertical-align:middle;
	border:.5pt solid windowtext;
	white-space:normal;}
.xl28
	{mso-style-parent:style0;
	font-size:24.0pt;
	text-align:center;
	vertical-align:middle;}
.xl29
	{mso-style-parent:style0;
	text-align:left;
	vertical-align:middle;
	white-space:normal;}
.xl30
	{mso-style-parent:style0;
	text-align:right;
	vertical-align:middle;
	border-top:.5pt solid windowtext;
	border-right:none;
	border-bottom:.5pt solid windowtext;
	border-left:.5pt solid windowtext;
	white-space:normal;}
.xl31
	{mso-style-parent:style0;
	text-align:right;
	vertical-align:middle;
	border-top:.5pt solid windowtext;
	border-right:none;
	border-bottom:.5pt solid windowtext;
	border-left:none;
	white-space:normal;}
.xl32
	{mso-style-parent:style0;
	text-align:right;
	vertical-align:middle;
	border-top:.5pt solid windowtext;
	border-right:.5pt solid windowtext;
	border-bottom:.5pt solid windowtext;
	border-left:none;
	white-space:normal;}
ruby
	{ruby-align:left;}
rt
	{color:windowtext;
	font-size:9.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:宋体;
	mso-generic-font-family:auto;
	mso-font-charset:134;
	mso-char-type:none;
	display:none;}
-->
</style>
<!--[if gte mso 9]><xml>
 <x:ExcelWorkbook>
  <x:ExcelWorksheets>
   <x:ExcelWorksheet>
    <x:Name>Sheet1</x:Name>
    <x:WorksheetOptions>
     <x:DefaultRowHeight>285</x:DefaultRowHeight>
     <x:Print>
      <x:ValidPrinterInfo/>
      <x:PaperSizeIndex>9</x:PaperSizeIndex>
      <x:HorizontalResolution>180</x:HorizontalResolution>
      <x:VerticalResolution>180</x:VerticalResolution>
     </x:Print>
     <x:CodeName>Sheet1</x:CodeName>
     <x:Selected/>
     <x:Panes>
      <x:Pane>
       <x:Number>3</x:Number>
       <x:ActiveRow>9</x:ActiveRow>
       <x:RangeSelection>$A$10:$F$11</x:RangeSelection>
      </x:Pane>
     </x:Panes>
     <x:ProtectContents>False</x:ProtectContents>
     <x:ProtectObjects>False</x:ProtectObjects>
     <x:ProtectScenarios>False</x:ProtectScenarios>
    </x:WorksheetOptions>
   </x:ExcelWorksheet>
   <x:ExcelWorksheet>
    <x:Name>Sheet2</x:Name>
    <x:WorksheetOptions>
     <x:DefaultRowHeight>285</x:DefaultRowHeight>
     <x:CodeName>Sheet2</x:CodeName>
     <x:ProtectContents>False</x:ProtectContents>
     <x:ProtectObjects>False</x:ProtectObjects>
     <x:ProtectScenarios>False</x:ProtectScenarios>
    </x:WorksheetOptions>
   </x:ExcelWorksheet>
   <x:ExcelWorksheet>
    <x:Name>Sheet3</x:Name>
    <x:WorksheetOptions>
     <x:DefaultRowHeight>285</x:DefaultRowHeight>
     <x:CodeName>Sheet3</x:CodeName>
     <x:ProtectContents>False</x:ProtectContents>
     <x:ProtectObjects>False</x:ProtectObjects>
     <x:ProtectScenarios>False</x:ProtectScenarios>
    </x:WorksheetOptions>
   </x:ExcelWorksheet>
  </x:ExcelWorksheets>
  <x:WindowHeight>4530</x:WindowHeight>
  <x:WindowWidth>8505</x:WindowWidth>
  <x:WindowTopX>480</x:WindowTopX>
  <x:WindowTopY>120</x:WindowTopY>
  <x:AcceptLabelsInFormulas/>
  <x:ProtectStructure>False</x:ProtectStructure>
  <x:ProtectWindows>False</x:ProtectWindows>
 </x:ExcelWorkbook>
</xml><![endif]-->
</head>

<body link=blue vlink=purple>

<table x:str border=0 cellpadding=0 cellspacing=0 width=1749 style='border-collapse:
 collapse;table-layout:fixed;width:1315pt'>
 <col width=49 style='mso-width-source:userset;mso-width-alt:1568;width:37pt'>
 <col width=146 style='mso-width-source:userset;mso-width-alt:4672;width:110pt'>
 <col width=177 style='mso-width-source:userset;mso-width-alt:5664;width:133pt'>
 <col width=141 style='mso-width-source:userset;mso-width-alt:4512;width:106pt'>
 <col width=132 span=2 style='mso-width-source:userset;mso-width-alt:4224;
 width:99pt'>
 <col width=109 style='mso-width-source:userset;mso-width-alt:3488;width:82pt'>
 <col width=110 style='mso-width-source:userset;mso-width-alt:3520;width:83pt'>
 <col width=103 style='mso-width-source:userset;mso-width-alt:3296;width:77pt'>
 <col width=106 style='mso-width-source:userset;mso-width-alt:3392;width:80pt'>
 <col width=108 style='mso-width-source:userset;mso-width-alt:3456;width:81pt'>
 <col width=86 style='mso-width-source:userset;mso-width-alt:2752;width:65pt'>
 <col width=98 style='mso-width-source:userset;mso-width-alt:3136;width:74pt'>
 <col width=109 style='mso-width-source:userset;mso-width-alt:3488;width:82pt'>
 <col width=143 style='mso-width-source:userset;mso-width-alt:4576;width:107pt'>
 <tr height=80 style='mso-height-source:userset;height:60.0pt'>
  <td colspan=15 height=80 class=xl28 width=1749 style='height:60.0pt;
  width:1315pt'><?php echo W_I_DB($typeid,$tplid,'_19_49_1',80,25)?>年<span style='mso-spacerun:yes'><?php echo W_I_DB($typeid,$tplid,'_19_49_2',80,25)?></span>月份公务车加油记录报表</td>
 </tr>
 <tr height=33 style='mso-height-source:userset;height:24.95pt'>
  <td colspan=4 height=33 class=xl29 width=513 style='height:24.95pt;
  width:386pt'>区间：<?php echo W_I_DB($typeid,$tplid,'_19_49_3',200,25)?></td>
  <td colspan=4 class=xl29 width=483 style='width:363pt'>填报人：<?php echo W_I_DB($typeid,$tplid,'_19_49_4',200,25)?></td>
  <td colspan=7 class=xl24 style='mso-ignore:colspan'></td>
 </tr>
 <tr height=26 style='mso-height-source:userset;height:20.1pt'>
  <td rowspan=2 height=52 class=xl26 width=49 style='height:40.2pt;width:37pt'>序号</td>
  <td rowspan=2 class=xl26 width=146 style='width:110pt'>部门</td>
  <td rowspan=2 class=xl26 width=177 style='width:133pt'>所属公司</td>
  <td rowspan=2 class=xl26 width=141 style='width:106pt'>车名</td>
  <td rowspan=2 class=xl26 width=132 style='width:99pt'>车牌号</td>
  <td rowspan=2 class=xl26 width=132 style='width:99pt'>油卡号</td>
  <td class=xl26 width=109 style='border-left:none;width:82pt'>上月余额</td>
  <td class=xl26 width=110 style='border-left:none;width:83pt'>本月分油金额</td>
  <td class=xl26 width=103 style='border-left:none;width:77pt'>本月总额</td>
  <td class=xl26 width=106 style='border-left:none;width:80pt'>加油金额</td>
  <td class=xl26 width=108 style='border-left:none;width:81pt'>加油量</td>
  <td class=xl26 width=86 style='border-left:none;width:65pt'>里程数</td>
  <td class=xl26 width=98 style='border-left:none;width:74pt'>百公里耗油</td>
  <td class=xl26 width=109 style='border-left:none;width:82pt'>本月余额</td>
  <td rowspan=2 class=xl26 width=143 style='width:107pt'>备注</td>
 </tr>
 <tr height=26 style='mso-height-source:userset;height:20.1pt'>
  <td height=26 class=xl26 width=109 style='height:20.1pt;border-top:none;
  border-left:none;width:82pt'>（元）</td>
  <td class=xl26 width=110 style='border-top:none;border-left:none;width:83pt'>（元）</td>
  <td class=xl26 width=103 style='border-top:none;border-left:none;width:77pt'>（元）</td>
  <td class=xl26 width=106 style='border-top:none;border-left:none;width:80pt'>（元）</td>
  <td class=xl26 width=108 style='border-top:none;border-left:none;width:81pt'>（升）</td>
  <td class=xl26 width=86 style='border-top:none;border-left:none;width:65pt'>（公里）</td>
  <td class=xl26 width=98 style='border-top:none;border-left:none;width:74pt'>（升）</td>
  <td class=xl26 width=109 style='border-top:none;border-left:none;width:82pt'>（元）</td>
 </tr>
 
 
 <tr height=33 style='mso-height-source:userset;height:24.95pt'>
  <td colspan=5 height=33 class=xl30 width=645 style='border-right:.5pt solid black;
  height:24.95pt;width:485pt'>主卡：</td>
  <td class=xl25 width=132 style='border-top:none;border-left:none;width:99pt'><?php echo W_I_DB($typeid,$tplid,'_19_49_a15',120,25)?></td>
  <td class=xl25 width=109 style='border-top:none;border-left:none;width:82pt'><?php echo W_I_DB($typeid,$tplid,'_19_49_a15',100,25)?></td>
  <td class=xl25 width=110 style='border-top:none;border-left:none;width:83pt'><?php echo W_I_DB($typeid,$tplid,'_19_49_a15',100,25)?></td>
  <td class=xl25 width=103 style='border-top:none;border-left:none;width:77pt'><?php echo W_I_DB($typeid,$tplid,'_19_49_a15',90,25)?></td>
  <td class=xl25 width=106 style='border-top:none;border-left:none;width:80pt'><?php echo W_I_DB($typeid,$tplid,'_19_49_a15',100,25)?></td>
  <td class=xl25 width=108 style='border-top:none;border-left:none;width:81pt'><?php echo W_I_DB($typeid,$tplid,'_19_49_a15',100,25)?></td>
  <td class=xl25 width=86 style='border-top:none;border-left:none;width:65pt'><?php echo W_I_DB($typeid,$tplid,'_19_49_a15',80,25)?></td>
  <td class=xl25 width=98 style='border-top:none;border-left:none;width:74pt'><?php echo W_I_DB($typeid,$tplid,'_19_49_a15',90,25)?></td>
  <td class=xl25 width=109 style='border-top:none;border-left:none;width:82pt'><?php echo W_I_DB($typeid,$tplid,'_19_49_a15',100,25)?></td>
  <td class=xl25 width=143 style='border-top:none;border-left:none;width:107pt'><?php echo W_I_DB($typeid,$tplid,'_19_49_a15',130,25)?></td>
 </tr>
 
<?php for($i=0;$i<10;$i++){?>
 <tr height=33 style='mso-height-source:userset;height:24.95pt'>
  <td height=33 class=xl25 width=49 style='height:24.95pt;border-top:none;
  width:37pt' x:num><?php echo $i+1?></td>
  <td class=xl25 width=146 style='border-top:none;border-left:none;width:110pt'><?php echo W_I_DB($typeid,$tplid,'_19_49_a1',140,25)?></td>
  <td class=xl25 width=177 style='border-top:none;border-left:none;width:133pt'><?php echo W_I_DB($typeid,$tplid,'_19_49_a2',170,25)?></td>
  <td class=xl25 width=141 style='border-top:none;border-left:none;width:106pt'><?php echo W_I_DB($typeid,$tplid,'_19_49_a3',130,25)?></td>
  <td class=xl25 width=132 style='border-top:none;border-left:none;width:99pt'><?php echo W_I_DB($typeid,$tplid,'_19_49_a4',120,25)?></td>
  <td class=xl25 width=132 style='border-top:none;border-left:none;width:99pt'><?php echo W_I_DB($typeid,$tplid,'_19_49_a5',120,25)?></td>
  <td class=xl25 width=109 style='border-top:none;border-left:none;width:82pt'><?php echo W_I_DB($typeid,$tplid,'_19_49_a6',100,25)?></td>
  <td class=xl25 width=110 style='border-top:none;border-left:none;width:83pt'><?php echo W_I_DB($typeid,$tplid,'_19_49_a7',100,25)?></td>
  <td class=xl25 width=103 style='border-top:none;border-left:none;width:77pt'><?php echo W_I_DB($typeid,$tplid,'_19_49_a8',90,25)?></td>
  <td class=xl25 width=106 style='border-top:none;border-left:none;width:80pt'><?php echo W_I_DB($typeid,$tplid,'_19_49_a9',95,25)?></td>
  <td class=xl25 width=108 style='border-top:none;border-left:none;width:81pt'><?php echo W_I_DB($typeid,$tplid,'_19_49_a10',100,25)?></td>
  <td class=xl25 width=86 style='border-top:none;border-left:none;width:65pt'><?php echo W_I_DB($typeid,$tplid,'_19_49_a11',80,25)?></td>
  <td class=xl25 width=98 style='border-top:none;border-left:none;width:74pt'><?php echo W_I_DB($typeid,$tplid,'_19_49_a12',90,25)?></td>
  <td class=xl25 width=109 style='border-top:none;border-left:none;width:82pt'><?php echo W_I_DB($typeid,$tplid,'_19_49_a13',100,25)?></td>
  <td class=xl25 width=143 style='border-top:none;border-left:none;width:107pt'><?php echo W_I_DB($typeid,$tplid,'_19_49_a14',130,25)?></td>
 </tr>
<?php }?>

 <tr height=33 style='mso-height-source:userset;height:24.95pt'>
  <td colspan=6 rowspan=2 height=66 class=xl25 width=777 style='height:49.9pt;
  width:584pt'>总计：<?php echo W_I_DB($typeid,$tplid,'_19_49_5',200,25)?></td>
  <td class=xl25 width=109 style='border-top:none;border-left:none;width:82pt'>子卡上月余额</td>
  <td class=xl25 width=110 style='border-top:none;border-left:none;width:83pt'>子卡分油总额</td>
  <td class=xl25 width=103 style='border-top:none;border-left:none;width:77pt'>子卡本月总额</td>
  <td class=xl25 width=106 style='border-top:none;border-left:none;width:80pt'>子卡加油总额</td>
  <td class=xl25 width=108 style='border-top:none;border-left:none;width:81pt'>子卡加油总量</td>
  <td rowspan=2 class=xl25 width=86 style='border-top:none;width:65pt'><?php echo W_I_DB($typeid,$tplid,'_19_49_a16',80,50)?></td>
  <td rowspan=2 class=xl25 width=98 style='border-top:none;width:74pt'><?php echo W_I_DB($typeid,$tplid,'_19_49_a16',90,50)?></td>
  <td class=xl25 width=109 style='border-top:none;border-left:none;width:82pt'>子卡本月余额</td>
  <td rowspan=2 class=xl25 width=143 style='border-top:none;width:107pt'><?php echo W_I_DB($typeid,$tplid,'_19_49_a16',120,50)?></td>
 </tr>
 
 <tr height=33 style='mso-height-source:userset;height:24.95pt'>
  <td height=33 class=xl25 width=109 style='height:24.95pt;border-top:none;
  border-left:none;width:82pt'><?php echo W_I_DB($typeid,$tplid,'_19_49_a16',90,25)?></td>
  <td class=xl25 width=110 style='border-top:none;border-left:none;width:83pt'><?php echo W_I_DB($typeid,$tplid,'_19_49_a16',90,25)?></td>
  <td class=xl25 width=103 style='border-top:none;border-left:none;width:77pt'><?php echo W_I_DB($typeid,$tplid,'_19_49_a16',90,25)?></td>
  <td class=xl25 width=106 style='border-top:none;border-left:none;width:80pt'><?php echo W_I_DB($typeid,$tplid,'_19_49_a16',90,25)?></td>
  <td class=xl25 width=108 style='border-top:none;border-left:none;width:81pt'><?php echo W_I_DB($typeid,$tplid,'_19_49_a16',90,25)?></td>
  <td class=xl25 width=109 style='border-top:none;border-left:none;width:82pt'><?php echo W_I_DB($typeid,$tplid,'_19_49_a16',90,25)?></td>
 </tr>
 <tr height=33 style='mso-height-source:userset;height:24.95pt'>
  <td colspan=4 height=33 class=xl27 width=513 style='height:24.95pt;
  width:386pt'>本月主卡、子卡加油：<?php echo W_I_DB($typeid,$tplid,'_19_49_6',300,25)?></td>
  <td colspan=11 class=xl27 width=1236 style='border-left:none;width:929pt'>本月加油总额：<?php echo W_I_DB($typeid,$tplid,'_19_49_7',300,25)?></td>
 </tr>
 <tr height=33 style='mso-height-source:userset;height:24.95pt'>
  <td colspan=15 height=33 class=xl27 width=1749 style='height:24.95pt;
  width:1315pt'>备注：<?php echo W_I_DB($typeid,$tplid,'_19_49_8',880,25)?></td>
 </tr>
 <tr height=33 style='mso-height-source:userset;height:24.95pt'>
  <td colspan=15 height=33 class=xl27 width=1749 style='height:24.95pt;
  width:1315pt'>部门分摊：<?php echo W_I_DB($typeid,$tplid,'_19_49_9',850,25)?></td>
 </tr>
 <tr height=33 style='mso-height-source:userset;height:24.95pt'>
  <td colspan=3 height=33 class=xl27 width=372 style='height:24.95pt;
  width:280pt'>部门负责人审批：</td>
  <td colspan=3 class=xl27 width=405 style='border-left:none;width:304pt'>财务负责人审批：</td>
  <td colspan=9 class=xl27 width=972 style='border-left:none;width:731pt'>总经理审批：</td>
 </tr>
 <![if supportMisalignedColumns]>
 <tr height=0 style='display:none'>
  <td width=49 style='width:37pt'></td>
  <td width=146 style='width:110pt'></td>
  <td width=177 style='width:133pt'></td>
  <td width=141 style='width:106pt'></td>
  <td width=132 style='width:99pt'></td>
  <td width=132 style='width:99pt'></td>
  <td width=109 style='width:82pt'></td>
  <td width=110 style='width:83pt'></td>
  <td width=103 style='width:77pt'></td>
  <td width=106 style='width:80pt'></td>
  <td width=108 style='width:81pt'></td>
  <td width=86 style='width:65pt'></td>
  <td width=98 style='width:74pt'></td>
  <td width=109 style='width:82pt'></td>
  <td width=143 style='width:107pt'></td>
 </tr>
 <![endif]>
</table>


<?php
include_once('footer.php');
?>