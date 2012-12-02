<div class="nav">
	<div style="width:90%;float:left;font-size:14px ;">&nbsp;&nbsp;&nbsp;&nbsp;<b><?php echo $cname ;?>列表</b></div>
	<div style="width:9%;float:left;font-size:14px ;" >
		<a href="/index.php/newsman/addinfo?cid=<?php echo $category ;?>" target="_self">添加<?php echo $cname ;?></a>
	</div>
</div>
<div class="con">
	<table border="1" width="98%" style="margin-top:20px ;" cellpadding=10 cellspacing=0>
		<tr>
			<td width="10%">编号</td>
			<td width="50%"><?php echo $cname ;?>标题</td>
			<td width="20%">发表时间</td>
			<td width="8%">权重</td>
			<td width="12%">操作</td>
		</tr>
		<tr>
			<td>编号</td>
			<td>标题</td>
			<td>发表时间</td>
			<td>1</td>
			<td>编辑　删除</td>
		</tr>
	</table>
</div>