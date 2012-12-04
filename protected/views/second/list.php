<div class="nav">
	<div style="width:85%;float:left;font-size:14px ;">&nbsp;&nbsp;&nbsp;&nbsp;<b><?php if(isset($is_best) && $is_best):?>汽车精品<?php else:?>二手车源<?php endif?></b></div>
	<div style="width:15%;float:left;font-size:14px ;" >
		<a href="/index.php/second/add<?php if(isset($is_best) && $is_best):?>?best=1<?php endif?>" target="_self">添加<?php if(isset($is_best) && $is_best):?>汽车精品<?php else:?>二手车源<?php endif?>信息</a>
	</div>
</div>

<div class="con">
	
	<?php foreach ($list as $k => $secondinfo):?>
		<table width="0" border="0" cellspacing="0" cellpadding="0">
		  <tbody><tr>
		    <td width="160" rowspan="4"><a href="es_cheyuan_xq.html"><img src="/frontTemplates/tupian/es_che1.jpg"></a></td>
		    <td align="left" valign="top">名称：<?php echo $secondinfo['title'];?></td>
		  </tr>
		  <tr>
		    <td align="left" valign="top">车型：<?php echo $secondinfo['cate'];?></td>
		  </tr>
		  <tr>
		    <td align="left" valign="top">发布单位：<?php echo $secondinfo['pubcomp'];?></td>
		  </tr>
		  <tr>
		    <td align="left" valign="top">发布时间：<?php echo $secondinfo['pubtime'];?></td>
		  </tr>
		   <tr>
		    	<td align="center" valign="top"><a href="/index.php/second/edit?id=<?php echo $secondinfo['id'];?><?php if(isset($is_best) && $is_best):?>&from=best<?php endif;?>">编辑</a>&nbsp;&nbsp;&nbsp;&nbsp;<a href="/index.php/second/del?id=<?php echo $secondinfo['id'];?><?php if(isset($is_best) && $is_best):?>&from=best<?php endif;?>">删除</a></td>
		  </tr>
		</tbody>
	  </table>
  	<?php endforeach;?>
  

</div>