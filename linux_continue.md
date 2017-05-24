## 1.1 vim介绍
```
vi vim   vi improve
vim 1.txt
vim /etc/init.d/iptables
vi !$   == 上一条命令的最后一个参数
vim +10 !$   进入到第10行    :set nu 可以显示行号
```

## 1.2 vim一般模式下光标移动
```
vim 一般模式(打开vim就是)  编辑模式  命令模式
cp /etc/init.d/iptables 1.txt
vim 上下左右
2j 行下走2行
4k 上走4行
翻页 ctrl + f (down)   ctrl + b (up)
shift $ 跳到当前行的行尾
0 或者shift 6 跳到行首
10 G 定位行(大写的G)
G 跳到尾部
```

## 1.3 vim一般模式下复制剪切粘贴
```
一般模式下
delete: shift  X 往前面删
4 x 删除4个
d 删除一整行 (保存在内存的剪切板)
小u  全部还原

复制：按两下yy 复制一行
p 粘贴

按 v 进入可视模式 可以用鼠标高亮
```

## 1.4 vim编辑模式
```
编辑模式下按 exc 进入一般模式
小a 可以进去一行的行尾部编辑
小o  可以让光标另起一行
大O  在一行的上面插入一行
```

## 1.5 vim命令行模式
```
:q 退出
:q!  force quit
:wq!  force save and quit
:set nu     show line numbers
:set nonu    hide line numbers
/iptable      find the matching string highlight with yellow color
n(up)  shift n  (down)     go to next occurrence
:1,20s/IPTABLES/iptables/g   search and replace   replace within 1~20 lines
:1,$s/IPTABLES/iptables/g  search and replace within the whole document
:%s/IPTABLES/iptables/g   means the whole document
:1,$s#/etc/sysconfig/#111111#g  if the searched string contains /, replace the outer ones
:nohl  no highlight
```

## 1.6 gzip讲解
```
gzip 12.txt
cat /etc/init.d/iptables >> install.log.syslog   >> means appending content to
!du  means the last command history
gzip -1 q.txt  compress with level1
gzip -9 1.txt   compress with the highest level
gzip -6 1.txt  this is the default compress level
gzip -d 1.txt  uncompress file
```

## 1.7 bzip2讲解
```
bzip2 install.log.syslog
du -sh install.log.syslog
bzcat install.log.syslog.bz2   view the compressed file
gzip 12.txt
zcat 12.txt.gz
```

## 1.8 zip和unzip
```
yum install zip unzip
zip 111.txt
unzip 111.txt.zip
zip -r 111.zip 111      this is how you compress folder
zip will not delete original file
zip -r 1.zip 111 222    compress multiple folders
unzip -d      uncompress to a specified folder
```

## 1.9 xz压缩和解压缩
```
xz gzip bzip2   use diffrent compression algarithem
xz 12.txt
xz -d 12.txt.xz
xzcat 12.txt.xz   
```

## 2.0 tar打包工具详解
```
tar -cvf 1.tar 111 222 12.gz      crate visual file
du -sh 1.tar
du -sh 111 222 12.gz
tar -tf 1.tar    view the content inside the tar archive
tar -xvf 1.tar      extract visual file
tar -C /tmp/ -xvf 1.tar    extract to a specified folder
```

## 2.1 tar打包和压缩并用
```
compress when using tar to archive
tar -zcvf 1.tar.gz 111 222    z: user gzip to compress
tar -zxvf 1.tar.gz    extract file
tar -tf 1.tar.gz
tar -jcvf 1.tar.bz2 111 222
tar -Jcvf 1.tar.xz 111 222
tar -ft 1.tar.bz2  view the content of archive
tar -Jcvf 1.tar.xz 111 222 111.txt
tar -tf 1.tar.xz
gz: tar -zcvf 1.tar.gz 111 222 ; tar -zxvf 1.tar.gz
bzip2: tar -jcvf 1.tar.bz2 111 222; tar -jxvf 1.tar.bz2
xz: tar -Jcvf 1.tar.xz 111 222; tar -Jxvf 1.tar.xz
tar -tf 1.tar.gz 1.tar.bz2
tar -tJf 1.tar.xz
tar --exclude 12.txt -cvf 111.tar 111
tar --exclude 12.txt --exclude aminglinux.txt -cvf 111.tar 111
```

