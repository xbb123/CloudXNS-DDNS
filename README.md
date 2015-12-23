# CloudXNS-DDNS

代码来自：https://github.com/CloudXNS/CloudXNS-API-SDK-PHP

需要PHP5.4及以上

1. 针对ADSL线路常使用的动态DNS(即DDNS)进行了定制
2. 拷贝即可安装，比原来的composer方式更简单，我的CentOS6.x上安装compose失败鸟
3. 增加了获取IP地址的能力

本代码部署在服务器A上

服务器B定时调用RecordDemo.php，这样服务器B的IP地址就被更新到DNS纪录里了
