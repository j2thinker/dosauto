<div class="nav">
	<div style="width:85%;float:left;font-size:14px ;"></div>
	<div style="width:15%;float:left;font-size:14px ;" >
	</div>
</div>

<div class="con">
	
		<?php if(count($list)):?>
		<table width="800px" border="1" cellspacing="0" cellpadding="0" >
		  <tbody>
			  <th width="10%">姓名</th>
			  <th width="5%">性别</th>
			  <th width="5%%">联系电话</th>
			  <th width="20%">联系地址</th>
			  <th width="10%">email</th>
			  <th width="30%">拟置换的新车详细说明</th>
			  <th width="10%">时间</th>
			  <th width="10%">操作项</th>
		 <?php foreach ($list as $k => $info):?>
		  <tr>
		    <td align="left" valign="top"><?php echo $info['name'];?></td>
		    <td align="left" valign="top"><?php if($info['sex'] == 1){echo '男';}elseif ($info['sex'] == 2){echo '女';}else{echo '未录入性别';}?></td>
		    <td align="left" valign="top"><?php echo $info['tel'];?></td>
		    <td align="left" valign="top"><?php echo $info['contact_addr'];?></td>
		    <td align="left" valign="top"><?php echo $info['email'];?></td>
		    <td align="left" valign="top"><?php echo $info['new_info'];?></td>
		    <td align="left" valign="top"><?php echo date("Y-m-d H:i:s",$info['ctime']);?></td>
		    <td align="left" valign="top"><a href="/index.php/second/renewdetail?id=<?php echo $info['id'];?>">查看详情</a> <a href="/index.php/second/renewdel?id=<?php echo $info['id'];?>"> 删除</a></td>
		  </tr>
		 <?php endforeach;?> 
		 
		</tbody>
	  </table>
	  
	  <p></p>
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

	<?php else:?>
		暂无记录
	<?php endif;?>
</div>