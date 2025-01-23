 

 var event_phn=phn;
 //alert(event_phn);
(function(e,t,n){if(e.snaptr)return;var a=e.snaptr=function()
{a.handleRequest?a.handleRequest.apply(a,arguments):a.queue.push(arguments)};
a.queue=[];var s='script';r=t.createElement(s);r.async=!0;
r.src=n;var u=t.getElementsByTagName(s)[0];
u.parentNode.insertBefore(r,u);})(window,document,
'https://sc-static.net/scevent.min.js');

snaptr('init', 'ea3a8e36-499f-46ab-aa46-ae4c278e58e3', {
'user_phone_number': event_phn
});

snaptr('track', 'PAGE_VIEW');

 