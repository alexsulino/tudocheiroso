<?php if (is_active_sidebar('filters-sidebar')) { ?>
<style>
.site-content div.widget.woocommerce.widget_layered_nav.woocommerce-widget-layered-nav {
    padding: 10px;
    background: #f5f5f5;
	margin-bottom: 2px;
	border-radius: 5px;
	width: 100%;
}
span.filter-head {
    cursor: pointer;
    padding: 5px;
	border-radius:5px;
}
span.filter-head:hover {
    background: #eee;
}

#mostrar_ocultar_filtro_atributo_categoria {
    cursor: pointer;
    border-radius:5px;
    padding:5px;
}
#mostrar_ocultar_filtro_atributo_categoria:hover {
    background: #0e4286;
    color: #fff;
}
#filters-sidebar {
    padding-bottom: 15px;
    float: left;
}
#filters-sidebar {display:none;}
.abrir_filtro {display:block !important;}
.abrir_filtro_bg { background: #1a73e8;  color: #fff;}

span.filter-head { display: none;}

</style>


<span id="mostrar_ocultar_filtro_atributo_categoria" onclick="mostrar_filtro_atributo_categoria()"> Filtrar </span>



<script>
function mostrar_filtro_atributo_categoria() {
   var element = document.getElementById("filters-sidebar");
   element.classList.toggle("abrir_filtro");
   document.getElementById("mostrar_ocultar_filtro_atributo_categoria").classList.toggle("abrir_filtro_bg");
}
</script>


 <?php } ?>