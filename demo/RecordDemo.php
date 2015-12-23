<?php

/**
 * 解析记录的接口逻辑处理的Demo
 * 
 * @author CLoudXNS <support@cloudxns.net>
 * @link https://www.cloudxns.net/
 * @copyright Copyright (c) 2015 Cloudxns.
 */
require_once 'Config.inc.php';

/**
 * 获取请求方的外网IP地址
 */
 
function getIPAddress()
{
    $IPaddress='';
    if (isset($_SERVER)){
        if (isset($_SERVER["HTTP_X_FORWARDED_FOR"])){
            $IPaddress = $_SERVER["HTTP_X_FORWARDED_FOR"];
        } else if (isset($_SERVER["HTTP_CLIENT_IP"])) {
            $IPaddress = $_SERVER["HTTP_CLIENT_IP"];
        } else {
            $IPaddress = $_SERVER["REMOTE_ADDR"];
        }
    } else {
        if (getenv("HTTP_X_FORWARDED_FOR")){
            $IPaddress = getenv("HTTP_X_FORWARDED_FOR");
        } else if (getenv("HTTP_CLIENT_IP")) {
            $IPaddress = getenv("HTTP_CLIENT_IP");
        } else {
            $IPaddress = getenv("REMOTE_ADDR");
        }
    }
    return $IPaddress;
}

$clientIP = getIPaddress();


//这里稍微做了一下加密，防止别人随便请求
$encrypt = $_GET['encrypt'];

if(strcmp($encrypt, 'S9W4KdqOYqnpYWd9e4QaRPLP4paow4') != 0)
{
    echo 'Error Encrypt Code!';
    return;
}

/**
 * 获取解析记录列表
 * 
 * @param integer $domainId 域名ID
 * @param integer $hostId 主机记录 id(传 0 查全部)
 * @param integer $offset 记录开始的偏移,第一条记录为 0
 * @param integer $rowNum 要获取的记录的数量,最大可取 2000，默认取30条。
 * @return string
 */

// echo $api->record->recordList(48771, 502710, 0, 30);

/**
 * 更新解析记录
 * 
 * @param integer $domainId 域名 id
 * @param string $host 主机记录名,传空值,则主机记录名作”@”处理.
 * @param string $value 记录值, 如IP:8.8.8.8,CNAME:cname.cloudxns.net., MX: mail.cloudxns.net.
 * @param string $type 记录类型 如 A AX CNAME
 * @param integer $mx 优先级,当记录类型是 MX/AX/CNAMEX 时有效并且必选
 * @param integer $ttl TTL,范围 60-3600,不同等级域名最小值不同
 * @param integer $lineId 线路 id(通过 API 获取)
 * @param string $bakIp  存在备 ip 时可选填
 * @param integer $recordId 解析记录 id
 * @return string
 */

$host = 'dev';
echo $api->record->recordUpdate(48771, $host, $clientIP, 'A', null, 600, 1, '', 726711);

echo '<br>';

$host = 'jira';
echo $api->record->recordUpdate(48771, $host, $clientIP, 'A', null, 600, 1, '', 726705);

?>