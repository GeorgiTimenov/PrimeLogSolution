<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Prime Log Solutions</title>
<link rel="stylesheet" href="css/css.css" type="text/css">
<link rel="stylesheet" href="css/default.css" type="text/css" media="screen" />
<link rel="stylesheet" href="css/nivo-slider.css" type="text/css" media="screen" />

<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/jquery.nivo.slider.pack.js"></script>
<script type="text/javascript">
	
	$(document).ready(function() {
			
		$("#baseContato").hide();
		
		$(".tabEmpresa2").hide();
		$(".abaEmpresa").animate({top: '-=350'},10);
		
		
		$(".tabServico2").hide();
		$(".abaServico").animate({top: '+625'},10);
		$(".abaServico").animate({height: '90px'},10);
		$(".textoServico").hide();
		
		$('.tab1').click(function() {
			$("#seta").animate({top: '+5px'}, 300);
		}); 
		$('.tab2').click(function() {
			$("#seta").animate({top: '+30'}, 300);
		});
		$('.tab3').click(function() {
			$("#seta").animate({top: '+55'}, 300);
		});
		$('.tab4').click(function() {
			$("#seta").animate({top: '+75'}, 300);
		});
		$('.tab5').click(function() {
			$("#seta").animate({top: '+100'}, 300);
		});
			

		 <!--TABS MENU-->
		$(".tab_content").hide(); 
		$("ul.tabs li:first").addClass("active").show();
		$("ul.tabs li:first").css("background-position", "0 -21px"); 
		$(".tab_content:first").show(); 
	
		$("ul.tabs li").click(function() {
			$("ul.tabs li").removeClass("active");
			$("ul.tabs li").css("background-position", "0 0");
			$(this).addClass("active"); 
			$(this).css("background-position", "0 -21px"); 
			$(".tab_content").hide();        
			var activeTab = $(this).find("a").attr("href"); 
			$("#currentTab").val($(activeTab).attr('id'));        
			$(activeTab).fadeIn(); 
			return false;
		});
		
 });
	
	
	function contato() {
		$("#baseContato").fadeIn();
		fechaEmpresa();
		fechaServico();
	}
	
	
	function fechaEmpresa() {
		$(".abaEmpresa").animate({top: '-350'}, 600);
	    $(".tabEmpresa").show();
	    $(".tabEmpresa2").hide();
	}
	
	function abreEmpresa() {
		 $(".abaEmpresa").animate({top: '+30'}, 600);
		  $(".tabEmpresa").hide();
		  $(".tabEmpresa2").show();
		  $("#baseContato").fadeOut();
		  
		  fechaServico();
	}
	
	
	
	function fechaServico() {	
	  $(".abaServico").animate({top: '+625'}, 600);
	  $(".textoServico").hide();
	  $(".abaServico").animate({height: '90px'},10);
	  $(".tabServico").show();
	  $(".tabServico2").hide();
	  $(".divServico").show()
	}
	
	function abreServico() {
		 $(".abaServico").animate({height: '480px'},0, function() {
   					 $(".abaServico").animate({top: '+230'}, 600);
 				 });	
		  $(".divServico").hide();
		  $(".textoServico").show();
		  $(".tabServico").hide();
		  $(".tabServico2").show();
		  
		  $("#baseContato").fadeOut();
		  fechaEmpresa();
	}
	

	
	 $(window).load(function() {
			$('#slider').nivoSlider({
				//effect: 'random', // Specify sets like: 'fold,fade,sliceDown'
				pauseTime: 6000
				});
	 });

</script>
</head>
<body>
   
    <div id="main">
<!--FUNDOS-->
    <div class="slider-wrapper theme-default">
       <div id="slider" class="nivoSlider">
          <img src="images/fundos/fundo1.jpg" width="1000" height="729" />
          <img src="images/fundos/fundo2.jpg" width="1000" height="729" />
          <img src="images/fundos/fundo3.jpg" width="1000" height="729" />
       </div>
    </div>
<!--FUNDOS-->

<!--TOPO-->
<div id="topo">

<div class="btContato" id="contato" onclick="contato()"></div>
<div class="clear"></div>

</div>
<!--TOPO-->

