<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## Back_libreta_direcciones

Este es un proyecto desarrollado en Laravel, el framework PHP más popular y robusto para la creación de aplicaciones web. A continuación, se detalla la funcionalidad, la configuración y las instrucciones para ejecutar y utilizar el proyecto.

## Funcionalidad

- **Gestión de Contactos:**
  - Permite obtener, crear, editar y eliminar contactos.
  - Cada contacto puede estar asociado con números de teléfono, direcciones y correos electrónicos.
  
## Requisitos

- PHP versión 8.1.
- Composer.
- Base de datos MySQL.

## Instalación

1. **Clonar el Proyecto:**
   - Clona el proyecto desde GitHub.

     ```bash
     git clone https://github.com/Heriberto778/back_libreta_direcciones.git
     ```

2. **Instalar Dependencias:**
   - Desde el directorio del proyecto, instala las dependencias utilizando Composer.

     ```bash
     composer install
     ```

3. **Configuración del Archivo .env:**
   - Crea un archivo `.env` desde el archivo `.env.example` y edítalo para configurar las credenciales de la base de datos y otros detalles.


4. **Migraciones:**
   - Ejecuta las migraciones para crear las tablas necesarias en la base de datos.

     ```bash
     php artisan migrate
     ```

5. **Configuración del Servidor:**
   - Configura y lanza el servidor local con el siguiente comando:

     ```bash
     php artisan serve
     
6. **Configuración de la Base de Datos:**
   - Asegúrate de que la configuración de la base de datos en el archivo `.env` es la correcta.


## Uso

- **API de Creación de Contactos:**
  - Realiza una solicitud POST a `/api/contactos/crear` con la información del contacto en JSON.

- **API de Edición de Contactos:**
  - Realiza una solicitud PUT a `/api/contactos/actualizar/{id}` con la información actualizada del contacto en JSON.

- **API de Eliminación de Contactos:**
  - Realiza una solicitud DELETE a `/api/contactos/eliminar/{id}` para eliminar un contacto específico.

- **API de Listado de Contactos:**
  - Realiza una solicitud GET a `/api/contactos/obtener-todo` para obtener todos los contactos almacenados en la base de datos.


## Recursos Adicionales

- [Documentación oficial de Laravel](https://laravel.com/docs)