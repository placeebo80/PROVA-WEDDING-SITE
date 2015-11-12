<?php
	$quota=$_GET['quota']; 
	$articolo=str_replace("-","&nbsp;",$_GET['articolo']); 
	$importo_aggiornato=$_GET['importo_aggiornato']; 
	$importo=str_replace("-","&nbsp;",$_GET['importo']); 
	$image = $_GET['image'];
	
	$url_pagina="http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']; 
?>


<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>Luca e Nicoletta - il matrimonio</title>
        
        <meta name="robots" content="nofollow" />    
            
        <!-- INCLUDE META -->
        <?php include "includes/meta.php"; ?>
        
        
    </head>
    <body>
    
        <!--[if lt IE 7]>
            <p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve your experience.</p>
        <![endif]-->
                
                
        <div class="container containter-full">  <!-- // CONTAINER INIZIO -->
                
                        <!--- FORM: INIZIO --->
                        <div>
                            <script src="js/jquery.validate.js" type="text/javascript"> </script> 
                            <script type="text/javascript">
                            jQuery.noConflict();
                            (function($) {
                        
                                $(document).ready(function() {						
                                // VALIDAZIONE FORM
                                $("#formail").validate({
                                    rules: {
                                        articolo: {
                                            required: true,
                                            minlength: 3,
                                            maxlength: 200
                                        },
									    importo: {
                                            required: true,
                                            number: true, 
                                            maxlength: 6
                                        },
                                        nome: {
                                            required: true,
                                            minlength: 3,
                                            maxlength: 80
                                        },
                                        email: {
                                            required: true,
                                            email: true,
                                            maxlength: 100
                                        },
                                        messaggio: {
                                            required: true,
                                            minlength: 4,
                                            maxlength: 2000
                                        },
                                       codice: {
                                            required: true
                                        }
                                    },
                                    
                                    messages: {
                                        articolo: {
                                            required: "campo obbligatorio",
                                            minlength: "deve contenere almeno 4 caratteri",
                                            maxlength:"deve contenere massimo 80 caratteri"
                                        },
                                        importo: {
                                            required: "campo obbligatorio",
                                            number: "campo obbligatorio", 
                                            maxlength:"deve contenere massimo 6 caratteri"
                                        },
                                        nome: {
                                            required: "campo obbligatorio",
                                            minlength: "deve contenere almeno 4 caratteri",
                                            maxlength:"deve contenere massimo 80 caratteri"
                                        },
                                        email: {
                                            required: "campo obbligatorio",
                                            email: "inserisci un indirizzo email valido",
                                            maxlength:"deve contenere massimo 100 caratteri"
                                        },
                                        messaggio: {
                                            required: "campo obbligatorio",
                                            minlength: "deve contenere almeno 4 caratteri",
                                            maxlength: "deve contenere massimo 2000 caratteri"
                                        },
                                        codice: {
                                            required: "inserisci il codice di controllo"
                                        }
                                    } 
                                });
                            });
                                       
                            })(jQuery);
                            </script>
                            
                        
                        
                        
                        
                        
                        
                        
		<!-- FORM ARTICOLO: INIZIO-->
		<div>
			<h1 class="color1 text-center"><?php echo $articolo ?></h1>
            
            <hr />
		
		    <!-- COLONNA SINISTRA: INIZIO-->
		    <div class="col-sm-4">
                
		    	<!-- SCHEDA PRODOTTO: INIZIO -->
		    	<div class="scheda_prodotto">
		        	<a href="images/lista-nozze/<?php echo $image ?>.jpg" class="fancybox"><img src="images/lista-nozze/<?php echo $image ?>.jpg" alt="Lista nozze" class="lazyOwl image_100"></a>
		    	</div>
                <div class="spacer_20"> </div>
		    	<!-- SCHEDA PRODOTTO: FINE-->
                
		    </div>
		    <!-- COLONNA SINISTRA: FINE-->


		    <!-- COLONNA DESTRA: INIZIO-->
		    <div class="col-sm-8">
                
		            <!-- SCHEDA PRODOTTO: INIZIO -->
		            <div class="scheda_prodotto">
                
		                <p>La lista di nozze comprende la nostra mini-Honeymoon, parte del fantastico viaggio che ci concederemo dopo il matrimonio, piccoli oggetti e complementi d'arredo che ci piacerebbe avere a casa. Ma il regalo più grande sar&agrave; la vostra presenza durante il nostro giorno speciale.</p>
		                <h3>Valore totale articolo</h3>
		                <p class="prezzo">
                        <?php
							if ($importo_aggiornato){
								echo "<span class='text_small'><em>mancano</em> </span><br /> ";
								echo "<strike>EUR $importo</strike> ";
								echo "<span>EUR $importo_aggiornato</span> ";
								echo "<br /><span class='text_small'><em>e sar&agrave; nostro</em> </span> ";
							} else{
								echo "<span>EUR $importo</span> ";
							}
                        ?>
	                </p>
		                <p class="text_medium text-center">
		                	Acquista l'intero articolo o una quota di questo effettuando un bonifico a:
		                </p>
		                <p class="text-center">
		                	Conto intestato a Luca Misso e Nicoletta del Giudice <br />IBAN: IT 26 L 03058 01604 100571164218 <br />Nella causale indicare il nome identificativo dell'articolo regalo
		                </p>
		                <p class="text_medium text-center">
		                	Comunicalo agli sposi compilando il form sottostante.
		                </p>
		                <hr />
		                <p class="text_medium text-center">
		                	oppure direttamente presso l'agenzia di viaggi <br />Millenium Falcon
                            <br />
                            <span class="text_small">C. so Vittorio Emanuele, 627 Napoli<br />Tel. 081 19562501/502<br /> <a href="www.milleniumfalcon.it" target="_blank">www.milleniumfalcon.it</a></span>
		                </p>
		                <hr />
                            <form action="engine_lista_nozze.php"  role="form" method="post" id="formail">
                                
                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <label for="nome">Articolo<span class="color1">*</span></label>
                                            <input class="form-control" placeholder="Articolo" name="articolo" id="articolo" value="<?php echo $articolo ?>">
                                        </div>
                                    </div>
                                </div>
            
                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <label for="importo">Importo<span class="color1">*</span></label>
                                            <input class="form-control" placeholder="indicare l'importo in €" name="importo" id="importo">
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <label for="nome">Nome e Cognome<span class="color1">*</span></label>
                                            <input class="form-control" placeholder="Nome" name="nome" id="nome">
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <label for="email">Email <span class="color1">*</span></label>
                                            <input class="form-control" placeholder="Email" name="email" id="email">
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <label for="messaggio">Dedica agli sposi<span class="color1">*</span></label>
                                            <textarea class="form-control" rows="3" placeholder="Dedica agli sposi" name="messaggio" id="messaggio"></textarea>
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <img id="siimage" src="captcha/securimage_show.php?sid=<?php echo md5(uniqid(time())); ?>" align="baseline" /> 
                                            <a tabindex="-1" style="border-style: none" href="#" title="Refresh" onclick="document.getElementById('siimage').src = 'captcha/securimage_show.php?sid=' + Math.random(); return false"><img src="captcha/images/refresh.gif" alt="Refresh" border="0" onclick="this.blur()" align="bottom" /> </a>
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <label for="codice">Secure code<span class="color1">*</span></label>
                                            <input class="form-control" placeholder="Secure code" id="codice" name="codice">
                                        </div>
                                    </div>
                                </div>

                                <p>
                                    <input type="text" id="url_pagina" name="url_pagina" value="<?php echo $url_pagina ?><" style="display:none;"/>
                                    <input type="text" id="check" name="check" value="ok" style="display:none;"/>
                                    <button class="btn btn-primary btn-sm" type="submit">INVIA</button> 
                                </p>
                            </form>          
                        </div>
                        <!--- FORM: FINE --->
                        
                        <div class="color2-2 text-right text_small">
                            Campi obbligatori <span class="color1">*</span>
                        </div>
		            </div>
		            <!-- SCHEDA PRODOTTO: FINE-->
                
		    </div>
		    <!-- COLONNA DESTRA: FINE-->
		</div>
		<!-- FORM ARTICOLO: FINE-->
                        
                        
                        
                        
                        
                        
                        
                        
        </div>   <!-- // CONTAINER FINE -->
                
                
        
    </body>
</html>
