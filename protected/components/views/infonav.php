<!-- <div class="dingtuk"><img src="/images/gs_ding_tu.jpg"/></div>  -->
<?php if (count($ding_img_urls)>1):?>
<script>
	$(function(){
		$('#slides').slides({
			preload: true,
			preloadImage: '/images/focus/loading.gif',
			play: 3000,
			pause: 2500,
			hoverPause: true,
			animationStart: function(current){
				if (window.console && console.log) {
					// example return of current slide number
					console.log('animationStart on slide: ', current);
				};
			},
			animationComplete: function(current){
				if (window.console && console.log) {
					// example return of current slide number
					console.log('animationComplete on slide: ', current);
				};
			},
		});
	});
</script>
<div id="example">
	<div id="slides">
		<div class="slides_container" style="overflow: hidden; position: relative; display: block; background: url(&quot;/images/loading.gif&quot;) no-repeat scroll 50% 50% transparent;">
			<?php foreach($ding_img_urls as $v):?>
			<div class="slide" style="position: absolute; top: 0px; left: 300px; z-index: 0; display: none;">
				<a target="_blank" title="Taxi " href="">
				<img height="400" width="1090" alt="Slide 2" src="<?php echo $v;?>">
				</a>
			</div>
			<?php endforeach;?>
		</div>
	</div>
</div>
<?php else:?>

<?php endif;?>



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