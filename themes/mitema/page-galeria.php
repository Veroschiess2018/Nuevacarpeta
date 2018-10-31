<?php get_header(); ?>

<div class="jumbotron">
  <h1 class="display-4">Galería de Imagenes</h1>
     <h1 class="display-4">Quilicura Patrimonio Cultural de Santiago</h1>
     <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">

      <img class="d-block w-100" src="<?php echo get_theme_file_uri('assets/imagenes/copia.jpg') ?>"  alt="First slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="<?php echo get_theme_file_uri('assets/imagenes/muninoche.jpg') ?>"  alt="Second slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="<?php echo get_theme_file_uri('assets/imagenes/plaza-quilicura-2014.jpg') ?>" alt="Third slide">
    </div>
    </div>
    </div>
  </div>
    <button type="button" class="btn-primary btn-lg">CONTÁCTAME</button></a>
  <script type="text/javascript">
    $(".btn-primary").ready(handler)
    $(".btn-primary").ready(handler)
    $(handler)
  </script>

</div>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>

    </div>

<section class="section-1">
<div class="card-deck">
  <div class="card">
    <img class="card-img-top" src="<?php echo get_theme_file_uri('assets/imagenes/fundo_lo_cruzat.jpg') ?>" alt="200x200">
    <div class="card-body">
      <h5 class="card-title">Fundo Lo Cruzat</h5>
      <p class="card-text"><small class="text-muted">Zona Agrícola</small></p>     
    </div>
  </div>


  <div class="card">
    
      <img class="card-img-top" src="<?php echo get_theme_file_uri('assets/imagenes/Fundo_Marcoleta.jpg') ?>"  alt="200x200">
      <div class="card-body">
        <h5 class="card-title">Fundo Lo Marcoleta</h5>
          <p class="card-text"><small class="text-muted">Zona Agrícola</small></p>
      </div>
  </div>

  <div class="card">
    <img class="card-img-top" src="<?php echo get_theme_file_uri('assets/imagenes/quilicura_portada_2.JPG') ?>"  alt="200x200">
      <div class="card-body">
        <h5 class="card-title">Senderos</h5>
          <p class="card-text"><small class="text-muted">Caminos de Quilicura</small></p>
       </div>
  </div>

</div>
</section>


<section class="section-2">
  <div class="card-deck">
   <div class="card">
    
    <img class="card-img-top" src="<?php echo get_theme_file_uri('assets/imagenes/lo_echevers.jpg') ?>" alt="200x200">
      <div class="card-body">
        <h5 class="card-title">Fundo Lo Echevers</h5>
          <p class="card-text"><small class="text-muted">Zona Agrícola</small></p>
      </div>
  </div>


  <div class="card">
    <img class="card-img-top" src="<?php echo get_theme_file_uri('assets/imagenes/zona_agricola.jpg') ?>"  alt="200x200">
      <div class="card-body">
        <h5 class="card-title">Zona Agrícola</h5>
          <p class="card-text"><small class="text-muted">Zona rural</small></p>
      </div>
  </div>


  <div class="card">
    <img class="card-img-top" src="<?php echo get_theme_file_uri('assets/imagenes/parroquia.JPG') ?>" alt="200x200">
      <div class="card-body">
        <h5 class="card-title">Parroquia de Quilicura</h5>
          <p class="card-text"><small class="text-muted">Calle O´Higgins con Matta</small></p>
      </div>
  </div>

</div>
</section>


<section class="section-3">
  <div class="card-deck">
    <div class="card">

     <img class="card-img-top" src="<?php echo get_theme_file_uri('assets/imagenes/quilicura_esc_32.jpg') ?>" alt="200x200">
      <div class="card-body">
        <h5 class="card-title">Escuela 32</h5>
          <p class="card-text"><small class="text-muted">Sector Ferrocarril</small></p>
      </div>
    </div>


  <div class="card">
    <img class="card-img-top" src="<?php echo get_theme_file_uri('assets/imagenes/quilicura_ayer_8.JPG') ?>" alt="200x200">
      <div class="card-body">
        <h5 class="card-title">Actos de Colegios Quilicuranos</h5>
          <p class="card-text"><small class="text-muted">Estudiantes</small></p>
      </div>
  </div>


  <div class="card">
    <img class="card-img-top" src="<?php echo get_theme_file_uri('assets/imagenes/fundo_san_Luis.jpg') ?>"  alt="200x200">
    <div class="card-body">
        <h5 class="card-title">Fundo San Luís</h5>
          <p class="card-text"><small class="text-muted">Entrada desde la Panamericana</small></p>
    </div>
  </div>

</div>
</section>
</div>

      <hr/>
  
<?php get_footer(); ?>