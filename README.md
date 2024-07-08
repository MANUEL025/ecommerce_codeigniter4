# Tienda Online Construhogar

Este proyecto es una tienda online para **Construhogar**. Permite a los usuarios navegar y ver productos sin iniciar sesión, y solo requiere iniciar sesión cuando se desea agregar productos al carrito o realizar una compra. Además, incluye un panel administrativo para la gestión de productos, usuarios y categorías.

## Características

- Navegación de productos sin necesidad de iniciar sesión
- Carrito de compras que requiere autenticación para agregar o eliminar productos
- Panel administrativo con autenticación para gestionar productos, usuarios y categorías
- Búsqueda de productos
- Gestión de imágenes de productos

## Tecnologías Utilizadas

- PHP
- CodeIgniter 4
- Bootstrap 4
- MySQL

## Requisitos Previos

- PHP 7.4 o superior
- Composer
- MySQL

## Instalación

1. Clona el repositorio:

    ```bash
    git clone https://github.com/MANUEL025/ecommerce_codeigniter4.git
    ```

2. Navega al directorio del proyecto:

    ```bash
    cd ecommerce_codeigniter4
    ```

3. Instala las dependencias de Composer:

    ```bash
    composer install
    ```

4. Configura tu archivo `.env` con los detalles de tu base de datos. Renombra el archivo `env` a `.env` y modifica las siguientes líneas:

    ```env
    database.default.hostname = localhost
    database.default.database = construhogar
    database.default.username = tu_usuario
    database.default.password = tu_contraseña
    database.default.DBDriver = MySQLi
    ```

5. Ejecuta las migraciones para crear las tablas necesarias en la base de datos:

    ```bash
    php spark migrate
    ```

6. Si es necesario, carga los datos iniciales:

    ```bash
    php spark db:seed InitialSeeder
    ```

7. Inicia el servidor de desarrollo:

    ```bash
    php spark serve
    ```

8. Accede a la aplicación en tu navegador:

    ```
    http://localhost:8080
    ```

## Estructura del Proyecto

- `app/Config/Routes.php` - Configuración de rutas
- `app/Controllers/` - Controladores para manejar la lógica del negocio
- `app/Models/` - Modelos para interactuar con la base de datos
- `app/Views/` - Vistas para la presentación de la interfaz de usuario
- `public/` - Archivos públicos como CSS, JS, imágenes

## Uso del Panel Administrativo

Para acceder al panel administrativo, inicia sesión con una cuenta de administrador y navega a:
http://localhost:8080/admin/dashboard
siempre y cuando te hayas logueado con rol de administrador de lo contrario no te dejara acceder a la ruta ya que esta protegida y requieres permisos.


## Capturas de Pantalla

![image](https://github.com/MANUEL025/ecommerce_codeigniter4/assets/131418423/c5340fa8-d931-4bfa-9446-6dfe98b01655)

![image](https://github.com/MANUEL025/ecommerce_codeigniter4/assets/131418423/e63b751a-a863-4449-aae8-2e75ab083164)

Panel de administracion.
![image](https://github.com/MANUEL025/ecommerce_codeigniter4/assets/131418423/9b3ad9b0-8c82-4c3e-9f99-82b29408231a)
![image](https://github.com/MANUEL025/ecommerce_codeigniter4/assets/131418423/d513ebb5-1c58-4db4-8433-76fbe1c12961)




## Contribución

Si deseas contribuir a este proyecto, por favor sigue estos pasos:

1. Haz un fork del repositorio
2. Crea una rama para tus cambios (`git checkout -b feature/nueva-feature`)
3. Realiza tus cambios y haz commit (`git commit -am 'Agrega nueva feature'`)
4. Sube tus cambios (`git push origin feature/nueva-feature`)
5. Abre un Pull Request

## Licencia

Este proyecto está bajo la Licencia MIT. Ver el archivo `LICENSE` para más detalles.


