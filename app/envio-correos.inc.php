<?php

class correos{
	
	public static function enviar_correo_confirmacion($correo, $usuario){
		
		$destinatario = $correo; 
		$asunto = "Hola! ".$usuario; 
		$cuerpo = '<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="https://file.myfontastic.com/kvDmzqcR5DN4QxGNS79Lr3/icons.css" rel="stylesheet">
<title>[SUBJECT]</title>
<style type="text/css">
body {
    padding-top: 0 !important;
    padding-bottom: 0 !important;
    padding-top: 0 !important;
    padding-bottom: 0 !important;
    margin: 0 !important;
    width: 100% !important;
    -webkit-text-size-adjust: 100% !important;
    -ms-text-size-adjust: 100% !important;
    -webkit-font-smoothing: antialiased !important;
}
img {
    width: 30%;
}
.tableContent img {
    border: 0 !important;
    display: block !important;
    outline: none !important;
}
a {
    color: #382F2E;
}
p, h1 {
    color: #382F2E;
    margin: 0;
}
p {
    text-align: left;
    color: #999999;
    font-size: 14px;
    font-weight: normal;
    line-height: 19px;
}
a.link1 {
    color: #382F2E;
}
a.link2 {
    font-size: 16px;
    text-decoration: none;
    color: #ffffff;
}
h2 {
    text-align: left;
    color: #222222;
    font-size: 19px;
    font-weight: normal;
}
div, p, ul, h1 {
    margin: 0;
}
.bgBody {
    background: #ffffff;
}
.bgItem {
    background: #ffffff;
}

@media only screen and (max-width:480px) {
table[class="MainContainer"], td[class="cell"] {
    width: 100% !important;
    height: auto !important;
}
td[class="specbundle"] {
    width: 100% !important;
    float: left !important;
    font-size: 13px !important;
    line-height: 17px !important;
    display: block !important;
    padding-bottom: 15px !important;
}
td[class="spechide"] {
    display: none !important;
}
img[class="banner"] {
    width: 100% !important;
    height: auto !important;
}
td[class="left_pad"] {
    padding-left: 15px !important;
    padding-right: 15px !important;
}
}

@media only screen and (max-width:540px) {
table[class="MainContainer"], td[class="cell"] {
    width: 100% !important;
    height: auto !important;
}
td[class="specbundle"] {
    width: 100% !important;
    float: left !important;
    font-size: 13px !important;
    line-height: 17px !important;
    display: block !important;
    padding-bottom: 15px !important;
}
td[class="spechide"] {
    display: none !important;
}
img[class="banner"] {
    width: 100% !important;
    height: auto !important;
}
.font {
    font-size: 18px !important;
    line-height: 22px !important;
}
.font1 {
    font-size: 18px !important;
    line-height: 22px !important;
}
}
</style>
<script type="colorScheme" class="swatch active">
{
    "name":"Default",
    "bgBody":"ffffff",
    "link":"382F2E",
    "color":"999999",
    "bgItem":"ffffff",
    "title":"222222"
}
</script>
</head>
<body paddingwidth="0" paddingheight="0"   style="padding-top: 0; padding-bottom: 0; padding-top: 0;
												  padding-bottom: 0; background-repeat: repeat;
												  width: 100% !important; -webkit-text-size-adjust: 100%;
												  -ms-text-size-adjust: 100%; -webkit-font-smoothing: antialiased;"
	  offset="0" toppadding="0" leftpadding="0">
<table bgcolor="#ffffff" width="100%" border="0" cellspacing="0" cellpadding="0" class="tableContent" align="center"  style="font-family:Helvetica, Arial,serif;">
  <tbody>
    <tr>
      <td>
        <table width="600" border="0" cellspacing="0" cellpadding="0" align="center" bgcolor="#ffffff" class="MainContainer">
          <tbody>
            <tr>
              <td>
                <table width="100%" border="0" cellspacing="0" cellpadding="0">
                  <tbody>
                    <tr>
                      <td valign="top" width="40">&nbsp;</td>
                      <td>
                        <table width="100%" border="0" cellspacing="0" cellpadding="0">
                          <tbody>
                            <!-- =============================== Header ====================================== -->
                            <tr>
                              <td height="75" class="spechide"></td>
                              
                              <!-- =============================== Body ====================================== --> 
                            </tr>
                            <tr>
                              <td class="movableContentContainer " valign="top">
                                <div class="movableContent" style="border: 0px; padding-top: 0px; position: relative;">
                                  <table width="100%" border="0" cellspacing="0" cellpadding="0">
                                    <tbody>
                                      <tr>
                                        <td height="35"></td>
                                      </tr>
                                      <tr>
                                        <td>
                                          <table width="100%" border="0" cellspacing="0" cellpadding="0">
                                            <tbody>
                                              <tr>
                                                <td valign="top" align="center" class="specbundle">
                                                  <div class="contentEditableContainer contentTextEditable">
                                                    <div class="contentEditable">
                                                      <p style="text-align:center;margin:0;font-family:Georgia,Time,sans-serif;font-size:26px;color:#222222;">
														  <span class="specbundle2">
															  <div class="contentEditable">
															  <a href="https://www.drturizo.com"><img style="width: 80%; " src="https://www.drturizo.com/img/logoemail.png" alt="Logo"></a>
														  </span>
													  </p>
                                                    </div>
                                                  </div>
                                                </td>
                                                <td valign="top" class="specbundle"> </td>
                                              </tr>
                                            </tbody>
                                          </table>
                                        </td>
                                      </tr>
                                    </tbody>
                                  </table>
                                  <div class="movableContent" style="border: 0px; padding-top: 0px; position: relative;">
                                    <table width="100%" border="0" cellspacing="0" cellpadding="0" align="center">
                                      <tr>
                                        <td height="55"></td>
                                      </tr>
                                      <tr>
                                        <td align="left">
                                          <div class="contentEditableContainer contentTextEditable">
                                            <div class="contentEditable" align="center">
                                              <h2 >¡Hola! '.$usuario.'.</h2>
                                            </div>
                                          </div>
                                        </td>
                                      </tr>
                                      <tr>
                                        <td height="15"> </td>
                                      </tr>
                                      <tr>
                                        <td align="left">
                                          <div class="contentEditableContainer contentTextEditable">
                                            <div class="contentEditable" align="center">
                                              <p > Gracias por el mensaje que me has enviado, tan pronto pueda te responderé de una manera más detallada y acorde a lo que necesites, espero poder serte útil y ayudarte a tener aún más confianza y autoestima en tu vida. <br>
                                                <br>
                                                No dudes en hacerme cualquier consulta, puedes comunicarte por esta vía, o a traves de los demás medios de contacto disponibles (Mis redes y mi número telefónico, todo en el pie de este mensaje). <br>
                                                <br>
                                                Atentamente, <br>
                                                <span style="color:#222222;">Dr. Miguel Turizo</span> </p>
                                            </div>
                                          </div>
                                        </td>
                                      </tr>
                                      <tr>
                                        <td height="55"></td>
                                      </tr>
                                      <tr>
                                        <td height="20"></td>
                                      </tr>
                                    </table>
                                  </div>
                                  <div class="movableContent" style="border: 0px; padding-top: 0px; position: relative;">
                                    <table width="100%" border="0" cellspacing="0" cellpadding="0">
                                      <tbody>
                                        <tr>
                                          <td height="65"></td>
                                        </tr>
                                        <tr>
                                          <td  style="border-bottom:1px solid #DDDDDD;"></td>
                                        </tr>
                                        <tr>
                                          <td height="25"></td>
                                        </tr>
                                        <tr>
                                          <td>
                                            <table width="100%" border="0" cellspacing="0" cellpadding="0">
                                              <tbody>
                                                <tr>
                                                  <td valign="top" class="specbundle">
                                                    <div class="contentEditableContainer contentTextEditable">
                                                      <div class="contentEditable" align="center">
                                                        <p  style="text-align:left;color:#CCCCCC;font-size:12px;font-weight:normal;line-height:20px;"> <span style="font-weight:bold;">Dr. Miguel Turizo</span> <br>
                                                          (+54 9) 11 2254-7301. <br>
                                                          <a target="_blank" class="link1 color:#382F2E;" href="[UNSUBSCRIBE]">Unsubscribe</a> <br>
                                                        </p>
                                                      </div>
                                                    </div>
                                                  </td>
                                                  <td valign="top" width="30" class="specbundle">&nbsp;</td>
                                                  <td valign="top" class="specbundle">
                                                    <table width="100%" border="0" cellspacing="0" cellpadding="0">
                                                      <tbody>
                                                        <tr>
                                                          <td valign="top" width="52">
                                                            <div class="contentEditableContainer contentFacebookEditable">
                                                              <div class="contentEditable"> <a href=""><img src="https://drturizo.com/img/iconos/instagram.png" alt=""></a> </div>
                                                            </div>
                                                          </td>
                                                          <td valign="top" width="16">&nbsp;</td>
                                                          <td valign="top" width="52">
                                                            <div class="contentEditableContainer contentFacebookEditable">
                                                              <div class="contentEditable"> <a href=""><img src="https://drturizo.com/img/iconos/twitter.png" alt=""></a> </div>
                                                            </div>
                                                          </td>
                                                          <td valign="top" width="16">&nbsp;</td>
                                                          <td valign="top" width="52">
                                                            <div class="contentEditableContainer contentFacebookEditable">
                                                              <div class="contentEditable"> <a href=""><img src="https://drturizo.com/img/iconos/facebook.png" alt=""></a> </div>
                                                            </div>
                                                          </td>
                                                          <td valign="top" width="16">&nbsp;</td>
                                                        </tr>
                                                      </tbody>
                                                    </table>
                                                  </td>
                                                </tr>
                                              </tbody>
                                            </table>
                                          </td>
                                        </tr>
                                        <tr>
                                          <td height="88"></td>
                                        </tr>
                                      </tbody>
                                    </table>
                                  </div>
                                  
                                  <!-- =============================== footer ====================================== --> 
                                </div>
                              </td>
                            </tr>
                          </tbody>
                        </table>
                      </td>
                      <td valign="top" width="40">&nbsp;</td>
                    </tr>
                  </tbody>
                </table>
              </td>
            </tr>
          </tbody>
        </table>
      </td>
    </tr>
  </tbody>
</table>
</body>
</html>'; 

		//para el envío en formato HTML 
		$headers = "MIME-Version: 1.0\r\n"; 
		$headers .= "Content-type: text/html; charset=iso-8859-1\r\n"; 

		//dirección del remitente 
		$headers .= "From: Dr. Miguel Turizo <jturizo@hotmail.com>\r\n"; 

		mail($destinatario,$asunto,$cuerpo,$headers);

	}
	
