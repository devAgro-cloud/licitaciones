# licitaciones

Aplicación web desarrollada en **Laravel 12** para la gestión de licitaciones, usuarios y procesos administrativos. Incluye autenticación, panel de administración, gestión de usuarios, notificaciones y navegación responsiva.

---

## Requisitos

- PHP >= 8.1
- Composer
- Node.js y npm
- MySQL o MariaDB
- XAMPP (opcional, recomendado para entorno local)

---

## Instalación

1. **Clona el repositorio:**
    ```bash
    git clone https://github.com/tu-usuario/licitaciones.git
    cd licitaciones
    ```

2. **Instala las dependencias de PHP:**
    ```bash
    composer install
    ```

3. **Instala las dependencias de Node.js:**
    ```bash
    npm install
    ```

4. **Copia el archivo de entorno y configura tus variables:**
    ```bash
    cp .env.example .env
    ```
    Edita el archivo `.env` y configura la conexión a tu base de datos y otros parámetros necesarios.

5. **Genera la clave de la aplicación:**
    ```bash
    php artisan key:generate
    ```

6. **Ejecuta las migraciones y los seeders:**
    ```bash
    php artisan migrate --seed
    ```

7. **Compila los assets de frontend:**
    ```bash
    npm run dev
    ```

8. **Inicia el servidor de desarrollo:**
    ```bash
    php artisan serve
    ```
    O configura XAMPP y define el directorio `public` como raíz del proyecto.

---

## Personalización

Puedes modificar los componentes en la carpeta `components` para adaptar el menú, los iconos o el diseño a tus necesidades.

---

## Notas adicionales

- Recuerda subir los archivos `composer.lock` y `package-lock.json` al repositorio para asegurar la consistencia de dependencias.
- Si usas XAMPP, asegúrate de que el directorio `public` sea la raíz del sitio configurado.
- Para producción, revisa la configuración de variables de entorno y permisos de las carpetas `storage` y `bootstrap/cache`.