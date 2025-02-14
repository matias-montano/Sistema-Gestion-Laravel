# Estandares

Se obligará a usar Conventional Commits para cada commit.

## Configuración del hook pre-push

Para asegurar que todos los commits sigan el estándar de Conventional Commits, configuramos un hook pre-push utilizando Husky y Commitlint. A continuación se detallan los pasos realizados:

1. **Instalar Husky y Commitlint**:
    Primero, instalamos Husky y Commitlint como dependencias de desarrollo en el proyecto.

    ```sh
    npm install husky @commitlint/{config-conventional,cli} --save-dev
    ```

2. **Inicializar Husky**:
    Inicializamos Husky en el proyecto.

    ```sh
    npx husky-init && npm install
    ```

3. **Configurar Commitlint**:
    Creamos un archivo de configuración para Commitlint llamado `commitlint.config.cjs` en la raíz del proyecto.

    ```javascript
    module.exports = { extends: ['@commitlint/config-conventional'] };
    ```

4. **Añadir el hook pre-push**:
    Añadimos un hook pre-push utilizando Husky para ejecutar Commitlint y validar los mensajes de commit.

    ```sh
    npx husky add .husky/pre-push "npx commitlint --edit .git/COMMIT_EDITMSG"
    ```

    El archivo pre-push debe contener lo siguiente:

    ```sh
    #!/bin/sh
    . "$(dirname "$0")/_/husky.sh"

    npx commitlint --edit .git/COMMIT_EDITMSG
    ```

5. **Actualizar package.json**:
    Aseguramos que el package.json tenga el script `prepare` para instalar Husky automáticamente cuando alguien clone el repositorio.

    ```json
    {
        "private": true,
        "type": "module",
        "scripts": {
            "prepare": "husky install",
            "test": "echo \"Error: no test specified\" && exit 0"
        },
        "devDependencies": {
            "@commitlint/cli": "^19.7.1",
            "@commitlint/config-conventional": "^19.7.1",
            "husky": "^9.1.7"
        }
    }
    ```

Con estos pasos, cada vez que se intente hacer un push, Commitlint validará el último mensaje de commit para asegurarse de que sigue los estándares de Conventional Commits. Si el mensaje no cumple con las reglas, el push será rechazado y se deberá corregir el mensaje de commit.
