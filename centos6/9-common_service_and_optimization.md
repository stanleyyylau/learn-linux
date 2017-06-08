## 1.1 nfs部署和优化-1
NFS = network file system
可以让机器访问远程文件就好比访问自己电脑的文件
A B C   -->  同时要访问一个图片
```
yum install -y nfs-utils rpcbind   安装两个包  rpcbind是用于通信的

df -h 查看磁盘分区

打开配置文件 vim /etc/exports

/mnt 192.168.1.20(rw,sync)      //先写共享的目录，然后是共享给哪些IP rw是给读写权限
保存完文件之后要启动服务  /etc/init.d/rpcbind start     /etc/init.d/nfs start

客服端机器要安装
yum install nfs-utils

showmount -e 192.168.11.160  看看共享出来的目录和共享给谁了

mount -t nfs 192.168.11.160:/mnt /opt/  把这个目录挂载到自己的/opt下

ls -ld /mnt/  查看/mnt 目录的权限
cd /opt/
touch 123.txt
权限不够，因为挂载过来默认是有一个用户的
先修改权限给 chmod 777 .

touch 123.txt  用户和数组是 nfsnobody nfsnobody
```

## 1.2 nfs部署和优化-2
```
打开配置文件 vim /etc/exports

/mnt 192.168.1.20(rw,sync,all_sguash,anonuid=501)  指定新建文件和目录的时候那个 用户和属组
/etc/init.d/nfs restart
更快捷的方式
exportfs -arv 就可以重新加载了

客户端要重新mount

unmount /opt/
mount -t nfs 192.168.1.160:/mnt /opt
cd /opt/
touch 2.txt

mount -t nfs -onolock,nfsvers=3 192.168.11.160:/mnt /opt 指定nfs服务器版本
Centos6 下NFS会有问题，以后出现问题用 nfsvers=3 用这个版本

```
