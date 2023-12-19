<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

# API REST hecho en Laravel con arquitectura hexagonal y JWT

Este proyecto es una API REST (Representational State Transfer) desarrollada en Laravel, que utiliza una arquitectura hexagonal y JWT (JSON Web Tokens) para la autenticación.

## Características

- Implementa los métodos estándar de HTTP (GET, POST, PUT, DELETE) para realizar operaciones en los recursos.
- Utiliza JWT para la autenticación y autorización de usuarios.
- Sigue los principios de la arquitectura hexagonal para una estructura modular y flexible.
- Proporciona respuestas en formato JSON para una fácil integración con clientes.

## Uso

Para utilizar esta API REST, sigue los siguientes pasos:

1. Clona el repositorio en tu máquina local.
2. Configura la base de datos y las variables de entorno necesarias.
3. Ejecuta las migraciones para crear las tablas en la base de datos.
4. Inicia el servidor y comienza a realizar las solicitudes HTTP a las URL de los recursos.

## API REST

Una API REST (Representational State Transfer) es un estilo de arquitectura de software que define un conjunto de restricciones y principios para el diseño de servicios web. Estos servicios web se basan en el protocolo HTTP y utilizan los métodos estándar de HTTP, como GET, POST, PUT y DELETE, para realizar operaciones en los recursos.

Una API REST se compone de recursos, que son objetos o conjuntos de datos que pueden ser accedidos y manipulados a través de la API. Cada recurso tiene una URL única que lo identifica y se puede acceder a él mediante las operaciones definidas por la API.

La API REST sigue el principio de estado representacional, lo que significa que cada solicitud HTTP contiene toda la información necesaria para comprender y procesar la solicitud. No se mantiene ningún estado en el servidor entre las solicitudes, lo que hace que la API sea escalable y fácil de mantener.

Para interactuar con una API REST, los clientes envían solicitudes HTTP a las URL de los recursos y reciben respuestas en formato JSON, XML u otros formatos. Estas respuestas contienen los datos solicitados o información sobre el resultado de la operación.

En resumen, una API REST es una forma eficiente y flexible de exponer y consumir servicios web. Proporciona una interfaz uniforme para acceder y manipular recursos a través de operaciones HTTP estándar.

## Arquitectura Hexagonal

Este proyecto utiliza la arquitectura hexagonal para organizar y estructurar el código. La arquitectura hexagonal, también conocida como arquitectura de puertos y adaptadores, separa claramente las capas de negocio de las capas de infraestructura y presenta una estructura modular y flexible.

En esta arquitectura, el núcleo de la aplicación se encuentra en el centro, rodeado por los puertos y adaptadores. Los puertos son interfaces que definen las interacciones entre el núcleo y el mundo exterior, mientras que los adaptadores son implementaciones concretas de esos puertos.

Esta separación permite una mayor flexibilidad y facilita las pruebas unitarias y la sustitución de componentes. Además, la arquitectura hexagonal promueve la reutilización de código y facilita la evolución y mantenimiento del sistema a largo plazo.

Para obtener más información sobre la arquitectura hexagonal, consulta la documentación oficial de Laravel y otros recursos en línea.
