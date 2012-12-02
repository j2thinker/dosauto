<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Frameset//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-frameset.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>管理系统后台</title>
</head>
<frameset rows="59,*" cols="*" frameborder="no" border="0" framespacing="0">
  <frame src="<?php echo Yii::app()->request->baseUrl; ?>/index.php/admin/topnav" name="topFrame" scrolling="No" noresize="noresize" id="topFrame" title="topFrame" />
  <frameset cols="213,*" frameborder="no" border="0" framespacing="0">
    <frame src="<?php echo Yii::app()->request->baseUrl; ?>/index.php/admin/leftnav" name="leftFrame" scrolling="No" noresize="noresize" id="leftFrame" title="leftFrame" />
    <frame src="<?php echo Yii::app()->request->baseUrl; ?>/index.php/admin/rightnav" name="mainFrame" id="mainFrame" title="mainFrame" />
  </frameset>
</frameset>
</html>
