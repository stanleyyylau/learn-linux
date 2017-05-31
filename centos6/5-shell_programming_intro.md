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

## 2.1 grep过滤-1
```
grep
用来过滤出指定的行
grep 'root' /etc/passwd    过滤匹配root的行
grep --color 'root'  用颜色标注
grep --color -n 'root'  用颜色标注   -n可以查看它是在哪一行
alias cg='grep --color'
vim .bashrc    永久使用alias
cg -n 'root' 1.txt
cg -v 'root' 1.txt    v是reserve 取反，匹配所有不包含root的
cg -n -A 2 'root' 1.txt
cg -A 2 'root' 1.txt  A2 表示除了输入符合结果的行还输出他们的下面两行
cg -B 2 'games' 1.txt   上面两行
cg -C 2 'games' 1.txt   上下两行都显示出来
cg -r 'iptables' /etc/*    recursively match folders and files
cg -rh 'iptables' /etc/*  human readable 不显示前面的文件
```

## 2.2 grep过滤-2
```
grep -n 'aming' 1.txt
cg '[0-9]' 1.txt   过滤出带有数字的行
cg '[aN]' 1.txt
cg '[a-zA-Z]' 1.txt
cg -v '[a-zA-Z]' 1.txt  匹配所有特殊字符和纯数字的行
cg '^[a-a]' 1.txt
cg -v '[^0-9]' 1.txt
cg '^$' 1.txt
cg 'r.o' 1.txt     . means any charater
cg 'r.*0' 1.txt  帮你复习正则
```

## 2.3 grep过滤-3
```
grep -E == egrep
grep --color 'r\?0' 1.txt  == egrep --color 'r?o' 1.txt
egrep --color 'r+o' 1.txt
.任意一个字符
*重复前面那个字符0++次
?重复前面那个字符1++次
egrep ---color 'root|nologin' 1.txt
grep --color 'root' 1.txt |grep --color 'nologin'  用管道符号表示并且
egrep --color '(rr)+' 1.txt    rr必须成对出现
egrep --color '(rr){1，3}+' 1.txt

```

## 2.4 sed命令-1
```
sed -n '/r.o/'p 1.txt
所有grep能用正则, sed都能用, 只不过要转义
sed 可以直接进行删除操作
sed '/^$'d 1.txt    把空行去掉 d 就是删除
sed '/[0-9]/'d 1.txt   把数字行删除
sed '1,19'd 1.txt  删除1到19行
sed -i '1,19'd 1.txt   -a是直接操作，不打印到屏幕，可能会误删某些东西
sed -n '/aming/'p 1.txt  过滤出含有'aming'的行
```

## 2.5 sed命令-2
```
sed 还可以直接替换
sed '1,10s/nologin/login/g' 1.txt  把nologin替换成login
sed '1,10s/\/sbin\/nologin/login/g' 1.txt 要脱义
sed '1,10s#/sbin/nologin#login#g' 1.txt 如果不想用转义的话
sed 's#^.*$#login#g' 1.txt 不指定行，全局  所有行都会变成login
sed 's#^.*$#&login#g' 1.txt 在所有的行的后面加上login

```

## 2.6 awk命令-1
```
和前两个比，这个功能更强大，还可以分割！
可以数学运算，比较逻辑运算等

```
