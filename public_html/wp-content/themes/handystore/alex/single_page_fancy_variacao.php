<!-- Alex Altera text content div -->
<script>
document.getElementsByClassName("variations")[0].setAttribute("id", "alex_troca_x");

var str = document.getElementById("alex_troca_x").innerHTML;
    var res = str.replace(/ x /g, "<span class='alex_troca_x'> CM <br> <b><span class='fa-arrows-hee'></span>Largura:</b>  </span>");
    document.getElementById("alex_troca_x").innerHTML = res;
	
var stre = document.getElementById("alex_troca_x").innerHTML;
    var res = stre.replace(/Centimetros/g, "CM");
    document.getElementById("alex_troca_x").innerHTML = res;	
</script>

<!--
<div  class="fpd-tool-edit-text fpd-tooltip tooltipstered">
I am a DIV element
</div>
<script>
    var x = document.getElementsByClassName("fpd-tool-edit-text fpd-tooltip tooltipstered")[0];
    if (x.className === "fpd-tool-edit-text fpd-tooltip tooltipstered") { 
        x.className += " fpd-active";
        x.style.fontSize = "30px";
    }
</script>
-->


