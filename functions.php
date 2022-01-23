<?php
//enqueues

function one_studio_enqueue(){
    wp_enqueue_style("maincss",get_template_directory_uri()."/css/styles.css",array(),time(),"all");
    
    wp_enqueue_style("aoscss",get_template_directory_uri()."/css/aos.css",array(),time(),"all");

    wp_enqueue_script("mainbootstrap",get_template_directory_uri()."/js/bootstrap.bundle.min.js",array(),time(),true);
    wp_enqueue_script("mainjs",get_template_directory_uri()."/js/scripts.js",array(),time(),true);
}

add_action("wp_enqueue_scripts","one_studio_enqueue");


//menu
function register_my_menus() {
    register_nav_menus(
      array(
        'header-menu' => __( 'Header Menu' )
       )
     );
   }
   add_action( 'init', 'register_my_menus' );

   // define the nav_menu_css_class callback 
function filter_nav_menu_css_class( $array, $item, $args, $depth ) { 
    $orde[0]="nav-item";
    return $orde; 
}; 
         
// add the filter 
add_filter( 'nav_menu_css_class', 'filter_nav_menu_css_class', 10, 4 ); 

function add_link_atts($atts) {
    $atts['class'] = "nav-link";
    return $atts;
  }
  add_filter( 'nav_menu_link_attributes', 'add_link_atts');

  add_filter('nav_menu_css_class','misss', 10, 4 );

  function misss($classes,$item,$args,$depth){

    $classes[0]="nav-item";
    if (in_array('menu-item-has-children', $item->classes)) {
    $classes[0]="nav-item dropdown";
    }
    if($item->menu_item_parent!=0) $classes[0]="";

    if (in_array('menu-item-has-children', $item->classes) AND $item->menu_item_parent!=0 ) $classes[0]="dropstart";
   // var_dump($item);
    return $classes;
  }

  add_filter('nav_menu_submenu_css_class','misss1', 10, 3 );

  function misss1($classes,$args,$depth){
    $classes[0]="dropdown-menu shadow";
    return $classes;
  }

  add_filter( 'nav_menu_link_attributes', 'wpse156165_menu_add_class', 10, 3 );

function wpse156165_menu_add_class( $atts, $item, $args ) {

  //  var_dump($item);
  if($item->menu_item_parent!=0)  $atts['class']="dropdown-item";
    if (in_array('menu-item-has-children', $item->classes)) {
        $class = 'nav-link dropdown-toggle'; // or something based on $item
        if($item->menu_item_parent!=0) $class="dropdown-item dropdown-toggle";
        $atts['class'] = $class;
        $atts["href"]="#";
        $atts["data-bs-toggle"]="dropdown";
        $atts["data-bs-auto-close"]="outside";
      }
 
    return $atts;
}

  class Studio_One__Menu_Walker extends Walker_Nav_Menu {
    public function start_lvl( &$output, $depth = 0, $args = null ) {
        if ( isset( $args->item_spacing ) && 'discard' === $args->item_spacing ) {
            $t = '';
            $n = '';
        } else {
            $t = "\t";
            $n = "\n";
        }
        $indent = str_repeat( $t, $depth );
 
        // Default class.
        $classes = array( 'sub-menu' );
 
        /**
         * Filters the CSS class(es) applied to a menu list element.
         *
         * @since 4.8.0
         *
         * @param string[] $classes Array of the CSS classes that are applied to the menu `<ul>` element.
         * @param stdClass $args    An object of `wp_nav_menu()` arguments.
         * @param int      $depth   Depth of menu item. Used for padding.
         */
        $class_names = implode( ' ', apply_filters( 'nav_menu_submenu_css_class', $classes, $args, $depth ) );
        $class_names = $class_names ? ' class="' . esc_attr( $class_names ) . '"' : '';
 
        $output .= "{$n}{$indent}joooe<ul$class_names>{$n}";
    }
 
}
add_theme_support("custom-logo");


   ?>