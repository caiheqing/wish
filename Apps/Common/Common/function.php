<?php
//格式化打印数组
function p($array)
{
    dump($array, TRUE, '<pre>', 0);
}
/*
 *处理表情 
Array(
    [0] =Array
        (
            [0] =[花心]
            [1] =[花心]
            [2] =[钱]
            [3] =[抱抱]
        )
)
 */
function face($content)
{
    preg_match_all('/\[.*?\]/is', $content, $arr);
    $face=F('face','','./Data/');
    foreach ($arr[0] as $v)
    {
        foreach ($face as $key=>$value)
        {
            if($v=='['.$value.']')
            {
                $content=  str_replace($v,'<img src="'.__ROOT__.'/Public/Images/phiz/'.$key.'.gif"/>',$content);
            }
            continue;;
        }
    }
    return $content;    
}

