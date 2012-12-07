<?php /*@ begin the layout */?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>汽车销售服务有限公司</title>
<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/auto.css" />
<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/global.css" />

<script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl ; ?>/js/nav.js"></script>
<script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl ; ?>/js/jquery.min.js"></script>
<script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl ; ?>/js/slides.min.jquery.js"></script>
</head>

<body>
<div class="zongk">
	<div class="dingk">
		<div class="biaozhik"><img src="/images/biaozhi.jpg"/></div>
		<div class="sousuok">
		  <table width="100%" border="0" cellspacing="0" cellpadding="0">
		    <tr>
		      <td align="right" class="hui_12">北京运通博恩汽车销售服务有限公司</td>
		      <td width="150" align="right"><input name="search_data" type="text" class="bd_wbk" id="search_data" /></td>
		      <td width="50" align="right"><input name="" type="button" class="bd_sousuo" value="搜 索" onclick="search_sub();";/></td>
		    </tr>
		  </table>
		</div>
		<div class="daohangk huis_12" id="div_center" >
		
		<ul id="nav">
			<?php $menu = array_reverse(Yii::app()->params['channel']) ;?>
			<?php foreach ($menu as $con => $coninfo):?>
			<?php if (isset($coninfo['actions']) && is_array($coninfo['actions'])):?>
			<li><?php echo $coninfo['title'] ;?>
				<UL>
					<?php foreach ($coninfo['actions'] as $act => $actname):?>
					<LI><A href="/index.php/<?php echo $con;?>/<?php echo $act ;?>"><?php echo $actname ;?></A></LI>
					<?php endforeach; ?>
				</UL>
			</li>
			<?php else :?>
				<li><a href="/index.php/site/index"><?php echo $coninfo['title'] ;?></a></li>
			<?php endif ;?>
			<?php endforeach;?>
			</ul>
		</div>
	</div>
	<!-- Main content -->
	<?php echo $content; ?>
	<!-- End of main content -->
	<?php $this->widget('LocateWidget')?>
	<div class=" qingchu"></div>
	<div class="dik">
	<table width="100%" border="0" cellspacing="0" cellpadding="0">
	  <tr>
	    <td align="left"><img src="/images/di_apptu.jpg" width="110" height="32" /></td>
	    <td align="right" class="hui_16">销售热线：028-85950192　服务热线：028-85950561　救援热线：9510500 </td>
	    <td width="10" align="right" class="ybk">&nbsp;</td>
	    <td align="right" class="hui_12">一汽－大众各品牌网站</td>
	    <td width="130" align="right"><div class="di_pinpank you" onmouseover="dik()" onmouseout="dib()">请选择品牌网站
	    <ul id="dipin" class="yincang">
	    <li><a href="http://vw.faw-vw.com/index.php/component/brand/?task=borashare&brand_id=10" target="_blank" >全新宝来</a></li>
	    <li><a href="http://vw.faw-vw.com/index.php/component/brand/?brand_id=6" target="_blank" >CC</a></li>
	    <li><a href="http://vw.faw-vw.com/index.php/component/brand/?brand_id=2" target="_blank" >高尔夫</a></li>
	    <li><a href="http://www.golfcars.com.cn/gti/" target="_blank" >GTI</a></li>
	    <li><a href="http://vw.faw-vw.com/index.php/component/brand/?brand_id=1" target="_blank" >宝来</a></li>
	    <li><a href="http://vw.faw-vw.com/jetta_story/web/third/index" target="_blank" >捷达</a></li>
	    <li><a href="http://sagitar.faw-vw.com/" target="_blank" >全新速腾</a></li>
	    <li><a href="http://vw.faw-vw.com/magotan_life/" target="_blank" >迈腾</a></li>
	    </ul>
	    </div></td>
	  </tr>
	</table>
	</div>
</div>
</body>
</html>