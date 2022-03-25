<?php if(strstr(strtolower($_SERVER['HTTP_USER_AGENT']), 'mobile') || strstr(strtolower($_SERVER['HTTP_USER_AGENT']), 'android')) {?>

<style>
header.site-header {
    display: none;
}
</style>
   <!-- Sou um celular-->



<script>
jQuery(document).ready(function ($) {
// Show the login/signup popup on click
    $('#show_login_alexy').on('click', function (e) {
        var overlayy = '<div class="login_overlay"></div>';
        $('body').prepend($(overlayy).hide().fadeIn(200));
        if ($(this).attr('id') == 'show_login_alexy') {
						$('form#login').fadeIn(200);
				} else {
						$('form#register').fadeIn(200);
				}
        e.preventDefault();
    });
});	


</script>	



  
 <style>
#nnavbar {
  background-color: #222222;
  position: fixed;
  top: 0;
  width: 100%;
  display: block;
  transition: top 0.5s;
  z-index: 1000;
}
#nnavbar a {
  float: left;
  display: block;
  color: #f2f2f2;
  text-align: center;
  padding: 5px 1px;
  text-decoration: none;
  font-size: 17px;
}
#nnavbar a:hover {
  background-color: #888888;
  color: black;
}
div#nnavbar .site-logo {
    margin-bottom:0px;
}
div#nnavbar .site-logo img {
    height: 39px !important;
    width: auto !important;
}
div#nnavbar .hgroup-sidebar {
    display: none;
}enu_bg {background-color: #fff;}

.Menu_Class_Lateral_Perfil, .Menu_Class_Lateral_Busca {
  height: 100%;
  width: 0;
  position: fixed;
  z-index: 1;
  top: 0px;
  left: 0;
  overflow-x: hidden;
  transition: 0.5s;
  padding-top: 60px;
  z-index: 2000;
  
  background-color: rgba(0, 0, 0, 0.2);
  max-width: 500px;
  
}

.Menu_Class_Lateral_Perfil a, .Menu_Class_Lateral_Busca a {
  padding: 4px 4px 4px 32px;
  text-decoration: none;
  font-size: 16px;
  color: #222222;
  display: block;
  transition: 0.3s;
}

.Menu_Class_Lateral_Perfil a:hover, .Menu_Class_Lateral_Busca a:hover {
  color: #f1f1f1;
}

.Menu_Class_Lateral_Perfil .closebtn, .Menu_Class_Lateral_Busca .closebtn {
  position: absolute;
  top: 0;
  right: 25px;
  font-size: 36px;
  margin-left: 50px;
}

.Menu_bg {
    background: #f9f9f9;
    top: 0;
    bottom: 0;
    position: absolute;
    width: 80%;
}
.Menu_bg .Menu_bg_item {
    padding: 25px 6px 0px 1px;
}
.Menu_bg .Menu_item, .Menu_bg .widget_pt_search_widget {
    padding: 10px;
    background: #fff;
    text-align: center;
    width: 100%;
    border-radius: 8px;
}

a.nnavbar_menu {
    padding: 15px 4% !important;
    font-size: 21px !important;
    font-weight: 100 !important;
}
a.nnavbar_menu span {
    font-size: 95%;
    background: rgba(255, 255, 255, 0.1);
    border-radius: 50%;
    padding: 0px 6px;
    text-align: center;
    z-index: 1000;
    position: absolute;
    margin-left: 2%;
    color: #d9e490;
    margin-top: -7px;
}
a.Menu_Lateral_Perfil_logo {margin: 12px 0px 12px 0px;}
	
<?php if (WC()->cart->cart_contents_count > 0) {?>
a.nnavbar_menu.cartim .fa, a.nnavbar_menu.cartim span{opacity:0.9;}
a.nnavbar_menu.cartim span{font-size: 55%;}
a.nnavbar_menu.cartim .fa{font-size: 100%;}
<?php } else {?>
a.nnavbar_menu.cartim .fa, a.nnavbar_menu.cartim span{opacity:0.1;}

<?php } ?>
   

a.Menu_Lateral_Perfil_logo img {
    border-radius: 50px !important;
	margin:auto auto auto auto;
}

.divisor-cat-cel {padding:10px 10px 10px 10px ; margin:20px auto 10px auto; width:85%; border-top:solid 1px #eee;}


.pt-searchform {

    min-width: auto !important;
}



</style>


<div id="nnavbar">
	<a class="nnavbar_menu" href="javascript:void(0)" onclick="openNav_Perfil(); closeNav_Busca();"><i class="fa fa-bars" aria-hidden="true"></i></a>
	<?php wc_get_template_part( 'partials/logo-group' ); ?>
	<!--<a href="<?php echo esc_url( home_url( '/'  ) ); ?>"><img width="" height="38" src="<?php echo esc_url( home_url( '/'  ) ); ?>wp-content/uploads/2019/12/sampaprint.png" class="" alt=""></a>-->
	<!--<a class="nnavbar_menu" href="javascript:void(0)" onclick="document.getElementById('compartilhe_slider').classList.toggle('closed'); closeNav_Perfil(); closeNav_Busca()"><i class="fa fa-share-alt" aria-hidden="true"></i></a>-->
	<!--<a class="nnavbar_menu" style="float:right;" href="<?php echo wc_get_cart_url(); ?>"><i class="fa fa-heart" aria-hidden="true"></i></a>-->
	
	<?php if (WC()->cart->cart_contents_count > 0) {?>
	<a class="nnavbar_menu cartim" style="float:right;" href="<?php echo wc_get_cart_url(); ?>"><span><?php echo sprintf ( _n( '%d', '%d ', WC()->cart->get_cart_contents_count() ), WC()->cart->get_cart_contents_count() ); ?></span> <i class="fa fa-shopping-cart" aria-hidden="true"></i></a>

<?php } else {?>
	<a class="nnavbar_menu cartim" style="float:right;" href="javascript:void(0)"><span><?php echo sprintf ( _n( '%d', '%d ', WC()->cart->get_cart_contents_count() ), WC()->cart->get_cart_contents_count() ); ?></span> <i class="fa fa-shopping-cart" aria-hidden="true"></i></a>
<?php } ?>
	
	<a class="nnavbar_menu" style="float:right;" href="javascript:void(0)" onclick="openNav_Busca(); closeNav_Perfil();" ><i class="fa fa-search" aria-hidden="true"></i></a>
	<a class="nnavbar_menu" style="float:right; font-size:80% !important;" href="javascript:void(0)" onclick="openNav_Busca(); closeNav_Perfil();" >CATEGORIAS</a>
	
</div>

<script>
var prevScrollpos = window.pageYOffset;
window.onscroll = function() {
var currentScrollPos = window.pageYOffset;
  if (prevScrollpos > currentScrollPos) {
    document.getElementById("nnavbar").style.top = "0";
  } else {
    document.getElementById("nnavbar").style.top = "-80px";
  }
  prevScrollpos = currentScrollPos;
}
</script>

<div id="Menu_Lateral_Perfil" class="Menu_Class_Lateral_Perfil">
	<div class="Menu_bg">
	  <a href="javascript:void(0)" class="closebtn" onclick="closeNav_Perfil()">&times;</a>
	  
	    <div class="Menu_bg_item">
			<div class="Menu_item">
				<a class="Menu_Lateral_Perfil_logo" href="<?php echo esc_url( home_url( '/'  ) ); ?>my-account/">
					<?php global $current_user;
							wp_get_current_user();
							echo get_avatar( $current_user->ID, 70 );
							$current_user = wp_get_current_user();
					?>
				</a>
			</div>
		<br/><br/>
			<a href="<?php echo esc_url( home_url( '/'  ) ); ?>"><i class="fa fa-home" aria-hidden="true"></i> Home </a>
			<a href="<?php echo esc_url( home_url( '/'  ) ); ?>my-account/"><i class="fa fa-user-circle-o" aria-hidden="true"></i> Minha Conta</a>
			<a href="<?php echo esc_url( home_url( '/'  ) ); ?>my-account/orders/"><i class="fa fa-list" aria-hidden="true"></i> Meus Pedidos</a>
			<a href="<?php echo esc_url( home_url( '/'  ) ); ?>wishlist"><i class="fa fa-heart-o" aria-hidden="true"></i> Favoritos</a>
			<DIV CLASS="divisor-cat-cel"> </DIV>
			<a href="javascript:void(0)" onclick="openNav_Busca(); closeNav_Perfil()"><i class="fa fa-list-ul" aria-hidden="true"></i> CATEGORIAS DE PRODUTOS </a>
		
			<DIV CLASS="divisor-cat-cel"> </DIV>
			
			
			<?php if ( is_active_sidebar( 'extra_widgets_celular_perfil_left' ) ) : ?>
				<section id="extra_widgets_celular_perfil_left" STYLE="padding:0px 15px; margin-left:10px;">
					<?php dynamic_sidebar('extra_widgets_celular_perfil_left'); ?>
				</section>
			<DIV CLASS="divisor-cat-cel"> </DIV>
			<?php endif; ?>
			
			<a  href="javascript:void(0)" onclick="document.getElementById('compartilhe_slider').classList.toggle('closed'); closeNav_Perfil(); closeNav_Busca()"><i class="fa fa-share-alt" aria-hidden="true"></i> COMPARTILHAR </a>
			<DIV CLASS="divisor-cat-cel"> </DIV>
				
			<?php if ( is_user_logged_in() ) { ?>
				<a href="<?php echo wp_logout_url( home_url() ); ?>"><i class="fa fa-window-close" aria-hidden="true"></i> Sair</a>
				<?php } else { ?>
				<a href="<?php echo esc_url( home_url( '/'  ) ); ?>my-account/"><i class="fa-close" aria-hidden="true"></i> Entrar </a>
			<?php } ?>
		</div>

	</div>
</div>




<div id="Menu_Lateral_Busca" class="Menu_Class_Lateral_Busca">
	<div class="Menu_bg">
	 <a href="javascript:void(0)" class="closebtn" onclick="closeNav_Busca()">&times;</a>
	 
	 <div class="Menu_bg_item"> 
		<?php if ( is_active_sidebar( 'extra_widgets_celular_busca_produtos' ) ) : ?>
		<section id="extra_widgets_celular_busca_produtos" STYLE="padding:0px 15px;">
		<?php dynamic_sidebar('extra_widgets_celular_busca_produtos'); ?>
		</section>
		<?php endif; ?>
	</div>

	</div>
</div>


<script>
// menu perfil
function openNav_Perfil() {
  document.getElementById("Menu_Lateral_Perfil").style.width = "99%";
}
function closeNav_Perfil() {
  document.getElementById("Menu_Lateral_Perfil").style.width = "0";
}

/// menu busca 
function openNav_Busca() {
  document.getElementById("Menu_Lateral_Busca").style.width = "99%";
}
function closeNav_Busca() {
  document.getElementById("Menu_Lateral_Busca").style.width = "0";
}
</script>



<!-- Compartilhe  celular -->
<div class="compartilhe_slider" id="compartilhe_slider">
<div style="padding: 15px;  float: right; width: 80%; background: #444444; top: 0px; bottom: 0px; position: absolute; right: 0; -webkit-box-shadow: 0 0 5px 0 #222; box-shadow: 0 0 5px 0 #222;">


<h4>COMPARTILHAR</h4>
 <p>Compartilhe esta pagina com seus amigos</p>
 <div class="alex_sociais_share">
	<a href="http://www.facebook.com/share.php?u=<?php echo get_post_permalink(); ?>" target="_blank"> <i class="fa fa-facebook" aria-hidden="true"></i> Facebook </a>
	<a class="whatsapp" href="whatsapp://send?text=<?php $blog_title = get_bloginfo(); echo $blog_title; ?>%20<?php wp_title(); ?>%20<?php echo get_post_permalink(); ?>"> <i class="fa fa-whatsapp" aria-hidden="true"></i> WhatsApp </a>
	<a class="googleplus" href="https://plus.google.com/share?url=<?php echo get_post_permalink(); ?>" target="_blank"> <i class="fa fa-google-plus" aria-hidden="true"></i> Google+ </a>
	<a class="twitter" href="http://twitter.com/intent/tweet?status=<?php echo get_post_permalink(); ?>" target="_blank"> <i class="fa fa-twitter" aria-hidden="true"></i> Twitter </a>
	
	<br/>
	
</div>
<a class="facebook" href="http://www.facebook.com/share.php?u=<?php echo get_post_permalink(); ?>" target="_blank" style=" -webkit-border-radius:4px; border-radius:4px; background: #2B4F91; color:#ffffff; width:100%; display:block; clear:both; margin:10px 0px; font-size: 15px; padding: 10px 15px;" class="fa fa-facebook"> <i class="fa fa-facebook">  </i> <span style="font-family:sans-serif; font-size: 16px; "> &nbsp;  Compartilhe </span> </a>
 </div>
 <a  style="float: left;  width: 20%;  bottom: 0px;  top: 0px;  position: absolute; background:#000000; opacity:0.6;" onclick="document.getElementById('compartilhe_slider').classList.toggle('closed');"></a>
 <a class="bt_fechar_celular fa fa-close" onclick="document.getElementById('compartilhe_slider').classList.toggle('closed');"> Fechar </a>
 </div>
 <!-- Compartilhe  celular -->


<?php } else { ?>
 <!-- Sou um computador -->
<?php } ?>