<?php

/*
<#日期 = "2017-2-19">
<#时间 = "23:42:31">
<#人物 = "buff" >
<#备注 = " ">
*/
if(!isset($_POST['username'])||!isset($_POST['email'])){
    header("location:http://127.0.0.1:81/index/php");
}
echo '<pre>';
print_r($_POST);
echo '</pre>';