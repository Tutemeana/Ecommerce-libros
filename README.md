# Trabajo Práctico Final de Programación
Fecha límite: 18 de octubre. 18/10.

# Consigna del trabajo práctico

Consiste en la realización de un sistema con conexión a una base de datos, utilizando el ORM Doctrine.

1. Autenticación: puede tener autenticación de usuarios (con una entidad específica Usuario), o bien tener un único usuario administrador, cuyos datos pueden estar hardcodeados en el código.
    
2. Debe incluir un CRUD (Create, Read, Update, Delete) a al menos dos tablas. Ejemplos: trabajos en un pequeño comercio de reparaciones, lista de gastos de un hogar, etc. Estas tablas deben ser sencillas e incluir:
        Campo id (clave primaria autoincremental).
        Al menos tres campos más, específicos del dominio elegido.

3. Ambas tablas deben tener alguna relación entre sí (no necesariamente de herencia). Por ejemplo, a qué cliente corresponde cada reparación, a qué rubro pertenece cada gasto del hogar, etc.

4. Debe incluir dos listados de los elementos contenidos en las tablas, con la posibilidad de filtrar por algún criterio.

5. Debe incluir además un informe útil. Un informe es una consulta a la Base de datos que realiza alguna operación además de mostrar el contenido de la tabla. Por ejemplo: mostrar máximos y mínimos, mostrar totales, promedios, etc.

# Criterios de evaluación

* Presentación de avances semanales, detallando el aporte de cada integrante del equipo a las tareas abordadas en la semana.
* Correcta construcción y administración de la persistencia de datos utilizando Doctrine.
* Funcionamiento del código PHP según los requerimientos.
* Respeto de los patrones de diseño de código orientado a objetos. Jerarquía de clases adecuada. Resultarán reprobados los trabajos que se entreguen sin aplicar la orientación a objetos.
* Claridad en el código (elección de nombres de variables, clases, métodos, comentarios, indentación, etc).
* Código HTML5 correcto.
* Código CSS mínimo. Para el formato, se puede utilizar bootstrap o una biblioteca similar.
* Código javascript que permita consultar asincrónicamente el backend en PHP.

# Modalidad de entrega (18-10-2024)

Enviar un mail a marquez.juan@terciariourquiza.edu.ar, con:

  * Nombre y apellido de cada integrante del equipo.
  * En el asunto, indicar que es la versión final
  * Adjuntar un archivo .zip que incluya:
      - El codigo HTML, CSS, javascript y PHP.
      - El archivo composer.json que permita regenerar las dependencias. No incluir la carpeta vendor.
      - El archivo .sqlite con la base de datos. Este archivo debe tener algunos datos cargados, que permitan probar el funcionamiento del sistema.
