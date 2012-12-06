<div class="es_xqk huis_12 hangg2">
<div class="lai_16"><?php echo $car_info['title'];?></div>
<div class="zuok">
<img src="/images/es_cheyuan_dt1.jpg" class="dt" id="estu1">
<img src="/images/es_cheyuan_dt2.jpg" class="dt yincang" id="estu2">
<img src="/images/es_cheyuan_dt3.jpg" class="dt yincang" id="estu3">
<img src="/images/es_cheyuan_dt4.jpg" class="dt yincang" id="estu4">

<a href="javascript:estu(1)"><img src="/images/es_cheyuan_xt1.jpg" class="xt"></a><a href="javascript:estu(2)"><img src="/images/es_cheyuan_xt2.jpg" class="xt"></a><a href="javascript:estu(3)"><img src="/images/es_cheyuan_xt3.jpg" class="xt"></a><a href="javascript:estu(4)"><img src="/images/es_cheyuan_xt4.jpg" class="xt xtbj"></a></div>
<div class="youk">
车型/车系：<?php echo $car_info['cate'];?><br>
发动机：<?php echo $car_info['motor'];?><br>
变速箱：<?php echo $car_info['gearbox'];?><br>
排量(毫升)：<?php echo $car_info['outpub'];?><br>
外部颜色：<?php echo $car_info['color'];?><br>
行驶里程(km)：<?php echo $car_info['roadhaul'];?><br>
上牌日期：<?php echo $car_info['plate_number_time'];?><br>
价格(RMB)：<?php echo $car_info['price'];?><br>
发布日期：<?php echo $car_info['pubtime'];?><br>
发布单位：<?php echo $car_info['pubcomp'];?><br>
联系电话：<?php echo $car_info['contract_tel'];?>
</div>
<div class="zik">
	<?php echo $car_info['auto_info'];?>
</div>
<div class="qingchu"></div>
</div>