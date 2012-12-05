<div class="dingtuk"><img src="/images/xw_ding_tu.jpg"/></div>
<!-- 信息导航 -->
<?php $this->widget("InfonavWidget") ;?>

<div class="xw_zhutik hui_12 hangg2">
<ul>
	<?php foreach ($reclist as $key => $rec) :?>
	<li> <a href="/index.php/inform/detail?nid=<?php echo $rec['id']?>"><img src="/images/xw_tu1.jpg"/></a><br />
	<span class="hei_14"><?php echo $rec['title']?></span><br />
	<?php echo $rec['descript'] ;?>
	</li>
	<?php endforeach;?>
</ul>
<!-- 分页 -->
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
<!-- End Of 分页 -->
<div class="qingchu"></div>
</div>