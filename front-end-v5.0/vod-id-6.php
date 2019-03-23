<!DOCTYPE html>
<html lang="zh">
    <head>
        <title>
            Jike Movie 极客影院
        </title>
        <meta content="text/html; charset=utf-8" http-equiv="Content-Type"/>
        <meta content="IE=EmulateIE10" http-equiv="X-UA-Compatible"/>
        <meta content="webkit|ie-comp|ie-stand" name="renderer">
        <meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" name="viewport">
        <link href="favicon.ico" rel="shortcut icon" type="image/x-icon"/>
        <link href="iconfont.css" rel="stylesheet" type="text/css"/>
        <link href="stui_block.css" rel="stylesheet" type="text/css"/>
        <link href="stui_block_color.css" rel="stylesheet" type="text/css"/>
        <link href="stui_default.css" rel="stylesheet" type="text/css"/>
        <link href="stui_custom.css" rel="stylesheet" type="text/css"/>
        <link href="custom.css" rel="stylesheet" type="text/css"/>
        <script src="jquery.min.js" type="text/javascript"></script>
        <script src="stui_block.js" type="text/javascript"></script>
        <script src="bootstrap.min.js" type="text/javascript"></script>
        <script src="jquery.cookie.min.js" type="text/javascript"></script>
        <script src="home.js" type="text/javascript"></script>
        <script src="https://cdnjs.loli.net/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    </head>
    <body style="padding: 0;">
        <?php include 'dbconnection.php'; ?>
        <?php include('page_head.php') ?>
        <div class="container" style="margin-top:60px;">
            <div class="row">
                <div class="stui-pannel stui-pannel-bg clearfix" >
                    <div class="stui-pannel-box clearfix">
                        <div class="stui-pannel_hd">
                            <div class="stui-pannel__head active bottom-line clearfix">
                                <h3 class="title">
                                    <img src="icon_5.png"/>
                                    <span style="font-weight: 600;">
                                        讨论组
                                    </span>
                                </h3>
                            </div>
                        </div>
                        <div class="stui-pannel_bd clearfix">
                            <!--评论显示区，请插入合适的位置-->
                            <div class="comment"></div>
                            <!--载入js，在</body>之前插入即可-->
                            <!--Leancloud 操作库:-->
                            <script src="//cdn1.lncld.net/static/js/3.0.4/av-min.js"></script>
                            <!--Valine 的核心代码库
                            <script src="./Valine.min.js"></script>-->
                            <script src="https://desertsp.github.io/Valine/dist/Valine.min.js"></script>
                            <script>
                                <!--.comment要与评论区元素一致-->
                                comment_el = '.comment';
                                load_valine = function () {
                                  if ($(comment_el).length) {
                                    new Valine({ 
                                      av: AV,
                                      el: comment_el,
                                      path: window.location.href,
                                      appId: 'UYhd0X2NeaPc4bOCmCdLrXqW-gzGzoHsz',
                                      appKey: 'zLaXzvYhhVgyme3bY8GWFGkX',
                                      emoticon_url: 'https://cloud.panjunwen.com/alu',
                                      emoticon_list: ["狂汗.png","不说话.png","汗.png","坐等.png","献花.png","不高兴.png","中刀.png","害羞.png","皱眉.png","小眼睛.png","暗地观察.png"],
                                      placeholder: '畅所欲言吧，在这里说出你想要看的影片，您的留言回复将通过邮件提醒哦！！！所以请正确填写邮箱地址！！！'
                                      });
                                  }
                                };
                                $(document).ready(load_valine);
                                $(document).on('pjax:complete', function() {
                                  load_valine();
                                });
                            </script>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php include('page_foot.php') ?>
    </body>
</html>