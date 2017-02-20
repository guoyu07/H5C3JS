<?php

/*
  <#日期 = "2017-2-20">
  <#时间 = "19:43:32">
  <#人物 = "buff" >
  <#备注 = " ">
 */
if($_SERVER['HTTP_REFERER']!="http://127.0.0.1:81/k_note/html5/"){
    header("location:http://127.0.0.1:81/k_note/html5/index.php");
}
$fix = explode(",", $_SERVER['QUERY_STRING']);
echo "你点击的x坐标是{$fix[0]}<br/>";
if ($fix[0] <= 85) {
    echo"点击区域是阿里巴巴的图片,将会在3秒后转到阿里巴巴首页";
    header("refresh:3,http://www.1688.com");
}
elseif ($fix[0] > 85&&$fix[0]<=140) {
    echo"点击区域是TX的图片,将会在3秒后转到TX首页";
    header("refresh:3,http://www.qq.com");
}
elseif ($fix[0] >140) {
    echo"点击区域是百度的图片,将会在3秒后转到百度首页";
    header("refresh:3,http://www.baidu.com");
}