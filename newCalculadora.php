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
			<li><a href="#tabIntercambioMonedas" data-toggle="tab" id="aHrefIntercambio"> Intercambioo</a></li>
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
							<select class="form-control" title="CriptoMonedas..." id="optMonedas" data-width="100%" data-live-search="true" >
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
						<select class="form-control" title="Moneda..." data-width="100%" data-live-search="true" >
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
							<select class="form-control" title="CriptoMonedas..." id="optMonedasCompra" data-width="100%" data-live-search="true" >
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
						<select class="form-control" title="Moneda..." data-width="100%" data-live-search="true">
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
			<div class="tab-pane fade" id="tabIntercambioMonedas">
			<div class="row">
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nihil, vitae quis inventore sed adipisci, molestias reiciendis blanditiis quisquam provident neque tempora, a labore aspernatur velit doloribus maxime obcaecati debitis excepturi?</p>
			</div>
			</div>
		</div>
	</div>
	</div>

</div>


<script
  src="https://code.jquery.com/jquery-2.2.4.min.js"
  integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44="
  crossorigin="anonymous"></script>
<script>
/*******************************************************
|---- Código Optimizado para: cambiocriptomonedas.com -|
|---- Por: Pariona Valencia, Carlos Alex --------------|
|---- Contacto: infocat2.0@gmail.com ------------------|
|---- Fecha: 19/06/2017 -------------------------------|
|---- Ult. Actualización: 09/10/2017 ------------------|
*******************************************************/

