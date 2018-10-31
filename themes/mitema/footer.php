 <footer>
   <div class="card" style="text-align: center;">
    <div class="card-header">
     <div class="card-body">
      <style="background-color:#95E3F4;"></style>
       <div>
        <ul>
         <li>O´higgins 281, Quilicura, Santiago de Chile</li>
         <li>Teléfonos:994691955</li>
         <li>Email:contacto@corporacionquilicura.cl</li>

         
         <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">

         <?php if ( is_active_sidebar( 'widget_footer' ) ) {
         dynamic_sidebar( 'widget_footer' );
         }; ?>
        </ul>
     </div>
    </div>
   </div>
   <div class="container-contenedor">
    <div class="row">
      <div class="col-6">

      <?php echo do_shortcode('[contact-form-7 id="52" title="Contact form 1"]') ?>
     
  </div> 
 <div class="col-6">
  <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d13328.706508078792!2d-70.72532522800293!3d-33.36645451681214!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xbc945b8633f058ff!2sCorporaci%C3%B3n+Cultural+de+Quilicura!5e0!3m2!1ses!2scl!4v1531416535314" width="800" height="300" frameborder="0" style="border:0" allowfullscreen></iframe></div>
</div>
</div>
<?php wp_footer() ?>
</footer>