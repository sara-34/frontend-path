## Cascada en CSS.

La cascada es el concepto que determina qué estilos se colocan sobre otros, **priorizando a aquellos que se encuentren más abajo del código.**

### Ejemplo:

h1 {
    color: red;
}

h1 {
    color: blue;
}

La etiqueta h1 saldra del color azul porque esta situadomas abajo del codigo.

### Especificidad en css.

La especificidad consiste en dar un valor a una regla CSS sobre que tan especifico es el estilo.

## Tipos especificidad.

La palabra reservada **!important** es un valor de toda propiedad CSS que provee una **especificidad de 10000**, por lo que se aplicará ante otros estilos. Esto es una mala práctica y no deberías utilizarlo.

**Especificidad en selectores**.

El tema de los selectores ya lo conoces, por lo tanto, los selectores de tipo ID son más específicos que las clases, atributos y pseudoclases. Estas últimas son más específicas que los elementos y pseudoelementos. El selector universal tiene una especificidad de 0.