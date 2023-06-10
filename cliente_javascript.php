<?php
#
error_reporting(E_ERROR|E_WARNING);
ini_set('display_errors', '1');
?>
<html>
<head>
<script>
// 
function objetoAjax(){
	var xmlhttp=false;
	try {
		xmlhttp = new ActiveXObject("Msxml2.XMLHTTP");
	} catch (e) {
		try {
		   xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
		} catch (E) {
			xmlhttp = false;
  		}
	}

	if (!xmlhttp && typeof XMLHttpRequest!='undefined') {
		xmlhttp = new XMLHttpRequest();
	}
	return xmlhttp;
}
//
//
function EnviarWhatsApp(){
    //
    //
    apikey=document.getElementById("apikey").value;
    //
    //
    puerto=document.getElementById("puerto").value;    
    //
    //
    linea=document.getElementById("linea").value;    
    //
    //
    fono=document.getElementById("fono").value;
    mensaje=document.getElementById("mensaje").value;
    //
    // copiar a los sgtes fonos
    fono_cc_1=document.getElementById("fono_cc_1").value;
    fono_cc_2=document.getElementById("fono_cc_2").value;
    fono_cc_3=document.getElementById("fono_cc_3").value;   
    //
    if(fono=="" || mensaje==""){
        alert("Fono o Mensaje esta vacio !!!");
        return;
    }
    //
    // SOLO 3 OPCIONES DISPONIBLES POR EL MOMENTO
    // PDF PNG vacio
    tipo_adjunto=document.getElementById("tipo_adjunto").value; 
    //
    // https://www.algo.tld/carpeta/fotos/imagen.png
    url_adjunto=document.getElementById("url_adjunto").value; 
    //
    // DEBE IR EN BLANCO SIEMPRE POR EL MOMENTP
    url_documento="";
    //
    //  
    // URL DEL ENDPOINT  ( NO CAMBIAR )
    url_endpoint="https://whapi.online/api/servidor.php";
    //
    // PUERTO DEL ENDPOINT ( NO CAMBIAR )
    puerto_endpoint="443";
    // 
    //
    //
    var vars=
    "&puerto="+puerto+
    "&apikey="+apikey+
    "&linea="+linea+
    "&fono="+fono+
    "&fono_cc_1="+fono_cc_1+
    "&fono_cc_2="+fono_cc_2+
    "&fono_cc_3="+fono_cc_3+  
    "&mensaje="+mensaje+
    "&tipo_adjunto="+tipo_adjunto+
    "&url_adjunto="+url_adjunto+
    "&url_documento="+url_documento;
    //
    console.log("linea="+linea);
    console.log("fono destino="+fono);
    console.log("fono_cc_1="+fono_cc_1);
    console.log("fono_cc_2="+fono_cc_2);
    console.log("fono_cc_3="+fono_cc_3);
    console.log("url="+url_endpoint);
    console.log("puerto="+puerto_endpoint);  
    //
    console.log("Enviando: "+vars);  
    //
        //
        ajaxEnviarWhatsApp=objetoAjax();
        ajaxEnviarWhatsApp.open("POST",url_endpoint,true);
        ajaxEnviarWhatsApp.onreadystatechange=function() {
            if (ajaxEnviarWhatsApp.readyState==1) {
                // cargando
            }
            if (ajaxEnviarWhatsApp.readyState==4) {
                respuesta = ajaxEnviarWhatsApp.responseText;
                alert("Respuesta="+respuesta);
                console.log("Respuesta="+respuesta);            
            }
        }
        ajaxEnviarWhatsApp.setRequestHeader("Content-Type","application/x-www-form-urlencoded");
        ajaxEnviarWhatsApp.send(vars);

}
</script>
<title>WHAPI.ONLINE</title>
</head>
<body>
<h1>WHAPI.ONLINE => Enviar WhatsApp:</h1>
<br>
<h3>FONO EMISOR::</h3>
<input type="text" id="linea" value="569XXXXXXXX"  >
<br>
<h3>PUERTO DESTINO:</h3>
<input type="text" id="puerto" value="PUERTO-SERVIDOR-WHATSAPP">
<br>
<h3>APIKEY TOKEN:</h3>
<input type="text" value="AQUI-VA-SU-APIKEY-TOKEN" id="apikey">
<hr>
<br>
<h3>FONO DESTINO:</h3>
<input type="text" id="fono" value="569ZZZZZZZZ">
<br>
<h3>FONO DESTINO COPIA 1:</h3>
<input type="text" id="fono_cc_1" value="">
<br>
<h3>FONO DESTINO COPIA 2:</h3>
<input type="text" id="fono_cc_2" value="">
<br>
<h3>FONO DETINO COPIA 3:</h3>
<input type="text" id="fono_cc_3" value="">
<br>
<h3>MENSAJE:</h3>
<input type="text" id="mensaje" value="Hola :)
😄😆🙂😏
🤩🥸😎🤓
🧐🤨🤪😜

Somos Whapi.OnLine!
<?php echo "Time=".time(); ?>">
<br>
<h3>TIPO ADJUNTO ( vacio - PDF - PNG ) :</h3>
<input type="text" id="tipo_adjunto" value="PNG">
<br>
<h3>URL ADJUNTO (https://www.algo.tld/carpeta/archivo.png):</h3>
<input type="text" id="url_adjunto" value="https://whapi.online/assets/img/whapi_demo.png">
<br>
<br>
<input type="button" onClick="javascript:EnviarWhatsApp()" value="Enviar WhatsApp">
<br>
</body>
</html>
