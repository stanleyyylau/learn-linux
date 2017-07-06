## 常见的压缩格式

* .gz gzip 压缩工具压缩的文件
* .bz2 bzip2 压缩工具压缩的文件
* .tar tar 打包程序打包的文件(tar并没有压缩功能，只是把一个目录合并成一个文件)
* .tar.gz 可以理解为先用tar打包，然后再gzip压缩
* .tar.bz2 同上，先用tar打包，然后再bzip2压缩


## gzip压缩工具

* 语法： gzip [-d#] filename 其中#为1-9的数字
* “-d” : 解压缩时使用
* “-#” : 压缩等级，1压缩最差，9压缩最好，6为默认
* “gzip -d” 后面跟压缩文件，会解压压缩文件。gzip 是不支持压缩目录的。

```
[root@localhost ~]# [ -d test ] && rm -rf test
[root@localhost ~]# mkdir test
[root@localhost ~]# mv test.txt test
[root@localhost ~]# cd test
[root@localhost test]# ls
test.txt
[root@localhost test]# gzip test.txt
[root@localhost test]# ls
test.txt.gz
```


## bzip2压缩工具

* 语法： bzip2 [-dz] filename
* bzip2 只有两个选项需要你掌握。
* “-d” : 解压缩
* “-z” : 压缩
* bzip2 同样也不可以压缩目录：
* 压缩时，可以加 “-z” 也可以不加，都可以压缩文件，”-d” 则为解压的选项：

```
[root@localhost ~]# cd test
[root@localhost test]# bzip2 test.txt
[root@localhost test]# ls
test.txt.bz2
[root@localhost test]# bzip2 -d test.txt.bz2
[root@localhost test]# bzip2 -z test.txt
[root@localhost test]# ls
test.txt.bz2
```


## tar压缩工具

* tar 本身为一个打包工具，可以把目录打包成一个文件，它的好处是它把所有文件整合成一个大文件整体，方便拷贝或者移动。
* 语法：tar [-zjxcvfpP] filename tar 命令有多个选项，其中不常用的阿铭做了标注。
* “-z” : 同时用gzip压缩
* “-j” : 同时用bzip2压缩
* “-x” : 解包或者解压缩
* “-t” : 查看tar包里面的文件
* “-c” : 建立一个tar包或者压缩文件包
* “-v” : 可视化
* “-f” : 后面跟文件名，压缩时跟 “-f 文件名”，意思是压缩后的文件名为filename, 解压时跟 “-f 文件名”，意思是解压filename. 请注意，如果是多个参数组合的情况下带有 “-f”，请把 “-f” 写到最后面。
* “-p” : 使用原文件的属性，压缩前什么属性压缩后还什么属性。（不常用）
* “-P” : 可以使用绝对路径。（不常用）
* --exclude filename : 在打包或者压缩时，不要将filename文件包括在内。（不常用）

```
[root@localhost ~]# cd test
[root@localhost test]# mkdir test111
[root@localhost test]# touch test111/test2.txt
[root@localhost test]# echo "nihao" > !$
echo "nihao" > test111/test2.txt
[root@localhost test]# ls
test111  test.txt.bz2
[root@localhost test]# tar -cvf test111.tar test111
test111/
test111/test2.txt
[root@localhost test]# ls
test111  test111.tar  test.txt.bz2
```

### 打包的同时使用gzip压缩

```
[root@localhost test]# tar -czvf  test111.tar.gz test111
[root@localhost test]# tar -tf test111.tar.gz   //查看包里面的文件列表
[root@localhost test]# tar -zxvf test111.tar.gz   //解压这个包
```


### 打包的同时使用bzip2压缩

```
[root@localhost test]# tar -cjvf test111.tar.bz2 test111
tar -tf test111.tar.bz2  // View content inside
tar -jxvf test111.tar.bz2  // extract file
tar -cvf test111.tar --exclude test3.txt test111  // you might use exclude
```



