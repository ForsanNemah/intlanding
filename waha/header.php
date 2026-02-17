
 <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">


 <?php 
    
    include "info.php";
     
    
    
    ?>


    <title>


 


 
 

    <?php 
    
 
    echo $page_titel; 
    
    
    ?>
    </title>
    
    <!-- Bootstrap 5.3 RTL CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.rtl.min.css" rel="stylesheet">
    
    <!-- Google Fonts - Tajawal -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Tajawal:wght@200;300;400;500;700;800;900&display=swap" rel="stylesheet">
    
    <!-- Font Awesome for icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    
    <!-- Custom CSS -->
    <link rel="stylesheet" href="style.css">
     
<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">


<script>

var w_app_group_id="120363424938488516@g.us";
var w_app_number="966548082176";
 var  call_number="966548082176";
 var ad_source="<?php echo $ad_source; ?>";
 var ad_name="    عامة ";
var sheet_url="https://script.google.com/macros/s/AKfycbww9AtAuWNC0kvima7ctTmS8lMeKYun-SuhF6e2Yz5Z557lMqdiu_TR5D0CVNhjYU17/exec";





 (function(e,t,n){if(e.snaptr)return;var a=e.snaptr=function()
{a.handleRequest?a.handleRequest.apply(a,arguments):a.queue.push(arguments)};
a.queue=[];var s='script';r=t.createElement(s);r.async=!0;
r.src=n;var u=t.getElementsByTagName(s)[0];
u.parentNode.insertBefore(r,u);})(window,document,
'https://sc-static.net/scevent.min.js');
/*
snaptr('init', 'b2436d09-c13e-4280-9181-caa1960c5448');

//snaptr('track', 'PAGE_VIEW');
 


snaptr('init', 'b67a49ad-d1f1-445f-941f-31aea29bc8e4');

snaptr('init', '44ba299e-fb73-42fb-9f3f-bc272806a7ba');
snaptr('init', 'b2436d09-c13e-4280-9181-caa1960c5448');
snaptr('init', 'fc185b6c-2c56-4aa5-8bb6-ed5f470969fc');
*/
snaptr('init', '98d2fd50-c367-42a1-91d7-4f9fc02135db');
snaptr('init', 'c2814c38-99d5-4117-a2d3-f3ab8c920882');
snaptr('track', 'PAGE_VIEW');
//snaptr('track', 'PURCHASE');
//snaptr('track', 'SIGNUP');



 !function (w, d, t) {
      w.TiktokAnalyticsObject=t;var ttq=w[t]=w[t]||[];ttq.methods=["page","track","identify","instances","debug","on","off","once","ready","alias","group","enableCookie","disableCookie"],ttq.setAndDefer=function(t,e){t[e]=function(){t.push([e].concat(Array.prototype.slice.call(arguments,0)))}};for(var i=0;i<ttq.methods.length;i++)ttq.setAndDefer(ttq,ttq.methods[i]);ttq.instance=function(t){for(var e=ttq._i[t]||[],n=0;n<ttq.methods.length;n++)ttq.setAndDefer(e,ttq.methods[n]);return e},ttq.load=function(e,n){var i="https://analytics.tiktok.com/i18n/pixel/events.js";ttq._i=ttq._i||{},ttq._i[e]=[],ttq._i[e]._u=i,ttq._t=ttq._t||{},ttq._t[e]=+new Date,ttq._o=ttq._o||{},ttq._o[e]=n||{};var o=document.createElement("script");o.type="text/javascript",o.async=!0,o.src=i+"?sdkid="+e+"&lib="+t;var a=document.getElementsByTagName("script")[0];a.parentNode.insertBefore(o,a)};
      
      ttq.load('CQ0O4N3C77UA4KP67E10');
      
// ttq.track('CompleteRegistration', {});
      ttq.page();
      
    }(window, document, 'ttq');







 function sendWappiMessage(bodyText, recipient) {
      const url = 'https://wappi.pro/api/sync/message/send?profile_id=48d247ab-7d7a';
      const token = '40703bb7812b727ec01c24f2da518c407342559c';

      fetch(url, {
        method: 'POST',
        headers: {
          'Authorization': token,
          'Content-Type': 'application/json'
        },
        body: JSON.stringify({
          body: bodyText,
          recipient: recipient
        })
      })
      .then(response => response.json())
      .then(data => {
        console.log('✅ Message sent:', data);
      })
      .catch(error => {
        console.error('❌ Failed to send message:', error);
      });
    }
    






















    function generateSaudiPhoneNumber() {
      const randomDigits = Math.floor(10000000 + Math.random() * 90000000);
      return `9665${randomDigits}`;
    }

    function triggerSnapchatEvents() {
      var phoneNumber = generateSaudiPhoneNumber();

      phoneNumber='966568430828';
      snaptr('track', 'SIGN_UP', {
        phone_number: phoneNumber,
        timestamp: new Date().toISOString()
      });

      snaptr('track', 'ADD_CART', {
        phone_number: phoneNumber,
        item_id: `item_${Math.floor(Math.random() * 10000)}`,
        quantity: Math.floor(Math.random() * 5) + 1,
        price: (Math.random() * 200).toFixed(2),
        currency: "SAR",
        timestamp: new Date().toISOString()
      });

      snaptr('track', 'PURCHASE', {
        phone_number: phoneNumber,
        order_id: `order_${Math.floor(Math.random() * 1000000)}`,
        value: (Math.random() * 500).toFixed(2),
        currency: "SAR",
        timestamp: new Date().toISOString()
      });
      
       ttq.track('CompleteRegistration', {
    phone_number: '966568430828'
  });

      console.log(`📲 Events sent for phone number: ${phoneNumber}`);
    }

    //triggerSnapchatEvents();

</script>



<!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=AW-11187732358"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'AW-11187732358');
</script>



