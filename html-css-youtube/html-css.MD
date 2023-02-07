# HTML Y CSS

## Recurso

[Youtube](https://www.youtube.com/watch?v=XqFR2lqBYPs&ab_channel=freeCodeCampEspa%C3%B1ol)

## Repositorio practica

[GitHub](https://github.com/sara-34/html-css)


## Fundamentos:

## **HTML:**
Hyper Text Markup Lenguage (Lenguaje demarcado de hipertexto), nos permite definir la estructura de una pagina web.

* Extension: .html

## **CSS:**
Cascada Style Sheets(Hoja de estilo en cascada), presentacion de la estructura.

* Extension:  .css

## **JavaScript** 
Añade funcionalidad a nuestro codigo, haciendo que la pagina web sea interactiva.

* Extension: .js

Cada uno de estos elemento se escriben en archivos diferentes pero todos se conectan.

Para crear o definir la estructura de la pagina tenemos las etiquetas y los elementos.

con < !DOCTYPE html> Mostramos la version con la que queremos trabajar, esta es una declaracion, no una etiqueta.

**Etiquetas importantes**

Las etiquetas nos permiten definir los elementos en un archivo HTML, especificando el tipo de elemento que vamos a crear.

* Etiqueta = tag.

< html> Etiqueta de apertura.

</ html> Etiqueta de cierre.

# Encabezados.

<h1> Hola, Mundo. </h1>
<h2>Hola, Mundo.</h2>
<h3>Hola, Mundo.</h3>
<h4>Hola, Mundo.</h4>
<h5>Hola, Mundo.</h5>
<h6>Hola, Mundo.</h6>



**"Nota: algunas etiquetas no necesitan etiquetas de cierre, las self-closing tags son etiquetas que se cierran solas"**

* html: Elemento raiz.
* head: Cabeza.
* body: cuerpo.

Head: Actuan elemento que se encuentran detras de escena.

Body: Conseguimos la estructura de la pagina.

crlt + [: me ayuda a comentar.

* Especificacion del idioma : 

< html lang = "en">.

* Parrafos: < p>
* Documentacion: mdn web docs.
* comentarios: <!-- -- >, nos ayudan a explicar y mantener el codigo en mucho mas orden.
* Elemento < main>: nos ayuda a ubicar el contenido principal de nuestra pagina web, debe ser unico al documento.

* Identacion: Se utiliza para la facil lectura del codigo, se usan dos espacios en html porque es mas consiso, y es recomendado por la guia, mejor practica alt=" sirve para describir el texto de lo que contiene la imagen."

* Imagenes y atributos: Etiqueta fuente
< img src=" sea https o en carpeta">

* Creacion de enlaces externos: <a href = "" > texto </a>

* Seguridad = <rel = "noopener noreferrer">
* Enlaces internos: #nos ayuda a mostrar que es un enlace pero en realidad no nos lleva a ningun lado , para deesplazarnos dentro de la misma pagina lo que hacemos es que le damos una identificacion unica.

<a href = "#id nombre"> nombre </a>

~~Las imagenes igual~~

## Lista Desordenadas:
estas son representadass por viñetas.

<ul> 
<li></li>
</ul>

## Lista ordenada.

Estas son representadas por numeros.

<ol>
<li></li>
</ol>


* Etiqueta < strong>: La utilizamos cuando queremos hacer saber que el texto es importante y queremos acomodarlo con negrilla.

*  cuando queremos que la letra sea cursiva < em>
* texto tachado < s>.
* Linea Horizontal: separacion de parrafos: < hr>.

# Formularios.

< form>, detro de los formularios podemos tener una etiqueta de < input> la cual nos permite agregar un respuesta para el usuario.

* Salto de linea : br
* casillas de verificacion: type="checkbox".

# Atributo value.
Este atributo nos ayuda a expecificar que valor deseamos enviar para mirar que opcion podemos tomar, se encuentra dentro del input value="Atributo".

# < Div>:
Es un contenedor generico que nos ayuda a mantener el codigo mas ordenado para asi poderlo personalizar con css.

# < Footer>:
Pie de pagina.

# < Small>:
Texto mas pequeño.

# < Head>:
En el head van incluidas las cosas que no entran a la scena pero son escenciales.

# < Title>:
Nos permite personalizar el titulo de como aparece el documento.

# CSS
Lenguaje basado en reglas, que determinan el estilo que se aplicara a un elemento o a un grupo de elementos.

Css cuenta con 3 formas para ser agregado en html.

* estilos en linea: 
Este estilo se añade directamente a la etiqueta de apertura < h1 style = color> app < /h1>.

* Elemento < style>:
Este elemento se añade en el head.
 < head>
    < style>
       < h2>
    < /style>
< /head>.

* Archivo .css:

Creacion de archivos css para definir la pagina, este es vinculado desde html con < link href="nombre.css" ref="stylesheet">.

## Selectores css.
Los selectores ayudan a indicar al navegador que elemento del html sera seleccionador para utilizar en el css.

**h1** 
**p**
**h3:** esto son algunos de los selectores los cuales nos ayudan a especificar que tipo de cambio vamos a realizar.

**(*)** Este es un selector universal.

**.class:** selecciona todos los elemento que tienen el atributo class.

**"Cuando no queremos que varios atributos salgan con los mismos cambios lo que hacemos es colocarles una clase o id unico."**

## Elementos:
* font-size: Tamaño de fuente.
* font-family: Fuentes.
* fuentes: font.google.com.

## Tamaño de imagenes.

width: es el ancho que le queremos dar a la imagen.
Height: Altura de la imagen.

## Bordes.
Estos son los diferentes atributos de los bordes en css.

* border-width.
* border-color.
* border-style.
* border-solid.
* border-none.
* border-dotted.
* border-dashed.
* border-double.
* border-groove.
* border-ridge.
* border-inset.
* border-ouset.
* border-radius: entre mas pixeles contenga mas grandes son el circulo.

## Color de fondo < div>
* background-color: Color fondo.

## ID UNICO.
Este es representado por #.

Ejemplo: #idunico.

**"El id puede ser creado en cualquier selector"**

# Padding:
Es la distancia que hay dentro d eun borde y su contenido(lo que hay desde la caja hacia adentro).

* padding-top = borde superior.
* padding-right = borde derecho.
* padding-left = borde izquierdo.
* padding-botton = borde inferior.
* padding = 0px 0px 0px 0px, es la representacion de todos los lados en una sola linea y el estos actuan en representacion de reloj.

# Margen:
Es lo que hay de distancia desde el borde de la caja hacia afuera, la distancia que le queremos dar a una caja de otra.
* margin-top = borde superior.
* margin-right = borde derecho.
* margin-left = borde izquierdo.
* margin-botton = borde inferior.
* margin = 0px 0px 0px 0px, es la representacion de todos los lados en una sola linea y el estos actuan en representacion de reloj.

# Selectores de atributos.
Los elementos pueden tener atributos que proporcionan un nivel de detalles mayor sobre el elemento que delimitan, en css se pueden utilizar atributos para seleccionar elementos definidos con atributos determinados.

## Selectores de presencia y valor.

Estos selectores permiten seleccionar un elemento solo apartir de la presencia de un atributo o apartir de varias coincidencias diferentes respecto al valor del atributo.

[attr ] a[ title]: relaciona elementos con un mismo nombre de atributo.

[ attr = value ] [ href="https"]: relaciona los elementos con un mismo nombre del atributo, attr cuyo valor es exactamente el mismo.

"Quitar subrayado **text-decoration=none;**"

## Unidades Absolutas:

* px: estas hacen que el diseño sea estatico.
* vw: se expande al abrir la ventana y cerrarla ayuda mucho mas cuando se realiza responsi.
* em: se ajusta relativamente al tamaño de la letra.














