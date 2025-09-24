<?php 
$map_url = "https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3058.2385267967356!2d39.208818574255524!3d21.567589469055907!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x15c3d18fb2957fcf%3A0x9ec0eb9a963fb0b0!2z2YXYrNmF2Lkg2LnZitin2K_Yp9iqINmF2KfYsdmK2LIg2YTYt9ioINmI2KrZgtmI2YrZhSDYp9mE2KPYs9mG2KfZhiBNYXJlZXogZGVudGFsIENlbnRlcg!5e1!3m2!1sen!2seg!4v1758754120230!5m2!1sen!2seg"; 
?>

<div class="container my-4">
  <div class="row justify-content-center">
    <div class="col-lg-8">
      <div class="card shadow">
        <div class="card-header text-center bg-primary text-white">
          موقعنا على الخريطة
        </div>
        <div class="card-body p-0">
          <div class="ratio ratio-16x9">
            <iframe 
              src="<?php echo $map_url; ?>" 
              style="border:0;" 
              allowfullscreen="" 
              loading="lazy" 
              referrerpolicy="no-referrer-when-downgrade">
            </iframe>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
