<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>项目管理系统</title>
<style type="text/css">
<!--
body {
	margin:0 4px ;
	background-image: url(/images/admin/left.gif);
}
-->
</style>
<link href="/css/admin/css.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl;?>/js/jquery.min.js"></script>
<script type="text/javascript">
	$(function(){
		//show sub cate
		$("a[name^=pr_]").click(function (){
			var img4 = "/images/admin/ico04.gif" ;
			var img3 = "/images/admin/ico03.gif" ;
			var parnav = $(this).attr("parnav") ;
			var nextstate = $("#sub_" + parnav).css('display')== 'none'?'' :'none' ;
			$("table[id^=sub_]").css('display' ,'none') ;
			$("[id^=pic_]").attr('src' , img4)
			$("#sub_" + parnav).css('display' ,nextstate) ;
			var curpic = '' ;
			curpic = (nextstate == 'none')?img4:img3 ;
			$("#pic_" + parnav).attr("src" , curpic) ;
		});
		
		$("a[name^=submenu_]").click(function(){
			var img5 = "/images/admin/ico05.gif" ;
			var img6 = "/images/admin/ico06.gif" ;
			$(".menuicon").attr("src" , img6) ;
			var imgid = "#spic_" + $(this).attr("sname") ;
			$(imgid).attr('src' , img5);
		}) ;
		
	});
</script>
</head>

<body>
<table width="198" border="0" cellpadding="0" cellspacing="0" class="left-table01">
  <tr>
    <TD>
		<table width="100%" border="0" cellpadding="0" cellspacing="0">
		  <tr>
			<td width="207" height="55" background="/images/admin/nav01.gif">
				<table width="90%" border="0" align="center" cellpadding="0" cellspacing="0">
				  <tr>
					<td width="25%" rowspan="2"><img src="/images/admin/ico02.gif" width="35" height="35" /></td>
					<td width="75%" height="22" class="left-font01">您好，<span class="left-font02">king</span></td>
				  </tr>
				  <tr>
					<td height="22" class="left-font01">
						[&nbsp;<a href="../login.html" target="_top" class="left-font01">退出</a>&nbsp;]</td>
				  </tr>
				</table>
			</td>
		  </tr>
		</table>
		
	<?php foreach (Yii::app()->params['adnav'] as $title => $sub ) :?>
		<!--  任务系统开始    -->
		<TABLE width="100%" border="0" cellpadding="0" cellspacing="0" class="left-table03">
          <tr>
            <td height="29">
				<table width="85%" border="0" align="center" cellpadding="0" cellspacing="0">
					<tr>
						<td width="8%"><img id="pic_<?php echo $title ;?>" src="/images/admin/ico04.gif" width="8" height="11" /></td>
						<td width="92%">
							<a href="javascript:;" name="pr_<?php echo $title ;?>" parnav="<?php echo $title ;?>" target="mainFrame" class="left-font03"><b><?php echo Yii::app()->params['navname'][$title] ;?></b></a>
						</td>
					</tr>
				</table>
			</td>
          </tr>		  
        </TABLE>
		<table id="sub_<?php echo $title?>" width="80%" border="0" align="center" cellpadding="0" cellspacing="0" class="left-table02" style="display:none;">
			<?php foreach ($sub as $sname => $act):?>	
				<tr>
				  <td width="9%" height="20" ><img id="spic_<?php echo $sname ;?>" class="menuicon" src="/images/admin/ico06.gif" width="10" height="12" /></td>
				  <td width="91%"><a href="/index.php<?php echo $act ;?>" name="submenu_<?php echo $sname ;?>" sname="<?php echo $sname ;?>" target="mainFrame" class="left-font03"><?php echo $sname;?></a></td>
				</tr>
			<?php endforeach; ?>
      	</table>
      	<?php endforeach; ?>
		<!--  任务系统结束    -->
	  </TD>
  </tr>
</table>
</body>
</html>