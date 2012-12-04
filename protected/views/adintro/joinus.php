<div class="nav">
	<div style="width:90%;float:left;font-size:14px ;">&nbsp;&nbsp;&nbsp;&nbsp;<b>招聘职位</b></div>
	<div style="width:8%;float:left;font-size:14px ;" >
		<a href="/index.php/adintro/joinusadd" target="_self">添加职位</a>
	</div>
</div>

<div class="con">
	<table border="1" width="80%" style="margin-top:20px ;" cellpadding=10 cellspacing=0>
		<tr>
			<td width="10%">编号</td>
			<td width="10%">职位分类</td>
			<td width="20%">职位名称</td>
			<td width="10%">职位信息</td>
			<td width="10%">email</td>
			<td width="10%">创建时间</td>
			<td width="10%">操作</td>
		</tr>
		<?php if(isset($list) && $list):?>
		<?php foreach($list as $v):?>
		<?php if($v):?>
		<tr>
			<td><?php echo $v['id']?></td>
			<td>
			<?php echo $cat_list[$v['cat_id']]['cate_name'];?>
			</td>
			<td><?php echo $v['jobs_name']?></td>
			<td><?php echo $v['jobs_info']?></td>
			<td><?php echo $v['email']?></td>
			<td><?php echo date('Y-m-d H:i:s', $v['ctime']);?></td>
			<td>
			<a href="/index.php/adintro/joinusadd?edit_type=1&id=<?php echo $v['id']?>" target="_self">编辑</a>
			<a href="/index.php/adintro/joinusdelete?id=<?php echo $v['id']?>" target="_self">删除</a>
			</td>
		</tr>
		<?php endif;?>
		<?php endforeach;?>
		<?php endif;?>
	</table>
</div>
