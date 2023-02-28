# Instrucciones para configurar entorno:

	El CRUD está construido usado Laravel 10.0, Sqlite3, Php 8.1.

## Dependencias:
	Para instalar las dependencias correspondientes ejecutar los siguientes comandos:
`composer install`

`npm install`

> **Previamente tiene que tener instalado `npm` y `composer`**

## Migraciones:
##### Crear migraciones:
`php artisan make:migration`
#####  Ejecutar migraciones:
`php artisan migrate`

## Base de Datos:
Configuración `env` :
	
- DB_CONNECTION=sqlite
- DB_HOST=127.0.0.1
- DB_PORT=3306
- DB_USERNAME=
- DB_PASSWORD='
	

## Ejecute la aplicación web Laravel

Ejecutar aplicación con los siguientes comandos:

`npm run dev`

`php artisan serve`

