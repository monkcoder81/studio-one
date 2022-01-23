<!DOCTYPE html> 
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Agency - Start Bootstrap Theme</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v5.15.4/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700" rel="stylesheet" type="text/css" />
        <!-- Core theme CSS (includes Bootstrap)-->
        

        
        <?php wp_head(); ?>
    <style>
@media all and (min-width: 992px) {
    li{
    position:relative;/*allow submenu to use the position of its parent as reference */
    display:inline-block;
    padding:5px;
}

/*rules for only submenu li elements*/

/*submenus are displayed only when its li parent is hovered*/
li > ul{
    display:none;
    position:absolute;
}
li:hover > ul{
    display:block;
}

/*submenus of submenus are displayed at the right of their parent and on the same abscisse*/
li li:hover > ul{
    right:100%;
    top:0;
}
}	
        </style>

    </head>
    
    <body id="page-top"> 
        <!-- Navigation-->
        
      <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
        <div class="container">
               <!-- <a class="navbar-brand" href="#page-top"><img src="http://pruebascris.es/wp-content/themes/studio-one/assets/img/navbar-logo.svg" alt="..." /></a>-->
               <?php if ( function_exists( 'the_custom_logo' ) ) {
    the_custom_logo();
}
?>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    Menu
                    <i class="fas fa-bars ms-1"></i>
                </button>
              <!--  <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav text-uppercase ms-auto py-4 py-lg-0">
                     
                        <li class="nav-item"><a class="nav-link" href="#team">Team</a></li>
                        <li class="nav-item"><a class="nav-link" href="#contact">Contact</a></li>
                          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle test" href="#" data-bs-toggle="dropdown" data-bs-auto-close="outside">Multilevel</a>
            <ul class="dropdown-menu shadow">
              <li><a class="dropdown-item" href="#">Gallery</a></li>
              <li><a class="dropdown-item" href="blog.html">Blog</a></li>
              <li class="dropstart">
                <a href="#" class="dropdown-item dropdown-toggle" data-bs-toggle="dropdown">Submenu Left</a>
                <ul class="dropdown-menu shadow">
                  <li><a class="dropdown-item" href=""> Third level 1</a></li>
                  <li><a class="dropdown-item" href=""> Third level 2</a></li>
                  <li><a class="dropdown-item" href=""> Third level 3</a></li>
                  <li><a class="dropdown-item" href=""> Third level 4</a></li>
                  <li><a class="dropdown-item" href=""> Third level 5</a></li>
                </ul>
              </li>
             
                    </ul>
                </div>-->
    
                <?php  
                    wp_nav_menu( array( 'theme_location' => 'header-menu' ,
                    'container_id'=>'navbarResponsive',
                    'container_class'=>'collapse navbar-collapse',
                    'menu_class'=>'navbar-nav text-uppercase ms-auto py-4 py-lg-0',
                   // 'walker'=> new Studio_One__Menu_Walker,
                    ) );
                ?>
            </div>
        </nav> 

  