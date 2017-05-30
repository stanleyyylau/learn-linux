## 1.1 Mysql安装
+ 需要先安装MySQL
+ 按照[LAMP环境搭建](http://www.apelearn.com/study_v2/chapter17.html) 这个步骤安装
+ 下载包的时候注意32位是64位的区别
+ Port和socket都可以通信
+ 拷贝一个配置文件
+ 拷贝一个驱动脚本
```
log-bin=mysql-bin

启动之后
ps aux |grep mysql 看看进程是否在运行
netstat -lnp |grep mysql 看看端口
```
