<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<title></title>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<script src="//code.jquery.com/jquery-1.11.1.js"></script>
<script src="//code.jquery.com/jquery-migrate-1.2.1.js"></script>
<script type="text/javascript" src="<?php echo $rootPath;?>scripts/jsscript.js" ></script>
<script src="<?php echo $rootPath;?>scripts/jqscript.js" ></script>

<link href="<?php echo $rootPath;?>styles/default.css" rel="stylesheet" type="text/css"/>
</head>

<body>
  <div class="main">
	
	<div class="left_content" id="left_content">
		
		<div class="personal_information"><?php require($rootPath.'personal_information.php'); ?></div>
		
		<div class="showcase"><?php require($rootPath.'showcase_page.php'); ?></div>
	</div>
	<div class="right_content" id="right_content"><?php require($rootPath.'page_content.php'); ?></div>   
  </div>
</body>
</html>
