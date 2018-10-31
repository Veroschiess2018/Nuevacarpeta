<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
 <?php wp_head() ?>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Cormorant+Unicase|Montserrat|Noto+Serif+JP" rel="stylesheet">
   <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
      <title>QUILICURA PATRIMONIO Y CULTURA</title>
  
  </head>
<body>
   <?php
      $custom_logo_id = get_theme_mod( 'custom_logo' );
      $logo = wp_get_attachment_image_src( $custom_logo_id , 'full' );
    ?>
    <div>
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <a class="navbar-brand" href="#"></a>
    
      <img src="<?php echo $logo[0]; ?>" class="img-fluid" alt="responsive image" >
     <button class="navbar-toggler" type="button" data-toggle="   collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
        <script type="text/javascript">
        $(".nav-link").on("click", function(){
              alert ("QUILICURA AVANZA!!!")
             });
           </script>
     </button>
     <?php if ( has_nav_menu( 'header-menu' ) ) { ?>
  <?php wp_nav_menu( array( 
    'theme_location'  => 'header-menu',
    'container_id'    => 'navbarNav',
    'items_wrap'      => '<ul class="nav justify-content-end">%3$s</ul>'
    )
  ); 
  ?>
<?php } ?>
   
      </nav>
       
  