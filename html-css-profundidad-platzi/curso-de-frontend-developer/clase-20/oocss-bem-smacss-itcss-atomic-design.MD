# Codigo en orden.

# Qué es CSS orientado a objetos
La arquitectura OOCSS (Object Oriented CSS) consiste en separar la estructura principal y la piel o máscara.

**En otras palabras, consiste en tener objetos que son estructuras principales. Estos objetos estarán unidos en una máscara, donde esta será la que cambie pero manteniendo la estructura intacta.**

## Qué es BEM: bloque, elemento y modificador
La arquitectura BEM (Block-Element-Modifier) es una de las más utilizadas actualmente. Consiste en manejar los elementos en clases definidas por bloques, elementos y modificadores.

* Bloque: es la estructura principal que es contenedora de varios elementos.
* Elemento: es el elemento HTML que hace referencia el contenedor.
* Modificador: es un estilo específico para el elemento. Por ejemplo, un botón que tenga un color diferente a los demás, esto tiene relación con la especificidad.

## Qué es la arquitectura escalable y modular de CSS
La arquitectura SMACSS (Scalable and Modular Architecture for CSS) indica el orden de componentes que estarán ubicados en carpetas. La unión de estos componentes dará como resultado tu página web con estilos.

* Base: elementos base, como botones, títulos, enlaces.
* Layout: estructura de la página, relacionado con el Responsive Design.
* Módulos: elementos que contienen a los elementos base.
* Estado: estilos relacionados con el comportamiento de elemento, relacionado con las pseudoclases y pseudoelementos.
* Temas: conjunto de estilos que definen tu página web.

## Qué es el triángulo invertido de CSS
La arquitectura ITCSS (Inverted Triangle CSS) consiste en separar los archivos del proyecto; mediante ajustes, herramientas, elementos, entre otros. Todo esto para manejar los detalles de especificidad, claridad y magnitud.

## Qué es el diseño atómico
La arquitectura Atomic Design también es una de las más utilizadas actualmente. Consiste en manejar los elementos como una estructura mínima, a partir de la unión de varias de estas, dará como resultado los estilos de la página web. Se basa en la estructura mínima de la materia, los átomos.

* Átomos: estructura mínima; como botones, enlaces, títulos, entre otros.

* Moléculas: unión de átomos.

* Organismos: unión de moléculas.
* Plantillas: unión de organismos.
* Páginas: unión de plantillas.
