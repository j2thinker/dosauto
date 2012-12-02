<script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl;?>/kindeditor/kindeditor-min.js"></script>
<div class="nav">
	<div style="width:90%;float:left;font-size:14px ;">&nbsp;&nbsp;&nbsp;&nbsp;<b>添加新闻</b></div>
</div>
<div class="con">
	<form method="post" action="">
	<table border="1" width="98%" style="margin-top:20px ;" cellpadding=10 cellspacing=0>
		<tr>
			<td width="10%">新闻标题</td>
			<td width="90%" align="left">
				<input type="text" name="title" size="90" />
			</td>
		</tr>
		<tr>
			<td>新闻简述</td>
			<td  align="left">
				<textarea rows="5" cols="80"></textarea>
			</td>
		</tr>
		<tr>
			<td>新闻图片</td>
			<td  align="left">
				<input type="file" name="pic_url" />
			</td>
		</tr>
		<tr>
			<td>详情内容</td>
			<td  align="left">
				<textarea rows="20" cols="100" name="content" id="content"></textarea>
			</td>
		</tr>
		<tr>
			<td>权重</td>
			<td align="left">
				<input type="text" name="priority" size="3" value="1" />
				<input type="hidden" name="category" value="1" />
			</td>
		</tr>
		<tr>
			<td colspan="2" align="center">
				<input type="submit" value="添加新闻" /> <input type="button" value="返回上一页" onclick="javascript:history.go(-1);" />
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