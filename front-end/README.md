# jikeMovie/front-end
极客影院前端系统

# 版本
- Apache/Nginx
- PHP-5.4.45
- MySQL
- Bootstrap-3.0.1
- Python 3.7

# 说明
> 本系统前后端分离，可按需下载`back-end`或`front-end`目录进行部署。

# 部署前端系统
[参照](https://github.com/kangvcar/jikeMovie#%E9%83%A8%E7%BD%B2web)

# 目录结构
```
jikeMovie
└── front-end    #前端WEB
    ├── bootstrap-3.0.1  # Bootstrap文件
    │   └── ...
    ├── carousel.php  # 首页轮播器
    ├── ckplayer  # 播放器组件文件
    │   └── ...
    ├── collection.php  # 首页影片分类展示
    ├── commentAction.php  # 用户评论处理页
    ├── commentForm.php  # 用户评论Form
    ├── css  # CSS文件
    │   └── css.css
    ├── dbconnection.php  # 数据初始化连接
    ├── details.php  # 影片详情页
    ├── footer.php  # 页脚
    ├── headdetail.php  # 详情页电影信息
    ├── headnav.php  # 前端导航栏
    ├── index.php  # 首页Form
    ├── js  # JavaScript文件
    │   └── myjs.js
    ├── LoginAction.php  # 用户登陆处理页
    ├── LoginForm.php  # 用户登陆Form
    ├── LoginMain.php  # 用户登陆
    ├── movielist.php  # 榜单页
    ├── movieplayer.php  # 详情页播放器
    ├── recommend.php  # 详情页评论Form
    ├── registerForm.php  # 用户注册Form
    └── searchlist.php  # 影片搜索页
```

# 功能介绍
- [前端首页](https://github.com/kangvcar/jikeMovie/tree/master/front-end#%E5%89%8D%E7%AB%AF%E9%A6%96%E9%A1%B5)
- [前端榜单页](https://github.com/kangvcar/jikeMovie/tree/master/front-end#%E5%89%8D%E7%AB%AF%E6%A6%9C%E5%8D%95%E9%A1%B5)
- [影片搜索功能](https://github.com/kangvcar/jikeMovie/tree/master/front-end#%E5%BD%B1%E7%89%87%E6%90%9C%E7%B4%A2%E5%8A%9F%E8%83%BD)
- [影片详情页](https://github.com/kangvcar/jikeMovie/tree/master/front-end#%E5%BD%B1%E7%89%87%E8%AF%A6%E6%83%85%E9%A1%B5)
- [在线播放影片功能](https://github.com/kangvcar/jikeMovie/tree/master/front-end#%E5%9C%A8%E7%BA%BF%E6%92%AD%E6%94%BE%E5%BD%B1%E7%89%87%E5%8A%9F%E8%83%BD)
- [网友评论功能](https://github.com/kangvcar/jikeMovie/tree/master/front-end#%E7%BD%91%E5%8F%8B%E8%AF%84%E8%AE%BA%E5%8A%9F%E8%83%BD)
- [用户登陆功能](https://github.com/kangvcar/jikeMovie/tree/master/front-end#%E7%94%A8%E6%88%B7%E7%99%BB%E9%99%86%E5%8A%9F%E8%83%BD)
- [用户注册功能](https://github.com/kangvcar/jikeMovie/tree/master/front-end#%E7%94%A8%E6%88%B7%E6%B3%A8%E5%86%8C%E5%8A%9F%E8%83%BD)

### 前端首页
> 如图可见，包含了 ***首页***，***榜单***, ***用户登陆*** 栏目; ***动作片***，***剧情片***，***动漫***，***电视剧***，***为你推荐*** 等模块

![前端首页](https://upload-images.jianshu.io/upload_images/2640591-c2ea8b99680dafff.png?imageMogr2/auto-orient/strip%7CimageView2/2/w/1240)

### 前端榜单页
> 如图可见，包含了 ***电影排行榜***，***动漫排行榜***, ***电视剧排行榜*** 等模块

![前端榜单页](https://upload-images.jianshu.io/upload_images/2640591-2b833b01fc552b9b.png?imageMogr2/auto-orient/strip%7CimageView2/2/w/1240)

### 影片搜索功能
> 如图可见，点击了顶部导航栏的“***搜索影片***”后，会显示所有搜索到的影片信息，包含 ***影片名,评分,演员,类型,年份*** 信息

![前端搜索页](https://upload-images.jianshu.io/upload_images/2640591-74a55b7734a478b9.png?imageMogr2/auto-orient/strip%7CimageView2/2/w/1240)

### 影片详情页
> 如图可见，包含了 ***影片信息***, ***在线播放***, ***网友评论*** 三大模块

![影片详情页](https://upload-images.jianshu.io/upload_images/2640591-a27159f44681b70b.png?imageMogr2/auto-orient/strip%7CimageView2/2/w/1240)

### 在线播放影片功能
> 如图可见，影片可以在线播放,调用了`CKplayer`提供的JS文件

![在线播放](https://upload-images.jianshu.io/upload_images/2640591-3895c7e60f1c9be9.png?imageMogr2/auto-orient/strip%7CimageView2/2/w/1240)

### 网友评论功能
> 如图可见，影片详情页顶部列出了所有网友对该影片的评论; 并且只有登陆成功的网友才能对影片进行评论

![登陆后才能评论](https://upload-images.jianshu.io/upload_images/2640591-170bd43078f0792c.png?imageMogr2/auto-orient/strip%7CimageView2/2/w/1240)

![网友评论](https://upload-images.jianshu.io/upload_images/2640591-71e3f889b13cce71.png?imageMogr2/auto-orient/strip%7CimageView2/2/w/1240)

### 用户登陆功能
> 如图可见，实现了登陆功能, 只有登陆成功的用户才能对影片进行评论;没有登陆的用户将以游客身份访问

![用户登陆](https://upload-images.jianshu.io/upload_images/2640591-124e207bd91a25e2.png?imageMogr2/auto-orient/strip%7CimageView2/2/w/1240)

### 用户注册功能
> 如图可见，提供了用户注册功能

![用户注册](https://upload-images.jianshu.io/upload_images/2640591-f888042d7e0d2d06.png?imageMogr2/auto-orient/strip%7CimageView2/2/w/1240)
