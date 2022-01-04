<?php
$nic = 'eth0'; //主网卡名称
$url = 'https:/yinhee.cc/modules/addons/PortForward/apicall.php';
$key = '1105397382'; //在WHMCS设置的key
$sourceip = ''; //注意，这里并不是外网IP，而是在 ifconfig 中主网卡的IP地址
$magnification = '1'; //流量倍率 默认为1,双向计算，如需单向计算，输入0.5
$node_bw_max = '99999'; //mbps
$burst = 'true'; //带宽突发