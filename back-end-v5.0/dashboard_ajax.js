//$.get("请求url","发送的数据对象","成功回调","返回数据类型");
// 获取Dashboard页的5条评论信息
$.get("./ajax.php",{'query_key': 'db_comment'},
    function(data){
    	var comment_table_html = "";
		for (var i = 0; i < data.length; i++) {
			console.log(data[i].content);
			comment_table_html += '<tr><td>' + data[i].username + '</td><td>' + data[i].content +'</td></tr>'
		};
		$("#comment_table").html(comment_table_html);
},'json');
// 获取Dashboard页的5条用户信息
$.get("./ajax.php",{'query_key': 'db_user'},
    function(data){
    	var user_table_html = "";
		for (var i = 0; i < data.length; i++) {
			console.log(data[i].email);
			user_table_html += '<tr><td>' + data[i].username + '</td><td>' + data[i].email +'</td></tr>'
		};
		$("#user_table").html(user_table_html);
},'json');
// 获取Dashboard页的影片总量
$.get("./ajax.php",{'query_key': 'db_vod_total'},
    function(data){
    	var vod_total_table_html = "";
		for (var i = 0; i < data.length; i++) {
			console.log(data[i].total);
			vod_total_table_html += '<td>影片总量</td><td>' + data[i].total +'</td>'
		};
		$("#vod_total_table").html(vod_total_table_html);
},'json');
// 获取Dashboard页的用户总量
$.get("./ajax.php",{'query_key': 'db_user_total'},
    function(data){
    	var user_total_table_html = "";
		for (var i = 0; i < data.length; i++) {
			console.log(data[i].total);
			user_total_table_html += '<td>用户数量</td><td>' + data[i].total +'</td>'
		};
		$("#user_total_table").html(user_total_table_html);
},'json');
// 获取Dashboard页的评论总量
$.get("./ajax.php",{'query_key': 'db_comment_total'},
    function(data){
    	var comment_total_table_html = "";
		for (var i = 0; i < data.length; i++) {
			console.log(data[i].total);
			comment_total_table_html += '<td>评论数量</td><td>' + data[i].total +'</td>'
		};
		$("#comment_total_table").html(comment_total_table_html);
},'json');
// 获取Dashboard页的电影总量
$.get("./ajax.php",{'query_key': 'db_movie_total'},
    function(data){
    	var mov_total_table_html = "";
		for (var i = 0; i < data.length; i++) {
			console.log(data[i].total);
			mov_total_table_html += '<td>电影</td><td>' + data[i].total +'部</td>'
		};
		$("#mov_total_table").html(mov_total_table_html);
},'json');
// 获取Dashboard页的电视剧总量
$.get("./ajax.php",{'query_key': 'db_dianshiju_total'},
    function(data){
    	var dianshiju_total_table_html = "";
		for (var i = 0; i < data.length; i++) {
			console.log(data[i].total);
			dianshiju_total_table_html += '<td>电视剧</td><td>' + data[i].total +'部</td>'
		};
		$("#dianshiju_total_table").html(dianshiju_total_table_html);
},'json');
// 获取Dashboard页的动漫总量
$.get("./ajax.php",{'query_key': 'db_dongman_total'},
    function(data){
    	var dongman_total_table_html = "";
		for (var i = 0; i < data.length; i++) {
			console.log(data[i].total);
			dongman_total_table_html += '<td>动漫</td><td>' + data[i].total +'部</td>'
		};
		$("#dongman_total_table").html(dongman_total_table_html);
},'json');
// 获取Dashboard页的纪录片总量
$.get("./ajax.php",{'query_key': 'db_jilupian_total'},
    function(data){
    	var jilupian_total_table_html = "";
		for (var i = 0; i < data.length; i++) {
			console.log(data[i].total);
			jilupian_total_table_html += '<td>纪录片</td><td>' + data[i].total +'部</td>'
		};
		$("#jilupian_total_table").html(jilupian_total_table_html);
},'json');
// 获取Dashboard页的其他影片总量
$.get("./ajax.php",{'query_key': 'db_other_total'},
    function(data){
    	var other_total_table_html = "";
		for (var i = 0; i < data.length; i++) {
			console.log(data[i].total);
			other_total_table_html += '<td>其他</td><td>' + data[i].total +'部</td>'
		};
		$("#other_total_table").html(other_total_table_html);
},'json');
// Dashboard页的实时时间
glow.ready(function(){
	new glow.widgets.Sortable(
		'#content .grid_5, #content .grid_6',
		{
			draggableOptions : {
				handle : 'h2'
			}
		}
	);
});
var t = null;
t = setTimeout(time,1000);
function time(){
clearTimeout(t);
dt = new Date();
var y = dt.getFullYear();
var mo = dt.getMonth()+1;
var d = dt.getDate();
var h = dt.getHours();
var m = dt.getMinutes();
var s = dt.getSeconds();
document.getElementById("timeShow").innerHTML= y + "-" + mo + "-" + d + "  " + h + ":" + m + ":" + s ;
t = setTimeout(time,1000);
}