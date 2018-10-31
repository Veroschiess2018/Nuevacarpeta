 <?php get_header(); ?> 

  <div class="jumbotron">
       <h1 class="display-4"> Patrimonio Cultural de Quilicura</h1>
     <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="<?php echo get_template_directory_uri(); ?>/assets/imagenes/mariomo.jpg'; ?> alt="First slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="<?php echo get_template_directory_uri(); ?>/assets/imagenes/mariomo2.jpg'; ?> alt="Second slide">
    </div>
    </div>
    </div>
   </div>
 
 <div class="container">
  <div class="row">
     <?php
        $arg = array(
          'post_type'    => 'proyecto',
          'posts_per_page' => 6
        );
        $get_arg = new WP_Query( $arg );
        while ( $get_arg->have_posts() ) {
          $get_arg->the_post();
        ?>

    <div class="col align-self-start">

      <h2><?php the_title() ?></h2>
      <p><?php the_content() ?></p>

      <?php the_post_thumbnail( 'large', array( 'class' => 'img-thumbnail' ) ); ?>

    </div>

      <?php } wp_reset_postdata();   ?>
   

      </div>
 </div>

 
<?php get_footer (); ?>