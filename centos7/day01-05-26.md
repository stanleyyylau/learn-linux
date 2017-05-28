## 1.1 学习之初

### 学这个课程目的是？
+ Setup git server
+ Setup CI server
+ Setup development environment or docker, so every time user git push, the + code will automatically deployed
+ Master nginx and being able to combile nginx with node
+ Use cool features like load balance
+ Learn server administration tricks so I know when I need to upgrade my server, what’s taking up server resources

### 学完之后要做的职位是什么？
NodeJS开发

### 学完之后要在哪个城市发展？
深圳

### 设定目标
+ 何时学完？
+ 何时跳槽？
+ 第一份工作薪资？
+ 一后年薪资？两年后？

### 学习方法
预习和复习的重要性(预习可以先看看看内部教材或阿铭linux第三版)
当日事当日毕
记笔记
利用好资源

老王的学习方法 http://ask.apelearn.com/question/16773

## 1.2 约定
+ 系统CentOS7.3系统
+ 虚拟软件VMware workstation 10
+ 终端 puTTY + Xshell
+ 印象笔记
+ 51CTO博客 blog.51cto.com  （建议写博客）
+ keepass keepass.info
+ 百度网盘
+ 各软件版本会变动
+ r.aminglinux.com 会更新
+ 课程用到的代码及命令
+ centos7.aminglinux.com

## 1.3 认识Linux
Linux是一个操作系统
运行PPT，浏览网站，玩游戏等
Android手机操作系统就是Linux （IOS是Unix，安卓是linux）
网站，游戏，QQ，微信

### Linux起源
Linux之前流行的系统是Unix(mac os,收费的当时还是)
大学老师开发一个教学的系统Minix
1991年Linus Torvalds参考Minix开发了Linux（仅仅是内核）
GNU(GNU's not unix)/gpl与Linux 参考 http://www.jianshu.com/p/a6a594a00b5bc

### Linux发行版
Debian(1993) -> Ubuntu(2004)
Slackware(1993) -> SUSE
RedHat -> CentOS
RedHat -> RedFlag
RedHat Fedora RHEL

## 1.4 创建虚拟机
内存建议至少一个G
处理器选一个就行了

### 网络模式
NAT: 虚拟机软件就相关一个路由器，你的虚拟机上网要借助Virtual box, 和宿主机器网络不受影响，相互独立，网段不一样，好处是无论你的IP怎么变(在家或者公司)，都不影响里面的虚拟机，因为他是一个独立的网络
桥接模式: 物理机和虚拟机看成并列关系，网段一样
仅主机: 虚拟机和物理机有一个网线连接起来，可以通信
桥接模式 >> 虚拟机和本机并列关系，网段一样（相当于两个pc）
NAT模式 >> pc路由转发，虚拟机把pc当成路由器 （建议选择此模式）
主机模式 >> 虚拟机用网线和pc连接


## 1.5 安装CentOS7
需要配置的地方
安装源: 本地介质
软件选择: 最少安装（要图形界面的话选择gnun桌面）
### 安装位置(分区相关)
加密：每次启动系统或者访问分区数据都需要输入密码（一般不用）
LVM：把磁盘虚拟成一个大的磁盘，用来扩容

挂载点：类似于window的C盘 D盘
/boot  启动相关目录，分200m
swap:  交换分区（内存大于4G，就分8个G）
/:  最后一个，直接分，不用选大小了

1分/BOOT分区 200M,2分SWAP 2048M(小于4G内存的分内存的2倍，大于4G的分8G),3分/ 剩余空间。


### 安装过程中
Root密码
创建用户（普通用户）
