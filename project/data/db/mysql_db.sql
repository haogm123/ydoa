DROP TABLE IF EXISTS toa_project_type;
CREATE TABLE toa_project_type (
  tid int(11) NOT NULL AUTO_INCREMENT,
  title varchar(64) DEFAULT NULL,
  manauser text,
  keyuser text,
  type1 varchar(2) DEFAULT NULL,
  type2 varchar(2) DEFAULT NULL,
  uid varchar(16) DEFAULT NULL,
  PRIMARY KEY (tid)
) ENGINE=MyISAM AUTO_INCREMENT=0 DEFAULT CHARSET=utf8;

DROP TABLE IF EXISTS toa_project_model;
CREATE TABLE toa_project_model (
  mid int(11) NOT NULL AUTO_INCREMENT,
  modname varchar(64) DEFAULT NULL,
  manauser text,
  keyuser text,
  typeid varchar(16) DEFAULT NULL,
  key1 varchar(2) DEFAULT NULL,
  key2 varchar(2) DEFAULT NULL,
  key3 varchar(2) DEFAULT NULL,
  key4 varchar(2) DEFAULT NULL,
  addr varchar(64) DEFAULT NULL,
  uid varchar(16) DEFAULT NULL,
  PRIMARY KEY (mid)
) ENGINE=MyISAM AUTO_INCREMENT=0 DEFAULT CHARSET=utf8;

DROP TABLE IF EXISTS toa_project_flow;
CREATE TABLE toa_project_flow (
  fid int(11) NOT NULL AUTO_INCREMENT,
  flowname varchar(64) DEFAULT NULL,
  flownum varchar(2) DEFAULT NULL,
  flowuser varchar(128) DEFAULT NULL,
  uid varchar(16) DEFAULT NULL,
  tplid varchar(16) DEFAULT NULL,
  typeid varchar(16) DEFAULT NULL,
  flowkey varchar(2) DEFAULT NULL,
  flowkey1 varchar(2) DEFAULT NULL,
  flowkey2 varchar(2) DEFAULT NULL,
  flowkey3 varchar(2) DEFAULT NULL,
  flowkey4 varchar(2) DEFAULT NULL,
  PRIMARY KEY (fid)
) ENGINE=MyISAM AUTO_INCREMENT=0 DEFAULT CHARSET=utf8;

DROP TABLE IF EXISTS toa_project_template;
CREATE TABLE toa_project_template (
  tplid int(11) NOT NULL AUTO_INCREMENT,
  title varchar(64) DEFAULT NULL,
  typeid varchar(16) DEFAULT NULL,
  modid varchar(16) DEFAULT NULL,
  tplkey varchar(2) DEFAULT NULL,
  tpltype varchar(2) DEFAULT NULL,
  uid varchar(16) DEFAULT NULL,
  tpladdr varchar(64) DEFAULT NULL,
  number varchar(16) DEFAULT NULL,
  PRIMARY KEY (tplid)
) ENGINE=MyISAM AUTO_INCREMENT=0 DEFAULT CHARSET=utf8;

DROP TABLE IF EXISTS toa_project_from;
CREATE TABLE toa_project_from (
  fromid int(11) NOT NULL AUTO_INCREMENT,
  fromname varchar(64) DEFAULT NULL,
  inputname varchar(64) DEFAULT NULL,
  inputvalue varchar(128) DEFAULT NULL,
  inputtype varchar(2) DEFAULT NULL,
  inputtype1 varchar(2) DEFAULT NULL,
  inputvaluenum text,
  confirmation varchar(2) DEFAULT NULL,
  uid varchar(16) DEFAULT NULL,
  tplid varchar(16) DEFAULT NULL,
  typeid varchar(16) DEFAULT NULL,
  formtype varchar(2) DEFAULT NULL,
  PRIMARY KEY (fromid)
) ENGINE=MyISAM AUTO_INCREMENT=0 DEFAULT CHARSET=utf8;

DROP TABLE IF EXISTS toa_project;
CREATE TABLE toa_project (
  id int(11) NOT NULL AUTO_INCREMENT,
  number varchar(64) DEFAULT NULL,
  typeid varchar(16) DEFAULT NULL,
  title varchar(255) DEFAULT NULL,
  uid varchar(16) DEFAULT NULL,
  type varchar(2) DEFAULT NULL,
  numberview text,
  numberurl text,
  statdate date DEFAULT NULL,
  enddate date DEFAULT NULL,
  date datetime DEFAULT NULL,
  PRIMARY KEY (id)
) ENGINE=MyISAM AUTO_INCREMENT=0 DEFAULT CHARSET=utf8;

