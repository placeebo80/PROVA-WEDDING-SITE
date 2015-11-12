<?php
session_start();

if (empty($_POST)) { ?>
   <style>
   .inputbox {
   	border: 1px solid #b7b7b7; 
   	margin: 0.1em;
   	background-color: #F3F0E1;
   }
   .inputbox:focus {
   	border: 1px solid #b7b7b7; 
   	margin: 0.1em;
   	background: #F0F8FF;
   }
   </style>

   <script language="JavaScript" type="text/javascript">
   <!--
   // returns true if the string is empty
   function isEmpty(str){
     str = trim(str);
     return (str == null) || (str.length == 0);
   }
   // returns true if the string is a valid email
   function isEmail(str){
     var re = /^[^\s()<>@,;:\/]+@\w[\w\.-]+\.[a-z]{2,}$/i
     return re.test(str);
   }
   // returns true if the string only contains characters 0-9
   function isNumeric(str){
     var re = /[\D]/g
     if (re.test(str)) return false;
     return true;
   }
   
   function trim(stringa) {    
      while (stringa.substring(0,1) == ' ') {        
         stringa = stringa.substring(1, stringa.length);    
      }    
      
      while (stringa.substring(stringa.length-1, stringa.length) == ' ') {        
         stringa = stringa.substring(0,stringa.length-1);    
      }    
      
      return stringa;
   }

   function validate(){
      var field;
      
      field = document.getElementById('nome'); 
      if ( isEmpty(field.value) ) {
         alert( "Attenzione! Il campo 'Nome' è obbligatorio." );
         field.focus();
         return false;
      }

      field = document.getElementById('cognome'); 
      if ( isEmpty(field.value) ) {
         alert( "Attenzione! Il campo 'Cognome' è obbligatorio." );
         field.focus();
         return false;
      }

      field = document.getElementById('email'); 
      if ( isEmpty(field.value) ) {
         alert( "Attenzione! Il campo 'Indirizzo e-mail' è obbligatorio." );
         field.focus();
         return false;
      }
      if ( !isEmail(trim(field.value)) ) {
         alert( "Attenzione! Il campo 'Indirizzo e-mail' è errato." );
         field.focus();
         return false;
      }

      field = document.getElementById('telefono'); 
      if ( isEmpty(field.value) ) {
         alert( "Attenzione! Il campo 'Telefono' è obbligatorio." );
         field.focus();
         return false;
      }

      field = document.getElementById('cellulare'); 
      if ( isEmpty(field.value) ) {
         alert( "Attenzione! Il campo 'Cellulare' è obbligatorio." );
         field.focus();
         return false;
      }

      field = document.getElementById('evento'); 
      if ( isEmpty(field.value) ) {
         alert( "Attenzione! Il campo 'Evento' è obbligatorio." );
         field.focus();
         return false;
      }

      field = document.getElementById('campionato'); 
      if ( isEmpty(field.value) ) {
         alert( "Attenzione! Il campo 'Campionato' è obbligatorio." );
         field.focus();
         return false;
      }

      field = document.getElementById('localita'); 
      if ( isEmpty(field.value) ) {
         alert( "Attenzione! Il campo 'Località' è obbligatorio." );
         field.focus();
         return false;
      }

      field = document.getElementById('tipocircuito'); 
      if ( isEmpty(field.value) ) {
         alert( "Attenzione! Il campo 'Tipo di circuito' è obbligatorio." );
         field.focus();
         return false;
      }

      field = document.getElementById('date'); 
      if ( isEmpty(field.value) ) {
         alert( "Attenzione! Il campo 'Date' è obbligatorio." );
         field.focus();
         return false;
      }

      field = document.getElementById('veicolo'); 
      if ( isEmpty(field.value) ) {
         alert( "Attenzione! Il campo 'Veicolo' è obbligatorio." );
         field.focus();
         return false;
      }

      field = document.getElementById('tipomodello'); 
      if ( isEmpty(field.value) ) {
         alert( "Attenzione! Il campo 'Tipo/Modello' è obbligatorio." );
         field.focus();
         return false;
      }

      field = document.getElementById('annocostruzione'); 
      if ( isEmpty(field.value) ) {
         alert( "Attenzione! Il campo 'Anno di costruzione' è obbligatorio." );
         field.focus();
         return false;
      }

      field = document.getElementById('valoremacchina'); 
      if ( isEmpty(field.value) ) {
         alert( "Attenzione! Il campo 'Valore della macchina' è obbligatorio." );
         field.focus();
         return false;
      }

      field = document.getElementById('valoreassicurare'); 
      if ( isEmpty(field.value) ) {
         alert( "Attenzione! Il campo 'Valore da assicurare' è obbligatorio." );
         field.focus();
         return false;
      }

      field = document.getElementById('code'); 
      if ( isEmpty(field.value) ) {
         alert( "Attenzione! Il campo 'Verifica Codice' è obbligatorio." );
         field.focus();
         return false;
      }

   }
   //-->
   </script>

   <div><strong>RICHIESTA PREVENTIVO</strong></div>

   <fieldset style="width: 600px">
      <legend>I campi contrassegnati dal carattere asterisco (*) sono obbligatori</legend>

      <form method="post" action="#" name="emailForm" onsubmit="return validate();">

         <table border="0">

            <tr>
               <td valign="top">Nome *</td>
               <td valign="top"><input type="text" class="inputbox" name="nome" id="nome" style="width: 250px;" maxlength="50" /></td>
            </tr>

            <tr>
               <td valign="top">Cognome *</td>
               <td valign="top"><input type="text" class="inputbox" name="cognome" id="cognome" style="width: 250px;" maxlength="50" /></td>
            </tr>

            <tr>
               <td valign="top">Indirizzo e-mail *</td>
               <td valign="top"><input type="text" class="inputbox" name="email" id="email" style="width: 250px;" maxlength="50" /></td>
            </tr>

            <tr>
               <td valign="top">Telefono *</td>
               <td valign="top"><input type="text" class="inputbox" name="telefono" id="telefono" style="width: 250px;" maxlength="50" /></td>
            </tr>

            <tr>
               <td valign="top">Cellulare *</td>
               <td valign="top"><input type="text" class="inputbox" name="cellulare" id="cellulare" style="width: 250px;" maxlength="50" /></td>
            </tr>

            <tr><td valign="top" colspan="2">&nbsp;</td></tr>

            <tr>
               <td valign="top">Evento *</td>
               <td valign="top"><input type="text" class="inputbox" name="evento" id="evento" style="width: 400px;" maxlength="50" /></td>
            </tr>

            <tr>
               <td valign="top">Campionato *</td>
               <td valign="top"><input type="text" class="inputbox" name="campionato" id="campionato" style="width: 400px;" maxlength="50" /></td>
            </tr>

            <tr>
               <td valign="top">Localit&agrave; *</td>
               <td valign="top"><input type="text" class="inputbox" name="localita" id="localita" style="width: 400px;" maxlength="50" /></td>
            </tr>

            <tr>
               <td valign="top">Tipo di circuito *</td>
               <td valign="top"><input type="text" class="inputbox" name="tipocircuito" id="tipocircuito" style="width: 400px;" maxlength="50" /></td>
            </tr>

            <tr>
               <td valign="top">Date *</td>
               <td valign="top"><input type="text" class="inputbox" name="date" id="date" style="width: 400px;" maxlength="50" /></td>
            </tr>

            <tr><td valign="top" colspan="2">&nbsp;</td></tr>

            <tr>
               <td valign="top">Veicolo *</td>
               <td valign="top"><input type="text" class="inputbox" name="veicolo" id="veicolo" style="width: 400px;" maxlength="50" /></td>
            </tr>

            <tr>
               <td valign="top">Tipo/Modello *</td>
               <td valign="top"><input type="text" class="inputbox" name="tipomodello" id="tipomodello" style="width: 400px;" maxlength="50" /></td>
            </tr>

            <tr>
               <td valign="top">Anno di costruzione *</td>
               <td valign="top"><input type="text" class="inputbox" name="annocostruzione" id="annocostruzione" style="width: 100px;" maxlength="10" /></td>
            </tr>

            <tr>
               <td valign="top">Valore della macchina *</td>
               <td valign="top"><input type="text" class="inputbox" name="valoremacchina" id="valoremacchina" style="width: 150px;" maxlength="15" /></td>
            </tr>

            <tr>
               <td valign="top">Valore da assicurare *</td>
               <td valign="top"><input type="text" class="inputbox" name="valoreassicurare" id="valoreassicurare" style="width: 150px;" maxlength="15" /></td>
            </tr>

            <tr><td valign="top" colspan="2">&nbsp;</td></tr>

            <tr>
               <td valign="top">Informazioni aggiuntive</td>
               <td valign="top"><textarea class="inputbox" name="informazioniaggiuntive" id="informazioniaggiuntive" style="width: 400px; height: 100px;"></textarea></td>
            </tr>

            <tr><td valign="top" colspan="2">&nbsp;</td></tr>

            <tr>
               <td valign="top">Codice</td>
               <td valign="top">
                  <img id="siimage" src="../richiestapreventivo/josaddphp/richiestapreventivo/securimage_show.php?sid=<?php echo md5(uniqid(time())); ?>">
                  <a tabindex="-1" style="border-style: none" href="#" title="Cambia Codice" onclick="document.getElementById('siimage').src = 'josaddphp/richiestapreventivo/securimage_show.php?sid=' + Math.random(); return false"><img src="../richiestapreventivo/josaddphp/richiestapreventivo/images/refresh.gif" alt="Cambia Codice" border="0" onclick="this.blur()" align="bottom" /></a>
               </td>
            </tr>

            <tr>
               <td valign="top">Verifica Codice</td>
               <td valign="top"><input type="text" class="inputbox" name="code" id="code" /></td>
            </tr>

            <tr><td valign="top" colspan="2">&nbsp;</td></tr>

            <tr>
               <td valign="top">&nbsp;</td>
               <td valign="top"><input type="submit" value="Invio Richiesta Preventivo" /></td>
            </tr>

            <tr>
              <td valign="top" colspan="2"><div style="text-align:left; "><br>
                <strong>Si avvisano gli utenti che per necessit&agrave; e ulteriori informazioni possono inviare un&rsquo;e-mail all&rsquo;indirizzo preventiviermis@retemanager.com</strong><br>
                <br>
              </div></td>
            </tr>

         </table>
      
      </form>
   </fieldset>
<?php
} else { //form is posted
   include("../richiestapreventivo/josaddphp/richiestapreventivo/securimage.php");
   $img = new Securimage();
   $valid = $img->check($_POST['code']);
   
   if($valid == true) {
      include "josaddphp/richiestapreventivo/config.php";					
      include("../richiestapreventivo/josaddphp/richiestapreventivo/lib.php");

      // Recupero dati Form
      $nome = $_POST['nome'];
      $cognome = $_POST['cognome'];
      $email = $_POST['email'];
      $telefono = $_POST['telefono'];
      $cellulare = $_POST['cellulare'];
      $evento = $_POST['evento'];
      $campionato = $_POST['campionato'];
      $localita = $_POST['localita'];
      $tipocircuito = $_POST['tipocircuito'];
      $date = $_POST['date'];
      $veicolo = $_POST['veicolo'];
      $tipomodello = $_POST['tipomodello'];
      $annocostruzione = $_POST['annocostruzione'];
      $valoremacchina = $_POST['valoremacchina'];
      $valoreassicurare = $_POST['valoreassicurare'];
      $informazioniaggiuntive = $_POST['informazioniaggiuntive'];

      $messaggio_html = "<strong>Nome: </strong> $nome";
      $messaggio_html .= "<br/><strong>Cognome: </strong> $cognome";
      $messaggio_html .= "<br/><strong>Indirizzo e-mail: </strong> $email";
      $messaggio_html .= "<br/><strong>Telefono: </strong> $telefono";
      $messaggio_html .= "<br/><strong>Cellulare: </strong> $cellulare";
      $messaggio_html .= "<br/><strong>Cellulare: </strong> $cellulare";
      $messaggio_html .= "<br/><strong>Evento: </strong> $evento";
      $messaggio_html .= "<br/><strong>Campionato: </strong> $campionato";
      $messaggio_html .= "<br/><strong>Località: </strong> $localita";
      $messaggio_html .= "<br/><strong>Tipo di circuito: </strong> $tipocircuito";
      $messaggio_html .= "<br/><strong>Date: </strong> $date";
      $messaggio_html .= "<br/><strong>Veicolo: </strong> $veicolo";
      $messaggio_html .= "<br/><strong>Tipo/Modello: </strong> $tipomodello";
      $messaggio_html .= "<br/><strong>Anno di costruzione: </strong> $annocostruzione";
      $messaggio_html .= "<br/><strong>Valore della macchina: </strong> $valoremacchina";
      $messaggio_html .= "<br/><strong>Valore da assicurare: </strong> $valoreassicurare";
      $messaggio_html .= "<br/><strong>Informazioni aggiuntive: </strong><br/> $informazioniaggiuntive";

      $messaggio_text = str_replace("<br>", chr(13).chr(10), $messaggio_html);
      $messaggio_text = str_replace("<br\>", chr(13).chr(10), $messaggio_text);
      $messaggio_text = str_replace("<br \>", chr(13).chr(10), $messaggio_text);
      $messaggio_text = strip_tags( $messaggio_text, '<p>' );
      $messaggio_text = strip_tags( $messaggio_text, '<b>' );
      $messaggio_text = strip_tags( $messaggio_text, '<strong>' );
      $messaggio_text = strip_tags( $messaggio_text, '<i>' );
      $messaggio_text = strip_tags( $messaggio_text, '<u>' );

      ini_set("SMTP","mail.intra");
      ini_set('sendmail_from', $mittente_email);

      $ret = invio_email($mittente_nome, $mittente_email, $destinatari_email, $nome_sito, $oggetto, $messaggio_html, $messaggio_text);      

      if ($ret) echo "<p>$msg_email_inviata</p>";
      else echo "<p>$msg_err_invio_email</p>";

   } else {
      echo $msg_captcha_non_valido;

   }
   
}

?>
