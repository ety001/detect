<?php
require_once 'lib.php';

function test_cache(){
    set_v('hello', '123', 2);
    $v = get_v('hello');
    vprint('======test cache start======');
    if($v == 123){
        vprint('test_cache1    '.'ok');
    } else {
        vprint('test_cache1    '.'fail');
    }
    flush();
    sleep(3);
    $v1 = get_v('hello');
    if($v1 == null){
        vprint('test_cache2    '.'ok');
    } else {
        vprint('test_cahce2    '.'fail');
    }
    vprint('======test cache end======'."\n");
}
test_cache();

function test_vlog(){
    vprint('======test vlog start======');
    $a = array('a'=>232, 'b'=>'dfsdf');
    $filename = vlog('test_vlog', $a);
    vprint('Log file is '.$filename);
    vprint('======test vlog end======'."\n");
}
test_vlog();
