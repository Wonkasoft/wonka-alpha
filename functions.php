<?php 

// Site Setup import framework and all javascript files
function alpha_script_enqueue()  {
 wp_deregister_script('jquery');
 wp_register_script('jquery', get_template_directory_uri() . '/js/vendor/jquery.js', array(), '2.2.2', true);
 wp_enqueue_style('foundation', get_template_directory_uri() . '/css/foundation.css', false, '6.2.3', 'all');
 wp_enqueue_style('alpha', get_template_directory_uri() . '/css/alpha.css', false, '1.0.0', 'all');
 wp_enqueue_script('jquery', get_template_directory_uri() . '/js/vendor/jquery.js', array(), '2.2.2', true);
 wp_enqueue_script('foundationjs', get_template_directory_uri() . '/js/vendor/foundation.js', array('jquery'), '6.2.3', true);
 wp_enqueue_script('what-input', get_template_directory_uri() . '/js/vendor/what-input.js', array('foundationjs'), '', true);
 wp_enqueue_script('appjs', get_template_directory_uri() . '/js/app.js', array('foundationjs'), '6.2.3', true);
 wp_enqueue_script('appjs', get_template_directory_uri() . '/js/app.js', array('foundationjs'), '6.2.3', true);
 wp_enqueue_script('wonkajs', get_template_directory_uri() . '/js/wonka.js', array(jquery), true);
}
// Activate framework and supporting javascript files
add_action( 'wp_enqueue_scripts', 'alpha_script_enqueue');

// Theme setup
function alpha_theme_setup() {
  add_theme_support('menus');
  register_nav_menu('primary', 'Primary Header Navigation');
  register_nav_menu('secondary', 'Secondary SideBar Navigation');
  register_nav_menu('third', 'Third Footer Navigation');
  add_theme_support('custom-background');
  add_theme_support('custom-header');
  add_theme_support('post-thumbnails');
  add_theme_support('html5',array('search-form'));
}

// Activate Menu Setup
add_action('init', 'alpha_theme_setup');

// Add custom-logo to the theme
function alpha_prefix_setup() {
 add_theme_support( 'custom-logo', array(
  'height'      => 100,
  'width'       => 100,
  'flex-height' => true,
  'flex-width'  => true,
  'header-text' => array( 'site-title', 'site-description'),
            'transport' => 'postMessage'  
  ) );
}

// Activate custom-logo 
add_action( 'after_setup_theme', 'alpha_prefix_setup' );

// Hook into the administrative header output
function wa_custom_logo() {
?>
<style type="text/css">
    #wpadminbar #wp-admin-bar-wp-logo > .ab-item .ab-icon:before 
    {
    background-image: url("<?php echo get_template_directory_uri(). '/images/wonka-mini.png'; ?> ") !important;
    background-size: cover;
    color:rgba(0, 0, 0, 0);
    }

    #wpadminbar #wp-admin-bar-wp-logo.hover > .ab-item .ab-icon {
    background-size: 0 0;
    }
    </style>

<?php

}

function wonkaAdmin() {
	
  ?>
	
	<script type="text/javascript">
	var wspan = document.createElement("span");
	var wa = document.createElement("a");
	var wli = document.createElement("li");
	wli.id = "customAdmin";
	wli.appendChild(wa);
	wa.className = "adminAnchor";
      wa.href = "http://localhost/amazontoner/wp-admin/customize.php?url=http%3A%2F%2Flocalhost%2Famazontoner%2F";
	wa.appendChild(wspan);
	wspan.className = "adminAnchor-text";
	wspan.innerHTML = "Wonka Admin";

	document.getElementById("wp-admin-bar-root-default").appendChild(wli);

            $('#site-wrap').css('margin_top', '32px');
            
	</script>
<?php
}
 

add_action('wp_after_admin_bar_render', 'wa_custom_logo');
add_action('wp_after_admin_bar_render', 'wonkaAdmin');
//hook into the administrative header output Ending

// Customizer AJAX Code snipplet to be inserted in footer
function wonkaView_js() {
    wp_enqueue_script('wonkamizer_live', get_template_directory_uri() . '/js/vendor/wonkamizer_live.js', array('customize-preview' , 'jquery'), '1.0.1', true); 
}

add_action( 'customize_preview_init', 'wonkaView_js' , 21);

