# Configuración y Uso de PHPStan

PHPStan es una herramienta de análisis estático para PHP que ayuda a encontrar errores en el código sin necesidad de ejecutarlo. A continuación se detallan los pasos para configurar y utilizar PHPStan en este proyecto.

## Instalación de PHPStan

1. **Navegar al directorio `backend`**:
    ```sh
    cd .../Sistema-Gestion-Larabel/backend
    ```

2. **Instalar PHPStan como una dependencia de desarrollo**:
    ```sh
    composer require --dev phpstan/phpstan
    ```

## Configuración de PHPStan

1. **Crear el archivo de configuración `phpstan.neon`**:
    Crea un archivo llamado `phpstan.neon` en el directorio backend con el siguiente contenido:

    ```yaml
    includes:
        - vendor/phpstan/phpstan/conf/bleedingEdge.neon

    parameters:
        level: max
        paths:
            - app
    ```

## Ejecución de PHPStan

Para ejecutar PHPStan y analizar el código, utiliza el siguiente comando desde el directorio backend:

```sh
cd .../Sistema-Gestion-Larabel/backend
vendor/bin/phpstan analyse
```

## Integración con Git Hooks

Para asegurarte de que PHPStan se ejecute antes de que los cambios se suban a GitHub, puedes agregar un hook pre-push utilizando Husky.

1. **Instalar Husky y Commitlint**:
    ```sh
    npm install husky @commitlint/{config-conventional,cli} --save-dev
    ```

2. **Inicializar Husky**:
    ```sh
    npx husky-init && npm install
    ```

3. **Añadir el hook pre-push**:
    Modifica el archivo pre-push para incluir la ejecución de PHPStan:

    ```sh
    npx husky add .husky/pre-push "npx commitlint --edit .git/COMMIT_EDITMSG && cd backend && vendor/bin/phpstan analyse"
    ```

    El archivo pre-push debe contener lo siguiente:

    ```sh
    #!/bin/sh
    . "$(dirname "$0")/_/husky.sh"

    npx commitlint --edit .git/COMMIT_EDITMSG
    cd backend && vendor/bin/phpstan analyse
    ```

## Verificación de Resultados

Cuando ejecutes PHPStan, verás una salida en la terminal que te indicará si hay errores en tu código. Aquí tienes un ejemplo de cómo podría verse la salida:

```sh
$ vendor/bin/phpstan analyse
  10/10 [▓▓▓▓▓▓▓▓▓▓▓▓▓▓▓▓▓▓▓▓▓▓▓▓▓▓▓▓] 100%

 [OK] No errors
```

Si PHPStan encuentra errores, te mostrará detalles sobre los problemas encontrados, incluyendo el archivo y la línea donde se encuentra el problema, así como una descripción del error.

Con estos pasos, PHPStan debería estar configurado correctamente y ejecutarse antes de que los cambios se suban a GitHub, asegurando que tu código cumple con los estándares de calidad.
