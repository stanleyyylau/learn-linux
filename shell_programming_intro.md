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
