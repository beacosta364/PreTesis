Requisitos Previos
	Para poder instalar correctamente este proyecto es necesario hacer la instalación de los siguientes programas
- XAMPP          https://sourceforge.net/projects/xampp/files/XAMPP%20Windows/ 
- Composer       https://getcomposer.org 
- Git            https://git-scm.com 
- Nodejs         https://nodejs.org/en

Recomendación: Para ejecutar comandos npm, es mejor usar Git Bash en lugar de CMD, ya que ofrece mayor compatibilidad.

Proceso de instalación
- Abre la carpeta donde está instalado XAMPP.
- Navega hasta la carpeta htdocs.
- Haz clic derecho y selecciona "Git Bash Here".
- Ejecuta el siguiente comando:  git clone https://github.com/beacosta364/PreTesis.git 
- Accede al directorio del proyecto: cd PreTesis
Instalar Dependencias PHP
- Ejecuta el siguiente comando:  composer install
Configurar base de datos en .env
- Copia el archivo .env.example y renómbralo como .env.
- Ábrelo con el Bloc de Notas.
- Busca el bloque:

DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=pretesis
DB_USERNAME=root
DB_PASSWORD=
 
- Cambia el valor de DB_DATABASE por el nombre que usarás para tu base de datos. 
 
Crear la Base de Datos
- Abre el panel de XAMPP.
 
- Inicia Apache y MySQL.
 
- Haz clic en Admin de MySQL (abre phpMyAdmin).
 
- Crea una nueva base de datos con el nombre que configuraste en el archivo .env.
 
Ejecutar Comandos de Laravel
Desde Git Bash y estando en la carpeta PreTesis, ejecuta los siguientes comandos uno a uno:
- php artisan migrate
- php artisan db:seed
- npm install
- npm run build
- php artisan key:generate
- php artisan serve

Acceder al Proyecto
Abrir el navegador y entrar a: http://127.0.0.1:8000

Acceso Inicial
 
Puedes iniciar sesión con las siguientes credenciales:
Usuario 1: user@gmail.com
Usuario 2 (Admin): admin@gmail.com
Contraseña: 12345678
	Se recomienda actualizar el correo y la contraseña desde el perfil de usuario después del primer inicio de sesión.
Automatizar la Ejecución del Proyecto
Para evitar ejecutar manualmente el comando php artisan serve e inicia Apache y MySQL, puedes crear un archivo .bat que automatice este proceso.
- Crea una carpeta para crear el script
- Dentro de ella, abre un bloc de notas y pega el siguiente contenido

@echo off
echo Iniciando Apache y MySQL en segundo plano...
cd /d "C:\xampp"
:: Iniciar Apache y MySQL sin abrir ventanas molestas
start /B "" "C:\xampp\apache\bin\httpd.exe"
start /B "" "C:\xampp\mysql\bin\mysqld.exe"
timeout /t 5 /nobreak >nul
echo Iniciando Laravel en segundo plano...
cd /d "C:\xampp\htdocs\PreTesis"
start /B php artisan serve > laravel.log 2>&1
timeout /t 3 /nobreak >nul
echo Abriendo el navegador...
start http://127.0.0.1:8000
exit

- Guarda el bloc de notas con el nombre ABY.bat
- Asegúrate de que la ruta del proyecto (C:\xampp\htdocs\PreTesis) sea correcta. Si el proyecto está en otra ubicación, reemplaza esa línea con la dirección donde se encuentre.
