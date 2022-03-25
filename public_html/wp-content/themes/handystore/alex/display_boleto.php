<?php
global $woocommerce;  
$boleto_alex = $woocommerce->cart->total;
if ($boleto_alex < 100.00) {; ?>
 <!-- SubTotal e menor que 100 -->
<style>
.payment_method_boleto, .payment_method_itaushopline_loja5 {display:none;}
.wc_payment_method.payment_method_itau-shopline {display:none;}
</style>
<?php } else { ?>
<!-- SubTotal e maior que 100 -->

<?php } ?>
<br/><br/><br/><br/>