## 2.2 rpm安装和卸载
```
rpm == redhat package manager
left side : package name
next: version number  semantic versioning
next: system bit
rpm -ivh zip-3.0-1.e16.i686.rpm   install visual human
rpm -ivh --nodeps zip-3.0-1.e16.i686.rpm   dont install dependency
rpm -ivh --force zip-3.0-1.e16.i686.rpm   even you install it previously
rpm -e yp-tools
rpm -Uvh ypbind-1.20.4-30.e16.i686.rpm
```

## 2.3 rpm查询
```
rpm -e        uninstall a package
rpm -qa       view all installed package
rpm -qa gnome-doc-utils
rpm -ga |grep vim  
rpm -qi gnome-doc-utils
rpm -ql  package       all what files this package has installed
rpm -qf /usr/share/man/man1/xml2po.1.gz   view what package install this file
which vim
rpm -qf /usr/bin/vim      check which package install vim
rpm -qf `which vim`   == rpm -qf /usr/bin/vim
rpm -qi package    infomation about the package
```

## 2.4 yum工具详解
Package manager developed by Redhat enterprise, you can specify its source
```
yum list        view all the package from the source
vim /etc/yum.repos.d/CentOS-Base.repo      view yum source
yum list |grep vim    search vim related rpm package
yum install vim-X11  
yum search 'vim'   
yum install -y vim-enhanced   
yum remove vim-enhanced
yum update vim-enhanced
yum update; yum upgrade     upgrade the system repo
yum grouplist
LANGE=en      then    yum grouplist     it will become english
yum groupinstall 'Afrikaans Support'
yum grouplist |grep -i chinese
yum groupremove 'Chinese Support'

1、yum list	//列出所有可用的rpm包
其中，最左侧是rpm包名字，中间是版本信息，最右侧是安装信息
2、yum list |grep vim	//搜索关于vim的rpm包
其中，带了‘@’符号的表示已经安装了包
yum search 'vim'	//搜索含有‘vim’关键字的rpm包
格式： yum search [相关关键词]
3、yum install vim-X11	//安装 vim-X11的rpm包
格式：yum  install [-y] [rpm包名] （不建议加-y）
4、yum remove vim-X11	//卸载vim-X11的rpm包
格式：yum remove [-y] [rpm包名]
5、yum update libselinux	//升级libselinux的rpm包
格式：yum update [-y] [rpm包]
yum update 和 yum upgrade 都可以升级系统里所有的rpm包
```

## 2.5 搭建本地yum仓库
```
install from rpm package
make a local yum source with package from CD-ROM
mount /dev/cdrom /mnt
cd /etc/yum.repos.d/
cp -r yum.repos.d/ yum.repos.d.bak
rm -rf CentOS-Base.repo     after deletion, you can't use online repo
yum list   list 出来全部带有@ 说明这些包已经安装过了
vim CentOS-Media.repo


[local_dc]  define yum source
name=cd
baseurl=file:///mnt/
gpgcheck=0  
enabled=1
#gpgkey


yum list      after edit repo file, run this command

```

## 2.6 yum如何下载rpm包到本地
```
cd /etc/yum.repos.d
yum install -y yum-plugin-download
yum list |grep download
yum install vte --downloadonly
yum install vte --downloadonly --downloaddir=/tmp/
yum reinstall vim-enhanced --downloadonly --downloaddir=/tmp/
```

## 2.7 源码编译安装
```
源码包  然后编译安装
linux 是用C写的 常用软件是用C或者C++写
httpd apache
Where to download source code? official website
wget http://mirrors.hust.edu.cn/apache/httpd/httpd-2.4.25.tar.bz2
yum install -y wget
cd /usr/local/src/     where all source code live
tar -jxvf httpd-2.4.23
cd httpd-2.4.23
ls
vim install
vim readme

第一步
./configure --help
./configure --prefix=/usr/local/apache2
echo $?   if 0 , then ok

第二步就是编译
make

最后一步
make install

After installation
ls /usr/local/apache/


```
