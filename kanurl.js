javascript:
var h = window.location.href;
console.log("run at " + h);
if(h.match(/http:\/\/www\.dmm\.com\/netgame\/social\/-\/gadgets\/=\/app_id=854854\//)){
    if (confirm("重新導向中...載入完成請再按一次")) {
        var url = document.getElementById("game_frame").src;
		location.href = url;
    }
}else if(h.match(/http:\/\/osapi\.dmm\.com\/gadgets\/ifr/)){
	var url = prompt("完成囉，請自行複製",document.getElementById("externalswf").src);
	location.href = url;
}else{
    var url = "http://www.dmm.com/netgame/social/-/gadgets/=/app_id=854854/";
	location.href = url;
}