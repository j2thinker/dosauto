<div class="dingtuk"><img src="/images/xw_ding_tu.jpg"/></div>

<div class="gs_btk">
<div class="zuo"><img src="/images/xw_bt_zhongxin.jpg"/></div>
<div class="you">
<table border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td><img src="/images/fd_kf1.jpg" onmouseover="this.src='tupian/fd_kf2.jpg'" onmouseout="this.src='tupian/fd_kf1.jpg'"/></td>
    <td>&nbsp;</td>
    <td><a href="gc_jisuanqi.html"><img src="/images/fd_jsq1.jpg" onmouseover="this.src='/images/fd_jsq2.jpg'" onmouseout="this.src='/images/fd_jsq1.jpg'"/></a></td>
    <td>&nbsp;</td>
    <td><a href="sh_shijia.html"><img src="/images/fd_sj1.jpg" onmouseover="this.src='/images/fd_sj2.jpg'" onmouseout="this.src='/images/fd_sj1.jpg'"/></a></td>
    <td>&nbsp;</td>
    <td><a href="gc_yuding.html"><img src="/images/fd_yd1.jpg" onmouseover="this.src='/images/fd_yd2.jpg'" onmouseout="this.src='/images/fd_yd1.jpg'"/></a></td>
  </tr>
</table>

</div>
</div>

<div class="gs_lbk hei_12">
<ul>
<li class="dqli">最新活动</li>
<li><a href="xw_cuxiao.html">优惠促销</a></li>
<li><a href="xw_gongsi.html">公司新闻</a></li>
<li><a href="xw_hangye.html">行业新闻</a></li>
<li><a href="xw_fuwu.html">衍生服务</a></li>
<li><a href="xw_tuangou.html">团购消息</a></li>
<li class="hli"><a href="xw_baoyang.html">保养讲堂</a></li>
</ul>
</div>


<div class="xw_zhutik hui_12 hangg2">
<ul>
	<?php foreach ($reclist as $key => $rec) :?>
	<li> <a href="/index.php/inform/reclist?nid=<?php echo $rec['id']?>"><img src="/images/xw_tu1.jpg"/></a><br />
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


<div class="di_dhk huis_12">
<div class="zuo"><table border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td valign="bottom">所在位置：</td>
    <td width="20" valign="bottom"><a href="index.html"><img src="/images/di_dh_shouye.jpg"/></a></td>
    <td valign="bottom"><a href="index.html">首页</a> > 新闻中心 > 最新活动</td>
  </tr>
</table>
</div>
<div class="you"><a href="#top"><img src="/images/di_dh_zhiding.jpg"/></a></div>