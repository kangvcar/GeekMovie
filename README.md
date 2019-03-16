# jikeMovie
⚠ ***【学习研究所用，请勿用于生产环境】***

WEB电影信息系统，**前端**集成登陆、注册、搜索、评论、在线播放等功能，**后端**集成了管理员登录、对电影信息的增删查改、评论管理、用户管理等功能。

![](https://img.shields.io/badge/Version-4.0-red.svg) ![](https://img.shields.io/badge/Python-3.7-blue.svg) ![](https://img.shields.io/badge/PHP-%3E%205.4.5-green.svg) ![](https://img.shields.io/badge/MySQL-%3E%205.5.60-orange.svg) ![](https://img.shields.io/badge/Bootstrap-3.0.1-blue.svg)

# Demo
- 前端：[http://jike.freevar.com](http://jike.freevar.com)
- 后台：[http://jike.freevar.com/back-end/admin.php](http://jike.freevar.com/back-end/admin.php)

# API
- http://jike.freevar.com/api.php?q=random
- http://jike.freevar.com/api.php?q=new
- http://jike.freevar.com/api.php?q=score
- http://jike.freevar.com/api.php?q=name&n=速度与激情
- http://jike.freevar.com/api.php?q=type&t=电影&count=10
- 极客影院API使用[详细说明](https://github.com/kangvcar/jikeMovie/blob/master/API_README.md)

# 版本
- Apache/Nginx
- PHP-5.4.45
- MySQL
- Bootstrap-3.0.1
- Python 3.7

# 说明
> 本系统前后端分离，可按需下载`back-end`或`front-end`目录进行部署。

# 数据库导入
> 先创建数据库`okmovie`,在导入`okmovieV4.sql`文件即可;

> 默认数据库登陆账号为`root`, 密码为`root`; 如有变化请修改`dbconnection.php`文件，否则会数据库连接失败！

```
[root@kangvcar ~]# mysql -V
mysql  Ver 15.1 Distrib 5.5.60-MariaDB, for Linux (x86_64) using readline 5.1
[root@kangvcar ~]# mysql -uroot -proot -e "CREATE DATABASE okmovie;"
[root@kangvcar ~]# mysql -uroot -proot -e "use okmovie; source ./jikeMovie/back-end/okmovieV4.sql;"
```

# 部署WEB
> 部署前请按照上述**[数据库导入](https://github.com/kangvcar/jikeMovie#%E6%95%B0%E6%8D%AE%E5%BA%93%E5%AF%BC%E5%85%A5)**进行数据库导入
1. 首先下载项目文件
    1. GIT下载`git clone https://github.com/kangvcar/jikeMovie.git`
    2. (如果没有安装git)还可以点击此[下载](https://github.com/kangvcar/jikeMovie/archive/master.zip)
2. 下载项目文件后会获得一个`jikeMovie`目录，在该目录下的有两个子文件夹`back-end`,`front-end`和一个Python文件`movieSpider.py`
    1. `back-end`： 后端管理项目
    2. `front-end`： 前端项目
    3. `movieSpider.py`： Python爬虫项目
3. 把`back-end`，`front-end`文件夹移动到网站的根目录下(如`/var/www/html`或`/usr/share/nginx/html`)
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
5. 由于后端管理系统一般不能暴露给普通用户，所以直接输入路径进行访问`http://<ip>/back-end/admin.php`

# 功能介绍
## 前端系统功能介绍
- [前端首页](https://github.com/kangvcar/jikeMovie/tree/master/front-end#%E5%89%8D%E7%AB%AF%E9%A6%96%E9%A1%B5)
- [前端榜单页](https://github.com/kangvcar/jikeMovie/tree/master/front-end#%E5%89%8D%E7%AB%AF%E6%A6%9C%E5%8D%95%E9%A1%B5)
- [影片搜索功能](https://github.com/kangvcar/jikeMovie/tree/master/front-end#%E5%BD%B1%E7%89%87%E6%90%9C%E7%B4%A2%E5%8A%9F%E8%83%BD)
- [影片详情页](https://github.com/kangvcar/jikeMovie/tree/master/front-end#%E5%BD%B1%E7%89%87%E8%AF%A6%E6%83%85%E9%A1%B5)
- [在线播放影片功能](https://github.com/kangvcar/jikeMovie/tree/master/front-end#%E5%9C%A8%E7%BA%BF%E6%92%AD%E6%94%BE%E5%BD%B1%E7%89%87%E5%8A%9F%E8%83%BD)
- [网友评论功能](https://github.com/kangvcar/jikeMovie/tree/master/front-end#%E7%BD%91%E5%8F%8B%E8%AF%84%E8%AE%BA%E5%8A%9F%E8%83%BD)
- [用户登陆功能](https://github.com/kangvcar/jikeMovie/tree/master/front-end#%E7%94%A8%E6%88%B7%E7%99%BB%E9%99%86%E5%8A%9F%E8%83%BD)
- [用户注册功能](https://github.com/kangvcar/jikeMovie/tree/master/front-end#%E7%94%A8%E6%88%B7%E6%B3%A8%E5%86%8C%E5%8A%9F%E8%83%BD)

## 后端系统功能介绍
- [后端管理系统首页](https://github.com/kangvcar/jikeMovie/tree/master/back-end#%E5%90%8E%E7%AB%AF%E7%AE%A1%E7%90%86%E7%B3%BB%E7%BB%9F%E9%A6%96%E9%A1%B5)
- [查询所有电影信息功能](https://github.com/kangvcar/jikeMovie/tree/master/back-end#%E6%9F%A5%E8%AF%A2%E6%89%80%E6%9C%89%E7%94%B5%E5%BD%B1%E4%BF%A1%E6%81%AF%E5%8A%9F%E8%83%BD)
- [添加电影信息功能](https://github.com/kangvcar/jikeMovie/tree/master/back-end#%E6%B7%BB%E5%8A%A0%E7%94%B5%E5%BD%B1%E4%BF%A1%E6%81%AF%E5%8A%9F%E8%83%BD)
- [查询/修改/删除电影信息功能](https://github.com/kangvcar/jikeMovie/tree/master/back-end#%E6%9F%A5%E8%AF%A2%E4%BF%AE%E6%94%B9%E5%88%A0%E9%99%A4%E7%94%B5%E5%BD%B1%E4%BF%A1%E6%81%AF%E5%8A%9F%E8%83%BD)
- [评论管理功能](https://github.com/kangvcar/jikeMovie/tree/master/back-end#%E8%AF%84%E8%AE%BA%E7%AE%A1%E7%90%86%E5%8A%9F%E8%83%BD)
- [用户管理功能](https://github.com/kangvcar/jikeMovie/tree/master/back-end#%E7%94%A8%E6%88%B7%E7%AE%A1%E7%90%86%E5%8A%9F%E8%83%BD)
- [影片搜索功能](https://github.com/kangvcar/jikeMovie/tree/master/back-end#%E5%BD%B1%E7%89%87%E6%90%9C%E7%B4%A2%E5%8A%9F%E8%83%BD)
- [管理员登陆功能](https://github.com/kangvcar/jikeMovie/tree/master/back-end#%E7%AE%A1%E7%90%86%E5%91%98%E7%99%BB%E9%99%86%E5%8A%9F%E8%83%BD)

# 数据库结构
> 部署本系统前，先导入`back-end/okmovieV4.sql`数据库文件
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

# 目录结构
```
jikeMovie
├── back-end    # 后端管理
│   ├── addmovieaction.php  # 添加影片处理页
│   ├── addMovie.php  # 添加影片Form
│   ├── admin.php  # 后端首页
│   ├── allMovie.php  # 所有影片页
│   ├── bootstrap-3.0.1  # Bootstrap文件
│   │   └── ...
│   ├── commentMovie.php  # 评论管理页
│   ├── dbconnection.php  # 数据初始化连接
│   ├── deletecommentaction.php  # 删除影片处理页
│   ├── deletemovie.php  # 删除影片Form
│   ├── deleteuseraction.php  # 删除用户处理页
│   ├── fmdMovie.php  # 查找/修改/删除影片页
│   ├── headnav.php  # 后端导航栏
│   ├── LICENSE     # License文件
│   ├── LoginAction.php  # 管理员登陆处理页
│   ├── LoginForm.php  # 管理员登陆页Form
│   ├── LoginMain.php  # 管理员登陆页
│   ├── modifymovieaction.php  # 修改影片处理页
│   ├── okmovieV3.sql  # 数据库导出文件V3版本
│   ├── okmovieV4.sql  # 数据库导出文件V4版本
│   ├── README.md  # 说明文件
│   ├── userManagenment.php  # 用户管理页
│   └── welcome.php  # 欢迎页
├── front-end    #前端WEB
│   ├── bootstrap-3.0.1  # Bootstrap文件
│   │   └── ...
│   ├── carousel.php  # 首页轮播器
│   ├── ckplayer  # 播放器组件文件
│   │   └── ...
│   ├── collection.php  # 首页影片分类展示
│   ├── commentAction.php  # 用户评论处理页
│   ├── commentForm.php  # 用户评论Form
│   ├── css  # CSS文件
│   │   └── css.css
│   ├── dbconnection.php  # 数据初始化连接
│   ├── details.php  # 影片详情页
│   ├── footer.php  # 页脚
│   ├── headdetail.php  # 详情页电影信息
│   ├── headnav.php  # 前端导航栏
│   ├── index.php  # 首页Form
│   ├── js  # JavaScript文件
│   │   └── myjs.js
│   ├── LoginAction.php  # 用户登陆处理页
│   ├── LoginForm.php  # 用户登陆Form
│   ├── LoginMain.php  # 用户登陆
│   ├── movielist.php  # 榜单页
│   ├── movieplayer.php  # 详情页播放器
│   ├── recommend.php  # 详情页评论Form
│   ├── registerForm.php  # 用户注册Form
│   └── searchlist.php  # 影片搜索页
├── movieSpider.py   # Python爬虫文件
└── README.md  # 说明文件
```

