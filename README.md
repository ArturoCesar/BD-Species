# BD-Species
Desarrollo de un sistema en base a un archivo ccv escogido de la página "Species+" como parte de un proyecto de un curso sobre bases de datos.

Equipo: Los Troyanos

Integrantes:
- Martínez Martos Arturo Cesar
- Beltrán Villanueva Ibzán
- Marquez Valdez Luis

Como instalar el sistema:

PREPARAR LOS ARCHIVOS

  1. Descargar "XAMPP" desde https://www.apachefriends.org/es/index.html, será necesario para levantar los servicios requeridos al usar php y bases de datos
  2. Descargar los archivos de este repositorio 
  3. Una vez descargdos, mover el archivo .rar a la siguiente dirección: c:/xampp/htdocs/
  4. Descomprimir el archivo .rar
  5. Ubicar el archivo "BaseDatos.sql" que esta en la carpeta "Bases de Datos" dentro de la carpeta que resulto descomprimida
  6. Copiar el archivo a C:/xampp/mysql/bin
  
LEVANTAR LOS SERVICIOS Y LA BASE DE DATOS

  7. Abrir el "Control Panel" de XAMMP
  8. Darle click a los servicios de Apache y Mysql "start"
  9. Hecho lo anterior prodeceremos a oprimir las teclas "Inicio" + "R"
  10. Se abrira una pequeña ventana, escribir "cmd" en ella y pulsar enter
  11. Con esto se abrirá la consola de la PC, escribir lo siguiente: "cd c:/xampp/mysql/bin"
  12. Ejecutar la siguiente lista de comandos :
    - mysql -u root
    - CREATE DATABASE troyanos;
    - exit
  13. Volvera a la carpeta raíz, escriba lo siguiente: "mysql -u root troyanos < BaseDatos.sql", con esto quedará levantada la base de datos   y   estará lista para usarse
  14. Escribir "exit"
  
USAR EL SISTEMA

  14. Entrar en C:/xampp/htdocs/BD-Species/Templates
  15. Abrir el archivo "main.html" en su navegador favorito
  16. Borrar toda la ruta anterior a BD-Species/Templates/main.html y reemplazarlo por "localhost"
  17. ¡Listo! Podra usar su sistema 
    
  
