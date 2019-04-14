<script type="text/javascript">window.$crisp=[];window.CRISP_WEBSITE_ID="73568ad2-63f7-4c67-8754-458806366362";(function(){d=document;s=d.createElement("script");s.src="https://client.crisp.chat/l.js";s.async=1;d.getElementsByTagName("head")[0].appendChild(s);})();</script>
<?php 
print <<<EOW
<header class="stui-header__top clearfix" id="header-top">
    <div class="container">
        <div class="row">
            <div class="stui-header_bd clearfix ">
                <div class="stui-header__logo visible-lg visible-md">
                    <a class="logo" href="index.php">
                    </a>
                </div>
                <ul class="stui-header__menu">
                    <li class="hidden-xs">
                        <a href="index.php">首页</a>
                    </li>
                    <li>
                        <a href="vod-id-1.php">电影</a>
                    </li>
                    <li>
                        <a href="vod-id-2.php">电视剧</a>
                    </li>
                    <li>
                        <a href="vod-id-3.php">动漫</a>
                    </li>
                    <li>
                        <a href="vod-id-4.php">纪录片</a>
                    </li>
                    <li>
                        <a href="vod-id-5.php">排行榜</a>
                    </li>
                    <li>
                        <a href="vod-id-6.php">讨论组</a>
                    </li>
                    <li>
                        <a href="vod-type.php?movtype=美女热舞写真" hidden>高级</a>
                    </li>

                </ul>
                <div class="stui-header__search visible-lg pull-right">
                    <form action="./vod-search.php" method="get" name="search-form" onsubmit="required()" >
                        <input class="form-control" id="wd" name="wd" placeholder="请输入关键字..." type="text" value=""/>
                        <button class="submit" type="submit">
                            <i class="icon iconfont icon-search">
                            </i>
                        </button>
                    </form>
                </div>
                <ul class="stui-header__user">
                    <li class="visible-sm visible-xs visible-md">
                        <a class="open-search" href="vod-search.php?wd=">
                            <i class="icon iconfont icon-search">
                            </i>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</header>      
<script>
    function required() { var empt = document.forms["search-form"]["wd"].value; if (empt =="") { alert("您尚未输入搜寻关键字"); return false; } }
</script>
EOW
 ?>