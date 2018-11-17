<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>姓名评测工具</title>
<link rel="stylesheet" href="main.css">
<link rel="icon" href="favicon.ico">
<script src="jquery-3.3.1.min.js"></script>
<script type="text/javascript">
$(document).ready(function(){
	//$("body").css("width", window.screen.width * window.devicePixelRatio);
	$("body").css("width", window.innerWidth);
	$("body").css("height", window.innerHeight);
$(window).resize(function () {
	$("body").css("width", window.innerWidth);
	$("body").css("height", window.innerHeight);
});
});
	</script>
<script src="main.js"></script>
</head>


<body>
<div class="content">
<?php
	if($_GET[name]=="张宇婷" || $_GET[name]=="Gloria Zhang" || $_GET[name]=="Gloria" || $_GET[name]=="gloria")
	{	
		echo '<img src="img/zyt.jpg" width="490px;">';
	}
?>
<span style="align-content: center" class="Startext">

<form method = "get" action = "<?php echo $_SERVER['PHP_SELF'] ?>" >
	你的名字：<input height="40px" width="360px;" style="font-size: 40px" type= "text" name = "name" value="<?php if(empty($_GET[name]) == false) echo $_GET[name];  ?>">
	<input height="40px" style="font-size: 35px" type = "submit">
</form>
<?php
	function checkname($name){
		if($name == '刘希言') return 1;
		if($name == '李逸坦') return 1;
		if($name == '赵秀兰') return 1;
		if($name == '刘启东') return 1;
		if($name == '任羽茜') return 1;
		if($name == '张宇婷') return 1;
		if($name == 'Gloria') return 1;
		if($name == 'Gloria Zhang') return 1;
		if($name == 'gloria') return 1;
		return 0;
	}
	$str = $_GET[name];
	if(empty($str) == FALSE && checkname($str)==1) {
		echo '<span class = "Startextsmall">Amadeus Stardust System is connected:<br>';
		echo '<button onClick="show(\''.$str.'\')">点击查看对你的评价</button><br></span>';
	
	}
	else{
		if($str == ""){}
	else{
		echo '认证失败!';
	}
	}
?>
<span id="words"></span><br>

</span>
</div>
</body>
</html>