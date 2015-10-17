<?php
function set_v($k, $v, $timeout=3600*24){
    $expire = $timeout + time();
    file_put_contents('cache/'.md5($k) , $v.'|'.$expire);
}

function get_v($k){
    $content = file_get_contents('cache/'.md5($k));
    $val = explode('|', $content);
    if($val[1]<time()){
        return null;
    } else {
        return $val[0];
    }
}

function vlog($msg, $v){
    $t = date('Y-m-d H:i:s', time());
    $filename = 'log/'.date('Ymd',time()).'.txt';
    if(file_exists($filename)){
        file_put_contents($filename , $msg . "\n" . var_export($v, true)."\n--{$t}\n\n" , FILE_APPEND);
    } else {
        file_put_contents($filename , $msg . "\n" . var_export($v, true)."\n--{$t}\n\n" );
    }
}
