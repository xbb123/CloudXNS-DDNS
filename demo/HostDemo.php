<?php

/**
 * 主机记录的接口逻辑处理的Demo
 * 
 * @author CLoudXNS <support@cloudxns.net>
 * @link https://www.cloudxns.net/
 * @copyright Copyright (c) 2015 Cloudxns.
 */
require_once 'Config.inc.php';


/**
 * 获取主机列表
 * 
 * @param integer $domainId  域名ID
 * @param integer $offset 记录开始的偏移,第一条记录为 0
 * @param integer $rowNum 要获取的记录的数量,最大可取 2000条
 * @return string
 */
echo $api->host->hostList(48771, 0, 30);

