<div class="nav">
	<div style="width:90%;float:left;font-size:14px ;">&nbsp;&nbsp;&nbsp;&nbsp;<b><?php echo $company_title;?></b></div>
	<div style="width:9%;float:left;font-size:14px ;" >
		<a href="/index.php/adintro/add?intro_type=<?php echo $intro_type?>" target="_self">添加<?php echo $company_title;?></a>
	</div>
</div>

<div class="con">
	<table border="1" width="90%" style="margin-top:20px ;" cellpadding=10 cellspacing=0>
		<tr>
			<td width="10%">编号</td>
			<td width="10%">标题</td>
			<td width="30%">内容</td>
			<td width="5%">操作</td>
		</tr>
		<?php if($list):?>
		<?php foreach($list as $v):?>
		<tr>
			<td><?php echo $v['id']?></td>
			<td><?php echo $v['title']?></td>
			<td><?php echo $v['content']?></td>
			<td>
			<a href="/index.php/adintro/add?edit_type=1&id=<?php echo $v['id']?>" target="_self">编辑</a>
			<a href="/index.php/adintro/del?id=<?php echo $v['id']?>" target="_self">删除</a>
			</td>
		</tr>
		<?php endforeach;?>
		<?php endif;?>
	</table>
</div>
