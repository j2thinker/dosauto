<div class="nav">
	<div style="width:90%;float:left;font-size:14px ;">&nbsp;&nbsp;&nbsp;&nbsp;<b>招聘分类名</b></div>
	<div style="width:9%;float:left;font-size:14px ;" >
		<a href="/index.php/adintro/joinuscatadd" target="_self">添加招聘分类名</a>
	</div>
</div>

<div class="con">
	<table border="1" width="80%" style="margin-top:20px ;" cellpadding=10 cellspacing=0>
		<tr>
			<td width="10%">编号</td>
			<td width="60%">分类</td>
			<td width="10%">操作</td>
		</tr>
		<?php if(isset($list) && $list):?>
		<?php foreach($list as $v):?>
		<tr>
			<td><?php echo $v['id']?></td>
			<td><?php echo $v['cate_name']?></td>
			<td>
			<a href="/index.php/adintro/joinuscatadd?edit_type=1&id=<?php echo $v['id']?>" target="_self">编辑</a>
			<a href="/index.php/adintro/joinuscatdelete?id=<?php echo $v['id']?>" target="_self">删除</a>
			</td>
		</tr>
		<?php endforeach;?>
		<?php endif;?>
	</table>
</div>
