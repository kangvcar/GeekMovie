![](https://github.com/kangvcar/GeekMovie/blob/master/pictures/logos/geek-banner.png?raw=true)
# Geek 极客影院
⚠ ***【学习研究所用，请勿用于生产环境】***

Geek 极客影院是一个免费的在线观影系统，本网站内容使用[Python爬虫技术](https://raw.githubusercontent.com/kangvcar/GeekMovie/master/movieSpider.py)收集于互联网上公开资源，提供最优质的web界面服务，但不提供也不参与影片档案录制、下载、上传、储存。本站资源永久免费共享、无需安装任何插件、免注册登入、无隐藏恶意（挖矿）软体，欢迎影迷安心浏览观赏。

Geek 极客影院系统包含了[前端web观影页面](https://github.com/kangvcar/GeekMovie/tree/master/front-end-v5.0)和[后端web站点管理系统](https://github.com/kangvcar/GeekMovie/tree/master/back-end-v5.0)

- 前端包含用户登陆（v5.0已移除)、用户注册（v5.0已移除)、影片搜索、网友评论、影片排行榜、各类型影片栏目、讨论组、无插件在线播放等功能
- 后端包含服务器系统信息总览、管理员登录（超级管理员&普通管理员）、影片信息的增删查改、网友评论管理、用户信息管理、天气提醒、在线音乐播放等功能。

![](https://img.shields.io/badge/Version-5.0-red.svg) ![](https://img.shields.io/badge/Python-3.7-blue.svg) ![](https://img.shields.io/badge/PHP-%3E%205.4.5-green.svg) ![](https://img.shields.io/badge/MySQL-%3E%205.5.60-orange.svg) ![](https://img.shields.io/badge/Bootstrap-4.0.0-blue.svg)

# v5.0 在线演示 Demo
- 前端web观影页面：[http://geek.freevar.com](http://geek.freevar.com)
- 后端web站点管理系统：[http://geek.freevar.com/admin](http://geek.freevar.com/admin) 
（*普通管理账号admin 密码passwd*）

# v4.0 在线演示 Demo
- 前端web观影页面：[http://jike.freevar.com](http://jike.freevar.com)
- 后端web站点管理系统：[http://jike.freevar.com/admin](http://jike.freevar.com/admin) 
（*普通管理账号admin 密码passwd*）

# API （部分失效）
- http://geek.freevar.com/api.php?q=random
- http://geek.freevar.com/api.php?q=new
- http://geek.freevar.com/api.php?q=score
- http://geek.freevar.com/api.php?q=name&n=速度与激情
- http://geek.freevar.com/api.php?q=type&t=电影&count=10
- 极客影院API使用[*详细说明*](https://github.com/kangvcar/GeekMovie/blob/master/API_README.md)

# 功能介绍
## 前端系统功能介绍
- [V5.0 功能介绍](https://github.com/kangvcar/GeekMovie/blob/master/front-end-v5.0/README.md)
- [V4.0 功能介绍](https://github.com/kangvcar/GeekMovie/blob/master/front-end/README.md)

## 后端系统功能介绍
- [V5.0 功能介绍](https://github.com/kangvcar/GeekMovie/blob/master/back-end-v5.0/README.md)
- [V4.0 功能介绍](https://github.com/kangvcar/GeekMovie/blob/master/back-end/README.md)

# 版本
- Apache/Nginx
- PHP-5.4.45
- MySQL
- Bootstrap-4.0.0
- Python 3.7

# 说明
> 本系统前后端分离，可按需下载`back-end-v5.0`或`front-end-v5.0`目录进行部署。

# 数据库导入
> 先创建数据库`okmovie`,在导入`jikeMovie-v5.0.sql`文件即可;

> 默认数据库登陆账号为`root`, 密码为`root`; 如有变化请修改`dbconnection.php`文件，否则会数据库连接失败！

```
[root@kangvcar ~]# mysql -V
mysql  Ver 15.1 Distrib 5.5.60-MariaDB, for Linux (x86_64) using readline 5.1
[root@kangvcar ~]# mysql -uroot -proot -e "CREATE DATABASE okmovie;"
[root@kangvcar ~]# mysql -uroot -proot -e "use okmovie; source jikeMovie-v5.0.sql;"
```

# 部署WEB
> 部署前请按照上述**[数据库导入](https://github.com/kangvcar/jikeMovie#%E6%95%B0%E6%8D%AE%E5%BA%93%E5%AF%BC%E5%85%A5)**进行数据库导入
1. 首先下载项目文件
    1. GIT下载`git clone https://github.com/kangvcar/GeekMovie.git`
    2. (如果没有安装git)还可以点击此[下载](https://github.com/kangvcar/GeekMovie/archive/master.zip)
2. 下载项目文件后会获得一个`GeekMovie`目录，在该目录下的有两个子文件夹`back-end-v5.0`,`front-end-v5.0`和一个Python文件`movieSpider.py`
    1. `back-end-v5.0`： 后端web站点管理系统
    2. `front-end-v5.0`： 前端web观影系统
    3. `movieSpider.py`： Python爬虫文件
3. 把`back-end-v5.0`，`front-end-v5.0`文件夹移动到网站的根目录下(如`/var/www/html`或`/usr/share/nginx/html`)
4. 配置WEB服务器指定网站根目录为`front-end`文件夹即可
    1. Apache配置
        ```
        ...
        DocumentRoot "/var/www/html/front-end" 
        ...
        ```
    2. Nginx配置
        ```
        ...
        root /usr/share/nginx/html/front-end;
        ...
        ```
5. 由于后端管理系统一般不能暴露给普通用户，所以直接输入路径进行访问`http://<ip>/admin.php`

# 数据库结构
> 部署本系统前，先导入`jikeMovie-v5.0.sql`数据库文件
### 数据表结构(总共4张表)
> **数据库必须使用InnoDB引擎**

| 表名 | 存储信息 | 说明 |
| ------ | ------ | ------ |
| admin | 存储后台管理员用户信息表 |  |
| comment | 存储用户评论表 | ON DELETE CASCADE |
| movie | 存储影片信息表 |  |
| user | 存储普通用户信息表 |  |

```
MariaDB [okmovie]> show tables;
+-------------------+
| Tables_in_okmovie |
+-------------------+
| admin             |
| comment           |
| movie             |
| user              |
+-------------------+

MariaDB [okmovie]> desc admin;
+----------+-------------+------+-----+---------+----------------+
| Field    | Type        | Null | Key | Default | Extra          |
+----------+-------------+------+-----+---------+----------------+
| id       | int(20)     | NO   | PRI | NULL    | auto_increment |
| username | varchar(20) | NO   |     | NULL    |                |
| password | varchar(20) | NO   |     | NULL    |                |
| role     | int(10)     | NO   |     | 2       |                |
+----------+-------------+------+-----+---------+----------------+

MariaDB [okmovie]> desc comment;
+----------+--------------+------+-----+---------+----------------+
| Field    | Type         | Null | Key | Default | Extra          |
+----------+--------------+------+-----+---------+----------------+
| cid      | int(20)      | NO   | PRI | NULL    | auto_increment |
| user_id  | int(20)      | YES  | MUL | NULL    |                |
| movie_id | int(20)      | YES  | MUL | NULL    |                |
| content  | varchar(200) | YES  |     | NULL    |                |
+----------+--------------+------+-----+---------+----------------+

MariaDB [okmovie]> desc movie;
+-----------+--------------+------+-----+---------+-------+
| Field     | Type         | Null | Key | Default | Extra |
+-----------+--------------+------+-----+---------+-------+
| mid       | int(20)      | NO   | PRI | NULL    |       |
| mname     | varchar(50)  | YES  |     | NULL    |       |
| mimgurl   | varchar(200) | YES  |     | NULL    |       |
| mscore    | varchar(20)  | YES  |     | NULL    |       |
| mdirector | varchar(20)  | YES  |     | NULL    |       |
| mstar     | varchar(200) | YES  |     | NULL    |       |
| mtype     | varchar(50)  | YES  |     | NULL    |       |
| marea     | varchar(20)  | YES  |     | NULL    |       |
| myear     | varchar(20)  | YES  |     | NULL    |       |
| msumary   | varchar(400) | YES  |     | NULL    |       |
| mplayurl  | varchar(400) | YES  |     | NULL    |       |
+-----------+--------------+------+-----+---------+-------+

MariaDB [okmovie]> desc user;
+----------+-------------+------+-----+---------+----------------+
| Field    | Type        | Null | Key | Default | Extra          |
+----------+-------------+------+-----+---------+----------------+
| uid      | int(20)     | NO   | PRI | NULL    | auto_increment |
| username | varchar(20) | NO   | UNI | NULL    |                |
| password | varchar(20) | NO   |     | NULL    |                |
| email    | varchar(30) | NO   |     | NULL    |                |
+----------+-------------+------+-----+---------+----------------+
```

[![](https://sourcerer.io/fame/kangvcar/kangvcar/GeekMovie/images/0)](https://sourcerer.io/fame/kangvcar/kangvcar/GeekMovie/links/0)[![](https://sourcerer.io/fame/kangvcar/kangvcar/GeekMovie/images/1)](https://sourcerer.io/fame/kangvcar/kangvcar/GeekMovie/links/1)[![](https://sourcerer.io/fame/kangvcar/kangvcar/GeekMovie/images/2)](https://sourcerer.io/fame/kangvcar/kangvcar/GeekMovie/links/2)[![](https://sourcerer.io/fame/kangvcar/kangvcar/GeekMovie/images/3)](https://sourcerer.io/fame/kangvcar/kangvcar/GeekMovie/links/3)[![](https://sourcerer.io/fame/kangvcar/kangvcar/GeekMovie/images/4)](https://sourcerer.io/fame/kangvcar/kangvcar/GeekMovie/links/4)[![](https://sourcerer.io/fame/kangvcar/kangvcar/GeekMovie/images/5)](https://sourcerer.io/fame/kangvcar/kangvcar/GeekMovie/links/5)[![](https://sourcerer.io/fame/kangvcar/kangvcar/GeekMovie/images/6)](https://sourcerer.io/fame/kangvcar/kangvcar/GeekMovie/links/6)[![](https://sourcerer.io/fame/kangvcar/kangvcar/GeekMovie/images/7)](https://sourcerer.io/fame/kangvcar/kangvcar/GeekMovie/links/7)
