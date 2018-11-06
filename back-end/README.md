# jikeMovie/back-end
极客影院后端管理系统

# 版本
- Apache/Nginx
- PHP-5.4.45
- MySQL
- Bootstrap-3.0.1
- Python 3.7

# 说明
> 本系统前后端分离，可按需下载`back-end`或`front-end`目录进行部署。

# 部署后端管理系统
[参照](https://github.com/kangvcar/jikeMovie#%E9%83%A8%E7%BD%B2web)

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
```

# 功能介绍
- [后端管理系统首页](https://github.com/kangvcar/jikeMovie/tree/master/back-end#%E5%90%8E%E7%AB%AF%E7%AE%A1%E7%90%86%E7%B3%BB%E7%BB%9F%E9%A6%96%E9%A1%B5)
- [查询所有电影信息功能](https://github.com/kangvcar/jikeMovie/tree/master/back-end#%E6%9F%A5%E8%AF%A2%E6%89%80%E6%9C%89%E7%94%B5%E5%BD%B1%E4%BF%A1%E6%81%AF%E5%8A%9F%E8%83%BD)
- [添加电影信息功能](https://github.com/kangvcar/jikeMovie/tree/master/back-end#%E6%B7%BB%E5%8A%A0%E7%94%B5%E5%BD%B1%E4%BF%A1%E6%81%AF%E5%8A%9F%E8%83%BD)
- [查询/修改/删除电影信息功能](https://github.com/kangvcar/jikeMovie/tree/master/back-end#%E6%9F%A5%E8%AF%A2%E4%BF%AE%E6%94%B9%E5%88%A0%E9%99%A4%E7%94%B5%E5%BD%B1%E4%BF%A1%E6%81%AF%E5%8A%9F%E8%83%BD)
- [评论管理功能](https://github.com/kangvcar/jikeMovie/tree/master/back-end#%E8%AF%84%E8%AE%BA%E7%AE%A1%E7%90%86%E5%8A%9F%E8%83%BD)
- [用户管理功能](https://github.com/kangvcar/jikeMovie/tree/master/back-end#%E7%94%A8%E6%88%B7%E7%AE%A1%E7%90%86%E5%8A%9F%E8%83%BD)
- [影片搜索功能](https://github.com/kangvcar/jikeMovie/tree/master/back-end#%E5%BD%B1%E7%89%87%E6%90%9C%E7%B4%A2%E5%8A%9F%E8%83%BD)
- [管理员登陆功能](https://github.com/kangvcar/jikeMovie/tree/master/back-end#%E7%AE%A1%E7%90%86%E5%91%98%E7%99%BB%E9%99%86%E5%8A%9F%E8%83%BD)

### 后端管理系统首页
> 如图可见，包含了 ***影片搜索***，***查询所有电影信息***，***添加电影信息***，***查询/修改/删除电影信息***，***评论管理***，***用户管理***，***管理员登陆*** 等功能

![后端管理系统首页](https://upload-images.jianshu.io/upload_images/2640591-aec66af7e31c0c22.png?imageMogr2/auto-orient/strip%7CimageView2/2/w/1240)

### 查询所有电影信息功能
> 如图可见，点击了“***查询所有电影信息***”后，会分页显示所有影片信息，并且提供了“***修改***”，“***删除***” 操作

![查询所有电影信息页](https://upload-images.jianshu.io/upload_images/2640591-203df0c534bb74f5.png?imageMogr2/auto-orient/strip%7CimageView2/2/w/1240)

### 添加电影信息功能
> 如图可见，点击了“***添加电影信息***”后，会列出所有可填信息输入框(没有信息空)

![添加电影信息页](https://upload-images.jianshu.io/upload_images/2640591-294024da85663381.png?imageMogr2/auto-orient/strip%7CimageView2/2/w/1240)

### 查询/修改/删除电影信息功能
> 如图可见，点击了“***查询/修改/删除电影信息***”后，输入影片ID进行查询，查询成功后可对现有的影片信息进行 ***修改*** 和 ***删除影片*** 

![查询/修改/删除电影信息页1](https://upload-images.jianshu.io/upload_images/2640591-953953bf194f6d15.png?imageMogr2/auto-orient/strip%7CimageView2/2/w/1240)

![查询/修改/删除电影信息页2](https://upload-images.jianshu.io/upload_images/2640591-9250f6c0306eebff.png?imageMogr2/auto-orient/strip%7CimageView2/2/w/1240)

### 评论管理功能
> 如图可见，点击了“***评论管理***”后，会列出所有用户的评论信息，并提供了对评论的 ***删除*** 操作

![评论管理](https://upload-images.jianshu.io/upload_images/2640591-2db13f440ec1f588.png?imageMogr2/auto-orient/strip%7CimageView2/2/w/1240)

### 用户管理功能
> 如图可见，点击了“***用户管理***”后，会列出所有用户的注册信息，并提供了对用户信息的 ***删除*** 操作,在底部还提供了 ***添加用户信息*** 功能

![用户管理](https://upload-images.jianshu.io/upload_images/2640591-c6e7217a0bcceec2.png?imageMogr2/auto-orient/strip%7CimageView2/2/w/1240)

### 影片搜索功能
> 如图可见，点击了顶部导航栏的“***影片搜索***”后，会显示所有搜索到的影片信息，并且提供了“***修改***”，“***删除***” 操作

![影片搜索](https://upload-images.jianshu.io/upload_images/2640591-f5a1dc10974ae66c.png?imageMogr2/auto-orient/strip%7CimageView2/2/w/1240)

### 管理员登陆功能
> 如图可见，***必须*** 登陆成功才能进入后台管理系统

![管理员登陆](https://upload-images.jianshu.io/upload_images/2640591-af8cb5705b7266e8.png?imageMogr2/auto-orient/strip%7CimageView2/2/w/1240)