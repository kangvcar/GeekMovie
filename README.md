# jikeMovie
WEB电影信息系统

# 版本
- Apache
- PHP-5.4.45
- MySQL
- Bootstrap-3.0.1
- Python 3.7

# 说明
> 本系统前后端分离，可按需下载`back-end`或`front-end`目录进行部署。
 
# 数据库结构
> 部署本系统前，先导入`back-end/okmovieV4.sql`数据库文件
### 数据表结构(总共4张表)

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

