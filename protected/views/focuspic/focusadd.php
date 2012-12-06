<div class="nav">
	<div style="width:90%;float:left;font-size:14px ;">&nbsp;&nbsp;&nbsp;&nbsp;<b>添加</b></div>
</div>
<div class="con">
	<form method="post" action="/index.php/focuspic/focussave">
	<table border="1" width="98%" style="margin-top:20px ;" cellpadding=10 cellspacing=0>
		<tr>
			<td width="10%">页面</td>
			<td width="90%" align="left">
				<select name="page_id">
				<?php foreach ($channel as $v):?>
				<option value="<?php echo $v['id'];?>" <?php if($channel_id==$v['id']):?>selected="selected"<?php endif;?>><?php echo $v['title'];?></option>
				<?php endforeach;?>
				</select>
			</td>
		</tr>
		<tr>
			<td>图片列表</td>
			<td  align="left">
				<input type="text" name="pid_list" size="90" value="<?php if(isset($pid_list) && $pid_list) echo $pid_list;?>" />
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