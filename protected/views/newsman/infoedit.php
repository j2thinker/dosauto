<script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl;?>/kindeditor/kindeditor-min.js"></script>
<div class="nav">
	<div style="width:90%;float:left;font-size:14px ;">&nbsp;&nbsp;&nbsp;&nbsp;<b>编辑信息</b></div>
</div>
<div class="con">
	<form method="post" action="/index.php/newsman/editact" enctype="multipart/form-data">
	<table border="1" width="98%" style="margin-top:20px ;" cellpadding=10 cellspacing=0>
		<tr>
			<td width="10%">标题</td>
			<td width="90%" align="left">
				<input type="hidden" name="id" value="<?php echo $infodetail['id']?>">
				<input type="text" name="title" size="90" value="<?php echo $infodetail['title'] ;?>" />
			</td>
		</tr>
		<tr>
			<td>信息简述</td>
			<td  align="left">
				<textarea rows="5" cols="80" name="descript"><?php echo $infodetail['descript']?></textarea>
			</td>
		</tr>
		<tr>
			<td>图片</td>
			<td  align="left">
				<input type="file" name="pic_url" />
			</td>
		</tr>
		<tr>
			<td>详情内容</td>
			<td  align="left">
				<textarea rows="20" cols="100" name="content" id="content"><?php echo $infodetail['content']?></textarea>
			</td>
		</tr>
		<tr>
			<td>权重</td>
			<td align="left">
				<input type="text" name="priority" size="3" value="<?php echo $infodetail['priority']?>" />
				<input type="hidden" name="category" value="<?php echo $infodetail['category'] ;?>" />
			</td>
		</tr>
		<tr>
			<td colspan="2" align="center">
				<input type="submit" value="修改信息" /> <input type="button" value="返回上一页" onclick="javascript:history.go(-1);" />
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