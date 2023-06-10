# Whapi.OnLine

## API para Integración WhatsApp con Sistema Propio.

API Diseñada para que el programador pueda realizar una rápida Integración de Whatsapp con cualquier tipo de Software Propio.
La comunicación entre el Servidor de Whatsapp se realiza a traves de Datos Json o Archivos de Texto.

## Características:
-   🔲 **Compatibilidad:** Windows, Linux y Mac.

-   🖥 **Integración:** Archivos de Texto plano o Datos Json.

-   🌐 **Soporte:** Asistencia Remota 24x7x365.

-   📷 **Adjuntar Archivos:** Permite adjuntar archivos; Png, Pdf y Audio.

**Ejemplo de Mensaje Enviado por Whapi.OnLine**
<img src="https://whapi.online/assets/img/demo_mensaje_con_imagen.jpg"   />


## Documentación

A continuación se detalla el procedimiento a seguir para realizar la integración.

-   [01.-Registrar en Whapi.Online](https://whapi.online/#registro)
-   [02.-Crear Línea de WhatsApp]
-   [03.-Vincular Línea de WhatsApp]
-   [04.-Conectar Línea de WhatsApp]
-   [05.-Integra Software Propio con Api Whapi.OnLine]

## Plataformas y Navegadores Compatibles:

La Api whapi.online esta desarrollada para que pueda ser compatible eintegrada con la mayoría de las plataformas y navegadores más utiizados.

**Leyenda**
-   ![](https://scanapp.org/assets/github_assets/done.png) Totalmente Compatible 
-   ![](https://scanapp.org/assets/github_assets/partial.png) Parcialmente Compatible

### PC / Mac

| <img src="https://scanapp.org/assets/github_assets/browsers/firefox_48x48.png" alt="Firefox" width="24px" height="24px" /><br/>Firefox | <img src="https://scanapp.org/assets/github_assets/browsers/chrome_48x48.png" alt="Chrome" width="24px" height="24px" /><br/>Chrome | <img src="https://scanapp.org/assets/github_assets/browsers/safari_48x48.png" alt="Safari" width="24px" height="24px" /><br/>Safari | <img src="https://scanapp.org/assets/github_assets/browsers/opera_48x48.png" alt="Opera" width="24px" height="24px" /><br/>Opera | <img src="https://scanapp.org/assets/github_assets/browsers/edge_48x48.png" alt="Edge" width="24px" height="24px" /><br/> Edge
| --------- | --------- | --------- | --------- | ------- |
|![](https://scanapp.org/assets/github_assets/done.png)| ![](https://scanapp.org/assets/github_assets/done.png)| ![](https://scanapp.org/assets/github_assets/done.png)| ![](https://scanapp.org/assets/github_assets/done.png) | ![](https://scanapp.org/assets/github_assets/done.png)

### Android

| <img src="https://scanapp.org/assets/github_assets/browsers/chrome_48x48.png" alt="Chrome" width="24px" height="24px" /><br/>Chrome | <img src="https://scanapp.org/assets/github_assets/browsers/firefox_48x48.png" alt="Firefox" width="24px" height="24px" /><br/>Firefox | <img src="https://scanapp.org/assets/github_assets/browsers/edge_48x48.png" alt="Edge" width="24px" height="24px" /><br/> Edge | <img src="https://scanapp.org/assets/github_assets/browsers/opera_48x48.png" alt="Opera" width="24px" height="24px" /><br/>Opera | <img src="https://scanapp.org/assets/github_assets/browsers/opera-mini_48x48.png" alt="Opera-Mini" width="24px" height="24px" /><br/> Opera Mini | <img src="https://scanapp.org/assets/github_assets/browsers/uc_48x48.png" alt="UC" width="24px" height="24px" /> <br/> UC
| --------- | --------- | --------- | --------- |  --------- | --------- |
|![](https://scanapp.org/assets/github_assets/done.png)| ![](https://scanapp.org/assets/github_assets/done.png)| ![](https://scanapp.org/assets/github_assets/done.png)| ![](https://scanapp.org/assets/github_assets/done.png)| ![](https://scanapp.org/assets/github_assets/partial.png) | ![](https://scanapp.org/assets/github_assets/partial.png) 

### IOS

| <img src="https://scanapp.org/assets/github_assets/browsers/safari_48x48.png" alt="Safari" width="24px" height="24px" /><br/>Safari | <img src="https://scanapp.org/assets/github_assets/browsers/chrome_48x48.png" alt="Chrome" width="24px" height="24px" /><br/>Chrome | <img src="https://scanapp.org/assets/github_assets/browsers/firefox_48x48.png" alt="Firefox" width="24px" height="24px" /><br/>Firefox | <img src="https://scanapp.org/assets/github_assets/browsers/edge_48x48.png" alt="Edge" width="24px" height="24px" /><br/> Edge 
| --------- | --------- | --------- | --------- |
|![](https://scanapp.org/assets/github_assets/done.png)| ![](https://scanapp.org/assets/github_assets/done.png)* | ![](https://scanapp.org/assets/github_assets/done.png)* | ![](https://scanapp.org/assets/github_assets/partial.png) 


> \* Supported for IOS versions >= 15.1
>
> Before version 15.1, Webkit for IOS is used by Chrome, Firefox, and other browsers in IOS and they do not have webcam permissions yet. There is an ongoing issue on fixing the support for iOS - [issue/14](https://github.com/mebjas/html5-qrcode/issues/14)

### Framework support
The library can be easily used with several other frameworks, I have been adding examples for a few of them and would continue to add more.

|<img src="https://scanapp.org/assets/github_assets/html5.png" width="30px" />| <img src="https://scanapp.org/assets/github_assets/vuejs.png" width="30px" />|<img src="https://scanapp.org/assets/github_assets/electron.png" width="30px" /> | <img src="https://scanapp.org/assets/github_assets/react.svg" width="30px" /> | <img src="https://seeklogo.com/images/L/lit-logo-6B43868CDC-seeklogo.com.png" width="30px" />
| -------- | -------- | -------- | -------- | -------- |
| [Html5](./examples/html5) | [VueJs](./examples/vuejs) | [ElectronJs](./examples/electron) | [React](https://github.com/scanapp-org/html5-qrcode-react) | [Lit](./examples/lit)

### Supported Code formats
Code scanning is dependent on [Zxing-js](https://github.com/zxing-js/library) library. We will be working on top of it to add support for more types of code scanning. If you feel a certain type of code would be helpful to have, please file a feature request.

| Code | Example |
| ---- | ----- |
| QR Code | <img src="https://scanapp.org/assets/github_assets/qr-code.png" width="200px" /> |
| AZTEC | <img src="https://scanapp.org/assets/github_assets/aztec.png" /> |
| CODE_39|  <img src="https://scanapp.org/assets/github_assets/code_39.gif" /> |
| CODE_93| <img src="https://scanapp.org/assets/github_assets/code_93.gif" />|
| CODE_128| <img src="https://scanapp.org/assets/github_assets/code_128.gif" />|
| ITF| <img src="https://scanapp.org/assets/github_assets/itf.png" />|
| EAN_13|<img src="https://scanapp.org/assets/github_assets/ean13.jpeg" /> |
| EAN_8| <img src="https://scanapp.org/assets/github_assets/ean8.jpeg" />|
| PDF_417| <img src="https://scanapp.org/assets/github_assets/pdf417.png" />|
| UPC_A| <img src="https://scanapp.org/assets/github_assets/upca.jpeg" />|
| UPC_E| <img src="https://scanapp.org/assets/github_assets/upce.jpeg" />|
| DATA_MATRIX|<img src="https://scanapp.org/assets/github_assets/datamatrix.png" /> |
| MAXICODE*| <img src="https://scanapp.org/assets/github_assets/maxicode.gif" /> |
| RSS_14*| <img src="https://scanapp.org/assets/github_assets/rss14.gif" />|
| RSS_EXPANDED*|<img src="https://scanapp.org/assets/github_assets/rssexpanded.gif" /> |

> *Formats are not supported by our experimental integration with native
> BarcodeDetector API integration ([Read more](/experimental.md)).

## Description - [View Demo](https://blog.minhazav.dev/research/html5-qrcode.html)

> See an end to end scanner experience at [scanapp.org](https://scanapp.org).

This is a cross-platform JavaScript library to integrate QR code, bar codes & a few other types of code scanning capabilities to your applications running on HTML5 compatible browser.

Supports:
-   Querying camera on the device (with user permissions)
-   Rendering live camera feed, with easy to use user interface for scanning
-   Supports scanning a different kind of QR codes, bar codes and other formats
-   Supports selecting image files from the device for scanning codes

## How to use

Find detailed guidelines on how to use this library on [scanapp.org/html5-qrcode-docs](https://scanapp.org/html5-qrcode-docs/docs/intro).

## Demo
<img src="https://scanapp.org/assets/github_assets/qr-code.png" width="200px"><br />
_Scan this image or visit [blog.minhazav.dev/research/html5-qrcode.html](https://blog.minhazav.dev/research/html5-qrcode.html)_

### For more information
Check these articles on how to use this library:
<!-- TODO(mebjas) Mirgate this link to blog.minhazav.dev -->
-   [QR and barcode scanner using HTML and JavaScript](https://minhazav.medium.com/qr-and-barcode-scanner-using-html-and-javascript-2cdc937f793d)
-   [HTML5 QR Code scanning — launched v1.0.1 without jQuery dependency and refactored Promise based APIs](https://blog.minhazav.dev/HTML5-QR-Code-scanning-launched-v1.0.1/).
-   [HTML5 QR Code scanning with JavaScript — Support for scanning the local file and using default camera added (v1.0.5)](https://blog.minhazav.dev/HTML5-QR-Code-scanning-support-for-local-file-and-default-camera/)

## Screenshots
![screenshot](https://scanapp.org/assets/github_assets/screen.gif)<br />
_Figure: Screenshot from Google Chrome running on MacBook Pro_

## Documentation
Find the full API documentation at [scanapp.org/html5-qrcode-docs/docs/apis](https://scanapp.org/html5-qrcode-docs/docs/apis).

### Extra optional `configuration` in `start()` method
Configuration object that can be used to configure both the scanning behavior and the user interface (UI). Most of the fields have default properties that will be used unless a different value is provided. If you do not want to override anything, you can just pass in an empty object `{}`.

#### `fps` — Integer, Example = 10
A.K.A frame per second, the default value for this is 2, but it can be increased to get faster scanning. Increasing too high value could affect performance. Value `>1000` will simply fail.

#### `qrbox` — `QrDimensions` or `QrDimensionFunction` (Optional), Example = `{ width: 250, height: 250 }`
Use this property to limit the region of the viewfinder you want to use for scanning. The rest of the viewfinder would be shaded. For example, by passing config `{ qrbox : { width: 250, height: 250 } }`, the screen will look like:

<img src="https://scanapp.org/assets/github_assets/screen.gif" />

This can be used to set a rectangular scanning area with config like:
 
