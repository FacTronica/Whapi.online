<?php 
#
# REPORTAR ERRORES
error_reporting(E_ERROR|E_WARNING);
ini_set('display_errors', '1');
#
# URL DEL ENDPOINT default https://whapi.online/api/servidor.php
$url_endpoint ="https://whapi.online/api/servidor.php";
#
# 443=https 80=http default 443
$puerto_endpoint=443;
#
#
$mensaje="Hola Mundo! 
Fecha: ".date("d/m/Y")."
Hora: ".date("H:i:s")."
😄😆🙂😏
🤩🥸😎🤓
🧐🤨🤪😜
Somos whapi.online";
#
# DATOS A ENVIAR
$data = array( 
"apikey" =>"AQUI-VA-EL-TOKEN-APIKEY-DE-LA-LINEA-WHATSAPP",
"linea"=>"569XXXXXXXX",
"puerto"=>"3021",
"fono"=>"569ZZZZZZZZ",
"fono_cc_1"=>"",
"fono_cc_2"=>"",
"fono_cc_3"=>"",
"mensaje"=>$mensaje,
"tipo_adjunto"=>"PNG",
"url_adjunto"=>"https://whapi.online/assets/img/whapi_demo.png",      
"url_documento"=>"" 
);
#
#
#
$handler = curl_init();
# 
curl_setopt($handler, CURLOPT_URL,$url_endpoint);
curl_setopt($handler, CURLOPT_PORT,$puerto_endpoint);
curl_setopt($handler, CURLOPT_VERBOSE, 1);
curl_setopt($handler, CURLOPT_RETURNTRANSFER, 1);	
curl_setopt($handler, CURLOPT_TIMEOUT, 30);
curl_setopt($handler, CURLOPT_POSTFIELDS, $data);
curl_setopt($handler, CURLOPT_HEADER, 0);
curl_setopt($handler, CURLINFO_HEADER_OUT, true);
$result = curl_exec ($handler);
$info = curl_getinfo($handler);
curl_close ($handler);
#
#
$result=trim($result);
#
#
echo "RESPUESTA=".$result;
?> 
