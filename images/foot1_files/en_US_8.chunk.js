webpackJsonp([8],{392:function(e,t,i){function o(e,t,i){!i||i.error?t(i&&i.error):e(i)}var n,r=i(10),s=i(163),a=i(102),l=[],c=[],u=!1,p=!1,d={CONNECTED:"connected",NOT_AUTHORIZED:"not_authorized",UNKNOWN:"unknown"},h={status:d,api:function(e,t,i){return new s(function(r,s){u||s(new Error("FB SDK was not ready"));var a=o.bind(null,r,s),l=[e,t,i,a].filter(function(e){return void 0!==e});n.api.apply(n,l)})},ready:function(e){u?e(n):l.push(e)},setReady:function(){u=!0,l.forEach(function(e){return e(n)}),l=[]},sdkReady:function(e){p?e(n):c.push(e)},loadSDK:function(){if(r.canUseDOM){window.fbAsyncInit=function(){n=window.FB,p=!0,c.forEach(function(e){return e(n)}),c=[]};var e,t=document,i="script",o="facebook-jssdk",s=t.getElementsByTagName(i)[0];if(!t.getElementById(o)){e=t.createElement(i),e.id=o;var l=new a(document.location.href).getQueryData().api,u=l&&/^\w+(?:\.\w+)?(?:\.\w+)?$/.test(l)?"connect."+l+".facebook.com":"connect.facebook.net";e.src="//"+u+"/en_US/sdk.js",s.parentNode.insertBefore(e,s)}}}};h.loadSDK(),e.exports=h}});