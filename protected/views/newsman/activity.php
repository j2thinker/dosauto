<div class="nav">
	<div style="width:90%;float:left;font-size:14px ;">&nbsp;&nbsp;&nbsp;&nbsp;<b><?php echo $cname ;?>列表</b></div>
	<div style="width:9%;float:left;font-size:14px ;" >
		<a href="/index.php/newsman/addinfo?cid=<?php echo $category ;?>" target="_self">添加<?php echo $cname ;?></a>
	</div>
</div>
<div class="con">
	<table border="1" width="98%" style="margin-top:20px ;" cellpadding=10 cellspacing=0>
		<tr>
			<td width="10%"><b>编号</b></td>
			<td width="50%"><b><?php echo $cname ;?>标题</b></td>
			<td width="20%"><b>发表时间</b></td>
			<td width="8%"><b>权重</b></td>
			<td width="12%"><b>操作</b></td>
		</tr>
		<?php if(!empty($reclist)) :?>
			<?php foreach ($reclist as $key => $val):?>
			<tr>
				<td><?php echo $val['id'] ;?></td>
				<td><?php echo $val['title'] ;?></td>
				<td><?php echo date("Y-m-d H:i:s" ,$val['ctime']) ;?></td>
				<td><?php echo $val['priority'] ;?></td>
				<td><a href="/index.php/newsman/editinfo?id=<?php echo $val['id'] ;?>">编辑</a>　<a href="javascript:;" rid="<?php echo $val['id'] ;?>" class="drec">删除</a></td>
			</tr>
			<?php endforeach;?>
			<tr>
				<td colspan="5" align="center">
					<?php    
					    $this->widget('CLinkPager',array(    
					        'header'=>'',    
					        'firstPageLabel' => '首页',    
					        'lastPageLabel' => '末页',    
					        'prevPageLabel' => '上一页',    
					        'nextPageLabel' => '下一页',    
					        'pages' => $pages,    
					        'maxButtonCount'=>13    
					        )    
					    );    
					    ?> 
				</td>
			</tr>
		<?php else :?>
		<tr>
			<td colspan="5">未发现符合条件的记录</td>
		</tr>
		<?php endif ;?>
	</table>
</div>