<!--CONTEUDO-->
<div id="barraLateral">
	
    <div style="width:330px;" class="tab_container">
        
        <div id="Tab1" class="tab_content">
        	<h2>Frete Aéreo</h2>	
                <div class="textoTab">
                 - Embarques diretos e consolidado.<br /><br />
 
     - Carregamentos perecíveis.<br /><br />
 
     - Transferências de entrada de todos os países.<br /><br />
                </div>       
        </div>
        
        <div id="Tab2" class="tab_content">
        	<h2>Frete Marítimo</h2>	
                <div class="textoTab">
                - Completos embarques de contêineres (FCL).<br /><br />
 
     - Vendas consolidadas (LCL).<br /><br />
 
     - Recipiente manchas em qualquer cidade em os EUA.<br /><br />
                
                </div>       
        </div>
        
        <div id="Tab3" class="tab_content">
        	<h2>Transporte Interno</h2>	
                <div class="textoTab">
                - Nacional e internacional de recolhimento e entrega.<br /><br />
 
     - Embarques terrestres por meio de linhas de caminhões que levam.<br /><br />
 
     - Movimento caminhão cheio e as transferências individuais para cada cidade em os EUA.<br /><br />
                </div>       
        </div>
        
        <div id="Tab4" class="tab_content">
        	<h2>Logística</h2>	
                <div class="textoTab">
               - Desenvolvimento de projetos para compradores e vendedores para minimizar o custo de logística.<br /><br />
 
     - Controle de estoque.<br /><br />
 
     - Armazenagem, embalagem, rotulagem e distribuição.<br /><br />
                </div>       
        </div>
        
        <div id="Tab5" class="tab_content">
        	<h2>Importação e Exportação</h2>	
                <div class="textoTab">
                - Coordenar embarques da origem ao destino final.<br /><br />
 
     - Instruções para a emissão da fatura comercial, packing list e demais documentos para cumprir com as leis personalizados no país de destino.<br /><br />
 
     - Classificação de mercadorias e deveres.<br /><br />
                </div>       
        </div>
        
     </div>
    
    <div id="tab">
     <div style="width:19px; width:31px; position:absolute; margin-left:-30px;" id="seta"><img src="images/seta.png" width="19" height="31" /></div>
        <ul class="tabs">
            <li class="tab1"><a href="#Tab1"><span>Air Freight</span></a></li>
            <li class="tab2"><a href="#Tab2"><span>Ocean Freight</span></a></li>
            <li class="tab3"><a href="#Tab3"><span>Inland Freight</span></a></li>
            <li class="tab4"><a href="#Tab4"><span>Logistics</span></a></li>
            <li class="tab5"><a href="#Tab5"><span>Import & Export</span></a></li>
       </ul>
    </div>

</div>

<div class="abaEmpresa">
    <div class="textoEmpresa">
        Especializados em logística, Prime Log Solutions oferece excelência em transporte aéreo, marítimo e terrestre.<br /><br />
         
        Nossa equipe é treinada para dar todo respaldo a seu embarque, tratando cada um deles como único, oferecendo ao mesmo, cuidado, respeito e atenção necessários. Atendimento personalizado e informação em tempo real são partes de nosso dia a dia, afinal levamos a sério o fato de embarcarmos excelência.<br /><br />
         
        Com vasta experiência na área de logística, coordenamos todos os seus embarques de qualquer porto ou aeroporto no mundo, não sendo necessária a nomeação de um agente por país. Coordenamos também todas as operações de logística internacional de sua empresa de qualquer ponto de embarque e desembarque; por isso investimos em nossos clientes oferecendo o melhor. À medida que nossos parceiros crescem, crescemos também. Acreditamos ser essa a chave do nosso sucesso.
    </div>
    <div class="tabEmpresa" onclick="abreEmpresa()"><img src="images/tab-empresa.png" width="375" height="46" /></div>
	<div class="tabEmpresa2" onclick="fechaEmpresa()"><img src="images/tab-empresa2.png" width="375" height="46" /></div>
</div>


<div class="divServico" onclick="abreServico()"></div>
<div class="abaServico">
    
    
	<div class="tabServico" id="tabServico" onclick="abreServico()"><img src="images/tab-servicos.png" width="375" height="46" /></div>
	<div class="tabServico2" id="tabServico2" onclick="fechaServico()"><img src="images/tab-servicos2.png" width="375" height="46" /></div>
    
    <div class="textoServico">
- Embarques Aéreos de qualquer parte do mundo.<br />
 
- Embarques Terrestres dentro dos EUA<br />
 
- Embarques Marítimos de qualquer parte do mundo<br />
 
- Estufagem e carregamento de containers<br />
 
- Armazenamento e distribuição dentro dos EUA<br />
 
- Embarques porta a porta <br />
 
