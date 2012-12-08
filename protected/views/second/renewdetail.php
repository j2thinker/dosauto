<div class="nav">
	<div style="width:85%;float:left;font-size:14px ;"></div>
	<div style="width:15%;float:left;font-size:14px ;" >
		
	</div>
</div>

<div class="con">
		<?php if(count($info)):?>
		<table width="800px" border="1" cellspacing="0" cellpadding="0" >
		  <tr>
		  	<td align="left" valign="top">姓名:</td>
		    <td align="left" valign="top"><?php echo $info['name'];?></td>
		  </tr>
		  <tr>
		  	<td align="left" valign="top">性别:</td>
		    <td align="left" valign="top"><?php if($info['sex'] == 1){echo '男';}elseif ($info['sex'] == 2){echo '女';}else{echo '未录入性别';}?></td>
		  </tr> 
		  
		  <tr>
		  	<td align="left" valign="top">联系电话</td>
		    <td align="left" valign="top"><?php echo $info['tel'];?></td>
		  </tr>
		  
		  <tr>
		  	<td align="left" valign="top">联系地址</td>
		    <td align="left" valign="top"><?php echo $info['contact_addr'];?></td>
		  </tr>
		  
		  <tr>
		  	<td align="left" valign="top">email</td>
		    <td align="left" valign="top"><?php echo $info['email'];?></td>
		  </tr>
		  <tr>
		  	<td align="left" valign="top">拟置换的新车详细说明</td>
		    <td align="left" valign="top"><?php echo $info['new_info'];?></td>
		  </tr>
		  <tr>
		  	<td align="left" valign="top">录入时间</td>
		    <td align="left" valign="top"><?php echo date("Y-m-d H:i:s",$info['ctime']);?></td>
		  </tr>
		  <tr>
		  	<td align="left" valign="top">车辆型号</td>
		    <td align="left" valign="top"><?php echo $info['cat'];?></td>
		  </tr>
		  
		    <tr>
		  	<td align="left" valign="top">发动机排量</td>
		    <td align="left" valign="top"><?php echo $info['motor_output'];?></td>
		  </tr>
		    <tr>
		  	<td align="left" valign="top">变速箱类型</td>
		    <td align="left" valign="top"><?php echo $info['gearbox'];?></td>
		  </tr>
		  
		    <tr>
		  	<td align="left" valign="top">行驶里程</td>
		    <td align="left" valign="top"><?php echo $info['roadhaul'];?></td>
		  </tr>
		  
		    <tr>
		  	<td align="left" valign="top">发动机类型</td>
		    <td align="left" valign="top"><?php echo $info['motor_cate'];?></td>
		  </tr>
		  
		  <tr>
		  	<td align="left" valign="top">外部颜色</td>
		    <td align="left" valign="top"><?php echo $info['color'];?></td>
		  </tr>
		  
		  <tr>
		  	<td align="left" valign="top">询问店名 </td>
		    <td align="left" valign="top"><?php echo $info['ask_shop_name'];?></td>
		  </tr>
		  
		  <tr>
		  	<td align="left" valign="top">上牌时间 </td>
		    <td align="left" valign="top"><?php echo $info['plate_number_time'];?></td>
		  </tr>
		  
		  <tr>
		  	<td align="left" valign="top">详细说明 </td>
		    <td align="left" valign="top"><?php echo $info['old_info'];?></td>
		  </tr>
		  
		 <a href="javascript:history.go(-1);">返回上一页</a>
	  </table>
	<?php else:?>
		暂无记录
	<?php endif;?>
</div>