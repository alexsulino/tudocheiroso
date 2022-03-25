
<script src="https://wellup.com.br/wp-content/themes/handystore/alex_2020/js/easy.qrcode.min.js" type="text/javascript" charset="utf-8"></script>

<style type="text/css">

	.imgblock {
		margin: 10px 0;
		text-align: center;
		float: left;
		min-height: 420px;
		border-bottom: 1px solid #B4B7B4;
	}

	.qr table {
		
	}

	.title {
		font-size: 15px;
		font-weight: bold;
		color: #fff;
		text-align: center;
		width: 330px;
		margin: 10px 5px;
		height: 60px;
		background-color: #0084C6;
		line-height: 60px;
	}


</style>

<div id="container"></div>



<script type="text/template" id="qrcodeTpl">
	<div class="imgblock">
		<div class="title">{title}</div>
		<div class="qr" id="qrcode_{i}"></div>
	</div>
</script>

<script type="text/javascript">
	var demoParams = [

		{
			title: "QR Store",
			config: {
		
				text: "www.easyproject.cn/donation", // Content

				width: 240, // Widht
				height: 240, // Height
				
				// === Title
				title: "title", // Title
				titleFont: "bold 18px Arial", // Title font
				titleColor: "#004284", // Title Color
				titleBackgroundColor: "#fff", // Title Background
				titleHeight: 70, // Title height, include subTitle
				titleTop: 25, // Title draw position(Y coordinate), default is 30


				// === SubTitle
				subTitle: 'subTitle', // Subtitle content
				subTitleFont: "14px Arial", // Subtitle font
				subTitleColor: "#004284", // Subtitle color
				subTitleTop: 40, // Subtitle drwa position(Y coordinate), default is 50
				
				colorDark: "#000000", // Dark color
				colorLight: "#ffffff", // Light color
				
				quietZone: 15,
				quietZoneColor: '#00CED1',

				// === Logo
				logo: "https://cdn-web.qr-code-generator.com/wp-content/themes/qr/new_structure/assets/media/images/logos/egoditor/logo-icon-blue.svg", // LOGO
				logoWidth:90, 
				logoHeight:90,
				logoBackgroundColor: '#ffffff', // Logo backgroud color, Invalid when `logBgTransparent` is true; default is '#ffffff'
				logoBackgroundTransparent: false, // Whether use transparent image, default is false

				correctLevel: QRCode.CorrectLevel.H // L, M, Q, H

			}
		},
	]
	
	var qrcodeTpl = document.getElementById("qrcodeTpl").innerHTML;
	var container = document.getElementById('container');

	for (var i = 0; i < demoParams.length; i++) {
		var qrcodeHTML = qrcodeTpl.replace(/\{title\}/, demoParams[i].title).replace(/{i}/, i);
		container.innerHTML+=qrcodeHTML;
	}
	for (var i = 0; i < demoParams.length; i++) {
		 var t=new QRCode(document.getElementById("qrcode_"+i), demoParams[i].config);
	}
</script>