	public static function enviar_correo_miguel($correo_recibido, $usuario, $comentario, $sugerencia){
		
		$destinatario = 'jturizo@hotmail.com'; 
		$asunto = 'Comentario de '.$usuario.' en tu sitio drturizo.com.'; 
		$cuerpo = '<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="https://file.myfontastic.com/kvDmzqcR5DN4QxGNS79Lr3/icons.css" rel="stylesheet">
<title>[SUBJECT]</title>
<style type="text/css">
body {
    padding-top: 0 !important;
    padding-bottom: 0 !important;
    padding-top: 0 !important;
    padding-bottom: 0 !important;
    margin: 0 !important;
    width: 100% !important;
    -webkit-text-size-adjust: 100% !important;
    -ms-text-size-adjust: 100% !important;
    -webkit-font-smoothing: antialiased !important;
}
img {
    width: 30%;
}
.tableContent img {
    border: 0 !important;
    display: block !important;
    outline: none !important;
}
a {
    color: #382F2E;
}
p, h1 {
    color: #382F2E;
    margin: 0;
}
p {
    text-align: left;
    color: #999999;
    font-size: 14px;
    font-weight: normal;
    line-height: 19px;
}
a.link1 {
    color: #382F2E;
}
a.link2 {
    font-size: 16px;
    text-decoration: none;
    color: #ffffff;
}
h2 {
    text-align: left;
    color: #222222;
    font-size: 19px;
    font-weight: normal;
}
div, p, ul, h1 {
    margin: 0;
}
.bgBody {
    background: #ffffff;
}
.bgItem {
    background: #ffffff;
}

@media only screen and (max-width:480px) {
table[class="MainContainer"], td[class="cell"] {
    width: 100% !important;
    height: auto !important;
}
td[class="specbundle"] {
    width: 100% !important;
    float: left !important;
    font-size: 13px !important;
    line-height: 17px !important;
    display: block !important;
    padding-bottom: 15px !important;
}
td[class="spechide"] {
    display: none !important;
}
img[class="banner"] {
    width: 100% !important;
    height: auto !important;
}
td[class="left_pad"] {
    padding-left: 15px !important;
    padding-right: 15px !important;
}
}

@media only screen and (max-width:540px) {
table[class="MainContainer"], td[class="cell"] {
    width: 100% !important;
    height: auto !important;
}
td[class="specbundle"] {
    width: 100% !important;
    float: left !important;
    font-size: 13px !important;
    line-height: 17px !important;
    display: block !important;
    padding-bottom: 15px !important;
}
td[class="spechide"] {
    display: none !important;
}
img[class="banner"] {
    width: 100% !important;
    height: auto !important;
}
.font {
    font-size: 18px !important;
    line-height: 22px !important;
}
.font1 {
    font-size: 18px !important;
    line-height: 22px !important;
}
}
</style>
<script type="colorScheme" class="swatch active">
{
    "name":"Default",
    "bgBody":"ffffff",
    "link":"382F2E",
    "color":"999999",
    "bgItem":"ffffff",
    "title":"222222"
}
</script>
</head>
<body paddingwidth="0" paddingheight="0"   style="padding-top: 0; padding-bottom: 0; padding-top: 0;
												  padding-bottom: 0; background-repeat: repeat;
												  width: 100% !important; -webkit-text-size-adjust: 100%;
												  -ms-text-size-adjust: 100%; -webkit-font-smoothing: antialiased;"
	  offset="0" toppadding="0" leftpadding="0">
<table bgcolor="#ffffff" width="100%" border="0" cellspacing="0" cellpadding="0" class="tableContent" align="center"  style="font-family:Helvetica, Arial,serif;">
  <tbody>
    <tr>
      <td>
        <table width="600" border="0" cellspacing="0" cellpadding="0" align="center" bgcolor="#ffffff" class="MainContainer">
          <tbody>
            <tr>
              <td>
                <table width="100%" border="0" cellspacing="0" cellpadding="0">
                  <tbody>
                    <tr>
                      <td valign="top" width="40">&nbsp;</td>
                      <td>
                        <table width="100%" border="0" cellspacing="0" cellpadding="0">
                          <tbody>
                            <!-- =============================== Header ====================================== -->
                            <tr>
                              <td height="75" class="spechide"></td>
                              
                              <!-- =============================== Body ====================================== --> 
                            </tr>
                            <tr>
                              <td class="movableContentContainer " valign="top">
                                <div class="movableContent" style="border: 0px; padding-top: 0px; position: relative;">
                                  <table width="100%" border="0" cellspacing="0" cellpadding="0">
                                    <tbody>
                                      <tr>
                                        <td height="35"></td>
                                      </tr>
                                      <tr>
                                        <td>
                                          <table width="100%" border="0" cellspacing="0" cellpadding="0">
                                            <tbody>
                                              <tr>
                                                <td valign="top" align="center" class="specbundle">
                                                  <div class="contentEditableContainer contentTextEditable">
                                                    <div class="contentEditable">
                                                      <p style="text-align:center;margin:0;font-family:Georgia,Time,sans-serif;font-size:26px;color:#222222;">
														  <span class="specbundle2">
															  <div class="contentEditable">
															  <a href="https://www.drturizo.com"><img style="width: 80%; " src="https://www.drturizo.com/img/logoemail.png" alt="Logo"></a>
														  </span>
													  </p>
                                                    </div>
                                                  </div>
                                                </td>
                                                <td valign="top" class="specbundle"> </td>
                                              </tr>
                                            </tbody>
                                          </table>
                                        </td>
                                      </tr>
                                    </tbody>
                                  </table>
                                  <div class="movableContent" style="border: 0px; padding-top: 0px; position: relative;">
                                    <table width="100%" border="0" cellspacing="0" cellpadding="0" align="center">
                                      <tr>
                                        <td height="55"></td>
                                      </tr>
                                      <tr>
                                        <td align="left">
                                          <div class="contentEditableContainer contentTextEditable">
                                            <div class="contentEditable" align="center">
                                              <h2 >Saludos, Dr. Turizo.</h2>
                                            </div>
                                          </div>
                                        </td>
                                      </tr>
                                      <tr>
                                        <td height="15"> </td>
                                      </tr>
                                      <tr>
                                        <td align="left">
                                          <div class="contentEditableContainer contentTextEditable">
                                            <div class="contentEditable" align="center">
                                              <p>(Este correo es generado automanticamente).
											  <br>
												<br>
											  Recientemente, '.$usuario.' ha realizado el siguente comentario, registrando el correo '.$correo_recibido.' en su sitio web:<br>
                                                <br>
												<br>
												'.$comentario.'
                                                <br>
                                                <br>
												Junto con la siguente sugerencia:
												<br>
                                                <br>
												'.$sugerencia.'
												<br>
                                                <br>
												Espero que esta información le sea útil y pueda concretar con '.$usuario.' prontamente.
                                                Atentamente, <br>
                                                <span style="color:#222222;">Tu sitio WEB (Que hizo Jeferson :D )</span> </p>
                                            </div>
                                          </div>
                                        </td>
                                      </tr>
                                      <tr>
                                        <td height="55"></td>
                                      </tr>
                                      <tr>
                                        <td height="20"></td>
                                      </tr>
                                    </table>
                                  </div>
                                  <div class="movableContent" style="border: 0px; padding-top: 0px; position: relative;">
                                    <table width="100%" border="0" cellspacing="0" cellpadding="0">
                                      <tbody>
                                        <tr>
                                          <td height="65"></td>
                                        </tr>
                                        <tr>
                                          <td  style="border-bottom:1px solid #DDDDDD;"></td>
                                        </tr>
                                        <tr>
                                          <td height="25"></td>
                                        </tr>
                                        <tr>
                                          <td>
                                            <table width="100%" border="0" cellspacing="0" cellpadding="0">
                                              <tbody>
                                                <tr>
                                                  <td valign="top" class="specbundle">
                                                    <div class="contentEditableContainer contentTextEditable">
                                                      <div class="contentEditable" align="center">
                                                        <p  style="text-align:left;color:#CCCCCC;font-size:12px;font-weight:normal;line-height:20px;"> <span style="font-weight:bold;">Dr. Miguel Turizo</span> <br>
                                                          (+54 9) 11 2254-7301. <br>
                                                          <a target="_blank" class="link1 color:#382F2E;" href="[UNSUBSCRIBE]">Unsubscribe</a> <br>
                                                        </p>
                                                      </div>
                                                    </div>
                                                  </td>
                                                  <td valign="top" width="30" class="specbundle">&nbsp;</td>
                                                  <td valign="top" class="specbundle">
                                                    <table width="100%" border="0" cellspacing="0" cellpadding="0">
                                                      <tbody>
                                                        <tr>
                                                          <td valign="top" width="52">
                                                            <div class="contentEditableContainer contentFacebookEditable">
                                                              <div class="contentEditable"> <a href=""><img src="https://drturizo.com/img/iconos/instagram.png" alt=""></a> </div>
                                                            </div>
                                                          </td>
                                                          <td valign="top" width="16">&nbsp;</td>
                                                          <td valign="top" width="52">
                                                            <div class="contentEditableContainer contentFacebookEditable">
                                                              <div class="contentEditable"> <a href=""><img src="https://drturizo.com/img/iconos/twitter.png" alt=""></a> </div>
                                                            </div>
                                                          </td>
                                                          <td valign="top" width="16">&nbsp;</td>
                                                          <td valign="top" width="52">
                                                            <div class="contentEditableContainer contentFacebookEditable">
                                                              <div class="contentEditable"> <a href=""><img src="https://drturizo.com/img/iconos/facebook.png" alt=""></a> </div>
                                                            </div>
                                                          </td>
                                                          <td valign="top" width="16">&nbsp;</td>
                                                        </tr>
                                                      </tbody>
                                                    </table>
                                                  </td>
                                                </tr>
                                              </tbody>
                                            </table>
                                          </td>
                                        </tr>
                                        <tr>
                                          <td height="88"></td>
                                        </tr>
                                      </tbody>
                                    </table>
                                  </div>
                                  
                                  <!-- =============================== footer ====================================== --> 
                                </div>
                              </td>
                            </tr>
                          </tbody>
                        </table>
                      </td>
                      <td valign="top" width="40">&nbsp;</td>
                    </tr>
                  </tbody>
                </table>
              </td>
            </tr>
          </tbody>
        </table>
      </td>
    </tr>
  </tbody>
</table>
</body>
</html>'; 

		//para el envío en formato HTML 
		$headers = "MIME-Version: 1.0\r\n"; 
		$headers .= "Content-type: text/html; charset=iso-8859-1\r\n"; 

		//dirección del remitente 
		$headers .= "From: drturizo.com <jturizo@hotmail.com>\r\n"; 

		mail($destinatario,$asunto,$cuerpo,$headers);
	}
	
}