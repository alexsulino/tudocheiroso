<?php 
// Creating the widget 
class wpb_widget extends WP_Widget {

function __construct() {
parent::__construct(
// Base ID of your widget
'wpb_widget', 

// Widget name will appear in UI
__('User Info / Alex Add Widget', 'wpb_widget_domain'), 

// Widget description
array( 'description' => __( 'Alex Sample widget based on WPBeginner Tutorial', 'wpb_widget_domain' ), ) 
);
}
// Creating widget front-end
// This is where the action happens
public function widget( $args, $instance ) {
$title = apply_filters( 'widget_title', $instance['title'] );
// before and after widget arguments are defined by themes
echo $args['before_widget'];
if ( ! empty( $title ) )
echo $args['before_title'] . $title . $args['after_title'];

// This is where you run the code and display the output
//echo __( 'Hello, World!', 'wpb_widget_domain' );
//echo user_avatar_get_avatar( $current_user->ID, 20);
//echo get_avatar( get_the_author_meta( 'ID' ), 32 );

if ( is_user_logged_in() ) {
    //echo 'Usuario Logado';

		   global $current_user;
		   //get_currentuserinfo(); alex error check
		   wp_get_current_user();
		   echo get_avatar( $current_user->ID, 25 );

			$current_user = wp_get_current_user();
			/**
			 * @example Safe usage: $current_user = wp_get_current_user();
			 * if ( !($current_user instanceof WP_User) )
			 *     return;
			 */
			//echo 'Username: ' . $current_user->user_login . '<br />';
		   // echo 'User email: ' . $current_user->user_email . '<br />';
			echo ' ' . $current_user->user_firstname . ' ';
			//echo ' ' . $current_user->user_lastname . '';
			//echo '<a href="';
			//echo wp_logout_url( home_url() );
			//echo '"> Sair</a>';
			
			//echo 'User display name: ' . $current_user->display_name . '<br />';
			//echo 'User ID: ' . $current_user->ID . '<br />';
	
			echo '<aside id="pt_login_widget-2" class="widget_pt_login_widget right-aligned">';
			
			echo ' <a class="login_button inline" href="';
			echo get_site_url();
			echo '/my-account/orders/" style="margin:0px 20px;"> <i class="fa fa-user"></i> Minha Conta </a>';
			
			echo '<a class="login_button inline" href="';
			echo wp_logout_url(home_url());
			echo '" > <i class="fa fa-sign-out"></i> Sair </a>';
			echo '</aside>';
			
	} else {
	//echo 'Usuario Deslogado';
	
	echo'<a class="login_button inline" href="';
	echo get_site_url();
	echo '/my-account/"><i class="fa fa-user"></i>Entrar</a>';
	
	echo '<a class="login_button inline"  href="';
	echo get_site_url();
	echo '/my-account/"><i class="fa fa-pencil"></i>Cadastrar</a>';
}	

echo $args['after_widget'];
}
		
// Widget Backend 
public function form( $instance ) {
if ( isset( $instance[ 'title' ] ) ) {
$title = $instance[ 'title' ];
}
else {
$title = __( 'Novo titulo', 'wpb_widget_domain' );
}
// Widget admin form
?>
<p>
<label for="<?php echo $this->get_field_id( 'title' ); ?>"><?php _e( 'Title:' ); ?></label> 
<input class="widefat" id="<?php echo $this->get_field_id( 'title' ); ?>" name="<?php echo $this->get_field_name( 'title' ); ?>" type="text" value="<?php echo esc_attr( $title ); ?>" />
</p>
<?php 
}
	
// Updating widget replacing old instances with new
public function update( $new_instance, $old_instance ) {
$instance = array();
$instance['title'] = ( ! empty( $new_instance['title'] ) ) ? strip_tags( $new_instance['title'] ) : '';
return $instance;
}
} // Class wpb_widget ends here
// Register and load the widget
function wpb_load_widget() {
	register_widget( 'wpb_widget' );
}
add_action( 'widgets_init', 'wpb_load_widget' );
?>