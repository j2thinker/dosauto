<div class="dingtuk"><img src="/images/gs_ding_tu.jpg"/></div>

<!-- 信息导航 -->
<?php $this->widget("InfonavWidget") ;?>
<?php if(isset($is_car_detail) && $is_car_detail):?>
	<?php $this->widget("SecondcarDetailWidget") ;?>
<?php else:?>
	<div class="es_jingpink huis_12 hangg2">
	<ul>
	<li>
		<?php foreach ($list as $k => $catinfo):?>
		<table width="0" border="0" cellspacing="0" cellpadding="0">
		  <tbody><tr>
		    <td><a href="/index.php/secondcar/boutique?id=<?php echo $catinfo['id']; ?>"><img src="/images/es_jingpin1.jpg" width="189" height="124"></a></td>
		  </tr>
		  <tr>
		    <td height="30" align="center"><?php echo $catinfo['title'];?></td>
		  </tr>
		</tbody></table>
		<?php endforeach;?>
	</li>
	
	</ul>
	
	
	<div class="zuo ym_k hei_12">
	
	<span><a href="javascript:void(0)">&lt;</a></span>
	<span class=" dqspan"><a href="javascript:void(0)">1</a></span>
	<span><a href="javascript:void(0)">2</a></span>
	<span><a href="javascript:void(0)">3</a></span>
	<span><a href="javascript:void(0)">4</a></span>
	<span><a href="javascript:void(0)">&gt;</a></span>
	
	</div>
	<div class="qingchu"></div>
	</div>
<?php endif;?>