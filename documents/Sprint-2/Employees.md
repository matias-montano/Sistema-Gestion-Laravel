# Sprint 2 Documentación

## Resumen

En este sprint, se realizaron varias tareas clave para mejorar la funcionalidad y robustez del sistema. Las principales tareas completadas incluyen la creación de documentación OpenAPI, la implementación del tipo de usuario `Employee`, el desarrollo de dos controladores (uno para la gestión de empleados y otro para el inicio de sesión de empleados), la creación de plantillas Blade, la implementación de pruebas unitarias y la creación de un seeder básico.

## Tareas Completadas

### 1. Tipo de Usuario Employee

Se introdujo un nuevo tipo de usuario llamado `Employee`. Esto implicó la creación de un nuevo modelo, `Employee`, que extiende la clase `Authenticatable` e incluye traits necesarios como `Notifiable` y `HasFactory`. El modelo `Employee` tiene los siguientes atributos:
- `name`
- `email`
- `username`
- `password`
- `role`

### 2. Seeder Básico

Se creó un seeder básico para poblar la base de datos con datos iniciales. Este seeder incluye empleados de muestra para facilitar las pruebas y el desarrollo.


### 3. Controladores

#### EmployeeController

Se desarrolló el `EmployeeController` para manejar las operaciones CRUD para empleados. El controlador incluye los siguientes métodos:
- `index()`: Muestra una lista de todos los empleados.
- `create()`: Muestra el formulario para crear un nuevo empleado.
- `store()`: Maneja la creación de un nuevo empleado.
- `show()`: Muestra los detalles de un empleado específico.
- `edit()`: Muestra el formulario para editar un empleado existente.
- `update()`: Maneja la actualización de un empleado existente.
- `destroy()`: Elimina un empleado, con una verificación para evitar la auto-eliminación.

#### EmployeeLoginController

Se desarrolló el `EmployeeLoginController` para manejar la autenticación de empleados. El controlador incluye los siguientes métodos:
- `showLoginForm()`: Muestra el formulario de inicio de sesión para empleados.
- `login()`: Maneja el proceso de inicio de sesión para empleados.
- `logout()`: Cierra la sesión del empleado y redirige a la página de inicio.

### 4. Plantillas Blade

Se crearon varias plantillas Blade para soportar las vistas para la gestión y autenticación de empleados. Estas plantillas incluyen:
- `employees.index`: Muestra una lista de empleados.
- `employees.create`: Muestra el formulario para crear un nuevo empleado.
- `employees.show`: Muestra los detalles de un empleado específico.
- `employees.edit`: Muestra el formulario para editar un empleado existente.
- `auth.employee-login`: Muestra el formulario de inicio de sesión para empleados.

### 5. Pruebas Unitarias

Se implementaron pruebas unitarias para asegurar la funcionalidad de los controladores y modelos. Estas pruebas cubren varios escenarios, incluyendo operaciones exitosas y manejo de errores. Las pruebas ayudan a mantener la fiabilidad y estabilidad de la base de código.

### 6. Documentación OpenAPI

Se creó una documentación OpenAPI completa para describir los endpoints de la API, los parámetros de solicitud y las respuestas. Esta documentación ayudará a los desarrolladores a entender cómo interactuar con la API y garantizará la consistencia en el uso de la misma.
