# Motores de render: de archivos a pixeles.


## Los navegadores contienen motores:
* Chorome : blink
* EDGE : EDGE HTML.
* Safari : WebKit.
* Firefox : Gecko.

**"Ellos basicamente haces lo mismo para pasar los archivos."**

## Proceso de renderizado del motor del navegador.

El motor del navegador realiza 5 pasos para compilar nuestro codigo hasta el renderizado por pantalla.

1. Transforma los archivos a un árbol de objetos HTML o CSS, estos se denominan DOM (Document Object Model) y CSSDOM (Cascade Style Sheet Object Model), respectivamente. Cada nodo en el árbol es una representación de los elementos que contiene el archivo HTML o CSS.
2. Calcula el estilo correspondiente a cada nodo del DOM relacionado al CSSDOM.
3. Calcula las dimensiones de cada nodo y dónde va en la pantalla.
4. Pinta o renderiza los diferentes elementos como cajas o contenedores.
5. Agrupa todas las cajas en diferentes capas para convertirlas en una imagen que se renderiza en pantalla.




