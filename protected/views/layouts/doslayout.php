<?php /*@ begin the layout */?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>汽车销售服务有限公司</title>
<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/auto.css" />
<script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl ; ?>/js/nav.js"></script>

</head>

<body>
<div class="zongk">
	<div class="dingk">
		<div class="biaozhik"><img src="/images/biaozhi.jpg"/></div>
		<div class="sousuok">
		  <table width="100%" border="0" cellspacing="0" cellpadding="0">
		    <tr>
		      <td align="right" class="hui_12">北京运通博恩汽车销售服务有限公司</td>
		      <td width="150" align="right"><input name="textfield" type="text" class="bd_wbk" id="textfield" /></td>
		      <td width="50" align="right"><input name="" type="button" class="bd_sousuo" value="搜 索" /></td>
		    </tr>
		  </table>
		</div>
		<div class="daohangk huis_12" id="div_center">
		<ul id="nav">
			<li>俱乐部
				<UL>
					<LI><A href="jl_chezhu.html">车主关怀</A></LI>
					<LI><A href="jl_cheyou.html">车友活动</A></LI>
					<LI><A href="jl_wangqi.html">往期活动回顾</A></LI>
				</UL>
			</li>
			<li><a href="#">售后服务</a>
				<UL>
				<LI><A href="sh_shijia.html">预约试驾</A></LI>
				<LI><A href="sh_baoyang.html">保养预估</A></LI>
				</UL>
			</li>
			<li><a href="#">购车指南</a>
				<UL>
				<LI><A href="gc_chanpin.html">衍生产品</A></LI>
				<LI><A href="gc_jisuanqi.html">车贷计算器</A></LI>
				</UL>
			</li>
			<li><a href="#">汽车展厅</a>
				<UL>
				<LI><A href="zt_suteng.html">全新速腾</A></LI>
				<LI><A href="zt_cc.html">CC</A></LI>
				<LI><A href="zt_maiteng.html">迈腾</A></LI>
				<LI><A href="zt_gti.html">GTI</A></LI>
				<LI><A href="zt_gaoerfu.html">高尔夫</A></LI>
				<LI><A href="zt_baolai.html">宝来</A></LI>
				<LI><A href="zt_jieda.html">捷达</A></LI>
				</UL>
			</li>
			<li><a href="#">二手车服务</a>
				<UL>
				<LI><A href="es_cheyuan.html">二手车源</A></LI>
				<LI><A href="es_zhihuan.html">二手车置换</A></LI>
				<LI><A href="es_jingpin.html">汽车精品</A></LI>
				</UL>
			</li>
			<li><a href="#">新闻中心</a>
				<UL>
				<LI><A href="xw_huodong.html">最新活动</A></LI>
				<LI><A href="xw_cuxiao.html">优惠促销</A></LI>
				<LI><A href="xw_gongsi.html">公司新闻</A></LI>
				<LI><A href="xw_hangye.html">行业新闻</A></LI>
				<LI><A href="xw_fuwu.html">衍生服务</A></LI>
				<LI><A href="xw_tuangou.html">团购消息</A></LI>
				<LI><A href="xw_baoyang.html">保养课堂</A></LI>
				</UL>
			</li>
			<li><a href="#">公司介绍</a>
				<UL>
				<LI><A href="/index.php/site/intro/1">公司简介</A></LI>
				<LI><A href="/index.php/site/intro/2">品牌历史</A></LI>
				<LI><A href="/index.php/site/intro/3">销售团队</A></LI>
				<li><a href="/index.php/site/intro/4">联系我们</a></li>
				<li><a href="/index.php/site/intro/5">加入我们</a></li>
				</UL>
			</li>
			<li><a href="index.html">首　页</a></li>
			</ul>
		</div>
	</div>
	<!-- Main content -->
	<?php echo $content; ?>
	<!-- End of main content -->
	<div class=" qingchu"></div>
	<div class="dik">
		<table width="100%" border="0" cellspacing="0" cellpadding="0">
		  <tr>
		    <td align="left"><img src="/images/di_apptu.jpg" width="110" height="32" /></td>
		    <td align="right" class="hui_16">销售热线：028-85950192　服务热线：028-85950561　救援热线：9510500 </td>
		    <td width="10" align="right" class="ybk">&nbsp;</td>
		    <td align="right" class="hui_12">一汽－大众各品牌网站</td>
		    <td width="130" align="right"><select name="select" id="select">
		      <option>请选择品牌网站</option>
		    </select></td>
		  </tr>
		</table>
	</div>
</div>
</body>
</html>