- Serviços bonded<br />
 
- Tarifas NET/NET<br />
 
- Validação de título de Veículos<br />
 
- Consolidação de Carga<br />
 
- Serviços de carga perigosa<br />
 
- Fluxo de informação<br />
 
- Desembaraço<br />
 
- Logística de importação e exportação<br />
 
- Rastreamento<br />
 
- Commercial Invoice, Packing List e SED (Shipper's Export Declaration)<br />
 
- Trading <br />

    </div>
    
</div>
<!--CONTEUDO-->

<!--RODAPE-->
<div id="rodape">

<div id="mp3-player">
    <a id="player1" href="javascript:parent.frames['topFrame'].sendEvent('play');"><span>Play</span></a>
    <a id="player2" href="javascript:parent.frames['topFrame'].sendEvent('play','false')"><span>Pause</span></a>
    <a id="player3" href="javascript:parent.frames['topFrame'].sendEvent('next')"><span>Next</span></a>
    <a id="player4" href="javascript:parent.frames['topFrame'].sendEvent('prev')"><span>Prev</span></a>
</div>

</div>
<!--RODAPE-->
</div>
   
 <!--CONTATO-->  
    <div id="baseContato">
    <form action="" name="form1">
	<div class="formContato">
	  <table width="100%" border="0" cellspacing="0" cellpadding="0">
	    <tr>
	      <td height="178" align="left" valign="top" style="padding-top:15px;"><table width="100%" border="0" cellspacing="0" cellpadding="0">
	        <tr>
	          <td width="49%" align="left" class="endereco" style="padding-left:30px;">1325 NW 98TH CT SUITE 13 DORAL FL 33172<br />
              TELEFONE: 786.326.7067<br />
              FAX: 866.422.3257<br />
              CEL: 305.218.3293
              <div id="resposta" style="font-weight:bold; color:#030"></div>
              </td>
	          <td width="51%"><table width="100%" border="0" cellspacing="0" cellpadding="0">
	            <tr>
	              <td width="51%" align="left"><label for="nome"></label>
	                <input name="nome" type="text" class="input" id="nome" value="Nome:" onfocus="if(this.value=='Nome:')this.value='';" onblur="if(this.value=='')this.value='Nome:';" /></td>
	              </tr>
	            <tr>
	              <td align="left" style="padding-top:8px;"><input name="email" type="text" class="input" id="email" value="Email:" onfocus="if(this.value=='Email:')this.value='';" onblur="if(this.value=='')this.value='Email:';" /></td>
	              </tr>
	            <tr>
	              <td align="left" style="padding-top:7px;"><input name="telefone" type="text" class="input" id="telefone" value="Telefone:" onfocus="if(this.value=='Telefone:')this.value='';" onblur="if(this.value=='')this.value='Telefone:';" /></td>
	              </tr>
	            <tr>
	              <td align="left" style="padding-top:7px;"><input name="assunto" type="text" class="input" id="assunto" value="Assunto:" onfocus="if(this.value=='Assunto:')this.value='';" onblur="if(this.value=='')this.value='Assunto:';" /></td>
	              </tr>
              </table></td>
            </tr>
          </table></td>
        </tr>
	    <tr>
	      <td align="left" valign="top" style="padding-left:30px;"><textarea name="mensagem" cols="45" rows="5" class="msg" id="mensagem" value="Mensagem:" onfocus="if(this.value=='Mensagem:')this.value='';" onblur="if(this.value=='')this.value='Mensagem:';">Mensagem:</textarea></td>
        </tr>
      </table>
      
    </div>
    <div class="contatoEnvia" id="submit"><a href="#"><img src="images/bt-enviar-contato.png"/></a></div>
    </form>
</div>
<script type="text/javascript">
jQuery(document).ready(function() {
	jQuery("#resposta").ajaxStart(function(){ jQuery(this).html("Mensagem sendo enviada, por favor aguarde..."); });
	jQuery('#submit').click(function() {
	var nome     = jQuery('#nome').val();
	var email    = jQuery('#email').val();
	var telefone    = jQuery('#telefone').val();
	var assunto    = jQuery('#assunto').val();
	var mensagem = jQuery('#mensagem').val();
	jQuery.post('mail.php',
		{ nome: nome, email: email, telefone: telefone, assunto: assunto, mensagem: mensagem, contato: true },
		function(data, textStatus) {
			jQuery('#resposta').html(data);
		});
	return false;
	});    
});
</script>

<!--CONTATO-->
</body>
</html>
