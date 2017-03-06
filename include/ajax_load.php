<?php 

if(empty($_POST)){
    die('{"content":"少壮不努力,老大徒伤悲."}');
}
if($_POST['name']=='李白'){
    die('{"content":"床前明月光,疑是地上霜."}');
}
if($_POST['name']=='杜甫'){
    die('{"content":"安得广夏千万间,大庇天下寒士聚欢颜."}');
}