jQuery(document).ready(function($) {
$.precioDolar=3.27;
$.comisionVenta=1.25;
$.comisionCompra=1.15;
//console.log('imprimir algo');
$.JsonMonedas=[];
/* Captura de valores */   
$.get( "https://api.coinmarketcap.com/v1/ticker/", function(data){
       var PreOriBtc, PreSolBtc, PreOriBtcCom, PreSolBtcCom,
       PreOriEth, PreSolEth, PreOriEthCom, PreSolEthCom,
           PreOriRip, PreSolRip, PreOriRipCom,PreSolRipCom,
           PreOriNem, PreSolNem, PreOriNemCom, PreSolNemCom,
           PreOriLit, PreSolLit, PreOriLitCom, PreSolLitCom,
           PreOriIot, PreSolIot,PreOriIotCom, PreSolIotCom,
           PreOriDash, PreSolDash,PreSolDashCom, PreOriDashCom,
           PreOriBts, PreSolBts, PreOriBtsCom, PreSolBtsCom,
           PreOriStr, PreSolStr, PreOriStrCom, PreSolStrCom,
           PreOriMonero, PreSolMonero, PreOriMoneroCom, PreSolMoneroCom,
           PreOriNeo, PreSolNeo, PreOriNeoCom, PreSolNeoCom,
           PreOriOmisego, PreSolOmisego, PreOriOmisegoCom, PreSolOmisegoCom,
           PreOriLisk, PreSolLisk, PreOriLiskCom, PreSolLiskCom,
           PreOriEtherClasic, PreSolEtherClasic, PreOriEtherClasicCom, PreSolEtherClasicCom,
           PreOriBcash, PreSolBcash, PreOriBcashCom, PreSolBcashCom;
	$.chata=data;
    $.map(data,function(moneda, i){
   // console.log(moneda);

    if(moneda.id=='bitcoin'){
      PreOriBtc =moneda.price_usd;
      PreSolBtc = PreOriBtc*+$.precioDolar*$.comisionVenta;

      PreOriBtcCom =moneda.price_usd;
      PreSolBtcCom = (PreOriBtcCom/$.comisionCompra)*$.precioDolar;
      $.JsonMonedas.push({'moneda':'bitcoin', 'venta': PreSolBtc, 'compra': PreSolBtcCom , simbolo: 'BTC'});
    }
    if(moneda.id=='ethereum'){
      PreOriEth =moneda.price_usd;
      PreSolEth = PreOriEth*$.precioDolar*$.comisionVenta;

      PreOriEthCom =moneda.price_usd;
      PreSolEthCom = (PreOriEthCom/$.comisionCompra)*$.precioDolar;
      $.JsonMonedas.push({'moneda':'ethereum', 'venta': PreSolEth, 'compra': PreSolEthCom, simbolo: 'ETH' });
    }
    if(moneda.id=='ripple'){
      PreOriRip =moneda.price_usd;
      PreSolRip = PreOriRip*$.precioDolar*$.comisionVenta;

      PreOriRipCom =moneda.price_usd;
      PreSolRipCom = (PreOriRipCom/$.comisionCompra)*$.precioDolar;
      $.JsonMonedas.push({'moneda':'ripple', 'venta': PreSolRip, 'compra': PreSolRipCom, simbolo: 'XRP' });
    }
    if(moneda.id=='nem'){
      PreOriNem =moneda.price_usd;
      PreSolNem = PreOriNem*$.precioDolar*$.comisionVenta;

      PreOriNemCom =moneda.price_usd;
      PreSolNemCom = (PreOriNemCom/$.comisionCompra)*$.precioDolar;
      $.JsonMonedas.push({'moneda':'nem', 'venta': PreSolNem, 'compra': PreSolNemCom, simbolo: 'XEM' });
    }
    if(moneda.id=='litecoin'){
      PreOriLit =moneda.price_usd;
      PreSolLit = PreOriLit*$.precioDolar*$.comisionVenta;

      PreOriLitCom =moneda.price_usd;
      PreSolLitCom = (PreOriLitCom/$.comisionCompra)*$.precioDolar;
      $.JsonMonedas.push({'moneda':'litecoin', 'venta': PreSolLit, 'compra': PreSolLitCom, simbolo: 'LTC' });
    }
    if(moneda.id=='iota'){
      PreOriIot =moneda.price_usd;
      PreSolIot = PreOriIot*$.precioDolar*$.comisionVenta;

      PreOriIotCom =moneda.price_usd;
      PreSolIotCom = (PreOriIotCom/$.comisionCompra)*$.precioDolar;
      $.JsonMonedas.push({'moneda':'iota', 'venta': PreSolIot, 'compra': PreSolIotCom, simbolo: 'MIOTA' });
    }
    if(moneda.id=='dash'){
      PreOriDash =moneda.price_usd;
      PreSolDash = PreOriDash*$.precioDolar*$.comisionVenta;

      PreOriDashCom =moneda.price_usd;
      PreSolDashCom = (PreOriDashCom/$.comisionCompra)*$.precioDolar;
      $.JsonMonedas.push({'moneda':'dash', 'venta': PreSolDash, 'compra': PreSolDashCom, simbolo: 'DASH' });
    }
    if(moneda.id=='bitshares'){
      PreOriBts =moneda.price_usd;
      PreSolBts = PreOriBts*$.precioDolar*$.comisionVenta;

      PreOriBtsCom =moneda.price_usd;
      PreSolBtsCom = (PreOriBtsCom/$.comisionCompra)*$.precioDolar;
      $.JsonMonedas.push({'moneda':'bitshares', 'venta': PreSolBts, 'compra': PreSolBtsCom, simbolo: 'BTS' });
    }
    if(moneda.id=='stratis'){
      PreOriStr =moneda.price_usd;
      PreSolStr = PreOriStr*$.precioDolar*$.comisionVenta;

      PreOriStrCom =moneda.price_usd;
      PreSolStrCom = (PreOriStrCom/$.comisionCompra)*$.precioDolar;
      $.JsonMonedas.push({'moneda':'stratis', 'venta': PreSolStr, 'compra': PreSolStrCom, simbolo: 'STRAT' });
    }
    if(moneda.id=='monero'){
      PreOriMonero =moneda.price_usd;
      PreSolMonero = PreOriMonero*$.precioDolar*$.comisionVenta;

      PreOriMoneroCom =moneda.price_usd;
      PreSolMoneroCom = (PreOriMoneroCom/$.comisionCompra)*$.precioDolar;
      $.JsonMonedas.push({'moneda':'monero', 'venta': PreSolMonero, 'compra': PreSolMoneroCom, simbolo: 'XMR' });
    }
    if(moneda.id=='neo'){
      PreOriNeo =moneda.price_usd;
      PreSolNeo = PreOriNeo*$.precioDolar*$.comisionVenta;

      PreOriNeoCom =moneda.price_usd;
      PreSolNeoCom = (PreOriNeoCom/$.comisionCompra)*$.precioDolar;
      $.JsonMonedas.push({'moneda':'neo', 'venta': PreSolNeo, 'compra': PreSolNeoCom, simbolo: 'NEO' });
    }
    if(moneda.id=='omisego'){
      PreOriOmisego =moneda.price_usd;
      PreSolOmisego = PreOriOmisego*$.precioDolar*$.comisionVenta;

      PreOriOmisegoCom =moneda.price_usd;
      PreSolOmisegoCom = (PreOriOmisegoCom/$.comisionCompra)*$.precioDolar;
      $.JsonMonedas.push({'moneda':'omisego', 'venta': PreSolOmisego, 'compra': PreSolOmisegoCom, simbolo: 'OMG' });
    }
    if(moneda.id=='lisk'){
      PreOriLisk =moneda.price_usd;
      PreSolLisk = PreOriLisk*$.precioDolar*$.comisionVenta;

      PreOriLiskCom =moneda.price_usd;
      PreSolLiskCom = (PreOriLiskCom/$.comisionCompra)*$.precioDolar;
      $.JsonMonedas.push({'moneda':'lisk', 'venta': PreSolLisk, 'compra': PreSolLiskCom, simbolo: 'LSK' });
    }
    if(moneda.id=='ethereum-classic'){
      PreOriEtherClasic =moneda.price_usd;
      PreSolEtherClasic = PreOriEtherClasic*$.precioDolar*$.comisionVenta;

      PreOriEtherClasicCom =moneda.price_usd;
      PreSolEtherClasicCom = (PreOriEtherClasicCom/$.comisionCompra)*$.precioDolar;
      $.JsonMonedas.push({'moneda':'ethereum-classic', 'venta': PreSolEtherClasic, 'compra': PreSolEtherClasicCom, simbolo: 'ETC' });
    }

    if(moneda.id=='bitcoin-cash'){
      PreOriBcash =moneda.price_usd;
      PreSolBcash = PreOriBcash*+$.precioDolar*$.comisionVenta;

      PreOriBcashCom =moneda.price_usd;
      PreSolBcashCom = (PreOriBcashCom/$.comisionCompra)*$.precioDolar;
      $.JsonMonedas.push({'moneda':'bitcoin-cash', 'venta': PreSolBcash, 'compra': PreSolBcashCom , simbolo: 'BCH'});
    }


  });
/* Fin de captura de valores */ 

$('.dropdown').click( function(){
  var combo= $(this);
  combo.parent().find('.presult').remove();
  var monedaOrigen =combo.attr('id').replace('dpb', '');
  var valorMonedaInicial=valorMoneda(monedaOrigen);
  var valorMonedaFinal=0, convertido=0;
  console.log('Desde: '+monedaOrigen + ' valor: ' + valorMonedaInicial);
  
  if(combo.val()=="falta"){
    combo.parent().find('.presult').remove();
  }
  
  if(combo.val()=="bitcoin"){
    valorMonedaFinal=valorMoneda('bitcoin');
    console.log('Hacia: Bitcoin' + ' valor: '+valorMonedaFinal);
    convertido= parseFloat(valorMonedaInicial/valorMonedaFinal).toFixed(4);
    combo.parent().append('<span class="presult"><strong>'+convertido+' BTC</strong></span>');
  }
  if(combo.val()=="ethereum"){
    valorMonedaFinal=valorMoneda('ethereum');
    console.log('Hacia: ethereum' + ' valor: '+valorMonedaFinal);
    convertido= parseFloat(valorMonedaInicial/valorMonedaFinal).toFixed(4);
    combo.parent().append('<span class="presult"><strong>'+convertido+' ETH</strong></span>');
    
  }
  if(combo.val()=="ripple"){
    valorMonedaFinal=valorMoneda('ripple');
    console.log('Hacia: ripple' + ' valor: '+valorMonedaFinal);
    convertido= parseFloat(valorMonedaInicial/valorMonedaFinal).toFixed(4);
    combo.parent().append('<span class="presult"><strong>'+convertido+' XRP</strong></span>');
  }
  if(combo.val()=="nem"){
    valorMonedaFinal=valorMoneda('nem');
    console.log('Hacia: nem' + ' valor: '+valorMonedaFinal);
    convertido= parseFloat(valorMonedaInicial/valorMonedaFinal).toFixed(4);
    combo.parent().append('<span class="presult"><strong>'+convertido+' XEM</strong></span>');
  }
  if(combo.val()=="litecoin"){
    valorMonedaFinal=valorMoneda('litecoin');
    console.log('Hacia: litecoin' + ' valor: '+valorMonedaFinal);
    convertido= parseFloat(valorMonedaInicial/valorMonedaFinal).toFixed(4);
    combo.parent().append('<span class="presult"><strong>'+convertido+' LTC</strong></span>');
  }
  if(combo.val()=="iota"){
    valorMonedaFinal=valorMoneda('iota');
    console.log('Hacia: iota' + ' valor: '+valorMonedaFinal);
    convertido= parseFloat(valorMonedaInicial/valorMonedaFinal).toFixed(4);
    combo.parent().append('<span class="presult"><strong>'+convertido+' MIOTA</strong></span>');
  }
  if(combo.val()=="dash"){
    valorMonedaFinal=valorMoneda('dash');
    console.log('Hacia: dash' + ' valor: '+valorMonedaFinal);
    convertido= parseFloat(valorMonedaInicial/valorMonedaFinal).toFixed(4);
    combo.parent().append('<span class="presult"><strong>'+convertido+' DASH</strong></span>');
  }
  if(combo.val()=="bitshares"){
    valorMonedaFinal=valorMoneda('bitshares');
    console.log('Hacia: bitshares' + ' valor: '+valorMonedaFinal);
    convertido= parseFloat(valorMonedaInicial/valorMonedaFinal).toFixed(4);
    combo.parent().append('<span class="presult"><strong>'+convertido+' BTS</strong></span>');
  }
  if(combo.val()=="stratis"){
    valorMonedaFinal=valorMoneda('stratis');
    console.log('Hacia: stratis' + ' valor: '+valorMonedaFinal);
    convertido= parseFloat(valorMonedaInicial/valorMonedaFinal).toFixed(4);
    combo.parent().append('<span class="presult"><strong>'+convertido+' STRAT</strong></span>');
  }
  if(combo.val()=="monero"){
    valorMonedaFinal=valorMoneda('monero');
    console.log('Hacia: monero' + ' valor: '+valorMonedaFinal);
    convertido= parseFloat(valorMonedaInicial/valorMonedaFinal).toFixed(4);
    combo.parent().append('<span class="presult"><strong>'+convertido+' XMR</strong></span>');
  }
  if(combo.val()=="neo"){
    valorMonedaFinal=valorMoneda('neo');
    console.log('Hacia: neo' + ' valor: '+valorMonedaFinal);
    convertido= parseFloat(valorMonedaInicial/valorMonedaFinal).toFixed(4);
    combo.parent().append('<span class="presult"><strong>'+convertido+' NEO</strong></span>');
  }
  if(combo.val()=="omisego"){
    valorMonedaFinal=valorMoneda('omisego');
    console.log('Hacia: omisego' + ' valor: '+valorMonedaFinal);
    convertido= parseFloat(valorMonedaInicial/valorMonedaFinal).toFixed(4);
    combo.parent().append('<span class="presult"><strong>'+convertido+' OMG</strong></span>');
  }
  if(combo.val()=="lisk"){
    valorMonedaFinal=valorMoneda('lisk');
    console.log('Hacia: lisk' + ' valor: '+valorMonedaFinal);
    convertido= parseFloat(valorMonedaInicial/valorMonedaFinal).toFixed(4);
    combo.parent().append('<span class="presult"><strong>'+convertido+' LSK</strong></span>');
  }
  if(combo.val()=="ethereum-classic"){
    valorMonedaFinal=valorMoneda('ethereum-classic');
    console.log('Hacia: ethereum classic' + ' valor: '+valorMonedaFinal);
    convertido= parseFloat(valorMonedaInicial/valorMonedaFinal).toFixed(4);
    combo.parent().append('<span class="presult"><strong>'+convertido+' ETC</strong></span>');
  }
  
    if(combo.val()=="bitcoin-cash"){
    valorMonedaFinal=valorMoneda('bitcoin-cash');
    console.log('Hacia: bitcoin cash' + ' valor: '+valorMonedaFinal);
    convertido= parseFloat(valorMonedaInicial/valorMonedaFinal).toFixed(4);
    combo.parent().append('<span class="presult"><strong>'+convertido+' BCH</strong></span>');
  }
     
});
  
function valorMoneda(queMoneda){
  var valorAct;
  console.log($.JsonMonedas)
  $.map($.chata,function(moneda, i){
    if(moneda.id==queMoneda){ //console.log(moneda);
       valorAct=moneda.price_usd;
        return false; 
      }

  });
  return valorAct;
}
  

     
  
// IMPRESIONES
    
$('#bitven').text(PreSolBtc.toFixed(2));
$('#bitcom').text(PreSolBtcCom.toFixed(2));
$('#ethven').text(PreSolEth.toFixed(2));
$('#ethcom').text(PreSolEthCom.toFixed(2));
$('#ripven').text(PreSolRip.toFixed(2));
$('#ripcom').text(PreSolRipCom.toFixed(2));
$('#nemven').text(PreSolNem.toFixed(2));
$('#nemcom').text(PreSolNemCom.toFixed(2));
$('#litven').text(PreSolLit.toFixed(2));
$('#litcom').text(PreSolLitCom.toFixed(2)); 
$('#iotven').text(PreSolIot.toFixed(2));
$('#iotcom').text(PreSolIotCom.toFixed(2)); 
$('#dasven').text(PreSolDash.toFixed(2));
$('#dascom').text(PreSolDashCom.toFixed(2)); 
$('#btsven').text(PreSolBts.toFixed(2));
$('#btscom').text(PreSolBtsCom.toFixed(2)); 
$('#strven').text(PreSolStr.toFixed(2));
$('#strcom').text(PreSolStrCom.toFixed(2)); 
$('#moneroven').text(PreSolMonero.toFixed(2));
$('#monerocom').text(PreSolMoneroCom.toFixed(2));
$('#neoven').text(PreSolNeo.toFixed(2));
$('#neocom').text(PreSolNeoCom.toFixed(2));
$('#omisegoven').text(PreSolOmisego.toFixed(2));
$('#omisegocom').text(PreSolOmisegoCom.toFixed(2));
$('#liskven').text(PreSolLisk.toFixed(2));
$('#liskcom').text(PreSolLiskCom.toFixed(2));
$('#ethereum-classicven').text(PreSolEtherClasic.toFixed(2));
$('#ethereum-classiccom').text(PreSolEtherClasicCom.toFixed(2));
$('#bcashven').text(PreSolBcash.toFixed(2));
$('#bcashcom').text(PreSolBcashCom.toFixed(2));

//Extracción de Data
  
//console.log(data);  
});

  
/* Calculadora V2 */
$('#aHrefVenta').click(function () { console.log('clive');
	$(this).parent().addClass("active").next().removeClass('active');
	$('#tabVentaMonedas').addClass('in active');
	$('#tabCompraMonedas').removeClass('in active');
	$('#tabIntercambioMonedas').removeClass('in active');
});
$('#aHrefCompra').click(function () {console.log('cliCom');
	$(this).parent().addClass("active").prev().removeClass('active');
	$('#tabCompraMonedas').addClass('in active');
	$('#tabVentaMonedas').removeClass('in active');
	$('#tabIntercambioMonedas').removeClass('in active');
});
$('#aHrefIntercambio').click(function () {console.log('cliCom');
	$(this).parent().addClass("active").prev().removeClass('active');
	$('#tabIntercambioMonedas').addClass('in active');
	$('#tabCompraMonedas').removeClass('in active');
	$('#tabVentaMonedas').removeClass('in active');

});
function intercambiar(esCompra){
  var idCombo=$('#optMonedas').prop('selectedIndex');
  var strDiv1Cont = $("#divComboVentaMoneda").html();
  var strDiv2Cont = $("#divComboVentaSoles").html();

  $("#divComboVentaMoneda").html(strDiv2Cont);
  $("#divComboVentaSoles").html(strDiv1Cont);

  var strDiv3Cont = $("#divLblMoneda").html();
  var strDiv4Cont = $("#divLblSoles").html();

  $("#divLblMoneda").html(strDiv4Cont);
  $("#divLblSoles").html(strDiv3Cont);
  $('#optMonedas').prop('selectedIndex', idCombo );


  var idCombo2=$('#optMonedasCompra').prop('selectedIndex');
  var strDiv5Cont = $("#divComboCompraMoneda").html();
  var strDiv6Cont = $("#divComboCompraSoles").html();

  $("#divComboCompraMoneda").html(strDiv6Cont);
  $("#divComboCompraSoles").html(strDiv5Cont);

  var strDiv7Cont = $("#divLblMonedaCompra").html();
  var strDiv8Cont = $("#divLblSolesCompra").html();

  $("#divLblMonedaCompra").html(strDiv8Cont);
  $("#divLblSolesCompra").html(strDiv7Cont);
  $('#optMonedasCompra').prop('selectedIndex', idCombo2 );
  cambioMonedaOptYSoles(esCompra);
}

function cambioMonedaOptYSoles(esCompra) {
	var moneda='';
	var cantidad, cantMoneda, resumen, precioCompra, precioVenta, precioVentaSoles;
	if(esCompra){moneda=$('#optMonedasCompra').val();
		if( parseFloat($('#txtIngresoCantidadCompra').val())>0 && moneda!==''){cantidad=$('#txtIngresoCantidadCompra').val();}
		else{cantidad=0;}
	}
	else{
		moneda=$('#optMonedas').val();
		if( parseFloat($('#txtIngresoCantidad').val())>0 && moneda!==''){cantidad=$('#txtIngresoCantidad').val();}
		else{cantidad=0;}
	}
	
	if( $('#btnCambiarEstadoVenta').hasClass('cripto') ){
		//calcular en base a monedas
		for (var i = 0; i < $.JsonMonedas.length; i++) {
		if( $.JsonMonedas[i].moneda== moneda ){
			cantMoneda=cantidad+' <span class="mayuscula">'+$.JsonMonedas[i].moneda+'</span> ('+  $.JsonMonedas[i].simbolo+')';
			precioVenta= parseFloat($.JsonMonedas[i].venta*cantidad).toFixed(2);
			precioCompra= parseFloat($.JsonMonedas[i].compra*cantidad).toFixed(2);
			}
		}
		if(esCompra){
			$('#spanResCompra').html(cantMoneda);
			$('#spanResCompraSoles').text(parseFloat(precioCompra).toFixed(2));
		}
		else{
			$('#spanResVenta').html(cantMoneda);
			$('#spanResVentaSoles').text(parseFloat(precioVenta).toFixed(2));
		}
	}else{
		//calcular en base a soles
		for (var u = 0; u < $.JsonMonedas.length; u++) {
		if( $.JsonMonedas[u].moneda== moneda ){ console.log($.JsonMonedas[u])
			precioVenta= parseFloat(cantidad/$.JsonMonedas[u].venta).toFixed(4) +' <span class="mayuscula">'+$.JsonMonedas[u].moneda+'</span> ('+  $.JsonMonedas[u].simbolo+')';
			precioCompra= parseFloat(cantidad/$.JsonMonedas[u].compra).toFixed(4) +' <span class="mayuscula">'+$.JsonMonedas[u].moneda+'</span> ('+  $.JsonMonedas[u].simbolo+')';
			}
		}
		if(esCompra){
			$('#spanResCompra').html(precioCompra);
			$('#spanResCompraSoles').text(parseFloat(cantidad).toFixed(2));
		}
		else{
			$('#spanResVenta').html(precioVenta);
			$('#spanResVentaSoles').text(parseFloat(cantidad).toFixed(2));	
		}
		
	}

}
$('body').on('change','#optMonedas', function () { cambioMonedaOptYSoles(false); });
// $('#optMonedas').change(function () { cambioMonedaOptYSoles(); });
$('#txtIngresoCantidad').keyup(function (e) { cambioMonedaOptYSoles(false); });
$('#txtIngresoCantidad').change(function () { cambioMonedaOptYSoles(false); });
$('#btnCambiarEstadoVenta').click(function () {
	$('#btnCambiarEstadoCompra').toggleClass('cripto');
	$('#btnCambiarEstadoVenta').toggleClass('cripto');
	intercambiar(false);
});

$('body').on('change','#optMonedasCompra', function () { cambioMonedaOptYSoles(true); });
$('#txtIngresoCantidadCompra').keyup(function (e) { cambioMonedaOptYSoles(true); });
$('#txtIngresoCantidadCompra').change(function () { cambioMonedaOptYSoles(true); });
$('#btnCambiarEstadoCompra').click(function () {
	$('#btnCambiarEstadoCompra').toggleClass('cripto');
	$('#btnCambiarEstadoVenta').toggleClass('cripto');
	intercambiar(true);
});
/* Fin de calculadora v2*/

});

</script>
</body>
</html>
  