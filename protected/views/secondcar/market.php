<div class="dingtuk"><img src="/images/gs_ding_tu.jpg"/></div>

<!-- 信息导航 -->
<?php $this->widget("InfonavWidget") ;?>
<?php if(isset($is_car_detail) && $is_car_detail):?>
	<?php $this->widget("SecondcarDetailWidget") ;?>
<?php else:?>
<div class="es_zhutik huis_12 hangg2">
	<?php if(count($list)):?>
		<ul>
			<?php foreach($list as $key => $carinfo):?>
			
			<li><table width="0" border="0" cellspacing="0" cellpadding="0">
			  <tbody><tr>
			    <td width="160" rowspan="4"><a href="/index.php/secondcar/market?id=<?php echo $carinfo['id'];?>"><img src="/images/es_che1.jpg"></a></td>
			    <td align="left" valign="top">名称：<?php echo $carinfo['title'];?></td>
			  </tr>
			  <tr>
			    <td align="left" valign="top">车型：<?php echo $carinfo['cate']?></td>
			  </tr>
			  <tr>
			    <td align="left" valign="top">发布单位：<?php echo $carinfo['pubcomp']?></td>
			  </tr>
			  <tr>
			    <td align="left" valign="top">发布时间：<?php echo $carinfo['pubtime']?></td>
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
	<?php else:?>
		未发现符合条件的记录
	<?php endif;?>
<?php endif;?>