<a href="javascript:void(0);" class="float" onclick="openWhatsApp()">
  <img src="https://static.cdnlogo.com/logos/w/29/whatsapp-icon.svg"
       alt="WhatsApp"
       class="float-icon">
</a>

<style>
.float {
  position: fixed;
  width: 60px;
  height: 60px;
  bottom: 40px;
  right: 40px;
  background-color: #25d366;
  border-radius: 50%;
  box-shadow: 2px 2px 3px #999;
  z-index: 100;
  cursor: pointer;
  display: flex;
  align-items: center;
  justify-content: center;
}

.float-icon {
  width: 60%;
  height: 60%;
  object-fit: contain;
}
</style>

<script>


























function openWhatsApp() {
  //alert("WhatsApp button clicked!");


    sendWappiMessage('قام احد العملاء بالنقر على زر الواتساب العائم في الاعلان', w_app_group_id);

  
  window.open(
    "https://api.whatsapp.com/send?phone="+w_app_number+"&text=Hola%21%20Quisiera%20m%C3%A1s%20informaci%C3%B3n%20sobre%20Varela%202.",
    "_blank"
  );

  
}
</script>
