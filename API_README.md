<h1>
  极客影院API使用说明
</h1>
<p>
  本站提供有限的数据查询，请规范使用，如发现恶意请求会关闭此API服务！
</p>
<blockquote>
  <p>
    方法： GET <br>
    返回： JSON <br>
  </p>
<pre>
{"0":
  {   
    marea: "美国"
    mdirector: "林诣彬"
    mid: "4853"
    mimgurl: "https://pic.china-gif.com/pic/upload/vod/2018-11/15413850980.jpg"
    mname: "速度与激情5"
    mplayurl: "https://sohu.com-v-sohu.com/20181104/14057_a4cd27fe/index.m3u8"
    mscore: "8.4"
    mstar: "范·迪塞尔,保罗·沃克,道恩·强森,乔丹娜·布鲁斯特"
    msumary: "蛰伏2年之后，多米尼克（范•迪塞尔 Vin Diesel饰）与布莱恩（保罗•沃克 Paul Walker 饰）再度联手把火车中的神秘豪车盗走，遭到了警察和黑帮分子的火线追杀。布莱恩和米亚（乔丹娜•布鲁斯特 Jordana Brewster 饰）到里约寻找援兵，并与多米会和。为了寻找多米等人的下落，FBI王牌探员卢克（“岩石”道恩•强森 Dwayne Johnson饰）挺身而出，组成精英部队，追查来到里约。他雇佣了丧夫的美丽女警艾莲娜（埃尔莎•帕塔奇 Elsa Pataky 饰），一同寻找多米。与此同时，里约的地头蛇也对这些不速之客开火。三股势力开始相互缠斗。期间，因米亚怀孕，布莱恩决定陪她一起逃亡，所以多米只得依靠昔日老友探寻新车的秘密。在罗曼、韩等人的帮助下，多米终于找到了这辆车的秘密——芯片，并由此揭开了其中隐藏的一个不可告人的计划……"
    mtype: "动作片 "
    myear: "2011"
  }
}
  </pre>
</blockquote> 
<table class="table table-bordered">
  <thead>
    <tr><th>Key</th><th>Value</th><th>说明</th><th>Demo</th></tr>
  </thead>
  <tbody>
    <tr class="info">
      <td rowspan="5">q</td>
      <td>random</td>
      <td>随机返回影片信息</td>
      <td><a href="http://jike.freevar.com/api.php?q=random">http://jike.freevar.com/api.php?q=random</a></td>
    </tr>
    <tr class="info">
      <td>new</td>
      <td>根据收录时间递减排序返回影片信息</td>
      <td><a href="http://jike.freevar.com/api.php?q=new">http://jike.freevar.com/api.php?q=new</a></td>
    </tr>
    <tr class="info">
      <td>score</td>
      <td>根据评分递减排序返回影片信息</td>
      <td><a href="http://jike.freevar.com/api.php?q=score">http://jike.freevar.com/api.php?q=score</a></td>
    </tr>
    <tr class="info">
      <td>name</td>
      <td>根据影片名返回影片信息，使用参数<b>n</b>指定影片名</td>
      <td>详细使用方法查看下文</td>
    </tr>
    <tr class="info">
      <td>type</td>
      <td>根据影片类型返回影片信息，使用参数<b>t</b>指定影片类型</td>
      <td>详细使用方法查看下文</td>
    </tr>
    <tr class="success">
      <td></td>
      <td colspan="2"><b>Tip</b>: 可以加上参数 <b>count</b> 指定返回数据条数</td>
      <td><a href="http://jike.freevar.com/api.php?q=random&count=10  ">http://jike.freevar.com/api.php?q=random&count=10</a></td>
    </tr>
  </tbody>
</table>
<table class="table table-bordered">
  <thead>
    <tr><th>Key</th><th>Value</th><th>说明</th><th>Demo</th></tr>
  </thead>
  <tbody>
    <tr class="info">
      <td>n</td>
      <td><影片名关键字></td>
      <td>根据影片名返回影片信息</td>
      <td><a href="http://jike.freevar.com/api.php?q=name&n=速度与激情">http://jike.freevar.com/api.php?q=name&n=速度与激情</a></td>
    </tr>
    <tr class="success">
      <td></td>
      <td colspan="2"><b>Tip</b>: 可以加上参数 <b>count=1</b> 返回匹配度最高的一条数据</td>
      <td><a href="http://jike.freevar.com/api.php?q=name&n=速度与激情&count=1">http://jike.freevar.com/api.php?q=name&n=速度与激情&count=1</a></td>
    </tr>
  </tbody>
</table>

<table class="table table-bordered">
  <thead>
    <tr><th>Key</th><th>Value</th><th>说明</th><th>Demo</th></tr>
  </thead>
  <tbody>
    <tr class="info">
      <td rowspan="4">t</td>
      <td>电影</td>
      <td>返回电影相关信息</td>
      <td><a href="http://jike.freevar.com/api.php?q=type&t=电影">http://jike.freevar.com/api.php?q=type&t=电影</a></td>
    </tr>
    <tr class="info">
      <td>电视剧</td>
      <td>返回电视剧相关信息</td>
      <td><a href="http://jike.freevar.com/api.php?q=type&t=电视剧">http://jike.freevar.com/api.php?q=type&t=电视剧</a></td>
    </tr>
    <tr class="info">
      <td>动漫</td>
      <td>返回动漫相关信息</td>
      <td><a href="http://jike.freevar.com/api.php?q=type&t=动漫">http://jike.freevar.com/api.php?q=type&t=动漫</a></td>
    </tr>
    <tr class="info">
      <td>综艺</td>
      <td>返回综艺相关信息</td>
      <td><a href="http://jike.freevar.com/api.php?q=type&t=综艺">http://jike.freevar.com/api.php?q=type&t=综艺</a></td>
    </tr>
    <tr class="success">
      <td colspan="3"><b>Tip</b>: 可以加上参数 <b>count</b> 指定返回数据条数</td>
      <td><a href="http://jike.freevar.com/api.php?q=type&t=电影&count=10">http://jike.freevar.com/api.php?q=type&t=电影&count=10</a></td>
    </tr>
  </tbody>
</table>
