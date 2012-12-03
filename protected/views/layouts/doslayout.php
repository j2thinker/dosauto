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
			<?php $menu = array_reverse(Yii::app()->params['frontnav']) ;?>
			<?php foreach ($menu as $contxt => $subs):?>
			<?php if (is_array($subs)):?>
			<li><?php echo $contxt ;?>
				<UL>
					<?php foreach ($subs as $scon => $sact):?>
					<LI><A href="/index.php<?php echo $sact ?>"><?php echo $scon ;?></A></LI>
					<?php endforeach; ?>
				</UL>
			</li>

			<?php else :?>
				<li><a href="/index.php<?php echo $subs ;?>"><?php echo $contxt ;?></a></li>
			<?php endif ;?>
			<?php endforeach;?>
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