DROP TABLE IF EXISTS toa_project_log;
CREATE TABLE toa_project_log(
  lid int(11) NOT NULL AUTO_INCREMENT,
  number varchar(64) DEFAULT NULL,
  typeid varchar(16) DEFAULT NULL,
  title varchar(255) DEFAULT NULL,
  uid varchar(16) DEFAULT NULL,
  type varchar(2) DEFAULT NULL,
  numberview text,
  numberurl text,
  projectid varchar(16) DEFAULT NULL,
  modid varchar(16) DEFAULT NULL,
  tplid varchar(16) DEFAULT NULL,
  date datetime DEFAULT NULL,
  PRIMARY KEY (lid)
) ENGINE=MyISAM AUTO_INCREMENT=0 DEFAULT CHARSET=utf8;


DROP TABLE IF EXISTS toa_project_db;
CREATE TABLE toa_project_db(
  did int(11) NOT NULL AUTO_INCREMENT,
  inputname varchar(64) DEFAULT NULL,
  content text,
  projectid varchar(16) DEFAULT NULL,
  tplid varchar(16) DEFAULT NULL,
  fromid varchar(16) DEFAULT NULL,
  typeid varchar(16) DEFAULT NULL,
  modid varchar(16) DEFAULT NULL,
  type varchar(2) DEFAULT NULL,
  PRIMARY KEY (did)
) ENGINE=MyISAM AUTO_INCREMENT=0 DEFAULT CHARSET=utf8;

DROP TABLE IF EXISTS toa_project_personnel;
CREATE TABLE toa_project_personnel(
  perid int(11) NOT NULL AUTO_INCREMENT,
  name varchar(32) DEFAULT NULL,
  uid varchar(16) DEFAULT NULL,
  designationdate datetime DEFAULT NULL,
  approvaldate datetime DEFAULT NULL,
  lnstructions varchar(255) DEFAULT NULL,
  pertype varchar(2) DEFAULT NULL,
  projectid varchar(16) DEFAULT NULL,
  typeid varchar(16) DEFAULT NULL,
  flowid varchar(16) DEFAULT NULL,
  appkey varchar(2) DEFAULT NULL,
  appkey1 varchar(2) DEFAULT NULL,
  appkey2 varchar(2) DEFAULT NULL,
  PRIMARY KEY (perid)
) ENGINE=MyISAM AUTO_INCREMENT=0 DEFAULT CHARSET=utf8;

