<?php
$s1='Mon-Tue-Wed-Thu-Fri';
$days_array=explode('-',$s1);
print_r($days_array);

$arr=array('mon','tue','wed','thu','fri');
echo '<br/>';
$s2=implode(',',$arr);
echo $s2;
?>