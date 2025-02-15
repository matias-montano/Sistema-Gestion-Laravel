# Estándares de Laravel

Este documento describe los estándares y mejores prácticas que seguimos en nuestro proyecto Laravel para asegurar la calidad y consistencia del código.

## Estructura del Proyecto

- **Directorio `app/`**: Contiene la lógica de la aplicación, incluyendo controladores, modelos, y servicios.
- **Directorio `routes/`**: Contiene las definiciones de rutas de la aplicación.
- **Directorio `resources/`**: Contiene vistas, archivos de idioma, y otros recursos.
- **Directorio `database/`**: Contiene migraciones, fábricas, y seeders.

## Convenciones de Nombres

- **Controladores**: Los nombres de los controladores deben ser sustantivos en singular, seguidos de la palabra `Controller` (e.g., `UserController`).
- **Modelos**: Los nombres de los modelos deben ser sustantivos en singular (e.g., `User`).
- **Rutas**: Las rutas deben seguir el estándar RESTful y usar nombres de recursos en plural (e.g., `/users`).

## Estándares de Código

- **PSR-12**: Seguimos el estándar de codificación PSR-12 para PHP.
- **Comentarios**: Utilizamos PHPDoc para documentar clases, métodos y propiedades.
- **Indentación**: Usamos indentación de 4 espacios.
- **Longitud de Línea**: Limitamos la longitud de las líneas a 120 caracteres.

## Uso de Eloquent

- **Relaciones**: Definimos relaciones en los modelos utilizando métodos de Eloquent (e.g., `hasMany`, `belongsTo`).
- **Consultas**: Utilizamos Eloquent para realizar consultas a la base de datos en lugar de consultas SQL directas.

## Validación

- **Requests**: Utilizamos clases de request para validar datos de entrada.
- **Reglas de Validación**: Definimos reglas de validación en los métodos `rules` de las clases de request.

## Seguridad

- **Protección CSRF**: Utilizamos tokens CSRF para proteger formularios.
- **Escapado de Salida**: Escapamos todas las salidas para prevenir ataques XSS.
- **Autenticación y Autorización**: Utilizamos los mecanismos de autenticación y autorización de Laravel.

## Testing

- **Pruebas Unitarias**: Escribimos pruebas unitarias para modelos y servicios.
- **Pruebas de Integración**: Escribimos pruebas de integración para controladores y rutas.
- **Pruebas de Características**: Utilizamos pruebas de características para probar flujos completos de la aplicación.

## Herramientas y Configuración

- **PHPStan**: Utilizamos PHPStan para análisis estático del código.
- **ESLint y Prettier**: Utilizamos ESLint y Prettier para asegurar la calidad del código JavaScript.
- **Husky**: Utilizamos Husky para ejecutar hooks de Git y asegurar que las validaciones se ejecuten antes de los commits y pushes.

