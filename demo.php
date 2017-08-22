<?php
echo $_SERVER['HTTP_HOST'];
//echo $_SERVER['REQUEST_URI'];
$getIp='119.130.104.196' ;
echo 'IP:',$getIp;
echo '<br/>';
$content = file_get_contents("http://api.map.baidu.com/location/ip?ak=YWNt8VcHK7Goj1yljLlMVHnWl6ZWS26t&ip={$getIp}&coor=bd09ll");
$json = json_decode($content);
echo 'log:',$json->{'content'}->{'point'}->{'x'};//按层级关系提取经度数据
echo '<br/>';
echo 'lat:',$json->{'content'}->{'point'}->{'y'};//按层级关系提取纬度数据
echo '<br/>';
print $json->{'content'}->{'address'};//按层级关系提取address数
echo $json->{'content'}->{'address_detail'}->{'city_code'};
print_r($json);