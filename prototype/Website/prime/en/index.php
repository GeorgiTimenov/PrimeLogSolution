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
        	<h2>Air Freight</h2>	
                <div class="textoTab">
                - Direct and Consolidated shipments.<br /><br />
 
                - Perishable shipments.<br /><br />
             
                - Inbound shipments from all countries.<br /><br />
                </div>       
        </div>
        
        <div id="Tab2" class="tab_content">
        	<h2>Ocean Freight</h2>	
                <div class="textoTab">
                - Full Container shipments (FCL).<br /><br />
 
    - Consolidated shipments (LCL).<br /><br />
 
    - Container spotting at any city in the U.S.<br /><br />
                
                </div>       
        </div>
        
        <div id="Tab3" class="tab_content">
        	<h2>Inland Freight</h2>	
                <div class="textoTab">
                - National and International pickup and delivery.<br /><br />
 
    - Overland shipments through leading trucking lines.<br /><br />
 
    - Full truck move and single shipments to every city in the U.S.<br /><br />
                </div>       
        </div>
        
        <div id="Tab4" class="tab_content">
        	<h2>Logistics</h2>	
                <div class="textoTab">
               - Developing projects for buyers and sellers to minimize logistics cost.<br /><br />
 
    - Inventory control.<br /><br />
 
    - Warehousing, packing, labeling and distribution.<br /><br />
                </div>       
        </div>
        
        <div id="Tab5" class="tab_content">
        	<h2>Import & Export</h2>	
                <div class="textoTab">
                - Coordinate shipments from origin to final destination.<br /><br />
 
    - Instruction to issue commercial invoice, packing list and other documents to comply with custom laws at the destination country.<br /><br />
 
    - Classification of merchandise and duties.<br /><br />
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
        Specialized in logistics, Log Prime Solutions offers excellence in air, sea and land.<br /><br />

Our staff is trained to give full support to his departure, treating each one as unique, offering the same care, respect and attention needed. Personalized service and real-time information are part of our day to day, after we take seriously the fact embark excellence.<br /><br />

With extensive experience in logistics, coordinate all your shipments from any port or airport in the world is not necessary to appoint an agent for the country. Also coordinate all international logistics operations of your company from any point of embarkation and disembarkation, so invest in offering our customers the best. As our partners grow, we grow too. We believe this to be the key to our success.
    </div>
    <div class="tabEmpresa" onclick="abreEmpresa()"><img src="images/tab-empresa.png" width="375" height="46" /></div>
	<div class="tabEmpresa2" onclick="fechaEmpresa()"><img src="images/tab-empresa2.png" width="375" height="46" /></div>
</div>


<div class="divServico" onclick="abreServico()"></div>
<div class="abaServico">
    
    
	<div class="tabServico" id="tabServico" onclick="abreServico()"><img src="images/tab-servicos.png" width="375" height="46" /></div>
	<div class="tabServico2" id="tabServico2" onclick="fechaServico()"><img src="images/tab-servicos2.png" width="375" height="46" /></div>
    
    <div class="textoServico">
- Air Shipments from anywhere in the world.<br />
- Ground Shipments within the U.S.<br />
- Maritime shipments from anywhere in the world<br />
- Stuffing and loading containers<br />
- Storage and distribution within the U.S.<br />
- Door to door shipments<br />
- Bonded Services<br />
- Tariffs NET / NET<br />
- Validation of Vehicle Title<br />
- Consolidation of cargo<br />
- Services of dangerous cargo<br />
- Flow of information<br />
- Clearance<br />
- Import and export logistics<br />
- Tracking<br />
- Commercial Invoice, Packing List and SED (Shipper's Export Declaration)<br />
- Trading<br />

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
              PHONE: 786.326.7067<br />
              FAX: 866.422.3257<br />
              CEL: 305.218.3293
              <div id="resposta" style="font-weight:bold; color:#030"></div>
              </td>
	          <td width="51%"><table width="100%" border="0" cellspacing="0" cellpadding="0">
	            <tr>
	              <td width="51%" align="left"><label for="nome"></label>
	                <input name="nome" type="text" class="input" id="nome" value="Name:" onfocus="if(this.value=='Name:')this.value='';" onblur="if(this.value=='')this.value='Name:';" /></td>
	              </tr>
	            <tr>
	              <td align="left" style="padding-top:8px;"><input name="email" type="text" class="input" id="email" value="Email:" onfocus="if(this.value=='Email:')this.value='';" onblur="if(this.value=='')this.value='Email:';" /></td>
	              </tr>
	            <tr>
	              <td align="left" style="padding-top:7px;"><input name="telefone" type="text" class="input" id="Phone" value="Phone:" onfocus="if(this.value=='Phone:')this.value='';" onblur="if(this.value=='')this.value='Telefone:';" /></td>
	              </tr>
	            <tr>
	              <td align="left" style="padding-top:7px;"><input name="assunto" type="text" class="input" id="assunto" value="Subject:" onfocus="if(this.value=='Subject:')this.value='';" onblur="if(this.value=='')this.value='Subject:';" /></td>
	              </tr>
              </table></td>
            </tr>
          </table></td>
        </tr>
	    <tr>
	      <td align="left" valign="top" style="padding-left:30px;"><textarea name="mensagem" cols="45" rows="5" class="msg" id="mensagem" value="Message:" onfocus="if(this.value=='Message:')this.value='';" onblur="if(this.value=='')this.value='Message:';">Message:</textarea></td>
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
