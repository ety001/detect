<?php
require_once 'lib.php';

function test_cache(){
    set_v('hello', '123', 5);
    $v = get_v('hello');
    sleep(6);
    $v1 = get_v('hello');
    if($v == 123){
        echo 'test_cache    '.'ok';
    } else {
        echo 'test_cache    '.'fail';
    }
    if($v1 == null){
        echo 'test_cache    '.'ok';
    } else {
        echo 'test_cahce    '.'fail';
    }
}
test_cache();
