
# Sistema de Registro de Estudiantes

## Actividad Integradora 3 - ECOTEC

Sistema web desarrollado con PHP y MySQL/MariaDB,
utilizando PDO y consultas preparadas.

## Tecnologías utilizadas

- HTML5
- CSS3 (diseño responsive)
- PHP
- PDO
- MySQL/MariaDB
- XAMPP
- Git y GitHub

## Estructura del proyecto

- config/conexion.php: conexión a la base de datos.
- database/db_sistema_web.sql: estructura SQL.
- models/Estudiante.php: registro y consulta.
- index.php: formulario y listado de estudiantes.
- guardar.php: procesamiento del formulario.
- css/estilos.css: diseño responsive.

## Instalación

1. Instalar XAMPP.
2. Activar Apache y MySQL.
3. Copiar el proyecto dentro de C:/xampp/htdocs/.
4. Abrir http://localhost/ACTIVIDAD%20INTEGRADORA%203/ACTIVIDAD%20INTEGRADORA-3/index.php
5. Crear la base de datos db_sistema_web.
6. Importar database/db_sistema_web.sql.
7. Configurar la conexión local en config/conexion.php.
8. Abrir index.php desde http://localhost/RUTA_DEL_PROYECTO/.

## Funcionalidades

- Registrar estudiantes.
- Consultar estudiantes registrados.
- Validar campos obligatorios y correo electrónico.
- Utilizar consultas preparadas mediante PDO.
- Proteger los datos mostrados con htmlspecialchars().
- Adaptarse a celulares, tablets y computadoras.
