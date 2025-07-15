# Descripción de Archivos en una Aplicación XML-PHP

Este documento explica el propósito y función de los diferentes tipos de archivos utilizados en una aplicación web que maneja datos estructurados en XML, con soporte en PHP, y que usa esquemas XSD y hojas de estilo XSL.

---

## 1. Archivos PHP

- **Propósito:**  
  Los archivos PHP contienen el código del lado servidor que procesa la lógica de la aplicación.  
- **Función:**  
  - Leer, modificar y guardar los datos almacenados en archivos XML.  
  - Implementar las operaciones CRUD (Crear, Leer, Actualizar, Borrar) sobre los datos.  
  - Generar páginas web dinámicas, formularios y manejar solicitudes de usuario.  
  - Validar datos antes de guardarlos para asegurar integridad.  
- **Ejemplo:**  
  - `listar_coches.php` muestra el listado de coches.  
  - `modificar_coche.php` procesa los cambios realizados en un coche.  

---

## 2. Archivos XML

- **Propósito:**  
  Almacenar los datos de forma estructurada y legible para humanos y máquinas.  
- **Función:**  
  - Servir como base de datos ligera y portable para la aplicación.  
  - Definir la información principal que se manipula, por ejemplo, la lista de coches con sus detalles.  
  - Mantener la integridad y organización de los datos mediante una estructura jerárquica.  
- **Ejemplo:**  
  - `coches.xml` contiene una lista de coches con atributos y elementos como marca, modelo, color, precio, etc.

---

## 3. Esquema XSD

- **Propósito:**  
  Definir y validar la estructura y contenido que debe tener un archivo XML.  
- **Función:**  
  - Establecer reglas para los elementos y atributos del XML, como tipos de datos, valores permitidos, cardinalidad, patrones, etc.  
  - Garantizar que los archivos XML cumplen con las expectativas para evitar errores en la aplicación.  
  - Facilitar la interoperabilidad y mantenimiento del sistema mediante una definición clara.  
- **Ejemplo:**  
  - `coches.xsd` define que cada coche debe tener una matrícula con un patrón específico, un número de puertas entre 2 y 5, y que el atributo "venta" en precio debe ser "nuevo", "ocasión" o "segunda mano".

---

## 4. Hoja de Estilo XSL

- **Propósito:**  
  Transformar y dar formato a los datos XML para su presentación visual.  
- **Función:**  
  - Convertir un archivo XML en documentos HTML, facilitando una interfaz visual amigable para el usuario.  
  - Aplicar estilos CSS y estructuras HTML a partir de los datos XML mediante plantillas XSLT.  
  - Permitir separar la lógica de datos (XML) de la presentación (XSL), favoreciendo la reutilización y mantenimiento.  
- **Ejemplo:**  
  - `coches.xsl` transforma la lista de coches XML en una tabla HTML con estilos visuales y botones para modificar cada coche.

---

# Resumen

| Tipo de archivo | Propósito principal                    | Rol en la aplicación                       |
|-----------------|-------------------------------------|--------------------------------------------|
| PHP             | Lógica y procesamiento servidor     | CRUD, manejo de datos, generación HTML     |
| XML             | Almacenamiento estructurado de datos| Datos de la aplicación                       |
| XSD             | Validación y definición de estructura| Asegurar integridad y formato de XML       |
| XSL             | Presentación y transformación visual | Convertir XML en HTML estilizado           |

---

Este esquema modular ayuda a crear aplicaciones web robustas, mantenibles y fáciles de ampliar utilizando tecnologías estándar.

