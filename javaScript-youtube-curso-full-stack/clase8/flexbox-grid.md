# Flexbox Y Grid.

- ¿Como funciona Flexbox?
- ¿Como funciona CSS Grid?
- Como usar flexbox y css grid en conjunto.
- Layouts modernas con flexbox y css grid.


# Como funciona Flexbox.

- display: flex, inline-flex.
- flex-direction: row, row-reverse, column, column-reverse.
- flex-wrap: nowrap, wrap, wrap-reverse.
- justify-content: flex-start, flex-end, space-between, space-around, space-evenly.
- align-items: flex-start, flex-end, center, baseline, stretch.
- align-content: flex-star, flex.-end, space,between, space-around, stretch.

**Nota: El felxbox solo puede ser utilizado en el contenedor principal.**

[Pagina para Flexbox](https://cssreference.io/flexbox/ )

- **flex-flow:** Es una propiedad atajo para las propiedades individuales de *flex-direction y flex-wrap*

Sintaxis.

<!--flex-flow: 'flex-direction'-->
- flex-flow: row;
- flex-flow: row-reverse;
- flex-flow: column;
- flex-flow: column-reverse;

<!--> flex-flow: 'flex-wrap'-->
- flex-flow: nowrap;
- flex-flow: wrap;
- flex-flow: wrap-reverse;

<!--flex-flow: 'flex-direction' 'flex-wrap'-->

- flex-flow: row nowrap;
- flex-flow: column wrap;
- flex-flow: column-reverse wrap-reverse;

<!--valores globales-->
- flex-flow: inherit;
- flex-flow: initial;
- flex-flow: unset;

 **align-content**
 sirve para establecer como múltiples líneas están separadas una de otra. Esta propiedad acepta los siguientes valores:

- **flex-start:** Las líneas se posicionan en la parte superior del contenedor.
- **flex-end:** Las líneas se posicionan en la parte inferior del contenedor.
- **center:** Las líneas se posicionan en el centro (verticalmente hablando) del contenedor.
- **space-between:** Las líneas se muestran con la misma distancia entre ellas.
- **space-around:** Las líneas se muestran con la misma separación alrededor de ellas.
- **stretch:** Las líneas se estiran para ajustarse al contenedor.

- **gap:** Es el espaciado interno.



# alinear-contenido

Define cómo se alinea cada línea dentro de un contenedor flexbox/grid. Solo se aplica si flex-wrap: wrapestá presente y si hay varias líneas de elementos de cuadro flexible/cuadrícula.

# Como funciona CSS Grid.

- display: grid | inline-grid.
- grid-template-columns: < track-size> | < line-name>.
- grid-template-rows: < track-size> | < line-name>.
- grid-template-areas: < grid-area-name> |.| none.
- gap: < grid-row-gap> < grid-column-gap>
- justify-items: start | center | end | stretch.
- align-items: stretch | start | end | center | baseline.
- justify-content, align-content.


# Alinear elementos.

Define como se alinean los elementos de flexbox segun el eje trancversal dentro de una linea de un contenedor de flexbox.

- *align-items: flex-start;*

Los elementos de flexbox se alinean al comienzo del eje transversal .

Por defecto, el eje transversal es vertical. Esto significa que los elementos de flexbox se alinearán verticalmente en la parte superior .

[imagen](./imagenes/Captura%20de%20pantalla%202023-04-25%20072419.jpg)

*align-items: flex-end;*

Los elementos de flexbox están alineados al final del eje transversal.

Por defecto, el eje transversal es vertical. Esto significa que los elementos de flexbox se alinearán verticalmente en la parte inferior.

[imagen](./imagenes/grafico2.jpg)


*align-items: center;*

Los elementos de flexbox están alineados en el centro del eje transversal.

Por defecto, el eje transversal es vertical. Esto significa que los elementos de flexbox estarán centrados verticalmente.

[imagen](./imagenes/grafico3.jpg)

*align-items: baseline;*

Los elementos de flexbox se alinean en la línea de base del eje transversal .

Por defecto, el eje transversal es vertical. Esto significa que los elementos de flexbox se alinearán para que la línea de base de su texto se alinee a lo largo de una línea horizontal.

[imagen](./imagenes/grafico4.jpg)




# CSS GRID.

Es una propiedad abreviada para *grid-row-start grid-column-star grid-row-endgrid-column-end*


- *grid-area: auto;*
Inicios y finales de columna y fila del elemento de cuadricula se establecen automaticamente.

[imagen](./imagenes/grid1.jpg)

- *grid-area: main;*
Puede utilizar un nombre de área .

[imagen](./imagenes/grid2.jpg)



# grid-auto-columnas

Define el tamaño de las columnas de la cuadrícula que se crearon implícitamente : significa que **grid-auto-columnsapunta** a las columnas que no se definieron con **grid-template-columnso grid-template-areas.**

- *grid-auto-columns: auto;*
Las columnas creadas implícitamente tienen un autotamaño.

[imagen](./imagenes/grid3.jpg)


- *grid-auto-columns: 100px;*
Aquí combinamos grid-template-areas: "header header header" "sidebar main main"con grid-template-columns: 50px 200px.

En esta situación, grid-template-areasdefine 3 columnas , mientras que grid-template-columnssolo define 2 anchos de columna.

Como resultado, el ancho de la tercera columna toma su valor de la grid-auto-columnspropiedad: 100px.

[imagen](./imagenes/grid4.jpg).


# grid-auto-flow
Define la posición de los elementos de cuadrícula generados automáticamente .

- *grid-auto-flow: row;*
Aquí tenemos grid-template-areas: "header header header" "sidebar main main" "footer footer footer", más un elemento de cuadrícula "Otro" adicional. El algoritmo lo coloca en su propia fila.

[imagen](./imagenes/grid5.jpg)


[Pagina para encontrar mas Informacion.](https://cssreference.io/css-grid/#grid-row-start)

