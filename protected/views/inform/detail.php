<div class="dingtuk"><img src="/images/xw_ding_tu.jpg"/></div>
<!-- 信息导航 -->
<?php $this->widget("InfonavWidget") ;?>


<div class="xw_xqk hui_12 hangg2">
	<div class="xw_btk">
		<table width="100%" border="0" cellspacing="0" cellpadding="0">
			<tr>
				<td width="87%" height="40" class="hei_16"><?php echo $ninfo['title'] ;?></td>
				<td width="13%" rowspan="2" align="right"><a href="xw_huodong.html"><img src="/images/xw_an_fanhui.jpg" width="96" height="23" /></a></td>
			</tr>
			<tr>
				<td height="20" class="huis_12"><?php echo date("Y-m-d H:i:s" , $ninfo['ctime']) ;?></td>
			</tr>
		</table>
	</div>
	<div class="xw_nrk">
		<?php echo $ninfo['content']?>
	</div>
</div>