<div class="nav">
	<div style="width:90%;float:left;font-size:14px ;">&nbsp;&nbsp;&nbsp;&nbsp;<b></b></div>
	<div style="width:9%;float:left;font-size:14px ;" >
		<a href="/index.php/focuspic/focusadd" target="_self">添加</a>
	</div>
</div>

<div class="con">
	<table border="1" width="90%" style="margin-top:20px ;" cellpadding=10 cellspacing=0>
		<tr>
			<td width="10%">编号</td>
			<td width="10%">页面</td>
			<td width="30%">图片列表</td>
			<td width="5%">操作</td>
		</tr>
		<?php if(isset($list) && $list):?>
		<?php foreach($list as $v):?>
		<tr>
			<td><?php echo $v['id']?></td>
			<td><?php echo $v['page_id']?></td>
			<td><?php echo $v['pid_list']?></td>
			<td>
			<a href="/index.php/focuspic/focusadd?edit_type=1&id=<?php echo $v['id']?>" target="_self">编辑</a>
			<a href="/index.php/focuspic/del?id=<?php echo $v['id']?>" target="_self">删除</a>
			</td>
		</tr>
		<?php endforeach;?>
		<?php endif;?>
	</table>
</div>
