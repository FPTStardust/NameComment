<?php
$myfile=NULL;
if($_GET[name]=="刘希言"){
	$myfile = fopen( "xiyan.txt", "r" )or die( "Unable to open file!" );
}

if($_GET[name]=="李逸坦"){
	$myfile = fopen( "yitan.txt", "r" )or die( "Unable to open file!" );
}

if($_GET[name]=="赵秀兰"){
	$myfile = fopen( "xiulan.txt", "r" )or die( "Unable to open file!" );
}

if($_GET[name]=="刘启东"){
	$myfile = fopen( "qidong.txt", "r" )or die( "Unable to open file!" );
}

if($_GET[name]=="任羽茜"){
	$myfile = fopen( "yuqian.txt", "r" )or die( "Unable to open file!" );
}

if($_GET[name]=="Agnes"){
	$myfile = fopen( "yuqian.txt", "r" )or die( "Unable to open file!" );
}

if($_GET[name]=="Agnes Ren"){
	$myfile = fopen( "yuqian.txt", "r" )or die( "Unable to open file!" );
}

if($_GET[name]=="张宇婷" || $_GET[name]=="Gloria" || $_GET[name]=="gloria" || $_GET[name]=="Gloria Zhang"){
	$myfile = fopen( "gloria.txt", "r" )or die( "Unable to open file!" );
}


while($str = fgets($myfile)){
	$a[] = $str;
}

srand(time(date()));
$r = rand(0,count($a)-1);
echo $a[$r];
fclose( $myfile );
?>