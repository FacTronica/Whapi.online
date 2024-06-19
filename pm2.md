# Servidor de Whatsapp En Segundo Plano
La herramienta pm2 permite ejecutar aplicaciones en segundo plano.   
En este caso la finalidad es dejar activa la api servidor de whatsapp para que se mantenga en ejecución 24x7x365.   

## PM2 Comandos básicos

### Iniciar Servicio
````
pm2 start archivo.js
````

### Listar Procesos (servicios)
````
pm2 list
````

### Monitorear Logs (todos servicios)
````
pm2 log
pm2 log numproceso
````

### Monitorear Logs (servicio específico)
````
pm2 log numproceso
````

### Detener Servicio
````
pm2 stop numproceso
````

### Borrar Servicio
````
pm2 delete numproceso
````

### Reiniciar Servicio
````
pm2 restart numproceso
````

