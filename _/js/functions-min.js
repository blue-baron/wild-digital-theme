!function($){$(document).ready(function(){function n(n,i){var t=n,e=t.width(),r=t.offset(),o=r.left,d=$(i).offset(),f=d.left,a=f-o;return{width:e,final_left:a}}function i(i){for(var t=$(i),e=t.children(".dropdown"),r=e.children(),o=r.children(),d=n($("#top"),t),f=100,a=0,h=f,l=0;l<r.length;l++){var p=r.width();a+=p}for(l=0;l<o.length;l++){var u=o.height();h+=u}var c=(d.width-a)/2,w=f+h;$("#menu-primary-nav .dropdown").css({left:"-"+d.final_left+"px",width:d.width-c+"px",height:w+"px","padding-left":c+"px"})}$("p:empty").remove(),$("#menu-primary-nav > li > ul").addClass("dropdown"),$("#menu-primary-nav > li").hover(function(){i(this)},function(){$(".dropdown").css({left:"-9999px"})}),$(window).resize(function(){$("#menu-primary-nav > li").hover(function(){i(this)})})})}(window.jQuery);