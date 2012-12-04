<script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl;?>/kindeditor/kindeditor-min.js"></script>
<div class="nav">
	<div style="width:90%;float:left;font-size:14px ;">&nbsp;&nbsp;&nbsp;&nbsp;<b>添加</b></div>
</div>
<div class="con">
	<form method="post" action="/index.php/focuspic/picupload" enctype="multipart/form-data">
	<table border="1" width="98%" style="margin-top:20px ;" cellpadding=10 cellspacing=0>
		<tr>
			<td>图片</td>
			<td  align="left">
				<input type="file" name="pic_src" />
			</td>
		</tr>
		<tr>
			<td>图片链接</td>
			<td  align="left">
				<input type="text" name="pic_link" size="90" />
			</td>
		</tr>
		<tr>
			<td colspan="2" align="center">
				<input type="submit" value="添加" /> <input type="button" value="返回上一页" onclick="javascript:history.go(-1);" />
			</td>
		</tr>
	</table>
	</form>
</div>
<script type="text/javascript">
KindEditor.ready(function(K) {
	K.create('#content', {themeType : 'default'});
});
</script>