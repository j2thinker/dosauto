<div class="nav">
	<div style="width:90%;float:left;font-size:14px ;">&nbsp;&nbsp;&nbsp;&nbsp;<b>焦点图</b></div>
	<div style="width:9%;float:left;font-size:14px ;" >
		<a href="/index.php/focuspic/picadd" target="_self">添加焦点图</a>
	</div>
</div>

<div class="con">
	<table border="1" width="90%" style="margin-top:20px ;" cellpadding=10 cellspacing=0>
		<tr>
			<td width="10%">编号</td>
			<td width="10%">图片</td>
			<td width="30%">图片链接</td>
			<td width="5%">操作</td>
		</tr>
		<?php if($list):?>
		<?php foreach($list as $v):?>
		<tr>
			<td><?php echo $v['pid']?></td>
			<td><?php echo $v['pic_src']?></td>
			<td><?php echo $v['pic_link']?></td>
			<td>
			<a href="/index.php/focuspic/delete?pid=<?php echo $v['pid']?>" target="_self">删除</a>
			</td>
		</tr>
		<?php endforeach;?>
		<?php endif;?>
	</table>
</div>
