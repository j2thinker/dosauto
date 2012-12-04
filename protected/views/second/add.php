<script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl;?>/kindeditor/kindeditor-min.js"></script>
<div class="nav">
	<div style="width:90%;float:left;font-size:14px ;">&nbsp;&nbsp;&nbsp;&nbsp;<b><?php if( isset($is_edit) && $is_edit ):?>修改<?php else:?>添加<?php endif?> <?php if(isset($from_best) && $from_best):?>汽车精品<?php else:?>二手车源<?php endif?>信息</b></div>
</div>
<div class="con">
	<form method="post" action="/index.php/second/save<?php if(isset($from_best) && $from_best):?>?from=best<?php endif;?>">
	<table border="1" width="98%" style="margin-top:20px ;" cellpadding=10 cellspacing=0>
		<tr>
			<td width="10%">标题</td>
			<td width="90%" align="left">
				<input type="text" name="title" size="90" value="<?php if($list['title']) echo $list['title'];?>" />
			</td>
		</tr>
		<tr>
			<td width="10%">车型/车系</td>
			<td width="90%" align="left">
				<input type="text" name="cate" size="90" value="<?php if($list['cate']) echo $list['cate'];?>" />
			</td>
		</tr>
		<tr>
			<td width="10%">发动机</td>
			<td width="90%" align="left">
				<input type="text" name="motor" size="90" value="<?php if($list['motor']) echo $list['motor'];?>" />
			</td>
		</tr>
		
		
		<tr>
			<td width="10%">变速箱</td>
			<td width="90%" align="left">
				<input type="text" name="gearbox" size="90" value="<?php if($list['gearbox']) echo $list['gearbox'];?>" />
			</td>
		</tr>
				
		<tr>
			<td width="10%">排量(毫升)</td>
			<td width="90%" align="left">
				<input type="text" name="outpub" size="90" value="<?php if($list['outpub']) echo $list['outpub'];?>" />
			</td>
		</tr>
				
		<tr>
			<td width="10%">外部颜色</td>
			<td width="90%" align="left">
				<input type="text" name="color" size="90" value="<?php if($list['color']) echo $list['color'];?>" />
			</td>
		</tr>		
		<tr>
			<td width="10%">行驶里程(km)</td>
			<td width="90%" align="left">
				<input type="text" name="roadhaul" size="90" value="<?php if($list['roadhaul']) echo $list['roadhaul'];?>" />
			</td>
		</tr>		
		<tr>
			<td width="10%">上牌日期</td>
			<td width="90%" align="left">
				<input type="text" name="plate_number_time" size="90" value="<?php if($list['plate_number_time']) echo $list['plate_number_time'];?>" />
			</td>
		</tr>		
		<tr>
			<td width="10%">价格(RMB)</td>
			<td width="90%" align="left">
				<input type="text" name="price" size="90" value="<?php if($list['price']) echo $list['price'];?>" />
			</td>
		</tr>		
		<tr>
			<td width="10%">发布日期</td>
			<td width="90%" align="left">
				<input type="text" name="pubtime" size="90" value="<?php if($list['pubtime']) echo $list['pubtime'];?>" />
			</td>
		</tr>		
		<tr>
			<td width="10%">发布单位</td>
			<td width="90%" align="left">
				<input type="text" name="pubcomp" size="90" value="<?php if($list['pubcomp']) echo $list['pubcomp'];?>" />
			</td>
		</tr>
		
		<tr>
			<td width="10%">联系电话</td>
			<td width="90%" align="left">
				<input type="text" name="contract_tel" size="90" value="<?php if($list['contract_tel']) echo $list['contract_tel'];?>" />
			</td>
		</tr>
		
		<tr>
			<td width="10%">图片1</td>
			<td width="90%" align="left">
				<input type="file" name="pic_one" />
			</td>
		</tr>
		
		<tr>
			<td width="10%">图片2</td>
			<td width="90%" align="left">
				<input type="file" name="pic_two" />
			</td>
		</tr>
		
		<tr>
			<td width="10%">图片3</td>
			<td width="90%" align="left">
				<input type="file" name="pic_three" />
			</td>
		</tr>
		
		<tr>
			<td width="10%">图片4</td>
			<td width="90%" align="left">
				<input type="file" name="pic_four" />
			</td>
		</tr>
		
		<tr>
			<td width="10%">车源说明</td>
			<td width="90%" align="left">
				<textarea rows="20" cols="100" name="auto_info" id="content" ><?php if($list['auto_info']) echo $list['auto_info'];?></textarea>
			</td>
		</tr>
		
		
		<?php if(!isset($from_best)):?>
			<tr>
				<td width="10%">是否为精品</td>
				<td width="90%" align="left">
					<input type="radio" name="is_best" value="0" <?php if(isset($list['is_best']) && $list['is_best']):?> <?php else:?>checked="true"<?php endif?> />正常
					<input type="radio" name="is_best" value="1" <?php if(isset($list['is_best']) && $list['is_best']):?>checked="true" <?php endif?>/>精品
				</td>
			</tr>
		<?php endif?>
		
		<tr>
			<td width="10%">状态</td>
			<td width="90%" align="left">
				<input type="radio" name="state" value="0" <?php if(isset($list['state']) && $list['state']):?> <?php else:?>checked="true"<?php endif?> />正常
				<input type="radio" name="state" value="1" <?php if(isset($list['state']) && $list['state']):?>checked="true" <?php endif?>/>过期
			</td>
		</tr>
		
		<tr>
			<td colspan="2" align="center">
				<?php if( isset($is_edit) && $is_edit ):?>
					<input type="hidden"  name="id" value="<?=$list['id']?>"/>
				<?php endif?>
				<?php if(isset($from_best) && $from_best):?>
					<input type="hidden"  name="is_best" value="1"/>
				<?php endif?>
				<input type="submit" value="<?php if( isset($is_edit) && $is_edit ):?>确认修改<?php else:?>添加<?php endif?>" /> <input type="button" value="返回上一页" onclick="javascript:history.go(-1);" />
			</td>
		</tr>
	</table>
	</form>
</div>
<script type="text/javascript">
KindEditor.ready(function(K) {
	K.create('#content', {themeType : 'default'});
});
</script>