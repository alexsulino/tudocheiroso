<?php 
//global $post;
if( is_fancy_product($post->ID) ) { ?>
<script>
function myFunction_fechar_modal_fancy() {
  $(".fpd-done").filter(function() {
    return $(this).click();
});
}
function myFunction_fechar_modal() {
  $(".close_alex_sulino").filter(function() {
    return $(this).click();
});
}
</script>

<style>

/* The Modal (background) */
.modal_alex_sulino {
  display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 100000; /* Sit on top */
  padding-top: 50px; /* Location of the box */
  left: 0;
  top: 0;
  width: 100%; /* Full width */
  height: 100%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0,0.5); /* Black w/ opacity */
}

/* Modal Content */
.modal-content_alex_sulino {
    background-color: #fefefe;
    margin: auto;
    padding: 35px;
    border: 1px solid #888;
    width: 95%;
    max-width: 1100px;
}

/* The Close Button */
.close_alex_sulino {
  color: #aaaaaa;
    float: right;
    font-size: 28px;
    font-weight: bold;
    margin-top: -20px;
    margin-bottom: 15px;
}

.close_alex_sulino:hover,
.close_alex_sulino:focus {
  color: #000;
  text-decoration: none;
  cursor: pointer;
}
.aplicar_textos {
    margin: 18px auto auto !important;
    padding: 10px 30px;
    font-size: 16px;
    border-radius: 3px;
    display: block;
	    background: #2ea3f2 !important;
    color: #fff;
}
.aplicar_cancelar {
    margin: 18px auto auto !important;
    padding: 10px 30px;
    font-size: 16px;
    border-radius: 3px;
    display: block;
	 background: #fff !important;
    color: #999;
}
.bt_alex_modal_texto {
    width: 100%;
    cursor: pointer;
    padding: 8px;
    text-align: center;
    margin:2px 0px 15px 0px;
    background: #ffffff;
    float: left;
	color:#000000;
	font-size: 14px;
    text-transform: uppercase;
    font-weight: bold;
	transition: 0.6s ease;
	
z-index: 1000;
   position: relative;
}

.bt_alex_modal_texto:hover {
    background: #eee;
	transition: 0.6s ease;
}
</style>


<!-- Trigger/Open The Modal -->
<div class="bt_alex_modal_texto"  id="myBtn" onclick="document.getElementById('fpd-start-customizing-button').click(); setTimeout(myFunction_fechar_modal_fancy, 10);" ><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Altere todos os textos por aqui  </div>

<!-- The Modal -->
<div id="myModal" class="modal_alex_sulino">

  <!-- Modal content -->
  <div class="modal-content_alex_sulino">
    <span class="close_alex_sulino" id="close_alex_sulino">&times;</span>
	<?php echo do_shortcode('[fpd_module type="text-layers"]'); ?>
	
	<button class="aplicar_textos"   onclick="document.getElementById('fpd-start-customizing-button').click(); setTimeout(myFunction_fechar_modal_fancy, 10);  setTimeout(myFunction_fechar_modal, 20);" onmousedown="document.getElementById('close_alex_sulino').click(); setTimeout(myFunction_fechar_modal_fancy, 10);  setTimeout(myFunction_fechar_modal, 20);" > Aplicar </button>
  </div>
</div>

<script>
// Get the modal
var modal_alex_sulino = document.getElementById('myModal');
// Get the button that opens the modal
var btn_alex_sulino = document.getElementById("myBtn");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close_alex_sulino")[0];
// When the user clicks the button, open the modal 
btn_alex_sulino.onclick = function() {
  modal_alex_sulino.style.display = "block";
}
// When the user clicks on <span> (x), close the modal
span.onclick = function() {
  modal_alex_sulino.style.display = "none";
}
// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal_alex_sulino) {
    modal_alex_sulino.style.display = "none";
  }
}
</script>


<?php //echo do_shortcode('[fpd_action type="preview-lightbox" layout="icon-text"]'); ?>
<?php //echo do_shortcode('[fpd_module type="layouts"]'); ?>
<?php //echo do_shortcode('[fpd_module type="designs"]'); ?> 
<?php //echo do_shortcode('[fpd_module type="text-layers"]'); ?>

<?php //echo do_shortcode('[fpd_action type="save" layout="icon-text"]'); ?>
<?php //echo do_shortcode('[fpd_action type="load" layout="icon-text"]'); ?>
<?php //echo do_shortcode('[fpd_action type="manage-layers" layout="icon-text"]'); ?>

<?php //echo do_shortcode('[fpd_module type="images"]'); ?>
<?php // echo do_shortcode('[fpd_saved_products]'); ?>
<?php // do_shortcode('[fpd_saved_products]'); ?>


<?php } ?>

