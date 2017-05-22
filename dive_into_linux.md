## 2.5 软链接和硬链接
软链接其实就是快捷方式

硬链接相当于给文件做了一个提升，把文件指向同一个iNode
iNode是每一个文件或者目录核心的元数据，iNode是记录数据的一个很重要的信息

Linux要用文件或者目录都是要通过iNode找到文件
硬链接不能做目录的硬链接

硬链接就是给同一个iNode做了多重替身
硬链接只能在同一分区，因为没个分区都有自己的一套iNode

```
ln /root/1.txt /tmp/aming.txt
ls -i /root/1.txt /tmp/aming.txt
du -sh /root/1.txt /tmp/aming.txt
//du命令可以插件文件的大小
du -sh /root/1.txt; du -sh /tmp/aming.txt
ls -ihl /root/1.txt /tmp/aming.txt
​df -h
//查看分区
```

## 2.6 用户名文件
核心配置文件
``
ls /etc/passwd
// 第一段是用户名，第二段是密码，第三段是uid，第四段是组id，下一个是解释说明，普通用户是空的，root是root，用户是干什么的，一些属性和信息, 第五段是家目录，最后一个字段是shell
// 注：普通用户的uid从500开始
// /etc/passwd 被分成了7段
``

## 2.7 密码文件
```
ls /etc/shadow
// 存放用户密码
冒号分割成九段
第二段就是密码（加密的）
*表示账户已经被锁定，两个！！表示账户还没有密码
第三段表示上次更改密码的时间1970/01/01 到更改密码的时候经过了多长时间(天)
第四段表示要过多少天才能更改密码 0 表示不显示
第五段表示密码要过多少天后到期  99999默认
第六段密码到期前多少天给你发警告
第七段 默认是空的 表示账号的失效期限,到期后过多少天就锁定账号
第八段表示账号的生命周期  账号可以用多久
最后表示 保留用的，没有什么意义
```

## 2.8 增加和删除用户组
```
groupadd grp1
//创建了一个组
tail /etc/group   //组的配置文件
第一段是组名字  2是密码  3是组id
tail /etc/gshadow //组的密码文件，一般情况不给组设定密码
groupadd -g 默认组id是从500开始（普普的）
groupadd -g 512 grp2 //指定组id 512
groupdel grp3 //删除一个组
```

## 2.9 增加和删除用户
```
useradd aming123
tail /etc/passwd
tail /etc/group
useradd -u 505 -g 512 user1 //添加一个用户并把它添加到512组
// 组里面有用户的话组不能被删除
useradd -d /home/user3 -s /sbin/nologin user2
可以指定家目录和shell
useradd -M -s /sbin/nologin user3  //不存在家目录
userdel user3  //删用户的时候不会把家目录也一起删
userdel -r user1   //把家目录页一起删
```

## 3.0 usermod修改用户属性
```
tail /etc/passwd
id aming123
usermod -g 512 aming123    // 改变gid
//还可以更改用户的扩展组, 一个用户可以同时属于不同的组
useradd -u 506 -g 502 -G 512 user3
userdel -r user3
id user3
如果是扩展组，就是里面有用户也可以删
usermod -u -g -G -s -d
useradd -u -g -G -s -d 一个是更改，一个是增加
```

## 3.1 passwd修改用户密码
```
passwd aming  更改普通用户的密码
mkpasswd 自动生成密码的工具
yum install -y expect
mkpasswd -l 12 -s 0  length:12 speical charater:0
mkpasswd -l 12 -s 0 -d 4 -c 3
passwd --stdin aming   //写脚本用
echo "aminglinux.com" | passwd --stdin aming  
```

## 3.2 su切换用户
```
su //切换用户
su - //切换用户的时候 环境变量也一起切换
su - aming
echo $PATH
su - -c "id" aming   //用aming 的身份执行这条命令
sudo - -c "echo $PATH" aming
su - -c "mkdir /tmp/121212" aming
```

## 3.3 sudo详解
```
visudo  打开sudo 配置文件
allow root to run any commands anywhere
sudo -l
```
