<?php
require_once 'lib.php';

function test_cache(){
    set_v('hello', '123', 2);
    $v = get_v('hello');
    sleep(3);
    $v1 = get_v('hello');
    if($v == 123){
        var_dump('test_cache    '.'ok');
    } else {
        var_dump('test_cache    '.'fail');
    }
    if($v1 == null){
        var_dump('test_cache    '.'ok');
    } else {
        var_dump('test_cahce    '.'fail');
    }
}
test_cache();

function test_vlog(){
    $a = array('a'=>232, 'b'=>'dfsdf');
    vlog('test_vlog', $a);
}
test_vlog();
