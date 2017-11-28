<!DOCTYPE html>
<html lang="en">
<head>

	<meta charset="UTF-8">
	<meta http-equiv="Access-Control-Allow-Origin" content="*">
	<title>Calculadora de Bitcoins</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://daneden.github.io/animate.css/animate.min.css">
</head>
<body>
<?
       $ch = curl_init();
    

      // Use curl to get current prices and 15 minute averages for all currencies from Blockchain.info's exchange rates API
      curl_setopt($ch, CURLOPT_URL, "https://blockchain.info/ticker");
      curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
      $prices = json_decode(curl_exec($ch), true);
      curl_close($ch);
      
    ?>
<style>
::selection {background: #fff2a8;}::-moz-selection {background: #fff2a8;}
.form-control:focus{    border-color: #FFEB3B;box-shadow: inset 0 1px 1px rgba(0,0,0,.075),0 0 6px rgba(255, 193, 7, 0.55);}
.btn-negro, .btn-negro:hover{border-color: #434A54; color: #fff; background-color: #434A54;}.btn-negro:active {background-color: #1f2123;} .btn-negro:focus {color: #fff;}
.btn-morado, .btn-morado:hover{border-color: #694D9F; color: #fff; background-color: #694D9F;}.btn-morado:active {background-color: #694D9F;} .btn-morado:focus {color: #fff;}
.btn-indigo, .btn-indigo:hover{border-color: #3E50B4; color: #fff; background-color: #3E50B4;}.btn-morado:active {background-color: #3E50B4;} .btn-morado:focus {color: #fff;}
.btn-morita, .btn-morita:hover{border-color: #9B26AF; color: #fff; background-color: #9B26AF;}.btn-morado:active {background-color: #9B26AF;} .btn-morado:focus {color: #fff;}
.input-group-addon{color: #fff;    background-color: #815bb3;border: 1px solid #452372;}
.panel-negro { border-color: #434A54;}
.panel-negro > .panel-heading {color: #fff; background-color: #434A54; border-color: #434A54;}
.panel-negro > .panel-heading + .panel-collapse > .panel-body {border-top-color: #bce8f1;}
.panel-negro > .panel-heading .badge {color: #fff; background-color: #434A54;}
.panel-negro > .panel-footer + .panel-collapse > .panel-body {border-bottom-color: #bce8f1;}
.panel-verde{border-color: #a4f196;} .panel-verde>.panel-heading{color: #f5f7fa;background-color: #8CC152;border-color: #a0d468;}
.panel-lavanda{border-color: #ac92ec;} .panel-lavanda>.panel-heading{color: #f5f7fa;background-color: #967ADC;border-color: #ac92ec;}
.panel-cielo{border-color: #4a89dc;} .panel-cielo>.panel-heading{color: #f5f7fa;background-color: #5d9cec;border-color: #4a89dc;}
.panel-menta{border-color: #37bc9b;}.panel-menta>.panel-heading{color: #f5f7fa;background-color: #48cfad;border-color: #37bc9b;}
.panel-rosa{border-color: #d770ad;}.panel-rosa>.panel-heading{color: #f5f7fa;background-color: #ec87c0;border-color: #d770ad;}
.panel-dulce{border-color: #e9573f;}.panel-dulce>.panel-heading{color: #f5f7fa;background-color: #fc6e51;border-color: #e9573f;}
.panel-agua{border-color: #3bafda;}.panel-agua>.panel-heading{color: #f5f7fa;background-color: #4fc1e9;border-color: #3bafda;}
.panel-dark{border-color: #434a54;}.panel-dark>.panel-heading{color: #f5f7fa;background-color: #656d78;border-color: #434a54;}
.panel-sol{border-color: #f6bb42;}.panel-sol>.panel-heading{color: #f5f7fa;background-color: #F0AD38;border-color: #f6bb42;}
.panel-rojizo{border-color: #da4453;}.panel-rojizo>.panel-heading{color: #f5f7fa;background-color: #ed5565;border-color: #da4453;}

.btn.active.focus, .btn.active:focus, .btn.focus, .btn:active.focus, .btn:active:focus, .btn:focus{outline: 0 none;}
.btn-outline {background-color: transparent; color: inherit;transition: all .5s;}
.btn-primary.btn-outline {color: #428bca;}
.btn-success.btn-outline {color: #5cb85c;}
.btn-info.btn-outline {color: #5bc0de;}
.btn-warning.btn-outline {color: #f0ad4e;}
.btn-danger.btn-outline {color: #d9534f;}
.btn-negro.btn-outline{color:#37474F;}
.btn-morado.btn-outline{color:#694D9F;}
.btn-indigo.btn-outline{color:#3E50B4;}
.btn-morita.btn-outline{color:#9B26AF;}
.btn-primary.btn-outline:focus,.btn-success.btn-outline:focus,.btn-info.btn-outline:focus,.btn-warning.btn-outline:focus,.btn-danger.btn-outline:focus,
.btn-primary.btn-outline:active,.btn-success.btn-outline:active,.btn-info.btn-outline:active,.btn-warning.btn-outline:active,.btn-danger.btn-outline:active,
.btn-primary.btn-outline:hover,.btn-success.btn-outline:hover,.btn-info.btn-outline:hover,.btn-warning.btn-outline:hover,.btn-danger.btn-outline:hover,
/*.btn-negro.btn-outline:focus,*/.btn-negro.btn-outline:active,.btn-negro.btn-outline:hover,/*.btn-morado.btn-outline:focus,*/
.btn-morado.btn-outline:active,.btn-morado.btn-outline:hover, .btn-indigo.btn-outline:active,.btn-indigo.btn-outline:hover,
.btn-morita.btn-outline:active,.btn-morita.btn-outline:hover
{color: white;}
.btn-negro.btn-outline:focus,.btn-negro.btn-outline:active,.btn-negro.btn-outline:hover{background-color: : black;}
</style>
<div class="container-fluid">
<div class="row col-sm-9"><div class=" text-center"><h2><small><i class="glyphicon glyphicon-th-list"></i></small> Calculadora Bitcoin</h2></div></div>
	<div class="row">
	
	
</div>
<div class="col-xs-12">
	<div class="panel with-nav-tabs hidden-print">
	<div class="panel-heading">
		<ul class="nav nav-tabs">
			<li class="active"><a href="#tabVentaMonedas" data-toggle="tab" id="aHrefVenta"> Venta</a></li>
			<li><a href="#tabCompraMonedas" data-toggle="tab" id="aHrefCompra"> Compra</a></li>
		</ul>
	</div>
	<div class="panel-body">
		<div class="tab-content container-fluid">
			<div class="tab-pane fade in active " id="tabVentaMonedas">
				<div class="row ">
					<div class="col-xs-12 col-sm-4">
						<input type="number" class="form-control" id="txtIngresoCantidad" placeholder="Ingrese cantidad para convertir">
					</div>
				</div>
				<div class="row">
					<div class="col-xs-12 col-sm-4" id="divComboVentaMoneda">
						<div id="divSelectGrupoProListado">
							<select class="form-control" title="CriptoMonedas..." id="optMonedas" data-width="100%" data-live-search="true" "="">
								<option value="">Seleccione moneda</option>
								<option value="bitcoin">Bitcoin</option>
								<option value="bitshares">Bitshares</option>
								<option value="dash">Dash</option>
								<option value="ethereum">Ethereum</option>
								<option value="ethereum-classic">Ethereum-Classic</option>
								<option value="iota">Iota</option>
								<option value="list">Lisk</option>
								<option value="litecoin">Litecoin</option>
								<option value="monero">Monero</option>
								<option value="nem">Nem</option>
								<option value="neo">Neo</option>
								<option value="omisego">Omisego</option>
								<option value="ripple">Ripple</option>
								<option value="stratis">Stratis</option>
							</select>
						</div>
					</div>
					<div class="col-xs-1">
						<button class="btn btn-primary btn-lg cripto" id="btnCambiarEstadoVenta"><span class="glyphicon glyphicon-transfer"></span></button>
					</div>
					<div class="col-xs-12 col-sm-4" id="divComboVentaSoles">
						<select class="form-control" title="Moneda..." data-width="100%" data-live-search="true" "="">
							<option>Soles</option>
						</select>
					</div>
				</div>
				<div class="row" id="rowResultadosDatosCalculadora">
					<div class="col-xs-12 col-sm-4 text-right" id="divLblMoneda">
						<span id="spanResVenta"></span>
					</div>
					<div class="col-xs-1 text-center">=</div>
					<div class="col-xs-12 col-sm-4 text-left" id="divLblSoles">
						<span><strong><span id="spanResVentaSoles"></span></strong> Soles</span>
					</div>
				</div>

			</div>


			<div class="tab-pane fade" id="tabCompraMonedas">
				<div class="row ">
					<div class="col-xs-12 col-sm-4">
						<input type="number" class="form-control" id="txtIngresoCantidadCompra" placeholder="Ingrese cantidad para convertir">
					</div>
				</div>
				<div class="row">
					<div class="col-xs-12 col-sm-4" id="divComboCompraMoneda">
						<div id="divSelectGrupoProListado">
							<select class="form-control" title="CriptoMonedas..." id="optMonedasCompra" data-width="100%" data-live-search="true" "="">
								<option value="">Seleccione moneda</option>
								<option value="bitcoin">Bitcoin</option>
								<option value="bitshares">Bitshares</option>
								<option value="dash">Dash</option>
								<option value="ethereum">Ethereum</option>
								<option value="ethereum-classic">Ethereum-Classic</option>
								<option value="iota">Iota</option>
								<option value="list">Lisk</option>
								<option value="litecoin">Litecoin</option>
								<option value="monero">Monero</option>
								<option value="nem">Nem</option>
								<option value="neo">Neo</option>
								<option value="omisego">Omisego</option>
								<option value="ripple">Ripple</option>
								<option value="stratis">Stratis</option>
							</select>
						</div>
					</div>
					<div class="col-xs-1">
						<button class="btn btn-primary btn-lg cripto" id="btnCambiarEstadoCompra"><span class="glyphicon glyphicon-transfer"></span></button>
					</div>
					<div class="col-xs-12 col-sm-4" id="divComboCompraSoles">
						<select class="form-control" title="Moneda..." data-width="100%" data-live-search="true" "="">
							<option>Soles</option>
						</select>
					</div>
				</div>
				<div class="row" id="rowResultadosDatosCalculadora">
					<div class="col-xs-12 col-sm-4 text-right" id="divLblMonedaCompra">
						<span id="spanResCompra"></span>
					</div>
					<div class="col-xs-1 text-center">=</div>
					<div class="col-xs-12 col-sm-4 text-left" id="divLblSolesCompra">
						<span><strong><span id="spanResCompraSoles"></span></strong> Soles</span>
					</div>
				</div>
			</div>
		</div>
	</div>
	</div>

</div>
					
					<p class="description">Aquí puedes crear el contenido que se usará dentro del módulo.</p>
<div class="row hidden" id="divCompraBitcoins">
	<h3>¿Qué cantidad desea comprar?</h3>
	<p>Quiero:</p>
	<div class="input-group input-group-lg col-sm-6 col-sm-offset-3">
		<span class="input-group-addon" id="sizing-addon1">$</span>
		<input type="text" class="form-control text-center" id="txtCompraXDolares" min=0 pattern="[0-9]+([,\.][0-9]+)?"  placeholder="Ejemplo: 100">
		<span class="input-group-addon" id="sizing-addon1">dólares para obtener Bitcoins </span>
	</div><br>
	<div class="input-group input-group-lg col-sm-6 col-sm-offset-3">
		<span class="input-group-addon" id="sizing-addon1">S/.</span>
		<input type="text" class="form-control text-center" id="txtCompraXSoles" min=0 pattern="[0-9]+([,\.][0-9]+)?"  placeholder="Ejemplo: 100">
		<span class="input-group-addon" id="sizing-addon1">soles para obtener Bitcoins </span>
	</div><br>
	<div class="input-group input-group-lg col-sm-6 col-sm-offset-3">
		<span class="input-group-addon" id="sizing-addon1"><i class="glyphicon glyphicon-bitcoin"></i></span>
		<input type="text" class="form-control text-center" id="txtCompraXBitcoin" min=0 pattern="[0-9]+([,\.][0-9]+)?"  placeholder="Ejemplo: 0.025">
		<span class="input-group-addon" id="sizing-addon1">de Bitcoins </span>
	</div><br>
	<button class="btn btn-danger btn-lg btn-outline" id="btnVolverQueComprar"><i class="glyphicon glyphicon-circle-arrow-left"></i> Volver</button>
	<button class="btn btn-warning btn-outline btn-lg btnProcesarCompraDolares" id=""><i class="glyphicon glyphicon-circle-arrow-right"></i> Calcular pagos</button>
</div>
<!-- <div class="row hidden" id="divPrimerDiv3">
	<h3>Ingrese su monto <br><small>Debe ingresar la cantidad en dólares que desea comprar.</small></h3>
	<div class="input-group input-group-lg col-sm-6 col-sm-offset-3">
		<span class="input-group-addon" id="sizing-addon1">$</span>
		<input type="text" class="form-control" id="txtCompraEnDolares" placeholder="Ejemplo: 100" aria-describedby="sizing-addon1">
	</div>
	<br><br>
	<button class="btn btn-warning btn-lg btnProcesarCompraDolares" id=""><i class="glyphicon glyphicon-circle-arrow-right"></i> Procesar montos <i class="icofont icofont-paypal"></i></button><br><br>
</div> -->
<div class="row hidden col-sm-10 col-sm-offset-2" id="divPrimerDiv4">
	<div class="panel panel-lavanda"> <div class="panel-heading"> <h3 class="panel-title" style="font-size: 21px;">Sus resultados</h3> </div>
		<div class="panel-body">
			<div class="row text-primary">
				<p>Ud. Desea comprar $<span>100.00</span> en Bitcoins.</p>
				<h4>Valorizados en: <span>0.02</span> <i class="glyphicon glyphicon-bitcoin" style="font-size: 76%;"></i></h4>
				<p>Para obtenerlos Ud. debe pagar:</p>
				<p>En soles: S/. 250.30</p>
				<p>En dólares: $ 120.60</p>
				<p>Vía Paypal: S/. 265.30</p>
			</div>
		</div>
	</div>
	<button class="btn btn-danger btn-lg btn-outline" id="btnVolverAEmpezar"><i class="glyphicon glyphicon-circle-arrow-left"></i> Comenzar de nuevo</button>
</div>
</div>

<div class="col-sm-4 text-center text-primary" >
<h3 class="">Precio del Bitcoin Referencial</h3>

	<span>$ <h3 style="display: inline;"><span><?php echo $prices['USD']['last']; ?></span></h3> USD</span><br>
	<small class="text-muted">Los precios se actualizan cada 15 minutos.</small>
	
	<br><br>
	<h5 class="">Precio del Dólar en Perú</h5>
	<span>S/. <h3 style="display: inline;"><span>3.26</span></h3></span><br>
</div>
	
</div> <!-- fin de row 9-->

</div>
<script
  src="https://code.jquery.com/jquery-2.2.4.min.js"
  integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44="
  crossorigin="anonymous"></script>
<script>
$(document).ready(function () {
	// $.ajax({url:'https://blockchain.info/es/ticker', type: 'POST',
	// crossDomain: true,dataType: 'jsonp'
	// }).done(function (resp) {
	// 	console.log(resp)
	// })
	$.PrecioDolar=3.26;
	$.PrecioBitcoin= <?php echo $prices['USD']['last']; ?>
	
})
$('#btnComprarDolares').click(function () { 
	$('#divPrimerDiv').addClass('animated fadeOutUp').one('webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend', function(){
		$(this).removeClass('animated fadeOutUp').addClass('hidden');
		$('#divCompraBitcoins').removeClass('hidden').addClass('animated fadeInUp').one('webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend', function(){
			$(this).removeClass('animated fadeInUp');
		});
	});
});
$('#btnElegirCompraEnDolares').click(function () {
	$('#divCompraBitcoins').addClass('animated fadeOutUp').one('webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend', function(){
		$(this).addClass('hidden').removeClass('animated fadeOutUp');
		$('#divPrimerDiv3').removeClass('hidden').addClass('animated fadeInUp');
		$('#txtCompraEnDolares').focus();
	});
});
$('.btnProcesarCompraDolares').click(function () {
	var xdolar=$('#txtCompraXDolares').val();
	var xsol=$('#txtCompraXSoles').val();
	var xbitcoin=$('#txtCompraXBitcoin').val();
	if(xdolar!=''){}
	if(xsol!=''){}
	if(xbitcoin!=''){}
	$('#divCompraBitcoins').addClass('animated fadeOutUp').one('webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend', function(){
		$(this).addClass('hidden').removeClass('animated fadeOutUp');
		$('#divPrimerDiv4').removeClass('hidden').addClass('animated fadeInUp');
		$('#txtCompraEnDolares').focus();
	});
});
$('#btnVolverQueComprar').click(function () {
	$('#divCompraBitcoins').addClass('animated fadeOutUp').one('webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend', function(){
		$(this).addClass('hidden').removeClass('animated fadeOutUp');
		$('#divPrimerDiv').removeClass('hidden');
	});
});
$('#btnVolverAEmpezar').click(function () {
	$('#divPrimerDiv4').addClass('animated fadeOutUp').one('webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend', function(){
		$(this).addClass('hidden').removeClass('animated fadeOutUp');
		$('#divPrimerDiv').removeClass('hidden');
	});
});
$('#txtCompraXDolares').keyup(function () {
	if($(this).val()!=''){
		var valor = $(this).val();
	//console.log('valor '+ valor);
	$('input').val('');
	$(this).val(valor);
	$('#txtCompraXSoles').val( parseFloat(valor * $.PrecioDolar).toFixed(2));
	$('#txtCompraXBitcoin').val( parseFloat(valor/$.PrecioBitcoin ).toFixed(4));

	}
});
$('#txtCompraXSoles').keyup(function () {
	if($(this).val()!=''){
		var valor = $(this).val();
	//console.log('valor '+ valor);
	$('input').val('');
	$(this).val(valor);
	$('#txtCompraXDolares').val( parseFloat(valor / $.PrecioDolar).toFixed(2));
	$('#txtCompraXBitcoin').val( parseFloat(valor/$.PrecioDolar/$.PrecioBitcoin ).toFixed(4));

	}
});
$('#txtCompraXBitcoin').keyup(function () {
	if($(this).val()!=''){
		var valor = $(this).val();
	//console.log('valor '+ valor);
	$('input').val('');
	$(this).val(valor);
	$('#txtCompraXDolares').val(g );
	$('#txtCompraXSoles').val( parseFloat(valor/$.PrecioDolar/$.PrecioBitcoin ).toFixed(4));

	}
});

$('#txtCompraXSoles').focusout(function () {
	if($(this).val()==''){
		$(this).val('');
	}else{
		$(this).val( parseFloat($(this).val()).toFixed(2) );
	}
});
$('#txtCompraXDolares').focusout(function () {
	if($(this).val()==''){
		$(this).val('');
	}else{
		$(this).val( parseFloat($(this).val()).toFixed(2) );
	}
});

</script>
</body>
</html>