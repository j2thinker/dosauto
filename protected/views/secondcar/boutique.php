<div class="dingtuk"><img src="/images/gs_ding_tu.jpg"/></div>

<!-- 信息导航 -->
<?php $this->widget("InfonavWidget") ;?>
<?php if(isset($is_car_detail) && $is_car_detail):?>
	<?php $this->widget("SecondcarDetailWidget") ;?>
<?php else:?>
	<div class="es_jingpink huis_12 hangg2">
	<ul>
	<?php foreach ($list as $k => $catinfo):?>
		<li>
			<table width="0" border="0" cellspacing="0" cellpadding="0">
			  <tbody><tr>
			    <td><a href="/index.php/secondcar/boutique?id=<?php echo $catinfo['id']; ?>"><img src="/images/es_jingpin1.jpg" width="189" height="124"></a></td>
			  </tr>
			  <tr>
			    <td height="30" align="center"><?php echo $catinfo['title'];?></td>
			  </tr>
			</tbody></table>
			
		</li>
	<?php endforeach;?>
	</ul>
	
	<div class="qingchu"></div>
	</div>
	<div class="zuo ym_k hei_12">
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
	</div>
<?php endif;?>