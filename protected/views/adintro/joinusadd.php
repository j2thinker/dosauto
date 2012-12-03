<script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl;?>/kindeditor/kindeditor-min.js"></script>
<div class="nav">
	<div style="width:90%;float:left;font-size:14px ;">&nbsp;&nbsp;&nbsp;&nbsp;<b>添加</b></div>
</div>
<div class="con">
	<form method="post" action="/index.php/adintro/joinusaddsave">
	<table border="1" width="98%" style="margin-top:20px ;" cellpadding=10 cellspacing=0>
		<tr>
			<td width="10%">分类</td>
			<td width="90%" align="left">
				<select name="cat_id">
				<?php foreach ($cat_list as $v):?>
				<option value="<?php echo $v['id'];?>" <?php if($cat_id==$v['id']):?>selected="selected"<?php endif;?>><?php echo $v['cate_name'];?></option>
				<?php endforeach;?>
				</select>
			</td>
		</tr>
		<tr>
			<td width="10%">职位名称</td>
			<td width="90%" align="left">
				<input type="text" name="jobs_name" size="90" value="<?php if($jobs_name) echo $jobs_name;?>" />
			</td>
		</tr>
		<tr>
			<td>内容</td>
			<td  align="left">
				<textarea rows="20" cols="100" name="jobs_info" id="content"><?php if($jobs_info) echo $jobs_info;?></textarea>
			</td>
		</tr>
		<tr>
			<td width="10%">email</td>
			<td width="90%" align="left">
				<input type="text" name="email" size="90" value="<?php if($email) echo $email;?>" />
			</td>
		</tr>
		<tr>
			<td colspan="2" align="center">
				<input type="submit" value="添加" /> <input type="button" value="返回上一页" onclick="javascript:history.go(-1);" />
			</td>
		</tr>
	</table>
	<input type="hidden" name="id" value="<?php if($id) echo $id;?>" />
	</form>
</div>
<script type="text/javascript">
KindEditor.ready(function(K) {
	K.create('#content', {themeType : 'default'});
});
</script>