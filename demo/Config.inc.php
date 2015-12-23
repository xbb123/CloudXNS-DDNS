<?php
/**
 * 导入相关的文件
 *
 * @author CLoudXNS <support@cloudxns.net>
 * @link https://www.cloudxns.net/
 * @copyright Copyright (c) 2015 Cloudxns.
 */
require_once '../src/Api.php';


use Cloudxns\Api;

$api = new Api();
$api->setApiKey('XXXX');       //需要替换
$api->setSecretKey('XXXX');    //需要替换
$api->setProtocol(false);      //true使用https接口，需要配置ssl根证书