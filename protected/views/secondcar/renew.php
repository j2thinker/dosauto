<div class="dingtuk"><img src="/images/gs_ding_tu.jpg"/></div>

<!-- 信息导航 -->
<?php $this->widget("InfonavWidget") ;?>

<div class="xw_zhutik huis_12 hangg2">
	<form  method="post" action="/index.php/secondcar/renewadd">
		  <table width="0" border="0" cellspacing="0" cellpadding="0">
		    <tbody><tr>
		      <td height="40" colspan="2" class="hei_14">发布置换车辆</td>
		      </tr>
		    <tr>
		      <td width="230" height="35" align="right">车辆型号
		        <input name="cat" type="text" class="bd_wbk2" id="textfield4"></td>
		      <td width="260" align="right">发动机排量
		        <input name="motor_output" type="text" class="bd_wbk2" id="textfield5"></td>
		    </tr>
		    <tr>
		      <td height="35" align="right">变速箱类型
		        <input name="gearbox" type="text" class="bd_wbk2" id="textfield2"></td>
		      <td align="right">行驶里程
		        <input name="roadhaul" type="text" class="bd_wbk2" id="textfield3"></td>
		    </tr>
		    <tr>
		      <td height="35" align="right">发动机类型
		        <input name="motor_cate" type="text" class="bd_wbk2" id="textfield7"></td>
		      <td align="right">外部颜色
		        <input name="color" type="text" class="bd_wbk2" id="textfield6"></td>
		    </tr>
		    <tr>
		      <td height="35" align="right">询问店名
		        <input name="ask_shop_name" type="text" class="bd_wbk2" id="textfield9"></td>
		      <td align="right">上牌时间
		        <input name="plate_number_time" type="text" class="bd_wbk2" id="textfield8"></td>
		      </tr>
		    
		    
		    <tr>
		      <td height="110" colspan="2" align="left" valign="bottom"><table width="100%" border="0" cellspacing="0" cellpadding="0">
		        <tbody><tr>
		          <td width="74" align="right" valign="top">详细说明</td>
		          <td align="right"><textarea name="old_info" cols="45" rows="5" class="bd_wby" id="textarea"></textarea></td>
		        </tr>
		      </tbody></table></td>
		      </tr>
		       
		  </tbody></table>
		  <div class="getiao_xuxiank"></div>
		  <table width="0" border="0" cellspacing="0" cellpadding="0">
		    <tbody><tr>
		      <td height="40" colspan="2" class="hei_14">拟置换的新车</td>
		    </tr>
		    <tr>
		      <td width="230"></td><td width="260"></td>
		    </tr>
		    
		    
		    <tr>
		      <td height="110" colspan="2" align="left" valign="bottom"><table width="100%" border="0" cellspacing="0" cellpadding="0">
		        <tbody><tr>
		          <td width="74" align="right" valign="top">详细说明</td>
		          <td align="right"><textarea name="new_info" cols="45" rows="5" class="bd_wby" id="textarea2"></textarea></td>
		        </tr>
		      </tbody></table></td>
		    </tr>
		    
		  </tbody></table>
		  <div class="getiao_xuxiank"></div>
		  <table width="0" border="0" cellspacing="0" cellpadding="0">
		    <tbody><tr>
		      <td height="40" colspan="2" class="hei_14">填写个人信息</td>
		    </tr>
		    <tr>
		      <td width="230" height="35" align="right">姓名
		        <input name="name" type="text" class="bd_wbk2" id="textfield10"></td>
		      <td width="260" align="right">性别
		        <select name="sex" class="bd_xiala" id="select3">
		          <option value="0"> </option>
		          <option value="1">男</option>
		          <option value="2">女</option>
		        </select></td>
		    </tr>
		    <tr>
		      <td height="35" align="right">联系电话
		        <input name="tel" type="text" class="bd_wbk2" id="textfield12"></td>
		      <td align="right">联系地址
		        <input name="contact_addr" type="text" class="bd_wbk2" id="textfield13"></td>
		    </tr>
		    <tr>
		      <td height="35" align="right">Email
		        <input name="email" type="text" class="bd_wbk2" id="textfield14"></td>
		      <td align="right">&nbsp;</td>
		    </tr>
		    <tr>
		      <td></td>
		    </tr>
		    
		    
		    <tr>
		      <td height="80" colspan="2" align="center" valign="middle"><input type="submit" name="button" id="button" value="提 交" class=" bd_tijiao"></td>
		    </tr>
		  </tbody></table>
  </form>
</div>