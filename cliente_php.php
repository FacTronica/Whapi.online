<?php 
#
# NO MODIFICAR ******
# REPORTAR ERRORES
error_reporting(E_ERROR|E_WARNING);
ini_set('display_errors', '1');
#
#
#********************************************************************
# >>>>>>>>> INICIO ZONA PARA CAMBIAR PARÁMETROS <<<<<<<<<<<<<<<<<<<<<
#
# API KEY DE ACCESO A LA API ( AL CREAR LINEA EN WHAPI LE ENTREGA APIKEY TOKEN )
$apikey="AQUI-VA-EL-TOKEN-APIKEY-DE-LA-LINEA-WHATSAPP";
#
# FONO EMISOR ( FONO QUE ENVIA EL WHATSAPP )
$fono_emisor="569xxxxxxxx";
#
# PUERTO EMISOR ( AL CREAR LINEA EN WHAPI LE ENTREGA EL PUERTO )
$puerto_emisor="yyyy";
#
# FONO RECEPTOR ( FONO AL CUAL SE ENVIA EL WHATSAPP )
$fono_receptor="569zzzzzzzz";
#
# OPCIONAL - FONO PARA ENVIAR COPIA 1 DEL WHATSAPP
$fono_cc_1=""; 
#
# OPCIONAL - FONO PARA ENVIAR COPIA 2 DEL WHATSAPP
$fono_cc_2=""; 
#
# OPCIONAL - FONO PARA ENVIAR COPIA 3 DEL WHATSAPP
$fono_cc_3=""; 
#
# MENSAJE A ENVIAR
$mensaje="Hola Mundo! 😄😎 Somos whapi.online"; 
#
#
# >>>>>>>>> FINAL ZONA PARA CAMBIAR PARÁMETROS <<<<<<<<<<<<<<<<<<<<<
#********************************************************************
#
# NO MODIFICAR ********
# URL DEL ENDPOINT default https://whapi.online/api/servidor.php
$url_endpoint ="https://whapi.online/api/servidor.php";
#
# NO MODIFICAR ********
# 443=https 80=http default 443
$puerto_endpoint=443;
#
# NO MODIFICAR ********
# DATOS A ENVIAR
$data = array( 
"apikey" =>$apikey,
"linea"=>$fono_emisor,
"puerto"=>$puerto_emisor,
"fono"=>$fono_receptor,
"fono_cc_1"=>$fono_cc_1,
"fono_cc_2"=>$fono_cc_2,
"fono_cc_3"=>$fono_cc_3,
"mensaje"=>$mensaje,
"tipo_adjunto"=>"PNG",
"url_adjunto"=>"https://whapi.online/assets/img/whapi_demo.png",      
"url_documento"=>"" 
);
#
#
# NO MODIFICAR ********
$handler = curl_init();
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
# NO MODIFICAR ********
$result=trim($result);
#
# RESPUESTA
echo $result;
?> 
