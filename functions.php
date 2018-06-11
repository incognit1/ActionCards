<?
function uptuts_styles_with_the_lot()
{
	wp_register_style( 'bootstrap', get_template_directory_uri() . '/libs/bootstrap/css/bootstrap.min.css', array(), '1', 'all' );
	wp_register_style( 'main', get_template_directory_uri() . '/css/main.css', array(), '1', 'all' );
	wp_register_style( 'media', get_template_directory_uri() . '/css/media.css', array(), '1', 'media' );
	wp_register_style( 'fonts', get_template_directory_uri() . '/css/fonts.css', array(), '1', 'all' );
	wp_register_style( 'fa', get_template_directory_uri() . '/libs/fontawesome/fontawesome-all.css', array(), '1', 'all' );
	wp_register_style( 'animate', get_template_directory_uri() . '/css/animate.css', array(), '1', 'all' );
	wp_enqueue_style( 'bootstrap' );
	wp_enqueue_style( 'main' );
	wp_enqueue_style( 'media' );
	wp_enqueue_style( 'fonts' );
	wp_enqueue_style( 'fa' );
	wp_enqueue_style( 'animate' );
}
add_action( 'wp_enqueue_scripts', 'uptuts_styles_with_the_lot' );

function load_bootstrap(){
wp_enqueue_script('wow-js', get_template_directory_uri().'/libs/wow/wow.min.js');
wp_enqueue_script('jquery', get_template_directory_uri().'/libs/jquery/jquery-2.1.4.min.js');
wp_enqueue_script('bootstrap', get_template_directory_uri().'/libs/bootstrap/js/bootstrap.min.js');
}

add_action('wp_enqueue_scripts', 'load_bootstrap');




wp_enqueue_script( 'myscript', get_bloginfo('template_directory') . '/libs/particles/particles.js', array( 'jquery' ), '', true );
wp_enqueue_script( 'myscript2', get_bloginfo('template_directory') . '/libs/particles/stat.js', array( 'jquery' ), '', true );
wp_enqueue_script( 'myscript1', get_bloginfo('template_directory') . '/libs/particles/app.js', array( 'jquery' ), '', true );
wp_enqueue_script( 'myscript3', get_bloginfo('template_directory') . '/js/main.js', array( 'jquery' ), '', true );





register_nav_menus( array(
				'top' => __('Меню Верхнее', 'test'),
) );

register_nav_menus( array(
				'bot' => __('Меню Нижнее', 'test'),
) );



function register_menu_page_settings() {
add_menu_page('Настройка Темы', 'Настройка Темы',6,'settings_page.php', 'themes_setings');
}

add_action( 'admin_menu', 'register_menu_page_settings' );
function themes_setings() {
?>	
<div class="wrap">
<h2>Настройки темы</h2>

<form method="post" action="options.php" enctype="multipart/form-data">
<?php settings_fields( 'nedw-settings-group' ); ?>
<table class="form-table">
<tr valign="top">
<th scope="row">Логотип</th>
<td><? if(get_option('logo')){?><img src="<?php echo get_option('logo'); ?>" alt="Logo" /><br><?}?>
<input type="file"  name="logo"/></td>
</tr>
</table>
<p class="submit">
<input type="submit" class="button-primary" value="<?php echo('Сохранить изменения') ?>" />
</p>
</form>
</div>
<? 
} 

add_action( 'admin_init', 'register_nedwsettings');

function register_nedwsettings() {
	register_setting( 'nedw-settings-group', 'logo', 'validate_setting' );
}

function validate_setting($plugin_options) {
	$keys = array_keys($_FILES);
	$i = 0;
	foreach ( $_FILES as $image ) {
		if($image['size']) {
			if ( preg_match('/(jpg|jpeg|png|gif)$/', $image['type']) ) {
				$override = array('test_form' => false);
				$file = wp_handle_upload( $image, $override );
				$plugin_options = $file['url']; 
			} else {
				$options = get_option('logo');
				$plugin_options = $options;
				wp_die('No image was upploaded.');
			}
		}
		else { $options = get_option('logo');
		$plugin_options = $options; }
		$i++;
	}
	
	return $plugin_options;
}