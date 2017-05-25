## 1.1 shell特性
```
history       :: view history command
ls ~/.bash_history
echo $HISTSIZE     define the number of histories to save
!!       :: last command
ls 1111.txt
cat !$
!950   run history number 950
!ls     run nearest history where the command starts with ls
alias
unalias
ls *.txt    :: match all files ending with .txt
ls ?.txt    :: only match one charater
|    :: pipe   
cat /etc/passwd|wc -l
cat /etc/passwd > 1.txt    redirect   output of one file to another file
wc -l < 1.txt
ls 111 2> 1.txt
ls 111 2>> 1.txt
control + c   stop one process
sleep 100
jobs   view all sleep jobs
fg     make that to the foreground
```

## 1.2 shell变量
```
echo $HOSTNAME
set     display all envirement variables
a_2=111
echo $a_2
变量内容含有特殊内容,单引号
b='ls /tmp/'
echo $b
which vim
myvim=`which vim`   ``自动获取里面的结果  反引号
c="$a"12
echo $c
export a=1
local a=2
vim /etc/profile  所有用户都能用这个变量
```

## 1.3 系统和用户的环境变量配置文件
```
PATH HOME BASH SHELL
vim /etc/profile   定义了几个重要变量 PATH, USER, LOGNAME, MAIL, INPUTRC
vim /etc/profile.d/path.sh  新定义一个path
系统级别配置文件
source /etc/profile
echo $PATH
vim /etc/bashrc  主要设置umask和PS1   PS1就是平时敲代码时候前面那段字符
每个用户主目录下还有几个这样的隐藏文件
.bash_profile
.bashrc
.bash_history
.bash_logout
need to rewarch this one
```

## 1.4 shell中特殊符号
```
*  匹配任意字符
? 只代表一个任意的字符
# 注释符号
\ 脱意字符
| 管道字符
$ 特殊符号
; 同时运行多个命令
~ 家目录
& 把命令放到后台执行
>  >>  2>  2>> 重定向符号
[] 中括号  用来匹配中间字符的任意一个，正则也有
```

## 1.5 cut命令
```
cut    把文件分段
cut -d: -f 3
cut -d: 4 /etc/passwd
cut -d: -f 3,4 /etc/passwd
cut -c 10 /etc/passwd
cut -d: -f -c     f:第几段 -c:第几个
```

## 1.6 sort命令
```
用来排序的
sort /etc/passwd
sort -t: -k3   -t分隔符  -k3 第三个字符
sort -t: -k3,5 -n /etc/passwd
sort -t: -k3,5 -nr /etc/passwd   -nr 排序  r reserve order
sort -t: -k3,5 -nr /etc/passwd
sort -u 2.txt   排序去重复
```

## 1.7 wc命令
```
wc -l 1.txt
wc -l 1.txt 2.txt
wc -m 1.txt  
```

## 1.8 uniq和tee命令
```
uniq 2.txt
uniq -c 2.txt   count how many duplicated
sort 2.txt |uniq -c     重复项不是挨着不能去重

echo "1111" > tee 1.txt
echo "1111" |tee 1.txt  重定向到1.txt 而且输出信息到屏幕
```

## 1.9 tr和split命令
```
ls *.txt
ls *.txt |tr 'a-z' 'A-Z'    tr用来做替换
echo 'jfowiefjoiarwejfo' |tr 'a-z' 'A-Z'
split  切割日志
split -b 50m 1.txt ; split -l 100 1.txt
split -b 100 anaconda-ks.cfg new_
```

## 2.0 shell中连接符(并且、和、或者)
```
ls 10.txt && ls 2.txt     && 左右两边是命令  前面的命令执行成功后面的才会执行
ls 10.txt || 20.txt   左边的命令执行不成功，才会执行右边的命令
# ； ： 左边的命令执行成功与否，后面的都执行
```
