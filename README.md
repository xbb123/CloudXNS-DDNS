# CloudXNS-DDNS

代码来自：https://github.com/CloudXNS/CloudXNS-API-SDK-PHP

需要PHP5.4及以上

1. 针对ADSL线路动态更新DNS(即DDNS)纪录，搭配cron使用，间隔1分钟自动执行1次
2. 拷贝即可安装，比原来的composer方式更简单，我的CentOS6.x上安装composer失败鸟
3. 增加了获取IP地址的能力

本代码部署在服务器A上

服务器B定时调用RecordDemo.php，服务器B的IP地址一旦发生变化，就会被更新到DNS纪录里了。重复的IP地址会被忽略掉，使用session保存重复的IP地址

下面是Cron配置

*/1 * * * * curl -b cookies.txt -c cookies.txt http://AAAAA.com/cloudxns/demo/RecordDemo.php
