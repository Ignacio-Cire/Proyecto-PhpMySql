# Proyecto PHP / MySQL / PDO - Gestión de Autos y Personas

## Descripción
Este proyecto está diseñado para gestionar información sobre autos y personas utilizando PHP, MySQL y PDO. Incluye la implementación de un sistema basado en el patrón Modelo-Vista-Controlador (MVC), con una base de datos que contiene dos tablas: `auto` y `persona`. Cada auto tiene una referencia única a su dueño (persona). El proyecto abarca la creación de varias páginas PHP para manejar los datos de autos y personas, junto con formularios para agregar, modificar y buscar registros.

![Demostración del funcionamiento](./proyecto-sql-php.gif) 

## Estructura del Proyecto

### 1. Capa de Datos (Modelo)
- **Objetivo:** Implementar un ORM (Modelo de datos) para interactuar con la base de datos. 
- **Clases:**
  - `Auto`: Representa la tabla `auto` con métodos para seleccionar, ingresar, modificar y eliminar autos.
  - `Persona`: Representa la tabla `persona` con métodos similares para manejar datos de personas.

### 2. Capa de Control
- **Objetivo:** Facilitar la comunicación entre el modelo y las vistas. 
- **Clases:** Controladores que manejan la lógica de negocio y preparan datos para las páginas PHP.

### 3. Páginas PHP

- **VerAutos.php:** Muestra todos los autos cargados y los nombres y apellidos de los dueños. Informa si no hay autos cargados.
- **buscarAuto.php:** Contiene un formulario para buscar un auto por patente. Envía datos a `accionBuscarAuto.php` para mostrar los detalles del auto o un mensaje si no se encuentra.
- **listaPersonas.php:** Muestra un listado de personas registradas y enlaces a `autosPersona.php` para ver los autos de cada persona.
- **NuevaPersona.php:** Formulario para agregar una nueva persona a la base de datos. Los datos se envían a `accionNuevaPersona.php` y muestra un mensaje de éxito o error.
- **NuevoAuto.php:** Formulario para agregar un nuevo auto. Incluye una validación para verificar que el dueño esté registrado. Los datos se envían a `accionNuevoAuto.php`.
- **CambioDuenio.php:** Formulario para cambiar el dueño de un auto. Envía datos a `accionCambioDuenio.php` para actualizar el dueño del auto o mostrar errores si no se encuentran los registros.
- **BuscarPersona.html:** Formulario para buscar una persona por número de documento. Envía datos a `accionBuscarPersona.php`, que muestra y permite modificar los datos de la persona en un nuevo formulario.

## Requisitos
- **PHP:** Utilizar la clase `BaseDatos.php` para manejar las operaciones de base de datos.
- **MySQL:** Base de datos `infoautos` con las tablas `auto` y `persona`.
- **Validaciones:** Utilizar CSS y JavaScript para validaciones y diseño.

## Instrucciones
1. **Configura la base de datos:** Importa la base de datos `infoautos` proporcionada.
2. **Implementa las clases de modelo y control:** Crea las clases necesarias siguiendo el patrón MVC.
3. **Desarrolla las páginas PHP:** Implementa las funcionalidades especificadas en los ejercicios.
4. **Aplica validaciones y diseño:** Asegúrate de que los formularios y páginas estén correctamente validados y estilizados.
