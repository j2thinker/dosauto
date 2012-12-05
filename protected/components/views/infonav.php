<div class="gs_btk">
<div class="zuo"><img src="/images/<?php echo $navinfo['namepic'] ;?>"/></div>
<div class="you">
<table border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td><img src="/images/fd_kf1.jpg" onmouseover="this.src='/images/fd_kf2.jpg'" onmouseout="this.src='/images/fd_kf1.jpg'"/></td>
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
	<ul><?php $licss='';?>
		<?php foreach ($navinfo['actions'] as $act => $actname) :?>
			<?php if($act == $navinfo['endact']):?><?php $licss = "hli"?><?php endif ;?>
			<?php if($act == $action):?>
				<li class="dqli <?php echo $licss;?>"><?php echo $actname ;?></li>
			<?php else :?>
				<li class="<?php echo $licss ;?>">
					<a href="/index.php/<?php echo $controller ;?>/<?php echo $act ;?>"><?php echo $actname ;?></a>
				</li>
			<?php endif ;?>
		<?php endforeach;?>
	</ul>
</div>