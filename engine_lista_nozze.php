<?php

//Includo Variabili
include('includes/config.php');


//SE LA FORM E' STATA INVIATA
if ($_POST['check']=='ok') {  
	
	//INCLUDO I FILE CAPCHA
	/* COD.CAPCHA */
	include("captcha/securimage.php");
	$img = new Securimage();
	$valid = $img->check($_POST['codice']);
	
		
	//SE CODICE CAPCHA E' CORRETTO
	if(($valid == true)){
	
			$articolo =   $_POST['articolo'];
			$importo =   $_POST['importo'];
			$nome =   $_POST['nome'];
			$email =   $_POST['email'];
			$messaggio = $_POST['messaggio'];
			$ip = $_SERVER['REMOTE_ADDR'];
			$url_pagina = $_POST['url_pagina'];
			
			//CONTROLLO CAMPI OBBLIGATORI
			if( ($articolo == true) and ($importo == true) and ($nome == true) and ($email == true) and ($messaggio == true) ){


				//INVIO MAIL ALL'AMMINISTRATORE DEL SITO
				$to         = $tua_email;
				$sbj        = "Luca e Nicoletta - lista nozze";
				$msg        = "
				<html>
				<head>
				<style type='text/css'>
				body{
					font-family:Arial;
					color:#$colore_testo;
					font-size:15px;
				}
				</style>
				</head>
				<body>
				<table width='600' border='0' cellspacing='0' cellpadding='5'>
				  <tr>
					<td width='121' align='right' valign='baseline'><strong>Articolo:</strong></td>
					<td width='459'>$articolo</td>
				  </tr>
				  <tr>
					<td width='121' align='right' valign='baseline'><strong>Importo:</strong></td>
					<td width='459'>$importo</td>
				  </tr>
				  <tr>
					<td width='121' align='right' valign='baseline'><strong>Nome e cognome:</strong></td>
					<td width='459'>$nome</td>
				  </tr>
				  <tr>
					<td align='right' valign='baseline'><strong>Email:</strong></td>
					<td><a href='mailto:$email' style='color:$colore1' target='_blank'>$email</a></td>
				  </tr>
				  <tr>
					<td align='right' valign='baseline'><strong>Messaggio:</strong></td>
					<td>$messaggio</td>
				  </tr>
				  <tr>
					<td align='right' valign='baseline'><strong>IP Tracciato (per motivi di sicurezza):</strong></td>
					<td>$ip</td>
				  </tr>
				 
				   <tr>
					<td>&nbsp;</td>
					<td>&nbsp;</td>
				  </tr>
					<tr>
					<td>&nbsp;</td>
					<td><small style='color:$colore_testo; font-size:10px;'>Email proveniente dal sito <a href='$sito_url' style='color:$colore1' target='_blank'>$sito_internet</a></small>.</td>
				  </tr>
				 
				</table>
				</body>
				</html>
				";
	
				$from        = $tua_email;
				$headers     = 'MIME-Version: 1.0' . "\n";
				$headers    .= 'Content-type: text/html; charset=iso-8859-1' . "\n"; //In certi casi con aruba se non viene formattata eliminare il \r per i permessi come ho fatto in questo caso
				$headers    .= "From: $from";
				if( mail($to,$sbj,$msg,$headers)){
					?>
					<script>
						alert("Messaggio inviato correttamente");
						window.location.href="<?php echo $url_pagina ?>"
					</script>
					<?php
				}
				else{
					?>
					<script>
						alert("Messaggio non inviato correttamente");
						window.location.href="<?php echo $url_pagina ?>"
					</script>
					<?php
				}
			
			

			
				//INVIO EMAIL DI RINGRAZIAMENTO AL CLIENTE
				$toClient        = $email;
				$msgClient       = "
				<html>
				<head>
				<style type='text/css'>
				body{
					font-family:Arial;
					color:$colore_testo;
					font-size:15px;
				}
				</style>
				</head>
				<body>
				 
				  <h2><a href='sito_url' target='_blank' style='color:$colore1' target='_blank'>$sito_internet</a></h2>
								  
				  <p>Grazie, $nome</p>
				  <p>Abbiamo ricevuto il tuo messaggio!</p>  				  
				 
				  <br />
				  <hr />
				 
				  <p style='color:$colore_testo2'>Thanks for contact us, $nome.</p>
				  <p style='color:$colore_testo2'>We received your email!</p>
				 
				</body>
				</html>
				";
				$fromClient      = $tua_email;
				$sbjClient       = "Grazie, $nome ";
				$headersClient   = 'MIME-Version: 1.0' . "\n";
				$headersClient  .= 'Content-type: text/html; charset=iso-8859-1' . "\n";
				$headersClient  .= "From: $fromClient";
				mail($toClient,$sbjClient,$msgClient,$headersClient);
					
					
				
			}
			else{
			?>
				<script>
					alert("ATTENZIONE! CAMPI OBBLIGATORI NON COMPILATI");
					window.location.href="<?php echo $url_pagina ?>"
				</script>
			<?php
			}
				
				
			
	//SE CODICE CAPCHA NON E' CORRETTO
	}
		else{
		// ERRORE EMAIL NON INVIATA
		?>
		<script>
		alert("ATTENZIONE! CODICE DI CONTROLLO ERRATO");
		window.location.href="<?php echo $url_pagina ?>"
		</script>
		<?php
	}
		
		
		
}else{
	// HAI DIGITATO DIRETTAMENTE CONTATTI:PHP
	?>
	<script>
	alert("Messaggio non inviato correttamente");
		window.location.href="<?php echo $url_pagina ?>"
	</script>
	<?php
	}
?>