// For Customizer Controls
function wonkaAlpha_customize_register( $wp_customize ) {

//All our sections, settings, and controls will be added here
//For real time changes no refreash needed.
    $wp_customize->get_setting( 'blogname' )->transport = 'postMessage';
    $wp_customize->get_setting( 'blogdescription' )->transport = 'postMessage';
    $wp_customize->get_setting( 'header_textcolor' )->transport = 'postMessage';
    $wp_customize->get_setting( 'background_color' )->transport = 'postMessage';


   // Wonka Alpha Mod Panel
   $wp_customize->add_panel(  'wa_panel' , array(
    'title'      => __( 'Wonka Alpha Mod Area', 'wonka-alpha' ),
    'description' => 'Wonka Alpha Modify',
    'priority' => 1,
    ) );
             //Slider Options   
            $wp_customize->add_section(  'wa_slider_options' , array(
            'title'      => __( 'Slider Options', 'wonka-alpha' ),
            'description' => 'Wonka Alpha Slider Options',
            'priority' => 2,
            'panel'    => 'wa_panel',
            ) );

              //Slider 1
              $wp_customize->add_setting('wa_slider1', array(
              'default'        => '',
              'transport'    => 'postMessage',
              ));
              
              $wp_customize->add_control(new WP_Customize_Media_Control($wp_customize, 'wa_slider1', array(
              'label'      => __('Slider 1 Image', 'wonka-alpha'),
              'section'    => 'wa_slider_options',
              'settings'   => 'wa_slider1',
              'mime_type' => 'image',
              
              ) ));
              
              //Slider 2
              $wp_customize->add_setting('wa_slider2', array(
              'default'        => '',
              'transport'    => 'postMessage',
              ));
              
              $wp_customize->add_control(new WP_Customize_Media_Control($wp_customize, 'wa_slider2', array(
              'label'      => __('Slider 2 Image', 'wonka-alpha'),
              'section'    => 'wa_slider_options',
              'settings'   => 'wa_slider2',
              'mime_type' => 'image',
              
              ) ));
              
              //Slider 3
              $wp_customize->add_setting('wa_slider3', array(
              'default'        => '',
              'transport'    => 'postMessage',
              ));
              
              $wp_customize->add_control(new WP_Customize_Media_Control($wp_customize, 'wa_slider3', array(
              'label'      => __('Slider 3 Image', 'wonka-alpha'),
              'section'    => 'wa_slider_options',
              'settings'   => 'wa_slider3',
              'mime_type' => 'image',
              
              ) ));
              
              //Slider 4
              $wp_customize->add_setting('wa_slider4', array(
              'default'        => '',
              'transport'    => 'postMessage',
              ));
              
              $wp_customize->add_control(new WP_Customize_Media_Control($wp_customize, 'wa_slider4', array(
              'label'      => __('Slider 4 Image', 'wonka-alpha'),
              'section'    => 'wa_slider_options',
              'settings'   => 'wa_slider4',
              'mime_type' => 'image',
              ) ));
      

      //Footer items copyright info and designer info
      $wp_customize->add_section(  'wa_footer_items' , array(
      'title'      => __( 'Copyright and Credits', 'wonka-alpha' ),
      'description' => 'Wonka Alpha Modify',
      'priority' => 10,
      'panel'    => 'wa_panel',
       ) );
          
          //Copyright footer info
          $wp_customize->add_setting('wa_copyright', array(
          'default'        => 'Wonkasoft, LLC all rights reserved.',
          'transport'    => 'postMessage',
          ));
          $wp_customize->add_control('wa_copyright', array(
          'label'      => __('Copyright footer info (Text Only)', 'wonka-alpha'),
          'section'    => 'wa_footer_items',
          'settings'   => 'wa_copyright',                                    
          ));

          //Website Designed by info Switch
          $wp_customize->add_setting('wa_designed_switch', array(
          'default'        => 'on',
          'transport'    => 'postMessage',
          ));
          $wp_customize->add_control('wa_designed_switch', array(
          'label'      => __('Website Designer Credit Switch', 'wonka-alpha'),
          'section'    => 'wa_footer_items',
          'settings'   => 'wa_designed_switch',
          'type'            => 'radio',
          'choices'       => array (
          'on' => 'Turn on',
          'off' => 'Turn off',
          ),
          ));

          //Designer Credit for work
          $wp_customize->add_setting('wa_designed', array(
          'default'        => 'Wonkasoft, LLC',
          'transport'    => 'postMessage',
          ));
          $wp_customize->add_control('wa_designed', array(
          'label'      => __('Website Designer Credit', 'wonka-alpha'),
          'section'    => 'wa_footer_items',
          'settings'   => 'wa_designed',
          ));
          
          //Desginer URL
          $wp_customize->add_setting('wa_designed_url', array(
          'default'        => 'http://www.wonkasoft.com',
          'transport'    => 'postMessage',
          ));
          $wp_customize->add_control('wa_designed_url', array(
          'label'      => __('Website Designer Credit URL', 'wonka-alpha'),
          'section'    => 'wa_footer_items',
          'settings'   => 'wa_designed_url',
          ));     

          //Desginer URL Title
          $wp_customize->add_setting('wa_url_title', array(
          'default'        => 'Website by Wonkasoft.com',
          'transport'    => 'postMessage',
          ));
          $wp_customize->add_control('wa_url_title', array(
          'label'      => __('Website URL Title', 'wonka-alpha'),
          'section'    => 'wa_footer_items',
          'settings'   => 'wa_url_title',
          ));
      
                                   
}

function wonkaAlpha_css_customizer() {
	?>
	<style type="text/css">
                    
            </style>
	<?php
}

// Activate Custom Footer Information and ?
add_action('wp_head', 'wonkaAlpha_css_customizer' );
add_action( 'customize_register', 'wonkaAlpha_customize_register' );

?>