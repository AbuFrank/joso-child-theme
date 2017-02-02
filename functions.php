<?php
/**
 * OnePress Child Theme Functions
 *
 */

/**
 * Enqueue child theme style
 */
add_action( 'wp_enqueue_scripts', 'onepress_child_enqueue_styles' );
function onepress_child_enqueue_styles() {
    wp_enqueue_style( 'onepress-child-style', get_stylesheet_directory_uri() . '/style.css' );
}
/**
 * Hook to add custom section after about section
 *
 * @see wp-content/themes/onepress/template-frontpage.php
 */

/*
function add_my_custom_section(){
    ?>
    <section id="my_section" class="my_section section-padding onepage-section">
        <div class="container">
            <div class="section-title-area">
                <h5 class="section-subtitle"> My section subtitle</h5>
                <h2 class="section-title"> My section title</h2>
            </div>
            <div class="row">
                <!-- Your section content here, you can use bootstrap 4 elements :) -->
                <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Donec odio. Quisque volutpat mattis eros. Nullam malesuada erat ut turpis. Suspendisse urna nibh, viverra non, semper suscipit, posuere a, pede.</p>

            </div>
        </div>
    </section>
    <?php
}
add_action( 'onepress_after_section_about', 'add_my_custom_section'  );
*/

// Custom post types function
function create_custom_post_types(){
// Create a loan scenario post type
  register_post_type('loan_scenarios', 
    array(
    'labels' => array(
      'name' => __('Loan Scenarios'),
      'singular_name' => __('Loan Scenario'),
      ),
    'public' => true,
    'has_archive' => true,
    'rewrite' => array (
      'slug' => 'loan-scenarios'
      ),
    )      
  );

  register_post_type('loan_types', 
    array(
    'labels' => array(
      'name' => __('Loan Types'),
      'singular_name' => __('Loan Type'),
      ),
    'public' => true,
    'has_archive' => true,
    'rewrite' => array (
      'slug' => 'loan-types'
      ),
    )      
  );

  register_post_type('closings', 
    array(
    'labels' => array(
      'name' => __('Closings'),
      'singular_name' => __('Closing'),
      ),
    'public' => true,
    'has_archive' => true,
    'rewrite' => array (
      'slug' => 'closings'
      ),
    )      
  );    
}

// Hook this custom post type function into the theme
add_action( 'init', 'create_custom_post_types');
