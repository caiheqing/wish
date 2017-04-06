<?php
/*
 * 定义的函数check_code，然后它返回真假
 */
function check_code($code, $id = ""){  
    $verify = new \Think\Verify();  
    return $verify->check($code, $id);  
}  