DROP TABLE IF EXISTS toa_project_personnel_log;
CREATE TABLE toa_project_personnel_log (
  lid int(11) NOT NULL AUTO_INCREMENT,
  name varchar(32) DEFAULT NULL,
  uid varchar(16) DEFAULT NULL,
  designationdate datetime DEFAULT NULL,
  approvaldate datetime DEFAULT NULL,
  lnstructions varchar(255) DEFAULT NULL,
  pertype varchar(2) DEFAULT NULL,
  perid varchar(16) DEFAULT NULL,
  projectid varchar(16) DEFAULT NULL,
  typeid varchar(16) DEFAULT NULL,
  appkey2 varchar(2) DEFAULT NULL,
  PRIMARY KEY (lid)
) ENGINE=MyISAM AUTO_INCREMENT=0 DEFAULT CHARSET=utf8;
INSERT INTO toa_menu (menuid, menuname, menuurl, fatherid, menutype, menunum, menukey) VALUES
(8, '项目管理', 'home.php?mid=8', '0', '0', 8, '1'),
(59, '新建项目', 'admin.php?ac=workadd&fileurl=project', '8', '2', 1, '0'),
(60, '项目管理', 'admin.php?ac=list&fileurl=project&type=3', '8', '2', 3, '0'),
(61, '项目审批', 'admin.php?ac=list&fileurl=project&type=1', '8', '2', 2, '0'),
(62, '项目列表', 'admin.php?ac=list&fileurl=project', '8', '2', 4, ''),
(63, '项目设置', 'admin.php?ac=type&fileurl=project', '8', '0', 6, '0'),
(283, '报表与统计', 'admin.php?ac=charts&fileurl=project', '8', '0', 5, '0');
INSERT INTO toa_keytable (id, name, inputname, inputvalue, inputchecked, type, number, fatherid) VALUES
(365, '项目', 'input_name', '0', '1', '1', 8, '357'),
(267, '项目管理', 'input_name', '0', '1', '1', 6, '0'),
(268, '基础信息设置', 'project_config', '1', '1', '2', 3, '267'),
(269, '项目管理', 'project_', '1', '1', '2', 1, '267'),
(270, '允许', 'project_config', '1', '1', '1', 1, '268'),
(271, '拒绝', 'project_config', '0', '2', '1', 2, '268'),
(272, '允许', 'project_', '1', '1', '1', 1, '269'),
(273, '拒绝', 'project_', '0', '2', '1', 2, '269'),
(274, '项目任务', 'input_name', '0', '1', '1', 2, '267'),
(275, '允许', 'project_duty', '1', '1', '1', 1, '274'),
(276, '拒绝', 'project_duty', '0', '2', '1', 2, '274'),
(405, '任务', 'excel_38', '1', '1', '2', 2, '365'),
(406, '项目', 'excel_37', '1', '1', '2', 1, '365');
INSERT INTO toa_project_flow (fid, flowname, flownum, flowuser, uid, tplid, typeid, flowkey, flowkey1, flowkey2, flowkey3, flowkey4) VALUES
(1, '申请人提交申请', '1', NULL, '1', '4', '4', '1', '1', '2', '2', '1'),
(2, '部门负责人审批', '2', '', '1', '4', '4', '2', '1', '2', '2', '1'),
(3, '申请人提交申请', '1', NULL, '1', '10', '4', '1', '1', '2', '2', '2'),
(4, '部门负责人审批', '2', '', '1', '10', '4', '1', '1', '2', '2', '2'),
(5, '运营负责人审批', '3', '', '1', '10', '4', '1', '1', '2', '2', '2'),
(6, '财务负责人审批', '4', '', '1', '10', '4', '1', '1', '2', '2', '2'),
(7, '总经理审批', '5', '', '1', '10', '4', '2', '1', '2', '2', '2'),
(20, '运营负责人接收', '3', '', '1', '7', '4', '2', '1', '2', '2', '3'),
(15, '申请人提交申请', '1', NULL, '1', '8', '4', '1', '1', '2', '2', '3'),
(16, '部门负责人审批', '2', '', '1', '8', '4', '1', '1', '2', '2', '3'),
(17, '工程制作负责人接收', '3', '', '1', '8', '4', '2', '1', '2', '2', '3'),
(18, '申请人提交申请', '1', NULL, '1', '7', '4', '1', '1', '2', '2', '3'),
(19, '部门负责人意见', '2', '', '1', '7', '4', '1', '1', '2', '2', '3'),
(36, '申请人提交申请', '1', NULL, '1', '13', '4', '1', '1', '2', '2', '3'),
(35, '审核人', '2', '', '1', '11', '4', '2', '1', '2', '2', '3'),
(33, '设计负责人接收', '3', '', '1', '9', '4', '2', '1', '2', '2', '3'),
(32, '部门负责人审批', '2', '', '1', '9', '4', '1', '1', '2', '2', '3'),
(31, '申请人提交申请', '1', NULL, '1', '9', '4', '1', '1', '2', '2', '3'),
(34, '申请人提交申请', '1', NULL, '1', '11', '4', '1', '1', '2', '2', '3'),
(37, '验收人', '2', '', '1', '13', '4', '1', '1', '2', '2', '3'),
(38, '申请人提交申请', '1', NULL, '1', '14', '4', '1', '1', '2', '2', '3'),
(39, '验收人', '2', '', '1', '14', '4', '1', '1', '2', '2', '3'),
(40, '申请人提交申请', '1', NULL, '1', '15', '4', '1', '1', '2', '2', '3'),
(41, '验收人', '2', '', '1', '15', '4', '1', '1', '2', '2', '3'),
(42, '申请人提交申请', '1', NULL, '1', '16', '4', '1', '1', '2', '2', '3'),
(43, '审核人', '2', '', '1', '16', '4', '2', '1', '2', '2', '3'),
(44, '审批人', '3', '', '1', '13', '4', '2', '1', '2', '2', '3'),
(45, '审批人', '3', '', '1', '14', '4', '2', '1', '2', '2', '3'),
(46, '审批人', '3', '', '1', '15', '4', '2', '1', '2', '2', '3');
INSERT INTO toa_project_from (fromid, fromname, inputname, inputvalue, inputtype, inputtype1, inputvaluenum, confirmation, uid, tplid, typeid, formtype) VALUES
(20, '预估项目金额', '_4_4_1_6', '', '0', '1', '', '2', '1', '4', '4', '1'),
(19, '项目期限', '_4_4_1_5', '', '0', '1', '', '2', '1', '4', '4', '1'),
(18, '项目地点', '_4_4_1_4', '', '0', '1', '', '2', '1', '4', '4', '1'),
(17, '项目类型', '_4_4_1_3', '', '0', '4', '标识制作|设计|媒体发布|置换', '2', '1', '4', '4', '1'),
(16, '项目名称', '_4_4_1_2', '', '0', '1', '', '1', '1', '4', '4', '1'),
(15, '客户名称', '_4_4_1_1', '', '0', '1', '', '1', '1', '4', '4', '1'),
(56, '客户名称', '_4_8_3_5', '', '0', '1', '', '2', '1', '8', '4', '3'),
(10, '文档附件', '_4_7_2_tplxs', '', '2', '1', '', '1', '1', '7', '4', '2'),
(11, '文档描述', '_4_7_2_content', '', '0', '2', '', '2', '1', '7', '4', '2'),
(13, '问题内容', '_4_8_2_content', '', '0', '2', '', '1', '1', '8', '4', '2'),
(14, '附件', '_4_8_2_ditbs', '', '2', '1', '', '2', '1', '8', '4', '2'),
(21, '前期接洽甲方意见', '_4_4_1_7', '', '0', '2', '', '2', '1', '4', '4', '1'),
(22, '前期接洽业务员', '_4_4_1_8', '', '5', '1', '', '2', '1', '4', '4', '1'),
(23, '备注', '_4_4_1_9', '', '0', '2', '', '2', '1', '4', '4', '1'),
(24, '经办人', '_4_10_2_1', '', '5', '1', '', '1', '1', '10', '4', '2'),
(25, '日期', '_4_10_2_2', '', '3', '1', '', '1', '1', '10', '4', '2'),
(26, '合同项目', '_4_10_2_3', '', '0', '1', '', '2', '1', '10', '4', '2'),
(27, '甲方', '_4_10_2_4', '', '0', '1', '', '2', '1', '10', '4', '2'),
(28, '乙方', '_4_10_2_5', '', '0', '1', '', '2', '1', '10', '4', '2'),
(29, '合同编号', '_4_10_2_6', '', '0', '1', '', '2', '1', '10', '4', '2'),
(30, '项目地点', '_4_10_2_7', '', '0', '1', '', '2', '1', '10', '4', '2'),
(31, '合同类型', '_4_10_2_8', '', '0', '1', '', '2', '1', '10', '4', '2'),
(32, '合同期限', '_4_10_2_9', '', '0', '1', '', '2', '1', '10', '4', '2'),
(33, '合同金额', '_4_10_2_10', '', '0', '1', '', '2', '1', '10', '4', '2'),
(34, '大写', '_4_10_2_11', '', '0', '1', '', '2', '1', '10', '4', '2'),
(35, '付款方式', '_4_10_2_12', '', '0', '1', '', '2', '1', '10', '4', '2'),
(36, '项目内容说明', '_4_10_2_13', '', '0', '2', '', '2', '1', '10', '4', '2'),
(37, '备注', '_4_10_2_14', '', '0', '1', '', '2', '1', '10', '4', '2'),
(57, '地址', '_4_8_3_6', '', '0', '1', '', '2', '1', '8', '4', '3'),
(52, '公司', '_4_8_3_1', '', '0', '1', '', '1', '1', '8', '4', '3'),
(53, 'NO', '_4_8_3_2', '', '0', '1', '', '2', '1', '8', '4', '3'),
(54, '日期', '_4_8_3_3', '', '3', '1', '', '2', '1', '8', '4', '3'),
(55, '经办业务员', '_4_8_3_4', '', '0', '1', '', '2', '1', '8', '4', '3'),
(58, '电话', '_4_8_3_7', '', '0', '1', '', '2', '1', '8', '4', '3'),
(59, '合同号', '_4_8_3_8', '', '0', '1', '', '2', '1', '8', '4', '3'),
(60, '客户是否已认定方案', '_4_8_3_9', '', '0', '3', '是|否', '2', '1', '8', '4', '3'),
(61, '制作项目名称', '_4_8_3_10', '', '0', '1', '', '2', '1', '8', '4', '3'),
(62, '工期要求', '_4_8_3_11', '', '0', '1', '', '2', '1', '8', '4', '3'),
(63, '具体说明', '_4_8_3_12', '', '0', '1', '', '2', '1', '8', '4', '3'),
(64, '规格尺寸', '_4_8_3_13', '', '0', '1', '', '2', '1', '8', '4', '3'),
(65, '施工地点', '_4_8_3_14', '', '0', '1', '', '2', '1', '8', '4', '3'),
(66, '安装位置', '_4_8_3_15', '', '0', '1', '', '2', '1', '8', '4', '3'),
(67, '效果图', '_4_8_3_16', '', '2', '1', '', '2', '1', '8', '4', '3'),
(68, '结构图', '_4_8_3_17', '', '2', '1', '', '2', '1', '8', '4', '3'),
(69, '其他详细说明', '_4_8_3_18', '', '0', '2', '', '2', '1', '8', '4', '3'),
(70, '现场电源联系人', '_4_8_3_19', '', '0', '1', '', '2', '1', '8', '4', '3'),
(71, '电话', '_4_8_3_20', '', '0', '1', '', '2', '1', '8', '4', '3'),
(72, '现场业务接洽人', '_4_8_3_21', '', '0', '1', '', '2', '1', '8', '4', '3'),
(73, '电话', '_4_8_3_22', '', '0', '1', '', '2', '1', '8', '4', '3'),
(74, '现场勘查人', '_4_8_3_23', '', '0', '1', '', '2', '1', '8', '4', '3'),
(75, '电话', '_4_8_3_24', '', '0', '1', '', '2', '1', '8', '4', '3'),
(76, '日期', '_4_11_2_date', '', '3', '1', '', '1', '1', '11', '4', '2'),
(77, '班组', '_4_11_2_a1', '', '6', '1', '', '2', '1', '11', '4', '2'),
(78, '工作内容', '_4_11_2_a2', '', '6', '1', '', '2', '1', '11', '4', '2'),
(79, '负责人', '_4_11_2_a3', '', '6', '1', '', '2', '1', '11', '4', '2'),
(80, '实际工作人员', '_4_11_2_a4', '', '6', '1', '', '2', '1', '11', '4', '2'),
(81, '外请人员', '_4_11_2_a5', '', '6', '1', '', '2', '1', '11', '4', '2'),
(82, '是否完成本日工作', '_4_11_2_a6', '', '6', '1', '', '2', '1', '11', '4', '2'),
(83, '未完成情况', '_4_11_2_a7', '', '6', '1', '', '2', '1', '11', '4', '2'),
(84, '其他备注', '_4_11_2_a8', '', '6', '1', '', '2', '1', '11', '4', '2'),
(85, '任务分配运营人员', '_4_7_4_t1', '', '0', '1', '', '2', '1', '20', '4', '4'),
(86, '工艺', '_4_7_4_t2', '', '0', '1', '', '2', '1', '20', '4', '4'),
(87, '结构图纸', '_4_7_4_t3', '', '2', '1', '', '2', '1', '20', '4', '4'),
(88, '材料清单', '_4_7_4_t4', '', '2', '1', '', '2', '1', '20', '4', '4'),
(89, '公司', '_4_7_3_1', '', '0', '1', '', '2', '1', '7', '4', '3'),
(90, 'No.', '_4_7_3_2', '', '0', '1', '', '2', '1', '7', '4', '3'),
(91, '填表日期', '_4_7_3_3', '', '3', '1', '', '2', '1', '7', '4', '3'),
(92, '完成日期', '_4_7_3_4', '', '3', '1', '', '2', '1', '7', '4', '3'),
(93, '责任人', '_4_7_3_5', '', '0', '1', '', '2', '1', '7', '4', '3'),
(94, '责任部门', '_4_7_3_6', '', '4', '1', '', '2', '1', '7', '4', '3'),
(95, '客户名称', '_4_7_3_7', '', '0', '1', '', '2', '1', '7', '4', '3'),
(96, '项目名称地点', '_4_7_3_8', '', '0', '1', '', '2', '1', '7', '4', '3'),
(97, '项目内容材质尺寸', '_4_7_3_9', '', '0', '2', '', '2', '1', '7', '4', '3'),
(98, '现场照片', '_4_7_3_10', '', '2', '1', '', '2', '1', '7', '4', '3'),
(99, '效果图', '_4_7_3_11', '', '2', '1', '', '2', '1', '7', '4', '3'),
(100, '三视图（三围尺寸）', '_4_7_3_12', '', '2', '1', '', '2', '1', '7', '4', '3'),
(101, '责任部门', '_4_7_3_13', '', '0', '2', '', '2', '1', '7', '4', '3'),
(102, '任务分配设计人员', '_4_9_4_t1', '', '0', '1', '', '2', '1', '33', '4', '4'),
(103, '方案', '_4_9_4_t2', '', '2', '1', '', '2', '1', '33', '4', '4'),
(104, '效果图', '_4_9_4_t3', '', '2', '1', '', '2', '1', '33', '4', '4'),
(105, '公司', '_4_9_3_1', '', '0', '1', '', '2', '1', '9', '4', '3'),
(106, 'No.', '_4_9_3_2', '', '0', '1', '', '2', '1', '9', '4', '3'),
(107, '日    期', '_4_9_3_3', '', '3', '1', '', '2', '1', '9', '4', '3'),
(108, '完成日期', '_4_9_3_4', '', '3', '1', '', '2', '1', '9', '4', '3'),
(109, '责 任 人', '_4_9_3_5', '', '0', '1', '', '2', '1', '9', '4', '3'),
(110, '责任部门', '_4_9_3_6', '', '0', '1', '', '2', '1', '9', '4', '3'),
(111, '客户名称', '_4_9_3_7', '', '0', '1', '', '2', '1', '9', '4', '3'),
(112, '项目名称', '_4_9_3_8', '', '0', '1', '', '2', '1', '9', '4', '3'),
(113, '主要内容', '_4_9_3_9', '', '0', '1', '', '2', '1', '9', '4', '3'),
(114, '尺&nbsp;&nbsp;&nbsp;&nbsp;寸', '_4_9_3_10', '', '0', '1', '', '2', '1', '9', '4', '3'),
(115, '位&nbsp;&nbsp;&nbsp;&nbsp;置', '_4_9_3_11', '', '0', '1', '', '2', '1', '9', '4', '3'),
(116, '材&nbsp;&nbsp;&nbsp;&nbsp;质', '_4_9_3_12', '', '0', '1', '', '2', '1', '9', '4', '3'),
(117, '光&nbsp;&nbsp;&nbsp;&nbsp;源', '_4_9_3_13', '', '0', '1', '', '2', '1', '9', '4', '3'),
(118, '提供材料', '_4_9_3_14', '', '0', '1', '', '2', '1', '9', '4', '3'),
(119, '设计要求', '_4_9_3_15', '', '0', '2', '', '2', '1', '9', '4', '3'),
(120, '要点备注', '_4_9_3_16', '', '0', '2', '', '2', '1', '9', '4', '3'),
(121, '设计图打印', '_4_9_3_17', '', '0', '3', '是|否', '2', '1', '9', '4', '3'),
(122, '复印纸', '_4_9_3_18', '', '0', '1', '', '2', '1', '9', '4', '3'),
(123, '打印纸开要求', '_4_9_3_19', '', '0', '3', 'A3|A4', '2', '1', '9', '4', '3'),
(124, '打印纸', '_4_9_3_20', '', '0', '1', '', '2', '1', '9', '4', '3'),
(125, '照片纸', '_4_9_3_21', '', '0', '1', '', '2', '1', '9', '4', '3'),
(126, '其他', '_4_9_3_22', '', '0', '1', '', '2', '1', '9', '4', '3'),
(127, '特种纸', '_4_9_3_23', '', '0', '1', '', '2', '1', '9', '4', '3'),
(128, '客户名称', '_4_11_3_1', '', '0', '1', '', '2', '1', '11', '4', '3'),
(129, '项目名称', '_4_11_3_2', '', '0', '1', '', '2', '1', '11', '4', '3'),
(130, '项目内容', '_4_11_3_3', '', '0', '1', '', '2', '1', '11', '4', '3'),
(131, '项目周期', '_4_11_3_4', '', '0', '1', '', '2', '1', '11', '4', '3'),
(132, '项目地点', '_4_11_3_5', '', '0', '1', '', '2', '1', '11', '4', '3'),
(133, '合同编号', '_4_11_3_6', '', '0', '1', '', '2', '1', '11', '4', '3'),
(134, '工单号', '_4_11_3_7', '', '0', '1', '', '2', '1', '11', '4', '3'),
(135, '签订合同金额', '_4_11_3_8', '', '0', '1', '', '2', '1', '11', '4', '3'),
(136, '增/减项后实际合同金额', '_4_11_3_9', '', '0', '1', '', '2', '1', '11', '4', '3'),
(137, '预算成本', '_4_11_3_10', '', '0', '1', '', '2', '1', '11', '4', '3'),
(138, '实际成本', '_4_11_3_11', '', '0', '1', '', '2', '1', '11', '4', '3'),
(139, '金额', '_4_11_3_a1', '', '6', '1', '', '2', '1', '11', '4', '3'),
(140, '所占比例', '_4_11_3_a2', '', '6', '1', '', '2', '1', '11', '4', '3'),
(141, '填报人', '_4_11_3_12', '', '5', '1', '', '1', '1', '11', '4', '3'),
(142, '项目名称', '_4_13_3_1', '', '0', '1', '', '2', '1', '13', '4', '3'),
(143, '合同编号', '_4_13_3_2', '', '0', '1', '', '2', '1', '13', '4', '3'),
(144, '工单号', '_4_13_3_3', '', '0', '1', '', '2', '1', '13', '4', '3'),
(145, '特殊工艺情况', '_4_13_3_4', '', '0', '2', '', '2', '1', '13', '4', '3'),
(146, '技术要求', '_4_13_3_5', '', '0', '2', '', '2', '1', '13', '4', '3'),
(147, '技术图纸', '_4_13_3_6', '', '2', '1', '', '2', '1', '13', '4', '3'),
(148, '制作完成情况', '_4_13_3_7', '', '0', '2', '', '2', '1', '13', '4', '3'),
(149, '完成效果', '_4_13_3_8', '', '2', '1', '', '2', '1', '13', '4', '3'),
(150, '制作周期', '_4_13_3_9', '', '0', '1', '', '2', '1', '13', '4', '3'),
(151, '制作人员', '_4_13_3_10', '', '0', '1', '', '2', '1', '13', '4', '3'),
(152, '填报人', '_4_13_3_11', '', '5', '1', '', '2', '1', '13', '4', '3'),
(153, '验收人', '_4_13_3_12', '', '0', '1', '', '2', '1', '13', '4', '3'),
(154, '项目名称', '_4_14_3_1', '', '0', '1', '', '2', '1', '14', '4', '3'),
(155, '合同编号', '_4_14_3_2', '', '0', '1', '', '2', '1', '14', '4', '3'),
(156, '工单号', '_4_14_3_3', '', '0', '1', '', '2', '1', '14', '4', '3'),
(157, '制作工艺及技术要求', '_4_14_3_4', '', '0', '2', '', '2', '1', '14', '4', '3'),
(158, '技术图纸', '_4_14_3_5', '', '2', '1', '', '2', '1', '14', '4', '3'),
(159, '制作完成情况', '_4_14_3_6', '', '0', '2', '', '2', '1', '14', '4', '3'),
(160, '完成效果', '_4_14_3_7', '', '2', '1', '', '2', '1', '14', '4', '3'),
(161, '制作周期', '_4_14_3_8', '', '0', '1', '', '2', '1', '14', '4', '3'),
(162, '制作人员', '_4_14_3_9', '', '0', '1', '', '2', '1', '14', '4', '3'),
(163, '填报人', '_4_14_3_10', '', '5', '1', '', '2', '1', '14', '4', '3'),
(164, '验收人', '_4_14_3_11', '', '0', '1', '', '2', '1', '14', '4', '3'),
(165, '项目名称', '_4_15_3_1', '', '0', '1', '', '2', '1', '15', '4', '3'),
(166, '合同编号', '_4_15_3_2', '', '0', '1', '', '2', '1', '15', '4', '3'),
(167, '工单号', '_4_15_3_3', '', '0', '1', '', '2', '1', '15', '4', '3'),
(168, '制作安装工艺及技术要求', '_4_15_3_4', '', '0', '2', '', '2', '1', '15', '4', '3'),
(169, '技术图纸', '_4_15_3_5', '', '2', '1', '', '2', '1', '15', '4', '3'),
(170, '制作（安装）完成情况', '_4_15_3_6', '', '0', '2', '', '2', '1', '15', '4', '3'),
(171, '制作（安装）完成&nbsp;&nbsp;&nbsp;&nbsp; 时间区间', '_4_15_3_7', '', '0', '1', '', '2', '1', '15', '4', '3'),
(172, '是否符合合同要求制作（安装）时间区间', '_4_15_3_8', '', '0', '3', '是|否', '2', '1', '15', '4', '3'),
(173, '完成效果', '_4_15_3_9', '', '2', '1', '', '2', '1', '15', '4', '3'),
(174, '现场安装人员', '_4_15_3_10', '', '0', '1', '', '2', '1', '15', '4', '3'),
(175, '现场负责人', '_4_15_3_11', '', '0', '1', '', '2', '1', '15', '4', '3'),
(176, '填报人', '_4_15_3_12', '', '5', '1', '', '2', '1', '15', '4', '3'),
(177, '验收人', '_4_15_3_13', '', '0', '1', '', '2', '1', '15', '4', '3'),
(178, '客户名称', '_4_16_3_1', '', '0', '1', '', '2', '1', '16', '4', '3'),
(179, '项目名称', '_4_16_3_2', '', '0', '1', '', '2', '1', '16', '4', '3'),
(180, '施工单位', '_4_16_3_3', '', '0', '1', '', '2', '1', '16', '4', '3'),
(181, '项目类型', '_4_16_3_4', '', '0', '4', '标识制作|设计|媒体发布|置换', '2', '1', '16', '4', '3'),
(182, '项目地点', '_4_16_3_5', '', '0', '1', '', '2', '1', '16', '4', '3'),
(183, '开工日期', '_4_16_3_6', '', '3', '1', '', '2', '1', '16', '4', '3'),
(184, '验收日期', '_4_16_3_7', '', '3', '1', '', '2', '1', '16', '4', '3'),
(185, '施工内容', '_4_16_3_8', '', '0', '2', '', '2', '1', '16', '4', '3'),
(186, '项目负责人', '_4_16_3_9', '', '0', '1', '', '2', '1', '16', '4', '3'),
(187, '日期', '_4_16_3_10', '', '3', '1', '', '2', '1', '16', '4', '3'),
(188, '竣工确认', '_4_16_3_11', '', '0', '2', '', '2', '1', '16', '4', '3'),
(189, '现场确认单', '_4_16_3_12', '', '2', '1', '', '2', '1', '16', '4', '3'),
(190, '甲方验收人', '_4_16_3_13', '', '0', '1', '', '2', '1', '16', '4', '3'),
(191, '日期', '_4_16_3_14', '', '3', '1', '', '2', '1', '16', '4', '3'),
(192, '填报人', '_4_16_3_15', '', '5', '1', '', '2', '1', '16', '4', '3');
INSERT INTO toa_project_model (mid, modname, manauser, keyuser, typeid, key1, key2, key3, key4, addr, uid) VALUES
(10, '合同', '', '', '4', '0', '1', '0', '3', '4_10.php', '1'),
(7, '文档', '', '', '4', '0', '0', '0', '1', NULL, '1'),
(8, '问题', '', '', '4', '1', '0', '0', '1', NULL, '1'),
(9, '项目表单', '', '', '4', '0', '1', '1', '1', NULL, '1'),
(11, '每日进度', '', '', '4', '0', '0', '0', '3', '4_11.php', '1');
INSERT INTO toa_project_template (tplid, title, typeid, modid, tplkey, tpltype, uid, tpladdr) VALUES
(9, '设计工单及反馈', '4', '9', '3', '1', '1', 'shejigongdanjifankui.php'),
(11, '项目竣工成本分析', '4', '9', '3', '1', '1', 'xiangmunxi.php'),
(13, '特殊工艺验收', '4', '9', '3', '1', '1', 'teshugongyiyanshou.php'),
(14, '制作完成出厂验收', '4', '9', '3', '1', '1', 'uchangyanshou.php'),
(15, '安装完成现场验收', '4', '9', '3', '1', '1', 'angyanshou.php'),
(7, '运营工单及反馈', '4', '9', '3', '1', '1', 'yunyinggongdanjifankui.php'),
(8, '制作工单', '4', '9', '3', '1', '1', 'zhizuogongdan.php'),
(16, '项目竣工现场验收单', '4', '9', '3', '1', '1', 'ngyanshoudan.php');
INSERT INTO toa_project_type (tid, title, manauser, keyuser, type1, type2, uid) VALUES
(4, '软件自带测试项目数据', '', '', '0', '1', '1');
