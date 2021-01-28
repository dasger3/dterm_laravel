window.onscroll = function(){
     var html = document.documentElement, body = document.body;
     var BlkStyle = document.getElementById('header').style;
     if(html.scrollTop>10||body.scrollTop>10) { //alert()
         BlkStyle.backgroundColor = "white";
     } else BlkStyle.backgroundColor = "transparent";
}

    