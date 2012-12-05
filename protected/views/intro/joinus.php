<div class="dingtuk"><img src="tupian/gs_ding_tu.jpg"></div>


<div class="gs_btk">
<div class="zuo"><img src="tupian/gs_bt_jieshao.jpg"></div>
<div class="you">
<table border="0" cellpadding="0" cellspacing="0">
  <tbody><tr>
    <td><img src="tupian/fd_kf1.jpg" onmouseover="this.src='tupian/fd_kf2.jpg'" onmouseout="this.src='tupian/fd_kf1.jpg'"></td>
    <td>&nbsp;</td>
    <td><a href="gc_jisuanqi.html"><img src="tupian/fd_jsq1.jpg" onmouseover="this.src='tupian/fd_jsq2.jpg'" onmouseout="this.src='tupian/fd_jsq1.jpg'"></a></td>
    <td>&nbsp;</td>
    <td><a href="sh_shijia.html"><img src="tupian/fd_sj1.jpg" onmouseover="this.src='tupian/fd_sj2.jpg'" onmouseout="this.src='tupian/fd_sj1.jpg'"></a></td>
    <td>&nbsp;</td>
    <td><a href="gc_yuding.html"><img src="tupian/fd_yd1.jpg" onmouseover="this.src='tupian/fd_yd2.jpg'" onmouseout="this.src='tupian/fd_yd1.jpg'"></a></td>
  </tr>
</tbody></table>

</div>
</div>

<div class="gs_lbk hei_12">
<ul>

<li><a href="/index.php/site/activity">公司简介</a></li>
<li><a href="/index.php/site/sale">品牌历史</a></li>
<li><a href="/index.php/site/compnews">销售团队</a></li>
<li><a href="/index.php/site/businews">联系我们</a></li>
<li class="hli dqli">加入我们</li>
</ul>
</div>

<div class="gs_jiaruk hui_12 hangg2">

<span class="hei_18">一汽—大众汽车</span><br>
在彼扬国际，我们推崇简单、务实的工作方式，在轻松、快乐的工作环境中积累和分享。<br>
你不只是在彼扬国际工作，是和一群志趣相投的人一起生活！<br><br>
如无特别说明，工作地点均位于北京。你可以用任何方式介绍自己，比如，附上过去引以为豪的一个创造。 如果你愿意，请发简历的同时附上生活照，将有助于我们更快速、全面的认识你。<br><br>

<span class="hei_18">招聘职位</span><br>
<div class="gs_zplbk">
<ul>
<?php if($cat_list):?>
<?php foreach ($cat_list as $v):?>
<?php if ($cat_id == $v['id']):?>
<li class="dqli"><?php echo $v['cate_name']?></li>
<?php else:?>
<li><a href="/index.php/site/joinus?cat_id=<?php echo $v['id'];?>"><?php echo $v['cate_name']?></a></li>
<?php endif;?>
<?php endforeach;?>
<?php endif;?>
</ul>
</div>
<div class="gs_zpnrk">
<ul>
<?php foreach ($jobs_list as $k=>$v):?>
<li><a href="#zp<?php echo $k;?>"><?php echo $v['jobs_name'];?></a></li>
<?php endforeach;?>
</ul>
</div>

<?php foreach ($jobs_list as $k=>$v):?>
<div class="gs_zpxmk">
<div class="gs_zpbtk">
<table border="0" cellpadding="0" cellspacing="0" width="100%">
  <tbody><tr>
    <td class="lai_14" align="left" width="150"><a name="zp<?php echo $k;?>"></a><?php echo $v['jobs_name'];?></td>
    <td class="lai_12" align="left"><?php echo $v['email'];?></td>
    <td align="right"><a href="#top">返回顶部</a></td>
  </tr>
</tbody></table>
</div>
<div class="gs_zpyqk">
职位描述:
<br>
<?php echo $v['jobs_info'];?>
</div>
</div>
<?php endforeach;?>

</div>

<div class="di_dhk huis_12">
<div class="zuo"><table border="0" cellpadding="0" cellspacing="0">
  <tbody><tr>
    <td valign="bottom">所在位置：</td>
    <td valign="bottom" width="20"><a href="index.php"><img src="tupian/di_dh_shouye.jpg"></a></td>
    <td valign="bottom"><a href="index.php">首页</a> &gt; <a href="/index.php/site/intro/1">公司介绍</a>  &gt; 加入我们</td>
  </tr>
</tbody></table>
</div>
<div class="you"><a href="#top"><img src="tupian/di_dh_zhiding.jpg"></a></div>
<div class=" qingchu"></div>
</div>





